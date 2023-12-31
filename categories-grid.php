<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Amin Template">
    <meta name="keywords" content="Amin, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Amin | Template</title>

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
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Menu Begin -->
    <div class="humberger-menu-overlay"></div>
    <div class="humberger-menu-wrapper">
        <div class="hw-logo">
            <a href="#"><img src="img/f-logo.png" alt=""></a>
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
                <li><a href="#">Reviews <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="#">Playstation</a></li>
                        <li><a href="#">Windows</a></li>
                        <li><a href="#">Mobile</a></li>
                        <li><a href="#">Xbox</a></li>
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
            Copyright © 2019 Colorlib Inc. All rights reserved
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
    ?>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg spad" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h3>Categories: <span>hardware</span></h3>
                        <div class="bt-option">
                            <a href="#">Home</a>
                            <a href="#">Latest posts</a>
                            <span>Hardware</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Categories Grid Section Begin -->
    <section class="categories-grid-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 p-0">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="cg-item">
                                <div class="cg-pic set-bg" data-setbg="img/categories-grid/cg-1.jpg">
                                    <div class="label"><span>Reviews</span></div>
                                </div>
                                <div class="cg-text">
                                    <h5><a href="#">Teamfight Tactics is in chaos after today's patch...</a></h5>
                                    <ul>
                                        <li>by <span>Admin</span></li>
                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua suspendisse ultrices...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="cg-item">
                                <div class="cg-pic set-bg" data-setbg="img/categories-grid/cg-2.jpg">
                                    <div class="label"><span>Windows</span></div>
                                </div>
                                <div class="cg-text">
                                    <h5><a href="#">Teamfight Tactics is in chaos after today's patch...</a></h5>
                                    <ul>
                                        <li>by <span>Admin</span></li>
                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua suspendisse ultrices...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="cg-item">
                                <div class="cg-pic set-bg" data-setbg="img/categories-grid/cg-3.jpg">
                                    <div class="label"><span>Hardware</span></div>
                                </div>
                                <div class="cg-text">
                                    <h5><a href="#">Teamfight Tactics is in chaos after today's patch...</a></h5>
                                    <ul>
                                        <li>by <span>Admin</span></li>
                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua suspendisse ultrices...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="cg-item">
                                <div class="cg-pic set-bg" data-setbg="img/categories-grid/cg-4.jpg">
                                    <div class="label"><span>Playstation</span></div>
                                </div>
                                <div class="cg-text">
                                    <h5><a href="#">Teamfight Tactics is in chaos after today's patch...</a></h5>
                                    <ul>
                                        <li>by <span>Admin</span></li>
                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua suspendisse ultrices...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="cg-item">
                                <div class="cg-pic set-bg" data-setbg="img/categories-grid/cg-5.jpg">
                                    <div class="label"><span>Reviews</span></div>
                                </div>
                                <div class="cg-text">
                                    <h5><a href="#">Teamfight Tactics is in chaos after today's patch...</a></h5>
                                    <ul>
                                        <li>by <span>Admin</span></li>
                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua suspendisse ultrices...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="cg-item">
                                <div class="cg-pic set-bg" data-setbg="img/categories-grid/cg-6.jpg">
                                    <div class="label"><span>Windows</span></div>
                                </div>
                                <div class="cg-text">
                                    <h5><a href="#">Teamfight Tactics is in chaos after today's patch...</a></h5>
                                    <ul>
                                        <li>by <span>Admin</span></li>
                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua suspendisse ultrices...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="cg-item">
                                <div class="cg-pic set-bg" data-setbg="img/categories-grid/cg-7.jpg">
                                    <div class="label"><span>Hardware</span></div>
                                </div>
                                <div class="cg-text">
                                    <h5><a href="#">Teamfight Tactics is in chaos after today's patch...</a></h5>
                                    <ul>
                                        <li>by <span>Admin</span></li>
                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua suspendisse ultrices...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="cg-item">
                                <div class="cg-pic set-bg" data-setbg="img/categories-grid/cg-8.jpg">
                                    <div class="label"><span>Playstation</span></div>
                                </div>
                                <div class="cg-text">
                                    <h5><a href="#">Teamfight Tactics is in chaos after today's patch...</a></h5>
                                    <ul>
                                        <li>by <span>Admin</span></li>
                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua suspendisse ultrices...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="cg-item">
                                <div class="cg-pic set-bg" data-setbg="img/categories-grid/cg-9.jpg">
                                    <div class="label"><span>Hardware</span></div>
                                </div>
                                <div class="cg-text">
                                    <h5><a href="#">Teamfight Tactics is in chaos after today's patch...</a></h5>
                                    <ul>
                                        <li>by <span>Admin</span></li>
                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua suspendisse ultrices...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="cg-item">
                                <div class="cg-pic set-bg" data-setbg="img/categories-grid/cg-10.jpg">
                                    <div class="label"><span>Playstation</span></div>
                                </div>
                                <div class="cg-text">
                                    <h5><a href="#">Teamfight Tactics is in chaos after today's patch...</a></h5>
                                    <ul>
                                        <li>by <span>Admin</span></li>
                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua suspendisse ultrices...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination-item">
                        <a href="#"><span>1</span></a>
                        <a href="#"><span>2</span></a>
                        <a href="#"><span>3</span></a>
                        <a href="#"><span>Next</span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7 p-0">
                    <div class="sidebar-option">
                        <div class="social-media">
                            <div class="section-title">
                                <h5>Social media</h5>
                            </div>
                            <ul>
                                <li>
                                    <div class="sm-icon"><i class="fa fa-facebook"></i></div>
                                    <span>Facebook</span>
                                    <div class="follow">1,2k Follow</div>
                                </li>
                                <li>
                                    <div class="sm-icon"><i class="fa fa-twitter"></i></div>
                                    <span>Twitter</span>
                                    <div class="follow">1,2k Follow</div>
                                </li>
                                <li>
                                    <div class="sm-icon"><i class="fa fa-youtube-play"></i></div>
                                    <span>Youtube</span>
                                    <div class="follow">2,3k Subs</div>
                                </li>
                                <li>
                                    <div class="sm-icon"><i class="fa fa-instagram"></i></div>
                                    <span>Instagram</span>
                                    <div class="follow">2,6k Follow</div>
                                </li>
                            </ul>
                        </div>
                        <div class="hardware-guides">
                            <div class="section-title">
                                <h5>Hardware guides</h5>
                            </div>
                            <div class="trending-item">
                                <div class="ti-pic">
                                    <img src="img/trending/trending-5.jpg" alt="">
                                </div>
                                <div class="ti-text">
                                    <h6><a href="#">A Monster Prom poster got hijacked for a Papa Roach concert...</a>
                                    </h6>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="trending-item">
                                <div class="ti-pic">
                                    <img src="img/trending/trending-6.jpg" alt="">
                                </div>
                                <div class="ti-text">
                                    <h6><a href="#">Facebook wants to read your thoughts with its augmented...</a></h6>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="trending-item">
                                <div class="ti-pic">
                                    <img src="img/trending/trending-7.jpg" alt="">
                                </div>
                                <div class="ti-text">
                                    <h6><a href="#">This gaming laptop with a GTX 1660 Ti and 32GB of RAM is down...</a>
                                    </h6>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="trending-item">
                                <div class="ti-pic">
                                    <img src="img/trending/trending-8.jpg" alt="">
                                </div>
                                <div class="ti-text">
                                    <h6><a href="#">Jalopy developer is making a game where you 'build stuff...</a></h6>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="insta-media">
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
                        <div class="best-of-post">
                            <div class="section-title">
                                <h5>Best of</h5>
                            </div>
                            <div class="bp-item">
                                <div class="bp-loader">
                                    <div class="loader-circle-wrap">
                                        <div class="loader-circle">
                                            <span class="circle-progress-1" data-cpid="id-1" data-cpvalue="95"
                                                data-cpcolor="#c20000"></span>
                                            <div class="review-point">9.5</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bp-text">
                                    <h6><a href="#">This gaming laptop with a GTX 1660...</a></h6>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bp-item">
                                <div class="bp-loader">
                                    <div class="loader-circle-wrap">
                                        <div class="loader-circle">
                                            <span class="circle-progress-1" data-cpid="id-2" data-cpvalue="85"
                                                data-cpcolor="#c20000"></span>
                                            <div class="review-point">8.5</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bp-text">
                                    <h6><a href="#">This gaming laptop with a GTX 1660...</a></h6>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bp-item">
                                <div class="bp-loader">
                                    <div class="loader-circle-wrap">
                                        <div class="loader-circle">
                                            <span class="circle-progress-1" data-cpid="id-3" data-cpvalue="80"
                                                data-cpcolor="#c20000"></span>
                                            <div class="review-point">8.0</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bp-text">
                                    <h6><a href="#">This gaming laptop with a GTX 1660...</a></h6>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bp-item">
                                <div class="bp-loader">
                                    <div class="loader-circle-wrap">
                                        <div class="loader-circle">
                                            <span class="circle-progress-1" data-cpid="id-4" data-cpvalue="75"
                                                data-cpcolor="#c20000"></span>
                                            <div class="review-point">7.5</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bp-text">
                                    <h6><a href="#">This gaming laptop with a GTX 1660...</a></h6>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="subscribe-option">
                            <div class="section-title">
                                <h5>Subscribe</h5>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor.</p>
                            <form action="#">
                                <input type="text" placeholder="Name">
                                <input type="text" placeholder="Email">
                                <button type="submit"><span>Subscribe</span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Grid Section End -->

    <!-- Footer Section Begin -->
    <?php
    include_once('./include/footer.php');
    ?>
    <!-- Footer Section End -->

    <!-- Sign Up Section Begin -->
    <div class="signup-section">
        <div class="signup-close"><i class="fa fa-close"></i></div>
        <div class="signup-text">
            <div class="container">
                <div class="signup-title">
                    <h2>Sign up</h2>
                    <p>Fill out the form below to recieve a free and confidential</p>
                </div>
                <form action="#" class="signup-form">
                    <div class="sf-input-list">
                        <input type="text" class="input-value" placeholder="User Name*">
                        <input type="text" class="input-value" placeholder="Password">
                        <input type="text" class="input-value" placeholder="Confirm Password">
                        <input type="text" class="input-value" placeholder="Email Address">
                        <input type="text" class="input-value" placeholder="Full Name">
                    </div>
                    <div class="radio-check">
                        <label for="rc-agree">I agree with the term & conditions
                            <input type="checkbox" id="rc-agree">
                            <span class="checkbox"></span>
                        </label>
                    </div>
                    <button type="submit"><span>REGISTER NOW</span></button>
                </form>
            </div>
        </div>
    </div>
    <!-- Sign Up Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
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