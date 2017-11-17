<!-- footer -->
<div class="footer">
	<div class="f-bg-w3l">
		<div class="container">
			<div class="col-md-4 w3layouts_footer_grid">
				<h2>Follow <span>Us</span></h2>
				<ul class="social_agileinfo">
					<li><a href="#" class="w3_facebook"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#" class="w3_twitter"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#" class="w3_instagram"><i class="fa fa-instagram"></i></a></li>
					<li><a href="#" class="w3_google"><i class="fa fa-google-plus"></i></a></li>
				</ul>
			</div>
			<div class="col-md-8 w3layouts_footer_grid">
				<form action="#" method="post">
					<input type="email" name="Email" placeholder="Enter your email..." required="">
					<button class="btn1"><i class="fa fa-envelope-o" aria-hidden="true"></i></button>
					<div class="clearfix"> </div>
				</form>
				<ul class="w3l_footer_nav">
					<li><a href="index.html" class="active">Home</a></li>
					<li><a href="services.html">Services</a></li>
					<li><a href="gallery.html">Gallery</a></li>
					<li><a href="icons.html">Web Icons</a></li>
					<li><a href="mail.html">Mail Us</a></li>
				</ul>
				<p>© 2017 Deft. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //footer -->

<!-- js -->
<script type="text/javascript" src="/llc/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="/llc/js/bootstrap-3.1.1.min.js"></script>
<script src="/llc/js/modernizr-2.6.2.min.js"></script>
<!-- stats -->
<script src="/llc/js/jquery.waypoints.min.js"></script>

<!-- requried-jsfiles-for owl -->
<script src="/llc/js/owl.carousel.js"></script>
<script>
	$(document).ready(function () {
		$("#owl-demo2").owlCarousel({
			items: 1,
			lazyLoad: false,
			autoPlay: true,
			navigation: false,
			navigationText: false,
			pagination: true,
		});
	});
</script>
<!-- //requried-jsfiles-for owl -->



<script src="/llc/js/jquery.countup.js"></script>
<script>
	$('.counter').countUp();
</script>
<!-- //stats -->
<!-- Slider script -->
<script src="/llc/js/responsiveslides.min.js"></script>
<script>
	// You can also use "$(window).load(function() {"
	$(function () {
		$("#slider").responsiveSlides({
			auto: true,
			nav: true,
			pager: false, 
			manualControls: '#slider3-pager',
		});
	});
</script>

<!-- /nav -->
<script src="/llc/js/simplePlayer.js"></script>
<script>
	$("document").ready(function () {
		$("#video").simplePlayer();
	});
</script>


<!-- //nav -->
<!-- js for portfolio lightbox -->
<script src="/llc/js/jquery.chocolat.js "></script>
<link rel="stylesheet " href="/llc/css/chocolat.css " type="text/css" media="all" />
<!--light-box-files -->
<script type="text/javascript ">
	$(function () {
		$('.portfolio-grids a').Chocolat();
	});
</script>
<!-- /js for portfolio lightbox -->


<script>
var loc = window.location.pathname;

   $('#current').find('li').each(function() {
     $(this).toggleClass('active', $(this).attr('href') == loc);
  });
</script>
