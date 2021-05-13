<!doctype html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="#">
    <meta name="description" content="#">
    <title>BHN | Products</title>
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="#">
    <link rel="shortcut icon" href="assets/images/favicon.ico">
<script type="text/javascript" src="extras/jquery.min.1.7.js"></script>
<script type="text/javascript" src="extras/jquery-ui-1.8.20.custom.min.js"></script>
<script type="text/javascript" src="extras/modernizr.2.5.3.min.js"></script>
<script type="text/javascript" src="lib/hash.js"></script>
<!-- <link href="assets/css/style.css" rel="stylesheet"> -->
<!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fontawesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Flaticons -->
    <link href="assets/css/font/flaticon.css" rel="stylesheet">
    <!-- Slick Slider -->
    <link href="assets/css/slick.css" rel="stylesheet">
    <!-- Range Slider -->
    <link href="assets/css/ion.rangeSlider.min.css" rel="stylesheet">
    <!-- Datepicker -->
    <link href="assets/css/datepicker.css" rel="stylesheet">
    <!-- magnific popup -->
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <!-- Nice Select -->
    <link href="assets/css/nice-select.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <!-- <link href="assets/css/style_product.css" rel="stylesheet"> -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Custom Responsive -->
    <link href="assets/css/responsive.css" rel="stylesheet">
    <style>
    	body{
    		overflow: auto;
    	}
@media only screen and (max-width : 991px){
    .main-navigation-style-1 .navigation .hamburger-menu{
        display: block;
    }
    .main-navigation-style-1 .main-menu, .main-navigation-style-1 .main-menu>nav>ul {
        display: inline-block;
        align-items: center;
        justify-content: flex-end;

    }
    .genmed-intro{
        margin-top: 0%;
    }
    h1.text-custom-white.fw-700{
        font-size: 25px;
    }
    .carousel-item img{
        height: 350px;
    }
    .carousel-inner{
        margin-top: 250px;
    }
    .carousel-caption{
        bottom: -20px;
    }
    .product-images{
        margin: 15px;
    }
    .doctors-team-style-2 .team-block .inner-box{
        width: auto;
        height: auto;
    }
}
#toolbar {
  display: none !important; /* hide PDF viewer toolbar */
}
#outerContainer #mainContainer #viewerContainer {
  top: 0 !important; /* move doc up into empty bar space */
}

    </style>
</head>
<body>
	<div class="main-body">
		<?php include 'header_product.php'; ?>
	

	<div id="canvas" style="margin-top: 6em">
		<div class="zoom-icon zoom-icon-in" style="margin-top: 6em"></div>
		<div class="magazine-viewport">
			<div class="container">
				<div class="magazine">
				<!-- Next button -->
					<div ignore="1" class="next-button"></div>
				<!-- Previous button -->
					<div ignore="1" class="previous-button"></div>
				</div>
			</div>
			<div class="bottom">
				<div id="slider-bar" class="turnjs-slider">
					<div id="slider"></div>
				</div>
			</div>
		</div>
	</div>
	<?php include 'footer_product.php'; ?>
</div>

<script type="text/javascript">

