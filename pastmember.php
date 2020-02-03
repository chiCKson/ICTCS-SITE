<?php
include_once('con/con.php');
include_once('views/header.php');
?>

	<title>Past Members</title>
	
</head>
<body class="home blog two-column right-sidebar" data-twttr-rendered="true">
	<div id="page">

		<!-- Toolbar -->
		<?php
		include_once('views/navigation.php');
	?>
		<!-- #masthead .site-header -->

		<?php
$db=new DB();
$conn = $db->connect();
$row=null;
$sql="select * from pastmembers where id=".$_GET['mid'];

$result=$db->get_data($conn,$sql);
if ($result->num_rows > 0) {
	// output data of each row
	$row = $result->fetch_assoc();

	
}else{
	echo "<script>window.location.href = '/404.php?error=1';</script>";
}
$db->disconnect($conn);
?>
		<div class="item teaser-page-list" style="background: transparent url(images/temp/1920x714.jpg) 0px -100px fixed no-repeat; ">
			<div class="container_16">
				<aside class="grid_10">
					<h1 class="page-title"><?php echo $row['name']?></h1>
				</aside>
				<div class="grid_6">
					<div id="rootline">
						<a href="index.php">Home Page</a> <i class="icon-angle-right"></i> <span class="current"><?php echo $row['name']?></span>	
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>

		<div id="main" class="site-main container_16">
			<div class="inner">
				<div id="primary" class="grid_11 suffix_1">
					<article class="single">
						<!-- First canditate -->
						<div class="candidate radius grid_6">
							<div class="candidate-margins">
							<?php echo '<img width="200" height="210" src="images/'.$row['img'].'" class="wp-post-image" alt="'.$row['name'].'">'?>
							
									<div class="name"><?php echo $row['name']?></div>
									<div class="position"><?php echo $row['title']?></div>
									<div class="social-icons">
									<?php echo '<a class="fb radius" href="'.$row['fb'].'"><i class="icon-facebook-sign"></i></a>'?>
									<?php echo '<a class="tw radius" href="'.$row['twitter'].'"><i class="icon-twitter-sign"></i></a>'?>
									<?php echo '<a class="in radius" href="'.$row['linkedin'].'"><i class="icon-linkedin-sign"></i></a>'?>
									<?php echo '<a class="gh radius" href="'.$row['github'].'"><i class="icon-github-sign"></i></a>'?>
									</div>
								
							</div>
						</div>

						<div class="candidate-about fright">
							<p>
							<?php echo $row['descript']?>
							</p>
						</div>

						<div class="clear"></div>
					
					</article>

					
				</div>
	
				<div id="secondary" class="grid_4 widget-area" role="complementary">

					<aside id="wpltfb-2" class="widget WPlookCauses">	
					
							
				

						
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