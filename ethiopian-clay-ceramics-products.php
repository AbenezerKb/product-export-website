<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Yama Spices Ethiopia</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="index.html" class="logo"><strong>YAMA GENERAL TRADING</strong> . . .</a>
									<ul class="icons">
										<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
										<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>
									</ul>
								</header>

							<!-- Section -->
								<section>
									<header>
										<h2>Ethiopian Clay & Ceramic Products</h2>
									</header>
                                    
								</section>
                                <div class="row gtr-50 gtr-uniform">
									<div class="col-4 col-12-small">
										
									


									<?php

include("admin-2/connect.php");

$set="SELECT * FROM products WHERE category = " . $_GET['cat_id'];

$results=$connect->query($set);

while($final=$results->fetch_assoc()){ 



echo "  <div> <a href='login.php'> 
		<img src='". $final['image'] ."' alt='' /></a>
		<p style='text-align: center;'><a href='login.php'>". $final['name'] ."<br>Login to see Price</a></p>
		</div> ";

	  } ?>


									
										<!-- <div>
											<a href="login.html"><img src="images/pic12.jpg" alt="" /></a>
											<p style="text-align: center;"><a href="login.html">ALMI PRODUCTS (1 KG)<br>Login to see Price</a></p>
											
										</div>
										<div>
											<a href="login.html"><img src="images/pic07.jpg" alt="" /></a>
											<p style="text-align: center;"><a href="login.html">ALMI PRODUCTS (1 KG)<br>Login to see Price</a></p>
											
										</div>
										<div>
											<a href="login.html"><img src="images/pic13.jpg" alt="" /></a>
											<p style="text-align: center;"><a href="login.html">ALMI PRODUCTS (1 KG)<br>Login to see Price</a></p>
											
										</div>
										<div>
											<a href="login.html"><img src="images/pic12.jpg" alt="" /></a>
											<p style="text-align: center;"><a href="login.html">ALMI PRODUCTS (1 KG)<br>Login to see Price</a></p>
											
										</div>
										<div>
											<a href="login.html"><img src="images/pic07.jpg" alt="" /></a>
											<p style="text-align: center;"><a href="login.html">ALMI PRODUCTS (1 KG)<br>Login to see Price</a></p>
											
										</div> -->
									</div>
									<!-- <div class="col-4 col-12-small">
										<div>
											<a href="login.html"><img src="images/pic13.jpg" alt="" /></a>
											<p style="text-align: center;"><a href="login.html">ALMI PRODUCTS (1 KG)<br>Login to see Price</a></p>
											
										</div>
										<div>
											<a href="login.html"><img src="images/pic12.jpg" alt="" /></a>
											<p style="text-align: center;"><a href="login.html">ALMI PRODUCTS (1 KG)<br>Login to see Price</a></p>
											
										</div>
										<div>
											<a href="login.html"><img src="images/pic07.jpg" alt="" /></a>
											<p style="text-align: center;"><a href="login.html">ALMI PRODUCTS (1 KG)<br>Login to see Price</a></p>
											
										</div>
										<div>
											<a href="login.html"><img src="images/pic13.jpg" alt="" /></a>
											<p style="text-align: center;"><a href="login.html">ALMI PRODUCTS (1 KG)<br>Login to see Price</a></p>
											
										</div>
										<div>
											<a href="login.html"><img src="images/pic12.jpg" alt="" /></a>
											<p style="text-align: center;"><a href="login.html">ALMI PRODUCTS (1 KG)<br>Login to see Price</a></p>
											
										</div>
										<div>
											<a href="login.html"><img src="images/pic07.jpg" alt="" /></a>
											<p style="text-align: center;"><a href="login.html">ALMI PRODUCTS (1 KG)<br>Login to see Price</a></p>
											
										</div>
									</div> -->
									<!-- <div class="col-4 col-12-small">
										<div>
											<a href="login.html"><img src="images/pic12.jpg" alt="" /></a>
											<p style="text-align: center;"><a href="login.html">ALMI PRODUCTS (1 KG)<br>Login to see Price</a></p>
											
										</div>
										<div>
											<a href="login.html"><img src="images/pic07.jpg" alt="" /></a>
											<p style="text-align: center;"><a href="login.html">ALMI PRODUCTS (1 KG)<br>Login to see Price</a></p>
											
										</div>
										<div>
											<a href="login.html"><img src="images/pic13.jpg" alt="" /></a>
											<p style="text-align: center;"><a href="login.html">ALMI PRODUCTS (1 KG)<br>Login to see Price</a></p>
											
										</div>
										<div>
											<a href="login.html"><img src="images/pic12.jpg" alt="" /></a>
											<p style="text-align: center;"><a href="login.html">ALMI PRODUCTS (1 KG)<br>Login to see Price</a></p>
											
										</div>
										<div>
											<a href="login.html"><img src="images/pic13.jpg" alt="" /></a>
											<p style="text-align: center;"><a href="login.html">ALMI PRODUCTS (1 KG)<br>Login to see Price</a></p>
											
										</div>
										<div>
											<a href="login.html"><img src="images/pic07.jpg" alt="" /></a>
											<p style="text-align: center;"><a href="login.html">ALMI PRODUCTS (1 KG)<br>Login to see Price</a></p>
											
										</div>
									</div> -->
                                </div>
								<div class="col-4 col-12-medium">
								<h4>Other Products</h4>
													<ul class="pagination">
														<li><span class="button disabled">Prev</span></li>
														<li><a href="#" class="page active">1</a></li>
														<li><a href="#" class="page">2</a></li>
														<li><a href="#" class="page">3</a></li>
														<li><span>&hellip;</span></li>
														<li><a href="#" class="page">8</a></li>
														<li><a href="#" class="page">9</a></li>
														<li><a href="#" class="page">10</a></li>
														<li><a href="#" class="button">Next</a></li>
													</ul>
								</div>					
						</div>
					</div>

				<!-- Sidebar -->
					<?php include("side-bar")  ?>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>