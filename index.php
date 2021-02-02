    <!--

    
        Author: Rolando Agullano
        Date: 02/01/2021
        File: navigate.php
    
        This is the main screen for the application. By default it displays
        all posts currently in the database.

    -->
    
    <!-- Connect to the database -->
    <?php include 'includes/db.php'; ?>
    
    <!-- Header Import -->
    <?php include 'includes/header.php'; ?> 

    <!-- Navigation -->
    <?php include 'includes/navigate.php'; ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    Welcome to BlogSpot
                    <br><small>This is a testing PHP page.</small>
                </h1>

                <!-- Blog Posts -->
                <?php 
                    include 'functions/functions.php';
                
                    //Retrieves ALL posts
                    getPosts($connection, "SELECT * from posts;");
                ?>
                
            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include 'includes/sidebar.php'; ?>

        </div>
        <!-- /.row -->

        <hr>

<!-- Footer Import -->
<?php include 'includes/footer.php'; ?>