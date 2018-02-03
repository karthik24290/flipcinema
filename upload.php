
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
        <!-- navbar-->

        <!-- Header-->
        <div class="navbar navbar-dark bg-dark mb2">
            <div class="container d-flex justify-content-between">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="logo-ttl" href="index.php">Flip cinema</a>
                <div class="nav-ttl">Browse</div>
            </div>
        </div>
        <!-- Header-->

        <!-- Upload-->
        <div class="container">
            <!-- upload-container-->
            <div class="upload-container">
                <div class="upload-container__box">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="upload-container__drag" id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                                <div class="upload-container__wrapper">
                                    <button class="upload-container__btn">
                                        <img src="dist/images/upload.png" alt=""/>
                                    </button>
                                    <div class="upload-container__ttl">Select files to Upload</div>
                                    <div class="upload-container__subttl">or Drag and Drop video files</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="upload-sidebar">
                                <div class="upload-sidebar__ttl">Import Videos</div>
                                <div class="upload-sidebar__wrapper row">
                                    <div class="col-sm-5">
                                        <img src="dist/images/import.png" alt=""/>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="upload-sidebar__txt">Import your videos from Google Photos</div>
                                        <button class="upload-sidebar__btn">Import</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- upload-container-->

            <!-- upload-footer-->
            <div class="upload-footer">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="upload-footer__ttl">Help and suggestions </div>
                        <div class="upload-footer__txt">By submitting your videos to YouTube, you acknowledge that you agree to YouTube's<a href="#">Terms of Service</a><br>Please be sure not to violate others' copyright or privacy rights. </div>
                        <ul class="upload-footer__list">
                            <li class="upload-footer__item"><a class="upload-footer__link">Upload instructions</a></li>
                            <li class="upload-footer__item"><a class="upload-footer__link">Troubleshooting</a></li>
                            <li class="upload-footer__item"><a class="upload-footer__link">Mobile uploads</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- upload-footer-->

        </div>
        <!-- upload-->



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
        <script>
                                function allowDrop(ev) {
                                    ev.preventDefault();
                                }

                                function drag(ev) {
                                    ev.dataTransfer.setData("text", ev.target.id);
                                }

                                function drop(ev) {
                                    ev.preventDefault();
                                    var data = ev.dataTransfer.getData("text");
                                    ev.target.appendChild(document.getElementById(data));
                                }
        </script>
    </body>
</html>
