
<!--

    
        Author: Rolando Agullano
        Date: 02/01/2021
        File: admin_categories.php
    
        This is the categories page of the admin page.

-->

<?php include 'includes/admin_header.php'; ?>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include 'includes/admin_navigate.php'; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Categories Menu
                            <small></small>
                        </h1>
                        
                        <?php
                        
                            //This section handles the insertion of a new category
                        
                            if(isset($_POST['submit'])){
                                
                                //Performs check for escape string and assigns value to $newCategory
                                if($newCategory = mysqli_real_escape_string($connection, $_POST['cat_title'])){
                                    
                                    $query = "INSERT into category(cat_title) values ('{$newCategory}');";
                                    
                                    $resultQuery = mysqli_query($connection, $query);
                                    
                                    $resultString = "";
                                    
                                    if(!$resultQuery) { 
                                        die("Error. Query Failed." . mysqli_error($connection)); 
                                    } 
                                }
                            }
                        
                        
                        ?>
                        
                        <div class="col-xs-6">
                            <form action="admin_categories.php" method="post">
                                <div class="form-group">
                                   <label for="cat-title">Add Category</label>
                                    <input class="form-control" type="text" name="cat_title">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                                </div>
                            </form>
                        </div> <!-- Add Category Form -->
                        
                        <div class="col-xs-6">
                        
                            <?php
    
                                //This section handles the deletion of a category

                                if(isset($_GET['delete'])){
                                    $query = "DELETE FROM category WHERE cat_id={$_GET['delete']}";

                                    $resultQuery = mysqli_query($connection, $query);
                                    
                                    //if(!$resultQuery) { echo "<p>Could not delete due to existing posts.</p>"; }
                                    
                                    header("Location: admin_categories.php");
                                }

                            ?>
                        
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <!--<th>Id</th>-->
                                        <th>Categories List</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                   <?php 
                                    
                                    //This section displays the categories on the sidebar
                                    
                                    $select_query = mysqli_query($connection, "SELECT * from category;");

                                    if(!$select_query) { echo "<br>Error. Query Failed."; }

                                    while($row = mysqli_fetch_assoc($select_query)){
                                        $id = $row['cat_id'];
                                        $title = $row['cat_title'];
                                        
                                        echo "<tr>";
                                        //echo "<td>{$id}</td>";
                                        echo "<td>{$title}</td>";
                                        echo "<td><a href='admin_categories.php?delete={$id}'>Delete</a></td>";
                                        echo "<td><a href='admin_categories.php?edit={$id}'>Update</a></td>";
                                        echo "<tr>";
                                    }

                                    ?>
                                
                                
                                </tbody>
                            </table>
                        
                        </div>
                        
                        <?php 
                        
                            //This section handles updating a category.
                        
                            if(isset($_GET['edit'])){
                                    $query = "DELETE FROM category WHERE cat_id={$_GET['delete']}";

                                    $resultQuery = mysqli_query($connection, $query);
                                    
                                    //if(!$resultQuery) { echo "<p>Could not delete due to existing posts.</p>"; }
                                    
                                    header("Location: admin_categories.php");
                            }
                        
                        ?>
                        
                        <div class="col-xs-6">
                            <form action="admin_categories.php" method="post">
                                <div class="form-group">
                                   <label for="cat-title">Edit Category</label>
                                    <input class="form-control" type="text" name="cat_title">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="edit" value="Edit Category">
                                </div>
                            </form>
                        </div> <!-- Edit Category Form -->
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php include 'includes/admin_footer.php'; ?>
