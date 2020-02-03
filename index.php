<?php
include_once('con/con.php');
include_once('views/header.php');
?>

	<title>Home - ICTCS</title>
</head>
<body class="home blog two-column right-sidebar" data-twttr-rendered="true">
	<div id="page">

		
		<!-- /#toolbar -->

	<?php
		include_once('views/navigation.php');
	?>
		<!-- #masthead .site-header -->

		<!-- Teaser / Slider -->
		<div id="teaser">
			<div class="flexslider">
				<ul class="slides">
					<li data-thumb="images/i3.jpg">
						<img src="images/e1.jpg" alt="image allt">
						<div class="flex-caption ">
							<div class="flex-content container_16">
								<div class="grid_16">
									<h1>INFORMATION & COMMUNICATION TECHNOLOGY AND COMPUTING SOCIETY</h1>
									<h2>VAVUNIYA CAMPUS OF UNIVERSITY OF JAFFNA</h2>
									
								</div>	
							</div>
						</div>
					</li>
					<li data-thumb="images/i4.jpg">
						<img src="images/e2.jpg" alt="image allt">
						<div class="flex-caption">
							<div class="flex-content container_16">
								<div class="grid_16">
									<h1>HACKINTRA 2019</h1>
									<h2>Inter - University Hackathon</h2>
									<div class="flex-button"><a class="radius" href="https://www.hackintra.ictcs.lk">Read More <i class="icon-angle-right"></i></a></div>
								</div>	
							</div>
						</div>
					</li>
					<li data-thumb="images/i2.jpg">
						<img src="images/e3.jpg" alt="image alt">
						<div class="flex-caption">
							<div class="flex-content container_16">
								<div class="grid_16">
									<h1>TWISTS N TURNS</h1>
									<h2>Oneday bootcamp about new edge technolgies.</h2>
									<div class="flex-button"><a class="radius" href="https://twistsnturns.ictcs.lk">Register <i class="icon-angle-right"></i></a></div>
								</div>	
							</div>
						</div>
					</li>
					<li data-thumb="images/i1.jpg">
						<img src="images/e4.jpg" alt="image allt">
						<div class="flex-caption">
							<div class="flex-content container_16">
								<div class="grid_16">
									<h1>CODE . BUILD . DEBUG .</h1>
									<h2>Bring out your inside Coder</h2>
									
								</div>	
							</div>
						</div>
			 		</li>
			  </ul>
			</div>
		</div>


		<div id="main" class="site-main container_16">
			<div class="inner">
				
				<!-- First widget areea -->
				
				<div class="grid_12 first-home-widget-area">
					<aside id="flexlatestnews" class="WPlookLatestNews flex-container-news" >	
						<div class="widget-title mright mleft" >
							<h3>Featured News</h3>
							<div class="clear"></div>
						</div>
						
						<div class="latestnews-body flexslider-news">
							<ul class="slides">
							<?php
								$db=new DB();
								$conn = $db->connect();
								$sql="select * from news order by date desc limit 5";
								$result=$db->get_data($conn,$sql);
								if ($result->num_rows > 0) {
									// output data of each row
									while($row = $result->fetch_assoc()) {
										echo '<li>
										<div class="image fright"><img class="radius" src="images/news-images/'.$row['imgurl'].'"   alt="Image alt"></div>
										<div class="content fleft">
											<h3>'.$row['title'].'</h3>
											<p class="category">'.$row['keywords'].'</p>
											<p class="description">'.$row['short'].'</p>
											<div class="flex-button-red"><a class="radius" href="article?bid='.$row['id'].'">Read More <i class="icon-angle-right"></i></a></div>
										</div>
										<div class="clear"></div>
									</li>';
									}
								}
								$db->disconnect($conn);
							?>
								
								
							</ul>

						</div>
					</aside>
				</div>


				<!-- Second widget areea -->
				<div class="grid_4 second-home-widget-area">
					<aside id="wpltfbd-2" class="widget WPlookCauses">	
						<div class="widget-title">
							<h3>Events</h3>
							<div class="viewall fright"><a href="events" class="radius" title="View all chauses">view all</a></div>
							<div class="clear"></div>
						</div>
						
						<div class="widget-event-body">
							<article class="event-item">
								<figure>
									<a title="Image title" href="#">
										<img width="272" height="150" src="images/events/e2.jpg" class="wp-post-image" alt="Image alt">
										<div class="mask radius">
											<div class="mask-square"><i class="icon-link"></i></div>
										</div>
									</a>
								</figure>
								<h3 class="entry-header">
									<a title="Change a Life Through Education Lorem Ipsum dolar sit and dolar" href="05-event-single.html">Inter - University Hackathon</a>
								</h3>

								<div class="entry-meta-widget">
									<div class="date"><time datetime="2013-04-25T19:02:42+00:00"><i class="icon-calendar"></i> November 23, 2019</time></div>
									<div class="location"><i class="icon-map-marker"></i> <a href="#">Vavuniya Campus premises</a></div>
									
								</div>
								
							</article>
						</div>
					</aside>
				</div>


				

				<!-- Forth widget areea -->
				<div class="grid_16 forth-home-widget-area">
					<aside id="wpltfbf-2" class="widget WPlookAnounce radius" >	
						<div class="announce-body mright mleft">
							<div class="margin"><h1>“First we thought the PC was a calculator. Then we found out how to turn numbers into letters with ASCII — and we thought it was a typewriter. Then we discovered graphics, and we thought it was a television. With the World Wide Web, we've realized it's a brochure.”</h1>
							<h3>-Douglas Adams-</h3></div>
						</div>
					</aside>
				</div>

				<!-- Fifth Widget area -->
				<div class="grid_16 fifth-home-widget-area">
					<aside id="wpltfbe-2" class="widget WPlookStaff" >	
						<div class="widget-title">
							<h3>Meet our Executive Committee</h3>
							<div class="viewall fright"><a href="members" class="radius">view all</a></div>
							<div class="clear"></div>
						</div>
						
						<div class="staff-body">
					
							<!-- First canditate -->
							<div class="candidate grid_4">
								<div class="candidate-margins">
									<a href="member?mid=1">
										<img width="200" height="210" src="images/p1.jpg" class="wp-post-image" alt="Image alt">
										<div class="name">Erandra Jayasundara</div>
										<div class="position">President</div>
									</a>	
								</div>
							</div>

							<!-- Second canditate -->
							<div class="candidate grid_4">
								<div class="candidate-margins">
									<a href="09-staff-single.html">
										<img width="200" height="210" src="images/p2.jpg" class="wp-post-image" alt="Image alt">
										<div class="name">Tharindu Rangika</div>
										<div class="position">Vice President</div>
									</a>	
								</div>
							</div>

							<!-- Third canditate -->
							<div class="candidate grid_4">
								<div class="candidate-margins">
									<a href="member?mid=3">
										<img width="200" height="210" src="images/p3.jpg" class="wp-post-image" alt="Image alt">
										<div class="name">Subodhi Wasalthilake</div>
										<div class="position">Secretary</div>
									</a>	
								</div>
							</div>

							<!-- Forth canditate -->
							<div class="candidate grid_4">
								<div class="candidate-margins">
									<a href="09-staff-single.html">
										<img width="200" height="210" src="images/p4.jpg" class="wp-post-image" alt="Image alt">
										<div class="name">Dinith Sinthunash </div>
										<div class="position">Treasurer</div>
									</a>	
								</div>
							</div>
						<div class="clear"></div>
						</div>
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