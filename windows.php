<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="description" content="Amin Template">
    <meta name="keywords" content="Amin, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Download Game</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel:400,700,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/download.css" type="text/css">
</head>
<body>
 <!-- Page Preloder -->
 <div id="preloder">
        <div class="loader"></div>
    </div>
    <div class="humberger-menu-overlay"></div>
    <div class="humberger-menu-wrapper">
        <div class="hw-logo">
            <a href="#"><h1>MbM</h1></a>
        </div>
        <div class="hw-menu mobile-menu">
            <ul>
                <li><a href="./index.php">Home</a></li>
                <li><a href="#">Pages <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="./categories-list.php">Categories</a></li>
                        <li><a href="./categories-grid.php">Categories grid</a></li>
                        <li><a href="./typography.php">Typography</a></li>
                        <li><a href="./details-post-default.php">Post default</a></li>
                        <li><a href="./details-post-gallery.php">Post gallery</a></li>
                        <li><a href="./details-post-review.php">Post review</a></li>
                        <li><a href="./contact.php">Contact</a></li>
                    </ul>
                </li>
                <li><a href="#">Windows <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="#">Playstation</a></li>
                        <li><a href="#">Windows</a></li>
                        <li><a href="#">Mobile</a></li>
                        <li><a href="#">Xbox</a></li>
                    </ul>
                </li>
                <li><a href="#">Videos <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="#">Playstation</a></li>
                        <li><a href="#">Windows</a></li>
                        <li><a href="#">Mobile</a></li>
                        <li><a href="#">Xbox</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="hw-copyright">
        <?= date('d.m.Y');?>
        </div>
        <div class="hw-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-youtube-play"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
        <div class="hw-insta-media">
            <div class="section-title">
                <h5>Instagram</h5>
            </div>
            <div class="insta-pic">
                <img src="img/instagram/ip-1.jpg" alt="">
                <img src="img/instagram/ip-2.jpg" alt="">
                <img src="img/instagram/ip-3.jpg" alt="">
                <img src="img/instagram/ip-4.jpg" alt="">
            </div>
        </div>
    </div>
    <!-- Humberger Menu End -->

    <!-- Header Section Begin -->
    <?php
    include_once('./include/header.php');
    ?><br>

    <div class="container">
        <div class="nav">
            <h2>All Games</h2>
        </div><br>
        <div class="game-1">
            <div class="image-1">
        <a href="./game/cyberpunk.php"><img src="./img/cyberpunk/cyberpunk2077-1.jpg" alt=""></a>
        <a href="./game/spiderman-remastered.php"><img src="./img/spiderman-remastered/spiderman-1.jpg" alt=""></a>
        <a href="./game/gta5.php"><img src="./img/gta5/gta5-1.jpg" alt=""></a>
        </div>
        <div class="game-name-1">
        <a href="./game/cyberpunk.php"><h4 class="cyberpunk">Cyberpunk 2077</h4></a>
        <a href="./game/spiderman-remastered.php"><h4 class="spiderman">Marvel's Spider-man<br> Remastered</h4></a>
        <a href="./game/gta5.php"><h4 class="gta5">Gta V(5)</h4></a> 
        </div><br>
        </div><br><br>
        <div class="game-2">
            <div class="imgae-2">
                <a href="./game/spiderman-miles-morales.php"><img src="./img/spiderman-miles-morales/spiderman-miles-morales-1.jpg" alt=""></a>
                <a href="./game/resident-evil4.php"><img src="./img/resident-evil4/resident-evil4-1.jpg" alt=""></a>
                <a href="./game/the-last-of-us-part1.php"><img src="./img/the-last-of-us-part1/the-last-of-us-part1-7.jpg" alt=""></a>
            </div>
            <div class="game-name-2">
                <a href="./game/spiderman-miles-morales.php"><h4 class="miles-morales">Marvel's Spider-man<br>Miles Morales</h4></a>
                <a href="./game/resident-evil4.php"><h4 class="resident-evil">Resident Evil</h4></a>
                <a href="./game/the-last-of-us-part1.php"><h4 class="last-us">The Last Of Us</h4></a>
            </div>
        </div>
        <?php
        include_once('./include/footer.php');
        ?>
    </div>
    <!-- Header End -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/circle-progress.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>