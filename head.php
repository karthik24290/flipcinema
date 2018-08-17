<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Adtile Fixed Nav</title>
        <meta name="author" content="Adtile">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="dist/css/home.css">
        <!--<link rel="stylesheet" href="css/ie.css">-->
        <script src="dist/js/responsive-nav.js"></script>
        <!-- Style Sheets --> 
        <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="dist/css/style.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            if (typeof jQuery == 'undefined')
                document.write(unescape("%3Cscript src='dist/js/jquery-1.9.js'" +
                        "type='text/javascript'%3E%3C/script%3E"))
        </script>
    </head>
    <body>
        <nav>
            <div class="flex">
                <a id="logo" href="#">FOFO MEDIA</a>
                <label for="drop" class="toggle">Menu</label>
            </div>
            <input type="checkbox" id="drop" />
            <ul class="menu main-nav">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li>
                    <!-- First Tier Drop Down -->
                    <label for="drop-1" class="toggle">Categories +</label>
                    <a href="#">Categories</a>
                    <input type="checkbox" id="drop-1"/>
                    <ul>
                        <li><a href="#">Teasers</a></li>
                        <li><a href="#">Songs</a></li>
                        <li><a href="#">Short films</a></li>
                        <li><a href="#">Poetry</a></li>
                        <li><a href="#">Gramiya Kalaigal</a></li>
                        <li><a href="#">Dance</a></li>
                        <li><a href="#">Album</a></li>
                        <li><a href="#">Dance Special</a></li>
                    </ul> 
                </li>
                <li><a href="#">Creative Advertising Ideas(CAI)</a></li>
                <li><a href="#">Uploader</a></li>
                <li><a class="cd-signin" href="#">Signin</a></li>
            </ul>
        </nav>


        <!--<p> A simple dropdown navigation menu made with CSS Only. Dropdowns are marked with a plus sign ( + )</p>-->
        <!--<p> Resize the screen to see the look if the screen is smaller then 768px </p>-->


        <div class="cd-user-modal">
            <div class="cd-user-modal-container">
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
                            <label class="image-replace cd-password" for="signup-password">Password</label>
                            <select class="full-width has-padding has-border" id="signup-password">
                                <option value="viewer">Viewer</option>
                                <option value="uploader">Uploader</option>
                            </select>
                        </p>

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
                            <label class="image-replace cd-password" for="signup-Mobile">Mobile</label>
                            <input class="full-width has-padding has-border" id="signup-Mobile" type="tel"  placeholder="Mobile Number" onkeypress="return isNumberKey(event)" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                            <span class="cd-error-message">Error message here!</span>
                        </p>

                        <p class="fieldset">
                            <label class="image-replace cd-password" for="signup-password">Password</label>
                            <select class="full-width has-padding has-border" id="signup-password">
                                <option value="english">English</option>
                                <option value="tamil">Tamil</option>
                            </select>
                        </p>

                        <p class="fieldset">
                            <label class="image-replace cd-password" for="signup-date">Date</label>
                            <input class="full-width has-padding has-border" id="signup-date" type="date">
                        </p>

                        <p class="fieldset">
                            <label class="image-replace cd-password" for="signup-password">Gender</label>
                            <select class="full-width has-padding has-border" id="signup-password">
                                <option value="viewer">Male</option>
                                <option value="uploader">Female</option>
                            </select>
                        </p>

                        <p class="fieldset">
                            <label class="image-replace cd-password" for="signup-password">Password</label>
                            <input class="full-width has-padding has-border" id="signup-password" type="password"  placeholder="Password">
                            <a href="#0" class="hide-password">Show</a>
                            <span class="cd-error-message">Error message here!</span>
                        </p>

                        <p class="fieldset">
                            <label class="image-replace cd-password" for="signup-password">Confirm Password</label>
                            <input class="full-width has-padding has-border" id="signup-password" type="password"  placeholder="Password">
                            <a href="#0" class="hide-password">Show</a>
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

        <section id="home">


        </section>

<!--        <section id="about">
            <h1>About</h1>
        </section>

        <section id="projects">
            <h1>Projects</h1>
        </section>

        <section id="blog">
            <h1>Blog</h1>
        </section>-->
        <script>
            function isNumberKey(evt) {
                var charCode = (evt.which) ? evt.which : event.keyCode
                if (charCode > 31 && (charCode < 48 || charCode > 57))
                    return false;
                return true;
            }
        </script>
        <script src="dist/js/fastclick.js"></script>
        <script src="dist/js/scroll.js"></script>
        <script src="dist/js/fixed-responsive-nav.js"></script>
        <script src="js/main.js"></script> <!-- Gem jQuery -->
        <script src="js/classie.js"></script>
    </body>
</html>
