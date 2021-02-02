    <!-- Connect to the database -->
    <?php include './includes/db.php'; ?>
    
    <!-- Header Import -->
    <?php include 'includes/header.php'; ?> 

    <!-- Navigation -->
    <?php include 'includes/navigate.php'; ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <!-- Blog Posts -->
                
                <?php 
                    
                    if(isset($_POST['submit'])) 
                    { 
                        $search = mysqli_real_escape_string($connection, $_POST['search']);
                        
                        $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%' ";
                        $search_query = mysqli_query($connection, $query);
                        
                        if(!$search_query) {
                            die("<br>Query Failed.<br>" . mysqli_error($connection));
                        }
                        
                        $count = mysqli_num_rows($search_query);
                        
                        if($count == 0){
                            echo "<h1>No result found for '$search'</h1>";
                        } else {
                            
                            echo "<h1>Search Results for '$search'</h1>";
                            
                            include 'functions/functions.php';
                
                            getPosts($connection, $query);
                        }
                        
                    }
    
                ?>
                
            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include 'includes/sidebar.php'; ?>

        </div>
        <!-- /.row -->

        <hr>

<!-- Footer Import -->
<?php include 'includes/footer.php'; ?>