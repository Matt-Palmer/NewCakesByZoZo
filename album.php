<?php include "includes/header.php"; ?>

<?php include "includes/navigation.php"; ?>

<div id="gallery-page" class="content-container">
    <div class="page-content">
        <section id="albums" class="light">
            

                <?php

                    if(isset($_GET['album'])){
                        $album_id = $_GET['album'];
                    
                        $get_album_images  = "SELECT * FROM gallery WHERE image_album_id = $album_id ORDER BY image_date DESC";
                        $get_album_images_query = mysqli_query($connection, $get_album_images);

                        $get_album_title = "SELECT album_title FROM album WHERE album_id = $album_id";
                        $get_album_title_query = mysqli_query($connection, $get_album_title);

                        $album_title = mysqli_fetch_assoc($get_album_title_query);
                        $title = $album_title['album_title'];

                        $currentSlide = 1;

                        echo "<h3>$title</h3>";

                        echo '<div class="grid">';
                                while($row = mysqli_fetch_assoc($get_album_images_query)){

                                    $image_one = $row['image_one'];

                                    echo '<div class="item">';
                                        echo '<div class="image-container">';
                                            echo "<img src='images/$image_one' onclick='openModal();currentSlide($currentSlide)'>";
                                        echo '</div>';
                                        echo "<p id='comments'><span class='fa fa-comments'> Comments 2</span></p>";
                                        echo '<hr class="post-split">';
                                    echo '</div>';


                                    $currentSlide++;
                                }
                        echo '</div>';
                    }
                ?>



                <div id="myModal" class="overlay">
                    <span class="close cursor" onclick="closeModal()">&times;</span>

                    <div class="overlay-content">
                    <?php
                        if(isset($_GET['album'])){
                            $album_id = $_GET['album'];
                        
                            $get_album_images  = "SELECT * FROM gallery WHERE image_album_id = $album_id ORDER BY image_date DESC";
                            $get_album_images_query = mysqli_query($connection, $get_album_images);

                            $currentSlide = 1;

                            while($row = mysqli_fetch_assoc($get_album_images_query)){
                                        
                                $image_one = $row['image_one'];

                                echo '<div class="overlay-container">';
                                    echo "<img src='images/$image_one'>";
                                    echo "<a href='#' class='prev' onclick='plusSlides(-1)'></a>";
                                    echo "<a href='#' class='next' onclick='plusSlides(1)'></a>";
                                echo '</div>';

                            }
                            
                        }
                    ?>

                    



                    </div>

                    <div class="all-images">
                        <?php
                        if(isset($_GET['album'])){
                            $album_id = $_GET['album'];
                        
                            $get_album_images  = "SELECT * FROM gallery WHERE image_album_id = $album_id ORDER BY image_date DESC";
                            $get_album_images_query = mysqli_query($connection, $get_album_images);

                            $currentSlide = 1;

                            while($row = mysqli_fetch_assoc($get_album_images_query)){
                                        
                                $image_one = $row['image_one'];

            

                               echo "<div class='column'>";
                                  echo "<img class='demo' src='images/$image_one' onclick='currentSlide($currentSlide)' alt='Nature'>";
                                echo "</div>";

                            $currentSlide++;
                            }
                        }
                    ?>
                    </div>

                    
                </div>
        </section>
    </div>
</div>


<?php include "includes/footer.php"; ?>