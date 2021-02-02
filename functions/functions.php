<?php

    /*
    
        Author: Rolando Agullano
        Date: 02/01/2021
        File: functions.php
    
        This file hosts any functions that I want to include during development.
    
    */

    /* This functions gets all the posts based on the query sent */
    function getPosts($connection, $query){
        
        $select_post = mysqli_query($connection, $query);
                
        while($row = mysqli_fetch_assoc($select_post)){
                        
            $title = $row['post_title'];
            $author = $row['post_author'];
            $image = $row['post_image'];
            $date = $row['post_date'];
            $content = $row['post_content'];
            $tags = $row['post_tags'];

            ?> 

                <!-- POST HTML---------------------------------------------------------- -->
                <h2>
                <a href="#"><?php echo $title; ?></a>
                </h2>
                <p class="lead">
                by <a href="index.php"><?php echo $author; ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $date; ?></p>
                <hr>
                <img class="img-responsive" src="images/<?php echo $image; ?>" alt="">
                <hr>
                <p><?php echo $content; ?></p>
                <p><?php echo "Tags: " . $tags; ?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                <hr>
                    
                <!-- POST HTML---------------------------------------------------------- -->
                    
            <?php
        }
    }


?>