<?php

session_start();

?>

<!DOCTYPE HTML><html>
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
									<a href="index.php" class="logo"><strong>YAMA GENERAL TRADING</strong> . . .</a>
									<ul class="icons">
										<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
										<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>
									</ul>
								</header>

							<!-- Banner -->
								<section>
									<div class="content">
										<header>
											<h1>Ethiopian Spices</h1>
											<p>About Yama Ethiopia Spices</p>
										</header>
										<span class="image main"><img src="images/pic11.jpg" alt="" /></span>
										<p style="text-align: justify;">Yama Import & export is a a member of <a href="https:/www.yamatoursethiopia.com">Yama Ethiopia Tours</a> investment group which is one of the leading in tour operation business in ethiopia for the past 15 years.</a>
											We have have now launched a new business categories which is exporting  a variety of spices/dry foods and cultural household goods directly to US and several other countries in Europe and Asia. We are based in ethiopia, Addis Ababa and can export spices, coffe and oil seeds to all over the world.
                                        We are highly committed in providing quality products to our customers with a timely delivery at reasonable prices and we strive to gain their trust towards becoming a reliable partner in our supply chains system!</p>
										 <ul class="actions">
											<li><a href="contact-us.html" class="button big">Contact Us</a></li>
										</ul>
									</div>
								</section>

								<section>
									<header class="major">
										<h2>Products</h2>
									</header>
									<div class="posts">
										<article>
											<a href="product_category.php" class="image"><img src="images/pic01.jpg" alt="" /></a>
											<h3>Spices - Grains & Flours</h3>
											<p style="text-align: justify;">Ethiopia mainly produces ginger, turmeric, cumin, rosemary, cardamom, capsicum, fenugreek, coriander, korarima, Timiz, black pepper, hot pepper, rue, celery and thyme.</p>
											<ul class="actions">
												<li><a href="product_category.php" class="button">Get More</a></li>
											</ul>
										</article>
										<article>
											<a href="ethiopian-clay-ceramics-products.html" class="image"><img src="images/pic02.jpg" alt="" /></a>
											<h3>Clays & Ceramic Products</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											<ul class="actions">
												<li><a href="ethiopian-clay-ceramics-products.html" class="button"> Get More</a></li>
											</ul>
										</article>
										<article>
											<a href="ethiopian-handcrafts-incense-products.html" class="image"><img src="images/pic03.jpg" alt="" /></a>
											<h3>Handcrafts & Incense</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											<ul class="actions">
												<li><a href="ethiopian-handcrafts-incense-products.html" class="button">Get More</a></li>
											</ul>
										</article>
										<article>
											<a href="ethiopian-tea-beverages-products.html" class="image"><img src="images/pic04.jpg" alt="" /></a>
											<h3>Coffee - Tea & Beverages</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											<ul class="actions">
												<li><a href="ethiopian-tea-beverages-products.html" class="button">Get More</a></li>
											</ul>
										</article>
									</div>
								</section>

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
										<li><a href="index.php">Homepage</a></li>
										
                                        <li>
											<span class="opener">Products</span>
											<ul>
												

                                        <?php

                                            include("admin-2/connect.php");
  
                                            $set="SELECT * FROM categories";

                                            $results=$connect->query($set);

                                            while($final=$results->fetch_assoc()){ 
                                        
                                    	

                                           echo " <li><a href='product_category_logged.php?cat_id=".$final['ID']."'> ".  $final['category'] . "   </a></li>  " ;            



                                                  } ?>
                                                  <!--                   
												<li><a href="ethiopian-clay-ceramics-products.html">Clays & Ceramic Products</a></li>
												<li><a href="ethiopian-handcrafts-incense-products.html">Handcrafts & Incense</a></li>
												<li><a href="ethiopian-tea-beverages-products.html">Coffe, Tea & Beverage Products</a></li> -->

											</ul>
										</li>
                                        <?php                                         
                                        //include("session.php");
										//echo (session_status());
									
                                        if(($_SESSION['email'] AND $_SESSION['password']))
                                            {
                                                $email = $_SESSION['email'];
                                                $set="SELECT COUNT(user_id) FROM cart WHERE user_id = '$email'";
                                                $results=$connect->query($set);
                                                $final = $results->fetch_array()[0];
                                //         echo "<li><a href='cart.php'>Cart 
                                            
                                //         <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-cart' viewBox='0 0 16 16'>
                                //   <path d='M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/>
                                //     </svg>
                                //     <sup style='font-size: 12;' id = 'cart-num'>
                                //     ". $final ."
                                //       </sup>
                                //         </a>
								// 		</li>
                                        echo "<li><a href='orders.php'>Orders</a></li>";
										echo "<li><a href='logout.php'>Logout</a></li>";
                                        
                                            }
                                            else {
                                                echo "<li><a href='login.php'>Login</a></li>
                                                <li><a href='register.php'>New Customer Registration</a></li>";
                                                
                                            }
                                        ?>                                                                                
                                        <li><a href='contact-us.php'>Contact Us</a></li>
                                     
									</ul>
								</nav>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>You May Like</h2>
									</header>
									<div class="mini-posts">
										<article>
											<a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
											<p>Almi Products is a brand of ABAYS trading PLC, consisting of Ethiopian spices.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic08.jpg" alt="" /></a>
											<p>Characterized by a fresh lemon-pine scent, and is therefore highly esteemed</p>
										</article>
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