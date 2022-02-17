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
										<h2>Spices - Grains & Flours</h2>
									</header>
                                    
								</section>
                                <div class="row gtr-50 gtr-uniform">
									
										
									


									<?php

include("admin-2/connect.php");

$set="SELECT * FROM products ";

$results=$connect->query($set);

while($final=$results->fetch_assoc()){ 



// echo "  <div> <a href='login.php'> 
// 		<img src='". $final['image'] ."' alt='' style='min-height:100px; max-height:100px; min-width:100px; max-width:100px;' /></a>
// 		<p style='text-align: center;'><a href='login.php'>". $final['name'] ."<br>Login to see Price</a></p>
// 		</div> ";


// echo "
// <div class='card' style='width: 18rem; border:2px solid blue; '>
//   <img class='card-img-top' src='". $final['image'] ."'  style='min-height:200px; max-height:200px; min-width:200px; max-width:200px;'     alt='Card image cap'>
//   <div class='card-body'>
//     <h5 class='card-title'>". $final['name'] ."</h5>  
//     <a href='#' class='btn btn-primary'>Login to price</a>
//   </div>
// </div> ";













echo  " 

<div class='col-4 col-12-small card-grid-space box'   >
<a href='login.php' class='add-to-cart btn btn-warning '><div class='card' style='width: 20rem;'  >
<img class='card-img-top' src='admin-2/". $final['image'] ."' alt='Card image cap'  style='min-height:200px; max-height:200px; min-width:200px; max-width:200px;'   >
<div class='card-block'>
  <h4 class='card-title'>". $final['name'] ."</h4>
  <h4 class='card-text ' style='color:red;'>Login to see price</h4>  
</div>
</div>

</a>
</div>
<div  height='50px' >&nbsp
</div>

";

} ?>


<style>

.box {
  transition: box-shadow .3s;
  width: 200px;
  height: 300px;
  margin: 50px;
  border-radius:10px;
  border: 1px solid #ccc;
  background: #fff;
  float: left;
  
}
.box:hover {
  box-shadow: 0 0 11px rgba(33,33,33,.2); 
}


</style>



									
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
									<!-- </div> -->
									

                                    <?php

// include("admin-2/connect.php");

// $set="SELECT * FROM products WHERE category = " . $_GET['cat_id'];

// $results=$connect->query($set);

// while($final=$results->fetch_assoc()){ 



// echo "  <div> <a href='login.php'> 
// 		<img src='". $final['image'] ."' alt='' style='min-height:100px; max-height:100px; min-width:100px; max-width:100px;' /></a>
// 		<p style='text-align: center;'><a href='login.php'>". $final['name'] ."<br>Login to see Price</a></p>
// 		</div> ";

	//   } ?>

									<!--	<div>
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
											
										</div> -->
									<!-- </div>  -->
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
								<!-- <div class="col-4 col-12-medium">
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
								</div>					 -->
						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section>

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="index.html">Homepage</a></li>
										<li>
											<span class="opener">Products</span>
											<ul>
												<li><a href="spices-gains-flours.html">Spices, Grains & Flours</a></li>
												<li><a href="ethiopian-clay-ceramics-products.html">Clays & Ceramic Products</a></li>
												<li><a href="ethiopian-handcrafts-incense-products.html">Handcrafts & Incense</a></li>
												<li><a href="ethiopian-tea-beverages-products.html">Coffe, Tea & Beverage Products</a></li>
											</ul>
										</li>
										<li><a href="login.html">Login</a></li>
										<li><a href="register.php">New Customer Registration</a></li>
										<li><a href="contact-us.html">Contact Us</a></li>
									</ul>
								</nav>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>You May Like</h2>
									</header>
									<div class="mini-posts">
										<div>
											<a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
											<p>Almi Products is a brand of ABAYS trading PLC, consisting of Ethiopian spices.</p>
										</div>
										<div>
											<a href="#" class="image"><img src="images/pic08.jpg" alt="" /></a>
											<p>Characterized by a fresh lemon-pine scent, and is therefore highly esteemed</p>
										</div>
									</div>
								</section>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Get in touch</h2>
									</header>
									<p style="text-align: justify;">We are Wholesale providers importing a variety of spices/dry foods and cultural household goods directly from Ethiopia and several other countries to United States.</p>
									<ul class="contact">
										<li class="icon solid fa-envelope"><a href="#">info@yamaspicesethiopia.com</a></li>
										<li class="icon solid fa-phone">(+251) 9300-34888</li>
										<li class="icon solid fa-home">Haile G/silassie Ave.<br />
										Haile Building, #507</li>
									</ul>
								</section>

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; All rights reserved 2021.  <a href="https://unsplash.com">Yama Spices Ethiopia</a>. Design By: <a href="https://html5up.net">ASSET</a>.</p>
								</footer>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>