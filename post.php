<?php include "includes/header.php"; ?>

<?php include "includes/navigation.php"; ?>

<div id="post" class="content-container">
    <div class="page-content">
        <section>
            <?php 

                if(isset($_GET['post_id'])){

                    $post_id = $_GET['post_id'];

                    $increase_views = "UPDATE posts SET post_views = post_views + 1 WHERE post_id = $post_id";
                    $increase_views_query = mysqli_query($connection, $increase_views);

                    $get_post = "SELECT * FROM posts WHERE post_id = $post_id";

                    $get_post_query = mysqli_query($connection, $get_post);

                    $post = mysqli_fetch_assoc($get_post_query);

                    $post_title = $post['post_title'];
                    $post_date = $post['post_date'];
                    $post_image = $post['post_image'];
                    $post_content = $post['post_content'];
                    $uk_date = date("d-m-y", strtotime($post_date));

            ?>

                <!-- First Blog Post -->
                <div class="post-container">
                    <h3><?php echo $post_title; ?></h3>

                    <div class="image-container">
                        <img src="images/<?php echo $post_image; ?>" alt="">
                    </div>

                    <p id="post-content"><?php echo $post_content;?></p>

                    <p class="date-and-time text-small"><span class="fa fa-calendar"></span><?php echo ' ' . $uk_date; ?></p>

                    <hr class="section-split">
                </div>

            <?php

                }else{
                    header("Location: index.php");
                }

            ?>
        </section>
    </div>
</div>


<?php include "includes/footer.php"; ?>