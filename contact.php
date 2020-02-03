<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
	
	<!--  Basic Page Needs -->
	<meta charset="UTF-8" />
	<title>Contact Us</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Favicon -->
	<link rel="icon" 
      type="image/png" 
      href="images/logo.png">
	
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
	<?php
		include_once('views/navigation.php');
	?>
		<!-- #masthead .site-header -->


		<div class="item teaser-page-list">
			
			<div class="container_16">
				<aside class="grid_10">
					<h1 class="page-title">Contacts</h1>
				</aside>
				<div class="grid_6">
					<div id="rootline">
						<a href="index.php">Home Page</a> <i class="icon-angle-right"></i> <span class="current">Contact</span>	
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>

		<div id="main" class="site-main container_16">
			<div class="inner">
				<div id="primary" class="grid_11 suffix_1">
					<article class="single">
						
						<div class="entry-content">
							
							<div class="long-description">
								<h3>Contact Us</h3>
							</div>
							<br />
							
								<form action="processForm.php" id="contact-form" method="post">

									<p>
										<label for="contactName"></label>
										<input class="radius"  type="text" name="contactName" id="contactName" value="" placeholder="Name*" required/>
										<span class="clear"></span>
									</p>
									<p>
										<label for="email"></label>
										<input class="radius" type="email" name="email" id="email" value="" placeholder="Email Adress*" required/>
										<span class="clear"></span>
									</p>
									<p>
										<label for="commentsText"></label>
										<textarea class="contactme-text required requiredField radius" name="message" cols="10" rows="10" placeholder="Message" required="required"></textarea>
										<span class="clear"></span>
									</p>
									<p>
										<input  class="buttons radius send" value="Send !" type="submit"></input >
										<input type="hidden" name="submitted" id="submitted" value="true" />
									</p>
								</form>
	
							
							<div class="clear"></div>
							
						</div>

						<div class="clear"></div>
					
					</article>

					
				</div>
	
				<div id="secondary" class="grid_4 widget-area" role="complementary">

					<aside id="wpltfb-2" class="widget WPlookCauses">	
						<div class="widget-title">
							<h3>Say Hello!</h3>
							<div class="clear"></div>
						</div>
						
						<div class="text-widget-body">
							
							<address class="vcard">
								<p class="adr">
									<span class="street-address"> ICTCS</span><br>
									<span class="region"> Department of Physical Science</span><br>
									<span class="postal-code"> Faculty of Applied Science</span><br>
									<span class="country-name"> Vavuniya Campus</span>
								</p>
								<b>Phone:</b><span class="tel"> +94 (24)222 0179</span><br />
								<b>E-mail:</b><span class="email"> ictcs@vau.jfn.ac.lk</span><br />
								<b>Website:</b><span class="url"> www.ictcs.lk</span><br />
							</address>

						</div>
					</aside>

					<aside id="wpltfb3-2" class="widget WPlookCauses">	
						<div class="widget-title">
							<h3>Events</h3>
							<div class="viewall fright"><a href="events.php" class="radius" title="View all chauses">view all</a></div>
							<div class="clear"></div>
						</div>
						
						<div class="widget-event-body">
						<article class="event-item">
								<figure>
									<a title="Image title" href="#">
										<img width="272" height="150" src="images/events/e1.jpg" class="wp-post-image" alt="Image alt">
										<div class="mask radius">
											<div class="mask-square"><i class="icon-link"></i></div>
										</div>
									</a>
								</figure>
								<h3 class="entry-header">
									<a title="Change a Life Through Education Lorem Ipsum dolar sit and dolar" href="05-event-single.html">Oneday Bootcamp</a>
								</h3>

								<div class="entry-meta-widget">
									<div class="date"><time datetime="2013-04-25T19:02:42+00:00"><i class="icon-calendar"></i> November 23, 2019 9.00AM</time></div>
									<div class="location"><i class="icon-map-marker"></i> <a href="#">Vavuniya Campus premises</a></div>
									
								</div>
								
							</article>

						</div>
					</aside>

				</div>
				<div class="clear"></div>
			</div>
		</div>

	
		<?php
		include_once('views/footer.php');
		?>
		<!-- #colophon .site-footer -->

	</div>
	<!-- /#page -->
</body>
</html>