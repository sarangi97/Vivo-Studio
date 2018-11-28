<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>::eStudio ::</title>
    <link href="css/gallery.css" rel="stylesheet">
    <link href="css/local.css" rel="stylesheet" type="text/css">
    <link href="index_files/bootstrap.css" rel="stylesheet">
    <link href="index_files/justified-nav.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel=stylesheet>
    <link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css" />
    <script src="js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/gallery.js"></script>
    <script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/jgallery.js"></script>

</head>

<body style="background: linear-gradient(to left,#696969, #ffffff , #696969, #ffffff , #696969);">
    <div class="container">
        <img src="images/head_1.png" width="100%" height="100%">
        <br><br>
        <div class="masthead">
            <ul class="nav nav-justified">
                <li><a href="index.php"><i class="fa fa-home fa-lg" aria-hidden="true"></i>&nbsp;Home</a></li>

                <li><a href="albums.php"><i class="fa fa-tasks fa-lg" aria-hidden="true"></i>&nbsp;print Division</a></li>
                <li><a href="retouch.php">&nbsp;<i class="fa fa-camera fa-lg" aria-hidden="true"></i>&nbsp;Retouch Division</a></li>
                <li class="active"><a href="gallery.php"><i class="fa fa-film fa-lg" aria-hidden="true"></i>&nbsp;Gallery</a></li>
                <li><a href="contact.php"><i class="fa fa-phone fa-lg" aria-hidden="true"></i>&nbsp;Contact Us</a></li>
                <li><a href="estudio.php"><i class="fa fa-sign-out fa-fw"></i> Logout </a></li>
            </ul>
        </div>
        <br />
        <!-- end of links -->

        <div class="page header col-lg-6 col-lg-offset-3 text-center">
            <h1>My Account</h1>
        </div>
        <div class="container">
            <div id="main_area">
                <!-- Slider -->
                <div class="row">
                    <div class="col-sm-6" id="slider-thumbs">
                        <!-- Bottom switcher of slider -->
                        <ul class="hide-bullets">
                            <li class="col-sm-3">
                                <a class="thumbnail" id="carousel-selector-0">
                            <img src="./images/thubs/01.jpg">
                        </a>
                            </li>

                            <li class="col-sm-3">
                                <a class="thumbnail" id="carousel-selector-1">
                                <img src="./images/thubs/02.jpg"></a>
                            </li>

                            <li class="col-sm-3">
                                <a class="thumbnail" id="carousel-selector-2"><img src="./images/thubs/03.jpg"></a>
                            </li>

                            <li class="col-sm-3">
                                <a class="thumbnail" id="carousel-selector-3"><img src="./images/thubs/04.jpg"></a>
                            </li>

                            <li class="col-sm-3">
                                <a class="thumbnail" id="carousel-selector-4"><img src="./images/thubs/05.jpg"></a>
                            </li>

                            <li class="col-sm-3">
                                <a class="thumbnail" id="carousel-selector-5"><img src="./images/thubs/06.jpg"></a>
                            </li>
                            <li class="col-sm-3">
                                <a class="thumbnail" id="carousel-selector-6"><img src="./images/thubs/07.jpg"></a>
                            </li>

                            <li class="col-sm-3">
                                <a class="thumbnail" id="carousel-selector-7"><img src="./images/thubs/08.jpg"></a>
                            </li>

                            <li class="col-sm-3">
                                <a class="thumbnail" id="carousel-selector-8"><img src="./images/thubs/09.jpg"></a>
                            </li>

                            <li class="col-sm-3">
                                <a class="thumbnail" id="carousel-selector-9"><img src="./images/thubs/10.jpg"></a>
                            </li>
                            <li class="col-sm-3">
                                <a class="thumbnail" id="carousel-selector-10"><img src="./images/thubs/11.jpg"></a>
                            </li>

                            <li class="col-sm-3">
                                <a class="thumbnail" id="carousel-selector-11"><img src="./images/thubs/12.jpg"></a>
                            </li>

                            <li class="col-sm-3">
                                <a class="thumbnail" id="carousel-selector-12"><img src="./images/thubs/13.jpg"></a>
                            </li>

                            <li class="col-sm-3">
                                <a class="thumbnail" id="carousel-selector-13"><img src="./images/thubs/14.jpg"></a>
                            </li>
                            <li class="col-sm-3">
                                <a class="thumbnail" id="carousel-selector-14"><img src="./images/thubs/15.jpg"></a>
                            </li>

                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <div class="col-xs-12" id="slider">
                            <!-- Top part of the slider -->
                            <div class="row">
                                <div class="col-sm-12" id="carousel-bounding-box">
                                    <div class="carousel slide" id="myCarousel">
                                        <!-- Carousel items -->
                                        <div class="carousel-inner">
                                            <div class="active item" data-slide-number="0">
                                                <img src="./images/gallery/01.jpg"></div>

                                            <div class="item" data-slide-number="1">
                                                <img src="./images/gallery/02.jpg"></div>

                                            <div class="item" data-slide-number="2">
                                                <img src="./images/gallery/03.jpg"></div>

                                            <div class="item" data-slide-number="3">
                                                <img src="./images/gallery/04.jpg"></div>

                                            <div class="item" data-slide-number="4">
                                                <img src="./images/gallery/05.jpg"></div>

                                            <div class="item" data-slide-number="5">
                                                <img src="./images/gallery/06.jpg"></div>

                                            <div class="item" data-slide-number="6">
                                                <img src="./images/gallery/07.jpg"></div>

                                            <div class="item" data-slide-number="7">
                                                <img src="./images/gallery/08.jpg"></div>

                                            <div class="item" data-slide-number="8">
                                                <img src="./images/gallery/09.jpg"></div>

                                            <div class="item" data-slide-number="9">
                                                <img src="./images/gallery/10.jpg"></div>

                                            <div class="item" data-slide-number="10">
                                                <img src="./images/gallery/11.jpg"></div>

                                            <div class="item" data-slide-number="11">
                                                <img src="./images/gallery/12.jpg"></div>

                                            <div class="item" data-slide-number="12">
                                                <img src="./images/gallery/13.jpg"></div>

                                            <div class="item" data-slide-number="13">
                                                <img src="./images/gallery/14.jpg"></div>

                                            <div class="item" data-slide-number="14">
                                                <img src="./images/gallery/15.jpg"></div>

                                            <div class="item" data-slide-number="15">
                                                <img src="./images/gallery/10.jpg"></div>
                                        </div>
                                        <!-- Carousel nav -->
                                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/Slider-->
                </div>

            </div>
        </div>


        <br>
        <hr>
        <!-- Footer -->
        <div class="row">
            <div class="col-md-12" style="float: center;">
                <?php 
			include 'footer.php';
           	?>
            </div>

        </div>
    </div><br><br><br><br><br>

    </div>
    <!-- container div -->

    <script src="js/bootstrap.js"></script>
    <script src="js/docs.js"></script>

    </div>

</body>

</html>
