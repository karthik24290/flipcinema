<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="/favicon.ico">

        <title>FlipCinema</title>

        <!-- Bootstrap core CSS -->
        <link href="/dist/css/home.css" rel="stylesheet">
    </head>

    <body>  

        <!-- Navbar-->
        <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
                <div class="nav-subnav row">
                    <ul class="list-unstyled nav-subnav__list ac">
                        <li class="nav-subnav__item"><a href="#" class="nav-subnav__link text-white">Short Films</a></li>
                        <li class="nav-subnav__item"><a href="#" class="nav-subnav__link text-white">Movie Teasers</a></li>
                        <li class="nav-subnav__item"><a href="#" class="nav-subnav__link text-white">Movie Trailers</a></li>
                        <li class="nav-subnav__item"><a href="#" class="nav-subnav__link text-white">Folk Songs</a></li>
                        <li class="nav-subnav__item"><a href="#" class="nav-subnav__link text-white">Poems</a></li>
                        <li class="nav-subnav__item"><a href="#" class="nav-subnav__link text-white">Movie Trailers</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Header-->

        <!-- Header-->
        <div class="navbar navbar-dark bg-dark">
            <div class="container d-flex justify-content-between">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="logo-ttl" href="index.php">Flip cinema</a>
                <a href="upload.php" class="nav-ttl">upload</a>
            </div>
        </div>
        <!-- Header-->

        <!-- banner-->
        <!--<div class="banner">
            <div class="banner__bg">
                <video autoplay="" loop="" muted="" id="awards-bg-video">
                    <source src="/dist/banner.mp4" type="video/mp4">
                    <source src="https://auto.ndtvimg.com/media/video/cnb-awards/awards-bg.webm" type="video/webm">        
                </video>
            </div>
            <div class="jumbotron text-center">
                <div class="container">
                    <div class="banner__img">
                        <h1 class="banner-ttl">Movie<span class="banner-subttl">pass</span></h1>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- reference examples at https://www.idangero.us/swiper/demos/#.Vl8kD9-rRHc -->
        <section id="lab_video_slider">
            <div class="container-fluid">
                <div class="row">
                    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

                    <!-- Link Swiper's CSS -->
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.2.5/css/swiper.min.css">

                    <!-- Swiper -->
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div id="slide_one" class="swiper-slide">
                                <div id="lab_video_text_overlay">
                                    <div class="container">
                                        <h2 class="swiper-wrapper__ttl">Movie<strong>Pass</strong></h2>
                                    </div>
                                </div>
                                <!-- VIDEO -->
                                <video class="slider-video" width="100%" preload="auto" loop="" autoplay="" style="visibility: visible; width: 100%;" poster="">
                                    <source src="dist/banner.mp4" type="video/mp4">
                                </video>
                                <!-- END VIDEO -->
                            </div>

                            <div id="slide_two" class="swiper-slide">
                                <div id="lab_video_text_overlay">
                                    <div class="container">
                                        <h2 class="swiper-wrapper__ttl">Movie<strong>Pass</strong></h2>
                                    </div>
                                </div>
                                <!-- end #lab_overlay -->
                                <video class="slider-video" width="100%" preload="auto" loop="" autoplay="" style="visibility: visible; width: 100%;" poster="//dl.dropbox.com/s/ijyaav8qzkdtyt5/lab-coding-screenshot.jpg">
                                    <source src="Sunrise.mp4" type="video/mp4">
                                </video>
                            </div>

                            <div id="slide_three" class="swiper-slide">
                                <div id="lab_video_text_overlay">
                                    <div class="container">
                                        <h2 class="swiper-wrapper__ttl">Movie<strong>Pass</strong></h2>

                                    </div>
                                </div>
                                <!-- end #lab_overlay -->
                                <video class="slider-video" width="100%" preload="auto" loop="" autoplay="" style="visibility: visible; width: 100%;" poster="//dl.dropbox.com/s/ijyaav8qzkdtyt5/lab-coding-screenshot.jpg">
                                    <source src="Saint_Barthelemy_2.mov" type="video/mp4">
                                </video>
                            </div>

                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>

                    <!-- Swiper JS -->
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.2.5/js/swiper.min.js"></script>

                    <!-- Initialize Swiper -->
                    <script>
                        var swiper = new Swiper('.swiper-container', {
                            pagination: '.swiper-pagination',
                            paginationClickable: true,
                            nextButton: '.swiper-button-next',
                            prevButton: '.swiper-button-prev',
                            spaceBetween: 30,
                            autoplay: 5000,
                            autoplayDisableOnInteraction: false
                        });
                    </script>
                </div>
                <!-- end .row -->
            </div>
            <!-- end .container-->
        </div>
        <!-- end #section -->
        <!-- Banner-->

        <!-- Listing-->
        <div class="album text-muted">
            <div class="container">
                <div class="card-container">
                    <div class="card-ttl ac">Popular Shortfilms</div>
                    <div class="row">
                        <div class="col-sm-3 py-3">
                            <a href="/details.php">
                                <img class="card-img" src="https://i.ytimg.com/vi/xNP3n-VAsuk/hqdefault.jpg?sqp=-oaymwEWCNIBEHZIWvKriqkDCQgBFQAAiEIYAQ==&rs=AOn4CLBWaELWc6NAJry7ZTetNoHcb6vURw" alt="Card image cap">
                                <p class="card-text">New theme for New Generation</p>
                                <div class="card-wrap">
                                    <span class="card-count">2K Views</span>
                                    <span class="card-day">2 Days ago</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 py-3">
                            <a href="/details.php">
                                <img class="card-img" src="https://i.ytimg.com/vi/jCafZht8yMA/hqdefault.jpg?sqp=-oaymwEWCNIBEHZIWvKriqkDCQgBFQAAiEIYAQ==&rs=AOn4CLAQKBrp1o6Bh9ZHOznDsQdNHukZcA" alt="Card image cap">
                                <p class="card-text">New theme for New Generation</p>
                                <div class="card-wrap">
                                    <span class="card-count">2K Views</span>
                                    <span class="card-day">2 Days ago</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 py-3">
                            <a href="/details.php">
                                <img class="card-img" src="https://i.ytimg.com/vi/wK7shf-5soU/hqdefault.jpg?sqp=-oaymwEWCNIBEHZIWvKriqkDCQgBFQAAiEIYAQ==&rs=AOn4CLCTT42KZVlCJpd52IgpF8-H_vnzWA" alt="Card image cap">
                                <p class="card-text">New theme for New Generation</p>
                                <div class="card-wrap">
                                    <span class="card-count">2K Views</span>
                                    <span class="card-day">2 Days ago</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 py-3">
                            <a href="/details.php">
                                <img  class="card-img" src="https://i.ytimg.com/vi/X0JXXLdDnp4/hqdefault.jpg?sqp=-oaymwEWCNIBEHZIWvKriqkDCQgBFQAAiEIYAQ==&rs=AOn4CLA4grozUqZGRQ9yF5FDm5DNHjDvgA" alt="Card image cap">
                                <p class="card-text">New theme for New Generation</p>
                                <div class="card-wrap">
                                    <span class="card-count">2K Views</span>
                                    <span class="card-day">2 Days ago</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-container">
                    <div class="card-ttl ac">Trailers</div>
                    <div class="row">
                        <div class="col-sm-3 py-3">
                            <a href="/details.php">
                                <img class="card-img" src="https://i.ytimg.com/vi/fhZk4GzC1QY/hqdefault.jpg?sqp=-oaymwEWCNIBEHZIWvKriqkDCQgBFQAAiEIYAQ==&rs=AOn4CLBFqBkKBXYgMQJGaVEGJ1VVHt9RLg" alt="Card image cap">
                                <p class="card-text">New theme for New Generation</p>
                                <div class="card-wrap">
                                    <span class="card-count">2K Views</span>
                                    <span class="card-day">2 Days ago</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 py-3">
                            <a href="/details.php">
                                <img class="card-img" src="https://i.ytimg.com/vi/KV8Wpnpm_lg/hqdefault.jpg?sqp=-oaymwEWCNIBEHZIWvKriqkDCQgBFQAAiEIYAQ==&rs=AOn4CLCbiAg7455K3G4LB00hQDuq3ZDU7Q" alt="Card image cap">
                                <p class="card-text">New theme for New Generation</p>
                                <div class="card-wrap">
                                    <span class="card-count">2K Views</span>
                                    <span class="card-day">2 days ago</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 py-3">
                            <a href="/details.php">
                                <img class="card-img" src="https://i.ytimg.com/vi/UYnBb0bDPSM/hqdefault.jpg?sqp=-oaymwEWCNIBEHZIWvKriqkDCQgBFQAAiEIYAQ==&rs=AOn4CLBDTsl3-v5ye1X050ZtrEdqR1zKAA" alt="Card image cap">
                                <p class="card-text">New theme for New Generation</p>
                                <div class="card-wrap">
                                    <span class="card-count">2K Views</span>
                                    <span class="card-day">2 Days ago</span>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-3 py-3">
                            <a href="/details.php">
                                <img class="card-img" src="https://i.ytimg.com/vi/HQXaZewuc8o/hqdefault.jpg?sqp=-oaymwEWCNIBEHZIWvKriqkDCQgBFQAAiEIYAQ==&rs=AOn4CLA1RHRi2grWxxPJ5DjwDuQzjtQcAg" alt="Card image cap">
                                <p class="card-text">New theme for New Generation</p>
                                <div class="card-wrap">
                                    <span class="card-count">2K Views</span>
                                    <span class="card-day">2 Days ago</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="ac">
                    <button class="more-btn">View More Categories</button>
                </div>
            </div>
        </div>
        <!-- Listing-->


        <!-- description-->
        <div class="">
            <div class="extend-content">
                <div class="desc-sec">
                    <ul class="desc-sec__list row">
                        <li class="col-sm-4 desc-sec__item ac">
                            <img class="desc-sec__img" src="dist/images/icons/play.svg">
                            <div class="desc-sec__text">Watch Millions of <br>videos online</div>
                        </li>
                        <li class="col-sm-4 desc-sec__item ac">
                            <img class="desc-sec__img" src="dist/images/icons/upload.svg">
                            <div class="desc-sec__text">Upload and Manage <br>your videos online</div>
                        </li>
                        <li class="col-sm-4 desc-sec__item ac">
                            <img class="desc-sec__img" src="dist/images/icons/device.svg">
                            <div class="desc-sec__text">Watch anywhere, <br>on any device</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- description-->

        <!--invite-sec-->
        <div class="bg-white container">
            <div class="invite-sec ac">
                <div class="invite-sec__banner"></div>
                <div class="invite-sec__ttl">Join FlipCinema</div>
                <div class="invite-sec__txt">In this special occassion join and enjoy over tons of music <br> experience in all gener and enjoy.</div>
                <a href="#" class="btn invite-sec__btn">Join Now</a>
            </div>
        </div>
        <!--invite-sec-->

        <!-- Footer-->
        <footer class="footer-sec">
            <div class="container">
                <p class="float-right">
                    <!--<a href="#">Back to top</a>-->
                </p>
                <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
                <!--<p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started guide</a>.</p>-->
            </div>
        </footer>
        <!-- Footer-->

        <!-- Bootstrap core JavaScript -->
        <script src="/bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>
        <!--<script src="/bower_components/popper.js/dist/popper.min.js"></script>-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.5/umd/popper.min.js" type="text/javascript"></script>
        <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
