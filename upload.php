
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

    <body style="background-color: #f1f1f1; min-height: 100%;">

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
                <div class="row">
                    <div class="col-sm-6">
                        <div class="upload-container__box">
                            <div class="upload-container__drag" id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                                <div class="upload-container__wrapper">
                                    <input type="file" id="file1" class="upload-container__input" name="image" accept="image/*" capture />
                                    <img src="dist/images/upload.png" id="upfile1" style="cursor:pointer" />
                                    <div class="upload-container__ttl">Select files to Upload</div>
                                    <div class="upload-container__subttl">or Drag and Drop video files</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="upload-container__box">
                            <div class="upload-container__drag" id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                                <div class="upload-container__wrapper">
                                    <input type="file" id="file1" class="upload-container__input" name="image" accept="image/*" capture />
                                    <img src="dist/images/upload.png" id="upfile1" style="cursor:pointer" />
                                    <div class="upload-container__ttl">Select Thumbnail image file to Upload</div>
                                    <div class="upload-container__subttl">or Drag and Drop video files</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-primary">Submit</button>
                    </div>
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
            <!-- upload-container-->

            <div class="row">
                <div class="col-sm-12">
                    <!-- upload-list-->
                    <div class="upload-list">
                        <div class="upload-list__head">
                            <div class="upload-list__ttl">Your Uploaded Movie Teaser</div>
                        </div>
                        <div class="upload-list__subttl">Short Film Videos</div>
                        <div class="row">
                            <ul class="upload-list__list col-sm-12">
                                <li class="upload-list__item">
                                    <div class="upload-list__subhead">
                                        <div class="upload-list__link">Gulaebaghavali | Guleba Full Video Song</div>
                                    </div>
                                    <div class="upload-list__subbody">
                                        <img src="dist/images/img.jpg" alt=""/>
                                    </div>
                                    <div class="detail-wrap__left">
                                        <i class="detail-wrap__icon svg-icon"><img src="dist/icons/like.svg"></i>
                                        <span class="detail-wrap__count">20k</span>
                                        <i class="detail-wrap__icon svg-icon"><img src="dist/icons/dislike.svg"></i>
                                        <span class="detail-wrap__count">4k</span>
                                        <button type="button" class="btn btn-primary video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/Jfrjeg26Cwk" data-target="#myModal"> Play </button>
                                    </div>
                                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>        
                                                    <!-- 16:9 aspect ratio -->
                                                    <div class="embed-responsive embed-responsive-16by9">
                                                        <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always">></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </li>
                                <li class="upload-list__item">
                                    <div class="upload-list__subhead">
                                        <div class="upload-list__link">Gulaebaghavali | Guleba Full Video Song</div>
                                    </div>
                                    <div class="upload-list__subbody">
                                        <img src="dist/images/img.jpg" alt=""/>
                                    </div>
                                    <div class="detail-wrap__left">
                                        <i class="detail-wrap__icon svg-icon"><img src="dist/icons/like.svg"></i>
                                        <span class="detail-wrap__count">20k</span>
                                        <i class="detail-wrap__icon svg-icon"><img src="dist/icons/dislike.svg"></i>
                                        <span class="detail-wrap__count">4k</span>
                                        <button type="button" class="btn btn-primary video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/Jfrjeg26Cwk" data-target="#myModal"> Play </button>
                                    </div>
                                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>        
                                                    <!-- 16:9 aspect ratio -->
                                                    <div class="embed-responsive embed-responsive-16by9">
                                                        <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always">></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- upload-list-->
                </div>
            </div>
            <!-- upload-footer-->
            <div class="row">
                <div class="col-sm-12">
                    <div class="upload-footer">
                        <div class="upload-footer__ttl">Help and suggestions </div>
                        <div class="upload-footer__txt">By submitting your videos to YouTube, you acknowledge that you agree to YouTube's<a href="#">Terms of Service</a><br>Please be sure not to violate others' copyright or privacy rights. </div>
                        <ul class="upload-footer__list">
                            <li class="upload-footer__item"><a class="upload-footer__link" href="#">Upload instructions</a></li>
                            <li class="upload-footer__item"><a class="upload-footer__link" href="#">Troubleshooting</a></li>
                            <li class="upload-footer__item"><a class="upload-footer__link" href="#">Mobile uploads</a></li>
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
        <script>
            $(document).ready(function () {
                var $videoSrc;
                $('.video-btn').click(function () {
                    $videoSrc = $(this).data("src");
                });
                console.log($videoSrc);
                $('#myModal').on('shown.bs.modal', function (e) {

                    $("#video").attr('src', $videoSrc + "?rel=0&amp;showinfo=0&amp;modestbranding=1&amp;autoplay=1");
                })
                $('#myModal').on('hide.bs.modal', function (e) {
                    // a poor man's stop video
                    $("#video").attr('src', $videoSrc);
                })

            });
        </script>
    </body>
</html>