function loadApp() {
    
 	$('#canvas').fadeIn(1000);
 	var flipbook = $('.magazine');
 	// Check if the CSS was already loaded	
	if (flipbook.width()==0 || flipbook.height()==0) {
		setTimeout(loadApp, 20);
		return;
	}	
	// Create the flipbook
	flipbook.turn({					
			width: 922, // Magazine width
			height: 600, // Magazine height
            duration: 1000, // Duration in millisecond
            gradients: true,// Enables gradients
            autoCenter: true, // Auto center this flipbook
            elevation: 50, // Elevation from the edge of the flipbook when turning a page
            pages: 101, // The number of pages
            
			// Events
			when: {
				turning: function(event, page, view) {
					
					var book = $(this),
					currentPage = book.turn('page'),
					pages = book.turn('pages');			
					// Update the current URI
					Hash.go('page/' + page).update();
					// Show and hide navigation buttons
					disableControls(page);
				},
				turned: function(event, page, view) {
					disableControls(page);
					$(this).turn('center');
					$('#slider').slider('value', getViewNumber($(this), page));
					if (page==1) { 
						$(this).turn('peel', 'br');
					}
				},

				missing: function (event, pages) {
					// Add pages that aren't in the magazine
                    var types= "anatomy_models_catg/anatomy_models_catg-";
					for (var i = 0; i < pages.length; i++)
						addPage(pages[i], $(this), types);
				}
			}

	});

	// Zoom.js
	$('.magazine-viewport').zoom({
		flipbook: $('.magazine'),
		max: function() { 			
			return largeMagazineWidth()/$('.magazine').width();
		}, 

		when: {
			swipeLeft: function() {

				$(this).zoom('flipbook').turn('next');

			},

			swipeRight: function() {
				
				$(this).zoom('flipbook').turn('previous');

			},

			resize: function(event, scale, page, pageElement, types) {

				if (scale==1)
					loadSmallPage(page, pageElement, "anatomy_models_catg/anatomy_models_catg-");
				else
					loadLargePage(page, pageElement, "anatomy_models_catg/anatomy_models_catg-");

			},

			zoomIn: function () {

				$('#slider-bar').hide();
				$('.made').hide();
				$('.magazine').removeClass('animated').addClass('zoom-in');
				$('.zoom-icon').removeClass('zoom-icon-in').addClass('zoom-icon-out');
				
				if (!window.escTip && !$.isTouch) {
					escTip = true; 

					$('<div />', {'class': 'exit-message'}).
						html('<div>Press ESC to exit</div>').
							appendTo($('body')).
							delay(2000).
							animate({opacity:0}, 500, function() {
								$(this).remove();
							});
				}
			},

			zoomOut: function () {

				$('#slider-bar').fadeIn();
				$('.exit-message').hide();
				$('.made').fadeIn();
				$('.zoom-icon').removeClass('zoom-icon-out').addClass('zoom-icon-in');

				setTimeout(function(){
					$('.magazine').addClass('animated').removeClass('zoom-in');
					resizeViewport();
				}, 0);

			}
		}
	});

	// Zoom event

	if ($.isTouch)
		$('.magazine-viewport').bind('zoom.doubleTap', zoomTo);
	else
		$('.magazine-viewport').bind('zoom.tap', zoomTo);


	// Using arrow keys to turn the page

	$(document).keydown(function(e){

		var previous = 37, next = 39, esc = 27;

		switch (e.keyCode) {
			case previous:

				// left arrow
				$('.magazine').turn('previous');
				e.preventDefault();

			break;
			case next:

				//right arrow
				$('.magazine').turn('next');
				e.preventDefault();

			break;
			case esc:
				
				$('.magazine-viewport').zoom('zoomOut');	
				e.preventDefault();

			break;
		}
	});

	// URIs - Format #/page/1 

	Hash.on('^page\/([0-9]*)$', {
		yep: function(path, parts) {
			var page = parts[1];

			if (page!==undefined) {
				if ($('.magazine').turn('is'))
					$('.magazine').turn('page', page);
			}

		},
		nop: function(path) {

			if ($('.magazine').turn('is'))
				$('.magazine').turn('page', 1);
		}
	});


	$(window).resize(function() {
		resizeViewport();
	}).bind('orientationchange', function() {
		resizeViewport();
	});

	// Regions

	if ($.isTouch) {
		$('.magazine').bind('touchstart', regionClick);
	} else {
		$('.magazine').click(regionClick);
	}

	// Events for the next button

	$('.next-button').bind($.mouseEvents.over, function() {
		
		$(this).addClass('next-button-hover');

	}).bind($.mouseEvents.out, function() {
		
		$(this).removeClass('next-button-hover');

	}).bind($.mouseEvents.down, function() {
		
		$(this).addClass('next-button-down');

	}).bind($.mouseEvents.up, function() {
		
		$(this).removeClass('next-button-down');

	}).click(function() {
		
		$('.magazine').turn('next');

	});

	// Events for the next button
	
	$('.previous-button').bind($.mouseEvents.over, function() {
		
		$(this).addClass('previous-button-hover');

	}).bind($.mouseEvents.out, function() {
		
		$(this).removeClass('previous-button-hover');

	}).bind($.mouseEvents.down, function() {
		
		$(this).addClass('previous-button-down');

	}).bind($.mouseEvents.up, function() {
		
		$(this).removeClass('previous-button-down');

	}).click(function() {
		
		$('.magazine').turn('previous');

	});


	// Slider

	$( "#slider" ).slider({
		min: 1,
		max: numberOfViews(flipbook),

		start: function(event, ui) {

			if (!window._thumbPreview) {
				_thumbPreview = $('<div />', {'class': 'thumbnail'}).html('<div></div>');
				setPreview(ui.value);
				_thumbPreview.appendTo($(ui.handle));
			} else
				setPreview(ui.value);

			moveBar(false);

		},

		slide: function(event, ui) {

			setPreview(ui.value);

		},

		stop: function() {

			if (window._thumbPreview)
				_thumbPreview.removeClass('show');
			
			$('.magazine').turn('page', Math.max(1, $(this).slider('value')*2 - 2));

		}
	});

	resizeViewport();

	$('.magazine').addClass('animated');

}

// Zoom icon

 $('.zoom-icon').bind('mouseover', function() { 
 	
 	if ($(this).hasClass('zoom-icon-in'))
 		$(this).addClass('zoom-icon-in-hover');

 	if ($(this).hasClass('zoom-icon-out'))
 		$(this).addClass('zoom-icon-out-hover');
 
 }).bind('mouseout', function() { 
 	
 	 if ($(this).hasClass('zoom-icon-in'))
 		$(this).removeClass('zoom-icon-in-hover');
 	
 	if ($(this).hasClass('zoom-icon-out'))
 		$(this).removeClass('zoom-icon-out-hover');

 }).bind('click', function() {

 	if ($(this).hasClass('zoom-icon-in'))
 		$('.magazine-viewport').zoom('zoomIn');
 	else if ($(this).hasClass('zoom-icon-out'))	
		$('.magazine-viewport').zoom('zoomOut');

 });

 $('#canvas').hide();


// Load the HTML4 version if there's not CSS transform

yepnope({
	test : Modernizr.csstransforms,
	yep: ['lib/turn.min.js'],
	nope: ['lib/turn.html4.min.js', 'css/jquery.ui.html4.css'],
	both: ['lib/zoom.min.js', 'css/jquery.ui.css', 'js/magazine.js', 'css/magazine.css'],
	complete: loadApp
});

</script>
    <!-- Popper -->
    <script src="assets/js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Range Slider -->
    <script src="assets/js/ion.rangeSlider.min.js"></script>
    <!-- Slick Slider -->
    <script src="assets/js/slick.min.js"></script>
    <!-- Nice Select -->
    <script src="assets/js/jquery.nice-select.js"></script>
    <!-- Nice Select -->
    <script src="assets/js/particles.js"></script>
    <!-- Magnific Popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom.js"></script>
    <!-- /Place all Scripts Here -->
</body>
</html>