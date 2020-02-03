<?php
include_once('con/con.php');
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
	
	<!--  Basic Page Needs -->
	<meta charset="UTF-8" />
	<title>Executive Committee</title>
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
<body data-twttr-rendered="true">
	<div id="page">

		<!-- Toolbar -->
		<?php
		include_once('views/navigation.php');
	?>
		<!-- #masthead .site-header -->


		<div class="item teaser-page-list">
			<div class="container_16">
				<aside class="grid_10">
					<h1 class="page-title">Members</h1>
				</aside>
				<div class="grid_6">
					<div id="rootline">
						<a href="index.php">Home Page</a> <i class="icon-angle-right"></i> <span class="current">Members</span>	
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div id="main" class="site-main container_16">
			<div class="inner">
			<?php
								$db=new DB();
								$conn = $db->connect();
								$sql="select * from members order by id";
								$result=$db->get_data($conn,$sql);
								if ($result->num_rows > 0) {
									// output data of each row
									while($row = $result->fetch_assoc()) {
										echo '<div class="candidate radius grid_4">
										<div class="candidate-margins">
											<a href="member?mid='.$row['id'].'">
												<img width="200" height="210" src="images/'.$row['img'].'"class="wp-post-image" alt="'.$row['name'].'">
												<div class="name">'.$row['name'].'</div>
												<div class="position">'.$row['title'].'</div>
											</a>	
										</div>
									</div>';
									}
								}else{
									echo "<script>window.location.href = '/404?error=1';</script>";
								}
								$db->disconnect($conn);
			?>
				

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