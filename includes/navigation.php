<?php 
        
    function classActive($requestUri){
        $current_file = basename($_SERVER['REQUEST_URI'], '.php');

        if($current_file == $requestUri){
            echo 'class="active"';
        }
    }

?>

<nav class="nav-container">
    <div class="content-container">

        <div id="my-logo">
            <h1><a href="index.php">Cakes By ZoZo</a></h1>
        </div>

        <div id="open-nav" class="nav-btn">
            <div class="hamburger-container">
            </div>
        </div>

        <div class="nav-content-container">

            <div class="nav-items-container">
                <ul>
                    <li><a href="index.php" <?php classActive("index");?>>Home</a></li>
                    <li><a href="posts.php" <?php classActive("posts");?>>Posts</a></li>
                    <li><a href="gallery.php" <?php classActive("gallery");?>>Gallery</a></li>
                    <li><a href="about.php" <?php classActive("about");?>>About Me</a></li>
                </ul>
            </div>

            <div class="social-nav-items-container">
                <ul>
                    <li><a href="#"><img src="images/facebook-logo-button.svg"></a></li>
                    <li><a href="#"><img src="images/twitter-logo-button.svg"></a></li>
                    <li><a href="#"><img src="images/pinterest.svg"></a></li>
                    <li><a href="#"><img src="images/instagram-logo.svg"></a></li>
                </ul>
            </div>

        </div>

    </div>
    

</nav>