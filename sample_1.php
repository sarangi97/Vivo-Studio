<!DOCTYPE HTML>
<html lang="en">
<head>
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<![endif]-->
<meta charset="utf-8">
<title>Bootstrap Image Gallery</title>

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
 <script>
$(function() {
$( "#accordion" ).accordion();
});
</script>


<meta name="description" content="Bootstrap Image Gallery is an extension to blueimp Gallery, 
a touch-enabled, responsive and customizable image and video gallery. 
It displays images and videos in the modal dialog of the Bootstrap framework, 
features swipe, mouse and keyboard navigation, transition effects, 
fullscreen support and on-demand content loading and can be extended to display additional content types.">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
<link rel="stylesheet" href="http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
<link rel="stylesheet" href="css/bootstrap-image-gallery.css">
<link rel="stylesheet" href="css/demo.css">



<link href="css/bootstrap.css" rel="stylesheet" type="text/css">

<!-- Bootstrap core CSS -->
    <link href="index_files/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="index_files/justified-nav.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
</head>
<body>
    <div class="container">
	
	<img src="images/head_1.png" width="100%" height="100%"> 
 		<br><br> 
       <div class="masthead">
          <ul class="nav nav-justified">
          <li><a href="index.php">Home</a></li>
          <li> <a href="about.php">About Us</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="estudio.php">eStudio</a></li>
          <li class="active"><a href="sample.php">Samples</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
      </div>
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-fixed-top .navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        </div>



<div class="container">
<div id="accordion">
<h3>Section 1</h3>
<div>
<p>
Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
</p>
</div>
<h3>Section 2</h3>
<div>
<p>
Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
suscipit faucibus urna.
</p>
</div>
<h3>Section 3</h3>
<div>
<p>
Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
</p>
<ul>
<li>List item one</li>
<li>List item two</li>
<li>List item three</li>
</ul>
</div>
<h3>Section 4</h3>
<div>
<p>
Cras dictum. Pellentesque habitant morbi tristique senectus et netus
et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
mauris vel est.
</p>
<p>
Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
inceptos himenaeos.
</p>
</div>
</div>
<br>
    <form class="form-inline">
        <div class="form-group">
            <button id="image-gallery-button" type="button" class="btn btn-primary btn-lg">
                <i class="glyphicon glyphicon-picture"></i>
                Launch Image Gallery
            </button>
        </div>
        <div class="btn-group" data-toggle="buttons">
          <label class="btn btn-success btn-lg">
            <i class="glyphicon glyphicon-leaf"></i>
            <input id="borderless-checkbox" type="checkbox"> Borderless
          </label>
          <label class="btn btn-primary btn-lg">
            <i class="glyphicon glyphicon-fullscreen"></i>
            <input id="fullscreen-checkbox" type="checkbox"> Fullscreen
          </label>
        </div>
    </form>
    <br>
    <!-- The container for the list of example images--> 
    <div id="links">
	<h2> Engagement Album</h2>
    <a href="images/gallery/01.jpg" title="Subhashini | Amila Engagement" data-gallery> <img src="images/thubs/01.jpg" alt="Subhashini | Amila Engagement"></a>
	<a href="images/gallery/02.jpg" title="Subhashini | Amila Engagement" data-gallery> <img src="images/thubs/02.jpg" alt="Subhashini | Amila Engagement"></a>
    <a href="images/gallery/03.jpg" title="Subhashini | Amila Engagement" data-gallery> <img src="images/thubs/03.jpg" alt="Subhashini | Amila Engagement"></a>
    <a href="images/gallery/04.jpg" title="Subhashini | Amila Engagement" data-gallery> <img src="images/thubs/04.jpg" alt="Subhashini | Amila Engagement"></a>
    <a href="images/gallery/05.jpg" title="Subhashini | Amila Engagement" data-gallery> <img src="images/thubs/05.jpg" alt="Subhashini | Amila Engagement"></a>
    <a href="images/gallery/06.jpg" title="Subhashini | Amila Engagement" data-gallery> <img src="images/thubs/06.jpg" alt="Subhashini | Amila Engagement"></a>
    <a href="images/gallery/07.jpg" title="Subhashini | Amila Engagement" data-gallery> <img src="images/thubs/07.jpg" alt="Subhashini | Amila Engagement"></a>
    <a href="images/gallery/08.jpg" title="Subhashini | Amila Engagement" data-gallery> <img src="images/thubs/08.jpg" alt="Subhashini | Amila Engagement"></a>
    <a href="images/gallery/09.jpg" title="Subhashini | Amila Engagement" data-gallery> <img src="images/thubs/09.jpg" alt="Subhashini | Amila Engagement"></a>
    <a href="images/gallery/10.jpg" title="Subhashini | Amila Engagement" data-gallery> <img src="images/thubs/10.jpg" alt="Subhashini | Amila Engagement"></a>
    <a href="images/gallery/11.jpg" title="Subhashini | Amila Engagement" data-gallery> <img src="images/thubs/11.jpg" alt="Subhashini | Amila Engagement"></a>
    <a href="images/gallery/12.jpg" title="Subhashini | Amila Engagement" data-gallery> <img src="images/thubs/12.jpg" alt="Subhashini | Amila Engagement"></a>
    <a href="images/gallery/13.jpg" title="Subhashini | Amila Engagement" data-gallery> <img src="images/thubs/13.jpg" alt="Subhashini | Amila Engagement"></a>
    <a href="images/gallery/14.jpg" title="Subhashini | Amila Engagement" data-gallery> <img src="images/thubs/14.jpg" alt="Subhashini | Amila Engagement"></a>
    </div>
	<br><br>
</div>
<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
	<div id="blueimp-gallery" class="blueimp-gallery">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        Previous
                    </button>
                    <button type="button" class="btn btn-primary next">
                        Next
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<!-- Bootstrap JS is not required, but included for the responsive demo navigation and button states-->
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
<script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<script src="js/bootstrap-image-gallery.js"></script>
<script src="js/demo.js"></script>


</body> 
</html>
