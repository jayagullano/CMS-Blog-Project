
<!--

    
        Author: Rolando Agullano
        Date: 02/01/2021
        File: navigate.php
    
        This file controls the side bar on the right of the application.

-->               

<div class="col-md-4">
                
                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                       
                        <form action="./search.php" method="post">
                            <div class="input-group">
                                <input type="text" class="form-control" name='search'>
                                <span class="input-group-btn">
                                    <button name="submit" class="btn btn-default" type="submit">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>
                        </form>
                        
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                               
                               <?php 
                    
                                    //This displays the categories on the sidebar
                                    $select_query = mysqli_query($connection, "SELECT * from category;");

                                    if(!$select_query) { echo "<br>Error. Query Failed."; }

                                    while($row = mysqli_fetch_assoc($select_query)){
                                        $title = $row['cat_title'];
                                        echo "<li><a href=''>{$title}</a></li>";
                                    }

                                ?>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <?php include 'widget.php' ?>

            </div>