<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
	
	<!--  Basic Page Needs -->
	<meta charset="UTF-8" />
	<title>404</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="apple-touch-icon" href="apple-touch-icon.png" />
	
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" media="all" href="style.css" />
	<link rel="stylesheet" type="text/css" media="all" href="css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" media="all" href="css/flexslider.css" />
	<link rel="stylesheet" type="text/css" media="all" href="css/font-awesome-ie7.min.css" />
	<link rel="stylesheet" type="text/css" media="all" href="css/keyframes.css" />
	<link rel="stylesheet" type="text/css" media="all" href="css/grid.css" />
	
	<!-- Scripts -->
	<script type='text/javascript' src='js/jquery.min.js'></script>
	<script type='text/javascript' src='http://html5shim.googlecode.com/svn/trunk/html5.js'></script>
	<script src="js/base.js"></script>

	<!-- Scripts for plugins -->
	<script src="js/jquery.fitvids.js"></script>
	<script src="js/jquery.flexslider-min.js"></script>
	<script src="js/jquery.inview.js"></script>
	<script src="js/jquery.scrollParallax.min.js"></script>
</head>
<body class="home blog two-column right-sidebar" data-twttr-rendered="true">
	<div id="page">

		<!-- Toolbar -->
		<?php
		include_once('views/navigation.php');
	?>
	
		<!-- #masthead .site-header -->


		<div class="item teaser-page-404">
			<div class="container_16">
				<aside class="grid_16">
					<h1 class="page-title">404</h1>
					<h2><?php
					 if($_GET['error']=='1'){
						 echo "No Member Found.";
					 }else{
						echo "Page Not Found.";
					 }
					?></h2>
				</aside>
			</div>
		</div>

		<div id="main" class="site-main container_16">
			<div class="inner">
				<div id="primary" class="grid_16">
					<article class="single-404">
						
						<a target="_self" class="button medium black square" href="index">Go Home</a>

					</article>
					
				</div>
	
				<div class="clear"></div>
			</div>
		</div>

		<!-- Footer -->
		<?php
		include_once('views/footer.php');
		?>


			<!-- Site Info -->
		<!-- #colophon .site-footer -->

	</div>
	<!-- /#page -->
</body>
</html>