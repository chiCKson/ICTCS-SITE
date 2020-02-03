<?php
include_once('con/con.php');
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
	
	<!--  Basic Page Needs -->
	<meta charset="UTF-8" />
	<title>Blog</title>
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

		<!-- Toolbar -->
		<?php
		include_once('views/navigation.php');
	?>
		<!-- #masthead .site-header -->


		<div class="item teaser-page-list">
			<div class="container_16">
				<aside class="grid_10">
					<h1 class="page-title">Blog</h1>
				</aside>
				<div class="grid_6">
					<div id="rootline">
						<a href="index">Home Page</a> <i class="icon-angle-right"></i> <span class="current">Blog</span>	
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>

		<div id="main" class="site-main container_16">
			<div class="inner">
				<div id="primary" class="grid_11 suffix_1">
					
					<!-- First article -->
					<?php
					$db=new DB();
					$conn = $db->connect();
					$row=null;
					$sql1="select * from news";
					
					$result=$db->get_data($conn,$sql1);
					if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()){
								echo '<article class="list">
								<div class="short-content">
									<figure>
										<a title="Image title" href="07-press-single.html">
											<img style="width:272px;height:150px" src="images/news-images/'.$row['imgurl'].'" class="wp-post-image" alt="'.$row['title'].'">
											<div class="mask radius">
												<div class="mask-square"><i class="icon-link"></i></div>
											</div>
										</a>
									</figure> 
									
									<h1 class="entry-header">
										<a title="Introduction to impact measurement" href="article.php?bid='.$row['id'].'">'.$row['title'].'</a>
									</h1>
		
									<div class="short-description">
										<p>'.$row['short'].'</p>
									</div>
		
									<div class="entry-meta">
										<time datetime="2013-04-25T19:02:42+00:00"><a class="buttons time fleft" href="#"><i class="icon-calendar"></i> '.$row['date'].'</a></time> <a class="buttons author fleft" href="#"><i class="icon-user"></i> '.$row['author'].'</a> <a class="buttons fright" href="article?bid='.$row['id'].'" title="read more">read more</a>
									</div>
									<div class="clear"></div>
		
								</div>
								<div class="clear"></div>
							</article>
							
							';
						}
					
						
					}
					$db->disconnect($conn);
					?>
					
					
					<!-- Pagination -->
			
					
				</div>
	
				<div id="secondary" class="grid_4 widget-area" role="complementary">

					<!-- Widget Archive -->
					


				





					<!-- Widget Latest posts -->
					<aside id="pages" class="widget">
						<div class="widget-title">	
							<h3>Latest Posts</h3>
							<div class="clear"></div>
						</div>
						<ul>
						<?php 
							$db=new DB();
							$conn = $db->connect();
							$row=null;
							$sql1="select title,id from news limit 5";
							
							$result=$db->get_data($conn,$sql1);
							if ($result->num_rows > 0) {
								// output data of each row
								while($title = $result->fetch_assoc()){
										echo '<li><a href="article.php?bid='.$title['id'].'" title="Introduction to impact measurement">'.$title['title'].'</a></li>';
								}
							
								
							}
							$db->disconnect($conn);
							?>
						</ul>
					</aside>

				</div>
				<div class="clear"></div>
			</div>
		</div>

		<!-- Footer -->
		<?php
		include_once('views/footer.php');
		?>
				<!-- #colophon .site-footer -->

	</div>
	<!-- /#page -->
</body>
</html>