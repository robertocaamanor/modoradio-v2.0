<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 1')) : endif; ?>
				</div>
				<div class="col-md-4">
					<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 2')) : endif; ?>>
				</div>
				<div class="col-md-4">
					<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 3')) : endif; ?>
				</div>
			</div>
		</div>
	</footer>
	<!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Scripts -->
    <script>
	$("iframe[src*='www.youtube.com']").wrap('<div class="embed-responsive embed-responsive-16by9"/>');
	$("iframe[src*='www.youtube.com']").addClass('embed-responsive-item');
	$("iframe[src*='spotify.com']").wrap('<div class="embed-responsive embed-responsive-16by9"/>');
	$("iframe[src*='spotify.com']").addClass('embed-responsive-item');
	$("iframe[src*='www.facebook.com/plugins/video.php']").wrap('<div class="embed-responsive embed-responsive-16by9"/>');
	$("iframe[src*='www.facebook.com/plugins/video.php']").addClass('embed-responsive-item');
	$(function() {
	    $('.same-height').matchHeight();
	});
	</script>
	<!-- Bootstrap Javascript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js"></script>
	<!-- Superslides -->
	<script src="<?php bloginfo('template_url')?>/js/jquery.superslides.js"></script>
	<?php wp_footer(); ?>
</body>
</html>