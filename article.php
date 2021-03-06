<?php
include_once('con/con.php');
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
<?php
$db=new DB();
$conn = $db->connect();
$row=null;
$sql="select * from news where id=".$_GET['bid'];

$result=$db->get_data($conn,$sql);
if ($result->num_rows > 0) {
	// output data of each row
	$row = $result->fetch_assoc();

	
}else{
	echo "<script>window.location.href = '/404.php?error=1';</script>";
}
$db->disconnect($conn);
?>
	
	<meta charset="UTF-8" />
	<title><?php echo $row['title']?></title>
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


		<div class="item teaser-page" style="background: transparent url(images/temp/1920x714.jpg) 0px -100px fixed no-repeat; ">
			<div class="container_16">
				<aside class="grid_10">
					<h1 class="page-title"><?php echo $row['title']?></h1>
				</aside>
				<div class="grid_6">
					<div id="rootline">
						<a href="index.php">Home Page</a> <i class="icon-angle-right"></i> <span class="current"><?php echo $row['title']?></span>	
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
							
							<figure>
								<img width="848" height="352" src="<?php echo 'images/news-images/'.$row['imgurl']?>" class="wp-post-image" alt="Image alt">
							</figure> 
							<div class="clear"></div>

							<div class="long-description">
								<h3><?php echo $row['title']?></h3>
								<br />
								<p>
								<?php echo $row['content']?>
								</p>
							</div>

							
							<div class="clear"></div>
							
							<div class="entry-meta-press">

								<time class="entry-date fleft" datetime="2013-05-22T18:06:36+00:00">
									<i class="icon-calendar"></i> <?php echo $row['date']?>
								</time>

								<div class="category-i fleft">
									<i class="icon-folder-close-alt"></i> <a href="#" title="View all posts in Blog" rel="category tag">Blog</a>, 
									<a href="#" title="View all posts in Photo" rel="category tag"><?php echo $row['keywords']?></a>, 
									
								</div>

								

								<div class="author-i">
									<i class="icon-user"></i> <a href="#"><?php echo $row['author']?></a>
								</div>
								<div class="clear"></div>
							</div>

						</div>

						<div class="clear"></div>
					
					</article>

					
				</div>
	
				<div id="secondary" class="grid_4 widget-area" role="complementary">

					<!-- Widget Archive -->
				

					<!-- Widget Tags -->
					


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
										echo '<li><a href="article?bid='.$title['id'].'" title="Introduction to impact measurement">'.$title['title'].'</a></li>';
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
					
					<!-- First Widget Area -->
<!-- #colophon .site-footer -->

	</div>
	<!-- /#page -->
</body>
</html>