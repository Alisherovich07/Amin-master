
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
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
    ?>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="hs-text">
                        <div class="label"><span>Playstation</span></div>
                        <h3>Downwell and Space Hulk: Tactics are coming to Xbox Game Pass for PC</h3>
                        <div class="ht-meta">
                            <ul>
                                <li>by Mustafo Alisherovich</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-6 offset-lg-1 offset-xl-2">
                    <div class="trending-post" style="opacity:0.8">
                        <div class="section-title">
                            <h5>Treding posts</h5>
                        </div>
                        <div class="trending-slider owl-carousel">
                            <div class="single-trending-item">
                                <div class="trending-item">
                                    <div class="ti-pic">
                                        <img src="img/trending/trending-1.jpg" alt="">
                                    </div>
                                    <div class="ti-text">
                                        <h6><a href="#">Jalopy developer is making a game where you 'build stuff...</a>
                                        </h6>
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                            <li><i class="fa fa-comment-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="trending-item">
                                    <div class="ti-pic">
                                        <img src="img/trending/trending-2.jpg" alt="">
                                    </div>
                                    <div class="ti-text">
                                        <h6><a href="#">Valve updates Steam's new Interactive Reco- mmender, teases
                                                a...</a></h6>
                                                <ul>
                                            <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                            <li><i class="fa fa-comment-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="trending-item">
                                    <div class="ti-pic">
                                        <img src="img/trending/trending-3.jpg" alt="">
                                    </div>
                                    <div class="ti-text">
                                        <h6><a href="#">Jalopy developer is making a game where you 'build stuff...</a>
                                        </h6>
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                            <li><i class="fa fa-comment-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="trending-item">
                                    <div class="ti-pic">
                                        <img src="img/trending/trending-4.jpg" alt="">
                                    </div>
                                    <div class="ti-text">
                                        <h6><a href="#">Jalopy developer is making a game where you 'build stuff...</a>
                                        </h6>
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                            <li><i class="fa fa-comment-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single-trending-item">
                                <div class="trending-item">
                                    <div class="ti-pic">
                                        <img src="img/trending/trending-5.jpg" alt="">
                                    </div>
                                    <div class="ti-text">
                                        <h6><a href="#">Jalopy developer is making a game where you 'build stuff...</a>
                                        </h6>
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                            <li><i class="fa fa-comment-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="trending-item">
                                    <div class="ti-pic">
                                        <img src="img/trending/trending-6.jpg" alt="">
                                    </div>
                                    <div class="ti-text">
                                        <h6><a href="#">Valve updates Steam's new Interactive Reco- mmender, teases
                                                a...</a></h6>
                                                <ul>
                                            <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                            <li><i class="fa fa-comment-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="trending-item">
                                    <div class="ti-pic">
                                        <img src="img/trending/trending-7.jpg" alt="">
                                    </div>
                                    <div class="ti-text">
                                        <h6><a href="#">Jalopy developer is making a game where you 'build stuff...</a>
                                        </h6>
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                            <li><i class="fa fa-comment-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="trending-item">
                                    <div class="ti-pic">
                                        <img src="img/trending/trending-8.jpg" alt="">
                                    </div>
                                    <div class="ti-text">
                                        <h6><a href="#">Jalopy developer is making a game where you 'build stuff...</a>
                                        </h6>
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                            <li><i class="fa fa-comment-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#"><div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/hero/city.jpg"></div>
            <div class="hs-item set-bg" data-setbg="img/hero/city-4.jpg"></div>
            <div class="hs-item set-bg" data-setbg="img/hero/city-3.jpg"></div>
        </div></a>
    </section>
    <!-- Hero Section End -->

    <!-- Latest Preview Section Begin -->
    <section class="latest-preview-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h5>Latest Preview</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="lp-slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="lp-item">
                            <div class="lp-pic set-bg" data-setbg="img/latest-preview/lp-1.jpg">
                                <div class="review-loader">
                                    <div class="loader-circle-wrap">
                                        <div class="loader-circle">
                                            <span class="circle-progress" data-cpid="id" data-cpvalue="75"
                                                data-cpcolor="#c20000"></span>
                                            <div class="review-point">7.5</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lp-text">
                                <h6><a href="#">Teamfight Tactics is in chaos after patch...</a></h6>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                    <li><i class="fa fa-comment-o"></i> 12</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="lp-item">
                            <div class="lp-pic set-bg" data-setbg="img/latest-preview/lp-2.jpg">
                                <div class="review-loader">
                                    <div class="loader-circle-wrap">
                                        <div class="loader-circle">
                                            <span class="circle-progress" data-cpid="id" data-cpvalue="75"
                                                data-cpcolor="#c20000"></span>
                                            <div class="review-point">7.5</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lp-text">
                                <h6><a href="#">Lenovo’s y540 gaming laptop with an rtx 2060...</a></h6>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                    <li><i class="fa fa-comment-o"></i> 12</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="lp-item">
                            <div class="lp-pic set-bg" data-setbg="img/latest-preview/lp-3.jpg">
                                <div class="review-loader">
                                    <div class="loader-circle-wrap">
                                        <div class="loader-circle">
                                            <span class="circle-progress" data-cpid="id" data-cpvalue="75"
                                                data-cpcolor="#c20000"></span>
                                            <div class="review-point">7.5</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lp-text">
                                <h6><a href="#">A monter prom poster got hijacked for a...</a></h6>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                    <li><i class="fa fa-comment-o"></i> 12</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="lp-item">
                            <div class="lp-pic set-bg" data-setbg="img/latest-preview/lp-5.jpg">
                                <div class="review-loader">
                                    <div class="loader-circle-wrap">
                                        <div class="loader-circle">
                                            <span class="circle-progress" data-cpid="id" data-cpvalue="75"
                                                data-cpcolor="#c20000"></span>
                                            <div class="review-point">7.5</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lp-text">
                                <h6><a href="#">Facebook wants to read your thoughts with...</a></h6>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                    <li><i class="fa fa-comment-o"></i> 12</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="lp-item">
                            <div class="lp-pic set-bg" data-setbg="img/latest-preview/lp-6.jpg">
                                <div class="review-loader">
                                    <div class="loader-circle-wrap">
                                        <div class="loader-circle">
                                            <span class="circle-progress" data-cpid="id" data-cpvalue="75"
                                                data-cpcolor="#c20000"></span>
                                            <div class="review-point">7.5</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lp-text">
                                <h6><a href="#">Facebook wants to read your thoughts with...</a></h6>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                    <li><i class="fa fa-comment-o"></i> 12</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="lp-item">
                            <div class="lp-pic set-bg" data-setbg="img/latest-preview/lp-7.jpg">
                                <div class="review-loader">
                                    <div class="loader-circle-wrap">
                                        <div class="loader-circle">
                                            <span class="circle-progress" data-cpid="id" data-cpvalue="75"
                                                data-cpcolor="#c20000"></span>
                                            <div class="review-point">7.5</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lp-text">
                                <h6><a href="#">Facebook wants to read your thoughts with...</a></h6>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                    <li><i class="fa fa-comment-o"></i> 12</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="lp-item">
                            <div class="lp-pic set-bg" data-setbg="img/latest-preview/lp-8.jpg">
                                <div class="review-loader">
                                    <div class="loader-circle-wrap">
                                        <div class="loader-circle">
                                            <span class="circle-progress" data-cpid="id" data-cpvalue="75"
                                                data-cpcolor="#c20000"></span>
                                            <div class="review-point">7.5</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lp-text">
                                <h6><a href="#">Facebook wants to read your thoughts with...</a></h6>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                    <li><i class="fa fa-comment-o"></i> 12</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Preview Section End -->

    <!-- Update News Section Begin -->
    <section class="update-news-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h5><span>News & update</span></h5>
                    </div>
                    <div class="tab-elem">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">All</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Platform</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Hardware</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">Reviews</a>
                            </li>
                        </ul><!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tabs-1" role="tabpanel">
                                <div class="row">
                                    <div class="un-slider owl-carousel">
                                        <div class="col-lg-12">
                                            <div class="un-big-item set-bg" data-setbg="img/news/news-1.jpg">
                                                <div class="ub-text">
                                                    <div class="label"><span>Reviews</span></div>
                                                    <h5><a href="#">Get one of our favorite nvme ssds, the 2tb samsung
                                                            970 evo, for $120 less than nomal</a></h5>
                                                    <ul>
                                                        <li>by <span>Admin</span></li>
                                                        <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-3.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-4.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-2.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="un-big-item set-bg" data-setbg="img/news/news-1.jpg">
                                                <div class="ub-text">
                                                    <div class="label"><span>Reviews</span></div>
                                                    <h5><a href="#">Get one of our favorite nvme ssds, the 2tb samsung
                                                            970 evo, for $120 less than nomal</a></h5>
                                                    <ul>
                                                        <li>by <span>Admin</span></li>
                                                        <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-3.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-4.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-2.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabs-2" role="tabpanel">
                                <div class="row">
                                    <div class="un-slider owl-carousel">
                                        <div class="col-lg-12">
                                            <div class="un-big-item set-bg" data-setbg="img/news/news-1.jpg">
                                                <div class="ub-text">
                                                    <div class="label"><span>Reviews</span></div>
                                                    <h5><a href="#">Get one of our favorite nvme ssds, the 2tb samsung
                                                            970 evo, for $120 less than nomal</a></h5>
                                                    <ul>
                                                        <li>by <span>Admin</span></li>
                                                        <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-3.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-6.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-2.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="un-big-item set-bg" data-setbg="img/news/news-1.jpg">
                                                <div class="ub-text">
                                                    <div class="label"><span>Reviews</span></div>
                                                    <h5><a href="#">Get one of our favorite nvme ssds, the 2tb samsung
                                                            970 evo, for $120 less than nomal</a></h5>
                                                    <ul>
                                                        <li>by <span>Admin</span></li>
                                                        <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-3.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-4.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-2.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabs-3" role="tabpanel">
                                <div class="row">
                                    <div class="un-slider owl-carousel">
                                        <div class="col-lg-12">
                                            <div class="un-big-item set-bg" data-setbg="img/news/news-1.jpg">
                                                <div class="ub-text">
                                                    <div class="label"><span>Reviews</span></div>
                                                    <h5><a href="#">Get one of our favorite nvme ssds, the 2tb samsung
                                                            970 evo, for $120 less than nomal</a></h5>
                                                    <ul>
                                                        <li>by <span>Admin</span></li>
                                                        <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-3.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-4.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-2.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="un-big-item set-bg" data-setbg="img/news/news-1.jpg">
                                                <div class="ub-text">
                                                    <div class="label"><span>Reviews</span></div>
                                                    <h5><a href="#">Get one of our favorite nvme ssds, the 2tb samsung
                                                            970 evo, for $120 less than nomal</a></h5>
                                                    <ul>
                                                        <li>by <span>Admin</span></li>
                                                        <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-3.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-4.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-2.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabs-4" role="tabpanel">
                                <div class="row">
                                    <div class="un-slider owl-carousel">
                                        <div class="col-lg-12">
                                            <div class="un-big-item set-bg" data-setbg="img/news/news-1.jpg">
                                                <div class="ub-text">
                                                    <div class="label"><span>Reviews</span></div>
                                                    <h5><a href="#">Get one of our favorite nvme ssds, the 2tb samsung
                                                            970 evo, for $120 less than nomal</a></h5>
                                                    <ul>
                                                        <li>by <span>Admin</span></li>
                                                        <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-3.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-4.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-2.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="un-big-item set-bg" data-setbg="img/news/news-1.jpg">
                                                <div class="ub-text">
                                                    <div class="label"><span>Reviews</span></div>
                                                    <h5><a href="#">Get one of our favorite nvme ssds, the 2tb samsung
                                                            970 evo, for $120 less than nomal</a></h5>
                                                    <ul>
                                                        <li>by <span>Admin</span></li>
                                                        <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-3.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-4.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-2.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
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
                                        <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
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
                                        <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
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
                                        <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
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
                                        <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Update News Section End -->

    <!-- Videos Guide Section Begin -->
    <section class="video-guide-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h5>Videos guide</h5>
                    </div>
                </div>
            </div>
            <div class="tab-elem">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#tabs-5" role="tab">All</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tabs-6" role="tab">Platform</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tabs-7" role="tab">Hardware</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tabs-8" role="tab">Reviews</a>
                    </li>
                </ul><!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tabs-5" role="tabpanel">
                        <div class="row">
                            <div class="vg-slider owl-carousel">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/videos-1.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/videos-2.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-3.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-4.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-5.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/videos-6.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/videos-7.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                   
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-8.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-9.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-10.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-6" role="tabpanel">
                        <div class="row">
                            <div class="vg-slider owl-carousel">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/videos-11.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                   
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/videos-12.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-13.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-14.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-15.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/videos-1.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/videos-2.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-3.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-4.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                  
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-5.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-7" role="tabpanel">
                        <div class="row">
                            <div class="vg-slider owl-carousel">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/videos-1.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/videos-2.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                   
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-3.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-4.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-5.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/videos-1.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                        PLATFORMS...</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/videos-2.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                        PLATFORMS...</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-3.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-4.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-5.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-8" role="tabpanel">
                        <div class="row">
                            <div class="vg-slider owl-carousel">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/videos-1.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                        PLATFORMS...</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/videos-2.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                        PLATFORMS...</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-3.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-4.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-5.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/videos-1.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                        PLATFORMS...</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/videos-2.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                        PLATFORMS...</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-3.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-4.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-5.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Videos Guide Section End -->

    <!-- Instagram Post Section Begin -->
    <section class="instagram-post-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h5>Instagram</h5>
                    </div>
                    <div class="ip-item">
                        <div class="ip-pic">
                            <img src="img/instagram/insta-1.jpg" alt="">
                        </div>
                        <div class="ip-text">
                            <div class="label"><span>Reviews</span></div>
                            <h5><a href="#">Here's an hour of side-quests from The Outer Worlds...</a></h5>
                            <ul>
                                <li>by <span>Admin</span></li>
                                <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                <li><i class="fa fa-comment-o"></i> 20</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices...</p>
                        </div>
                    </div>
                    <div class="ip-item">
                        <div class="ip-pic">
                            <img src="img/instagram/insta-2.jpg" alt="">
                        </div>
                        <div class="ip-text">
                            <div class="label"><span>Windows</span></div>
                            <h5><a href="#">Infinity Ward's focus isn't on battle royale, Call o...</a></h5>
                            <ul>
                                <li>by <span>Admin</span></li>
                                <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                <li><i class="fa fa-comment-o"></i> 20</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices...</p>
                        </div>
                    </div>
                    <div class="ip-item">
                        <div class="ip-pic">
                            <img src="img/instagram/insta-3.jpg" alt="">
                        </div>
                        <div class="ip-text">
                            <div class="label"><span>Hardware</span></div>
                            <h5><a href="#">Capcom asks select fans to test new Resident Evil game</a></h5>
                            <ul>
                                <li>by <span>Admin</span></li>
                                <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                <li><i class="fa fa-comment-o"></i> 20</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices...</p>
                        </div>
                    </div>
                    <div class="ip-item">
                        <div class="ip-pic">
                            <img src="img/instagram/insta-4.jpg" alt="">
                        </div>
                        <div class="ip-text">
                            <div class="label"><span>Playstation</span></div>
                            <h5><a href="#">Teamfight Tactics is in chaos after today's patch...</a></h5>
                            <ul>
                                <li>by <span>Admin</span></li>
                                <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
                                <li><i class="fa fa-comment-o"></i> 20</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices...</p>
                        </div>
                    </div>
                    <div class="pagination-item">
                        <a href="#"><span>1</span></a>
                        <a href="#"><span>2</span></a>
                        <a href="#"><span>3</span></a>
                        <a href="#"><span>Next</span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7">
                    <div class="sidebar-option">
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
                                    <h6><a href="#">This gaming videocard with a RTX 4090...</a></h6>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
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
                                    <h6><a href="#">This gaming videocard with a RTX 3090ti...</a></h6>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
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
                                    <h6><a href="#">This gaming videocard with a RTX 4080ti...</a></h6>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
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
                                    <h6><a href="#">This gaming videocard with a RTX 4080...</a></h6>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> <?= date('M d, Y');?></li>
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
                            <form action="">
                               <a href="login.php"><button style="background-color:#EC6090FF;margin-top:50px" type="submit"><span>Subscribe</span></button></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Instagram Post Section End -->

    <!-- Footer Section Begin -->
   <?php
   include_once('./include/footer.php');
   ?>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"></div>
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