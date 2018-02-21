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
        <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
        <link href="/dist/css/style.css" rel="stylesheet">
        <script src="js/modernizr.js"></script> <!-- Modernizr -->
        <link href="/dist/css/home.css" rel="stylesheet">
        
    </head>

    <body>  

        <!-- Navbar-->
        <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
                <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
                    <h3>Menu</h3>
                    <a href="#">Short Films</a>
                    <a href="#">Trailers</a>
                    <a href="#">Songs</a>
                    <a href="#">Videos</a>
                    <a href="#">bunya</a>
                    <a href="#">Rutabaga</a>
                </nav>
            </div>
        </div>

        <!-- navbar-->

        <!-- Header-->
        <div class="navbar navbar-dark bg-dark">
            <div class="container d-flex justify-content-between">
                <a class="logo-ttl" href="index.php">Flip cinema</a>
                <button id="showLeft" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    Menu</button>
                <a href="upload.php" class="nav-ttl">upload</a>
                <nav class="main-nav">
                    <!-- inser more links here -->
                    <a class="cd-signin" href="#0">Sign in</a>
                </nav>
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

        <!-- Listing-->

        <!-- Login-->
        <div class="wrap">
            <!-- <header role="banner">
                 <div id="cd-logo"><a href="#0"><img src="img/cd-logo.svg" alt="Logo"></a></div>
 
                 <nav class="main-nav">
                     <ul>
                         inser more links here
                         <li><a class="cd-signin" href="#0">Sign in</a></li>
                         <li><a class="cd-signup" href="#0">Sign up</a></li>
                     </ul>
                 </nav>
             </header>-->

            <div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
                <div class="cd-user-modal-container"> <!-- this is the container wrapper -->
                    <ul class="cd-switcher">
                        <li><a href="#0">Sign in</a></li>
                        <li><a href="#0">New account</a></li>
                    </ul>

                    <div id="cd-login"> <!-- log in form -->
                        <form class="cd-form">
                            <p class="fieldset">
                                <label class="image-replace cd-email" for="signin-email">E-mail</label>
                                <input class="full-width has-padding has-border" id="signin-email" type="email" placeholder="E-mail">
                                <span class="cd-error-message">Error message here!</span>
                            </p>

                            <p class="fieldset">
                                <label class="image-replace cd-password" for="signin-password">Password</label>
                                <input class="full-width has-padding has-border" id="signin-password" type="text"  placeholder="Password">
                                <a href="#0" class="hide-password">Hide</a>
                                <span class="cd-error-message">Error message here!</span>
                            </p>

                            <p class="fieldset">
                                <input type="checkbox" id="remember-me" checked>
                                <label for="remember-me">Remember me</label>
                            </p>

                            <p class="fieldset">
                                <input class="full-width" type="submit" value="Login">
                            </p>
                        </form>

                        <p class="cd-form-bottom-message"><a href="#0">Forgot your password?</a></p>
                        <!-- <a href="#0" class="cd-close-form">Close</a> -->
                    </div> <!-- cd-login -->

                    <div id="cd-signup"> <!-- sign up form -->
                        <form class="cd-form">
                            <p class="fieldset">
                                <label class="image-replace cd-username" for="signup-username">Username</label>
                                <input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Username">
                                <span class="cd-error-message">Error message here!</span>
                            </p>

                            <p class="fieldset">
                                <label class="image-replace cd-email" for="signup-email">E-mail</label>
                                <input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail">
                                <span class="cd-error-message">Error message here!</span>
                            </p>

                            <p class="fieldset">
                                <label class="image-replace cd-password" for="signup-password">Password</label>
                                <input class="full-width has-padding has-border" id="signup-password" type="text"  placeholder="Password">
                                <a href="#0" class="hide-password">Hide</a>
                                <span class="cd-error-message">Error message here!</span>
                            </p>

                            <p class="fieldset">
                                <input type="checkbox" id="accept-terms">
                                <label for="accept-terms">I agree to the <a href="#0">Terms</a></label>
                            </p>

                            <p class="fieldset">
                                <input class="full-width has-padding" type="submit" value="Create account">
                            </p>
                        </form>

                        <!-- <a href="#0" class="cd-close-form">Close</a> -->
                    </div> <!-- cd-signup -->

                    <div id="cd-reset-password"> <!-- reset password form -->
                        <p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

                        <form class="cd-form">
                            <p class="fieldset">
                                <label class="image-replace cd-email" for="reset-email">E-mail</label>
                                <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
                                <span class="cd-error-message">Error message here!</span>
                            </p>

                            <p class="fieldset">
                                <input class="full-width has-padding" type="submit" value="Reset password">
                            </p>
                        </form>

                        <p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
                    </div> <!-- cd-reset-password -->
                    <a href="#0" class="cd-close-form">Close</a>
                </div> <!-- cd-user-modal-container -->
            </div>
            <!-- cd-user-modal -->
            <!-- Login -->
    </body>
</html>
</div>
<!-- navbar-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/main.js"></script> <!-- Gem jQuery -->
<script src="js/classie.js"></script>
<script>
    var menuLeft = document.getElementById('cbp-spmenu-s1'),
            body = document.body;

    showLeft.onclick = function () {
        classie.toggle(this, 'active');
        classie.toggle(menuLeft, 'cbp-spmenu-open');
        disableOther('showLeft');
    };

    function disableOther(button) {
        if (button !== 'showLeft') {
            classie.toggle(showLeft, 'disabled');
        }
    }
</script>
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
<script src="/bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>
<!--<script src="/bower_components/popper.js/dist/popper.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.5/umd/popper.min.js" type="text/javascript"></script>
<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>
<!--<script src="/bower_components/popper.js/dist/popper.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.5/umd/popper.min.js" type="text/javascript"></script>
<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
