<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>:: Album Samples ::</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
 <script>
$(function() {
$( "#accordion" ).accordion({
event: "click hoverintent"
});
});

$.event.special.hoverintent = {
setup: function() {
$( this ).bind( "mouseover", jQuery.event.special.hoverintent.handler );
},
teardown: function() {
$( this ).unbind( "mouseover", jQuery.event.special.hoverintent.handler );
},
handler: function( event ) {
var currentX, currentY, timeout,
args = arguments,
target = $( event.target ),
previousX = event.pageX,
previousY = event.pageY;
function track( event ) {
currentX = event.pageX;
currentY = event.pageY;
};
function clear() {
target
.unbind( "mousemove", track )
.unbind( "mouseout", clear );
clearTimeout( timeout );
}
function handler() {
var prop,
orig = event;
if ( ( Math.abs( previousX - currentX ) +
Math.abs( previousY - currentY ) ) < 7 ) {
clear();
event = $.Event( "hoverintent" );
for ( prop in orig ) {
if ( !( prop in event ) ) {
event[ prop ] = orig[ prop ];
}
}

delete event.originalEvent;
target.trigger( event );
} else {
previousX = currentX;
previousY = currentY;
timeout = setTimeout( handler, 100 );
}
}
timeout = setTimeout( handler, 100 );
target.bind({
mousemove: track,
mouseout: clear
});
}
};
</script>


<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
<script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<script src="js/bootstrap-image-gallery.js"></script>
<script src="js/demo.js"></script>

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
    <link href="index_files/justified-nav.css" rel="stylesheet">

  
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
	<br>
	
<div id="accordion">
<h3>Metro Albums</h3>
<div>
<div>
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

<h3>Mixing Album</h3>
<div>
<div>
	<h2>Engagement Album</h2>
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
<h3>Hybrid Album</h3>
<div>
<div>
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
<h3>Section 4</h3>
<div>

</div>
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
<br><hr>
 <!-- Footer -->
   <div class="row">
  	<div class="col-md-6">
        		<?php 
			include 'footer.php';
           	?> 
   	</div> 
    
    <div class="col-md-6" align="right">
        		<?php 
			include 'footer_contact.php';
           	?> 
   	</div>        
     </div><br><br><br><br><br>
	 
</div>


</body>
</html>