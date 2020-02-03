<?php
include_once('con/con.php');
include_once('views/header.php');
?>

	<title>Hall of Fame</title>

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
					<h1 class="page-title">Hall of Fame</h1>
				</aside>
				<div class="grid_6">
					<div id="rootline">
						<a href="index.php">Home Page</a> <i class="icon-angle-right"></i> <span class="current">Hall of Fame</span>	
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
								$sql="select * from pastmembers order by id";
								$result=$db->get_data($conn,$sql);
								if ($result->num_rows > 0) {
									// output data of each row
									while($row = $result->fetch_assoc()) {
										echo '<div class="candidate radius grid_4">
										<div class="candidate-margins">
											<a href="pastmember?mid='.$row['id'].'">
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