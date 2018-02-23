<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Flip</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="/dist/css/header.css" rel="stylesheet">
        <link href="/dist/css/style.css" rel="stylesheet">
        <script src="js/modernizr.js"></script> <!-- Modernizr -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand navbar-toggle collapsed" href="#menu-toggle" aria-hidden="true"id="menu-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav row">
                        <li class="col-sm-4"><a href="#">flip cinema</a></li>
                        <li class="col-sm-4"><a href="#">Upload</a></li>
                        <li class="col-sm-4"><a class="cd-signin" href="#0">Sign in</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="wrapper" class="toggled">
            <div class="container-fluid">
                <!-- Sidebar -->
                <div id="sidebar-wrapper">
                    <ul class="sidebar-nav">
                        <li class="sidebar-brand">
                            <br>
                        </li>
                        <li class="sidebar-brand">
                            <a href="#" class="navbar-brand">
                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Shortfilms
                            </a>
                        </li>
                        <li>
                            <a href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Teaser</a>
                        </li>
                        <li>
                            <a href="#"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Films</a>
                        </li>                
                        <li>
                            <a href="#"><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span> Videos</a>
                        </li>
                        <li>
                            <a href="#"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Gramiam</a>
                        </li>
                    </ul>
                </div>
                <!-- /#sidebar-wrapper -->

            </div>
        </div>
        <!-- /#wrapper -->
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

        <script>
            $("#menu-toggle").click(function (e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        </script>
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

