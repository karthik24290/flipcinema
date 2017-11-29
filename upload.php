
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
            <div class="col-md-8 col-md-offset-2">
                <h3 class="mb1">Upload Your File</h3>
                <form method="POST" action="#" enctype="multipart/form-data">
                    <!-- COMPONENT START -->
                    <div class="form-group">
                        <div class="input-group input-file" name="Fichier1">
                            <span class="input-group-btn">
                                <button class="btn btn-default btn-choose" type="button">Choose</button>
                            </span>
                            <input type="text" class="form-control" placeholder='Choose a file...' />
                            <span class="input-group-btn">
                                <button class="btn btn-warning btn-reset" type="button">Reset</button>
                            </span>
                        </div>
                    </div>
                    <!-- COMPONENT END -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary pull-right" disabled>Submit</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                </form>

            </div>
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
            function bs_input_file() {
                $(".input-file").before(
                        function () {
                            if (!$(this).prev().hasClass('input-ghost')) {
                                var element = $("<input type='file' class='input-ghost' style='visibility:hidden; height:0'>");
                                element.attr("name", $(this).attr("name"));
                                element.change(function () {
                                    element.next(element).find('input').val((element.val()).split('\\').pop());
                                });
                                $(this).find("button.btn-choose").click(function () {
                                    element.click();
                                });
                                $(this).find("button.btn-reset").click(function () {
                                    element.val(null);
                                    $(this).parents(".input-file").find('input').val('');
                                });
                                $(this).find('input').css("cursor", "pointer");
                                $(this).find('input').mousedown(function () {
                                    $(this).parents('.input-file').prev().click();
                                    return false;
                                });
                                return element;
                            }
                        }
                );
            }
            $(function () {
                bs_input_file();
            });</script>
    </body>
</html>
