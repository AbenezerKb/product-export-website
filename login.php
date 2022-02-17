<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Yama Spices Ethiopia - Login</title>
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

							<!-- Banner -->
								<section id="banner">
									<div class="content">
										<header>
											<h1>Login</h1>
											<p>Wholesaler of Ethiopian Products</p>
										</header>
										<form method="post" action="login_validator.php" enctype="multipart/form-data">
														<div class="row gtr-uniform">
															<div class="col-12 col-12-xsmall">
																<input type="email" name="email" id="email" value="" placeholder="Email *" />
															</div>
															<div class="col-12 col-12-xsmall">
																<input type="password" name="password" id="password" value="" placeholder="Password *" />
															</div>
															<div class="col-12">
															    <button type ="submit" name="save" class="button primary fit">LOG IN</button>
															</div>
                                                            <div class="col-6 col-6-small">
																<input type="checkbox" id="demo-copy" name="demo-copy">
																<label for="demo-copy">Remember Me</label>
															</div>
                                                            <div class="col-6 col-6-small">
																<p><a href="#">Forget Password?</a></p>
															</div>
														</div>
													</form>

													
													
									</div>
									<span class="image object">
										<img src="images/pic10.jpg" alt="" />
									</span>
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
										<li><a href="index.phpZ90-o">Homepage</a></li>
										<li>
											<span class="opener">Products</span>
											<ul>
											<?php 
											include("admin-2/connect.php");

											$set="SELECT * FROM categories";

  
											$results=$connect->query($set);

											while($final=$results->fetch_assoc()){ 


   
											echo 	"<li><a href='ethiopian-clay-ceramics-products.php'>".$final['category']."</a></li>";
											}

												?>

												<!-- <li><a href="ethiopian-clay-ceramics-products.html">Clays & Ceramic Products</a></li>
												<li><a href="ethiopian-handcrafts-incense-products.html">Handcrafts & Incense</a></li>
												<li><a href="ethiopian-tea-beverages-products.html">Coffe, Tea & Beverage Products</a></li> -->
											</ul>
										</li>
										<li><a href="login.php">Login</a></li>
										<li><a href="register.php">New Customer Registration</a></li>
										<li><a href="contact-us.php">Contact Us</a></li>
									</ul>
								</nav>

							<!-- Section -->
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



			<script>

// $('#submit_button').click( // Bind an event handler to the submit button
//         function(event){
// // 	e.stopImmediatePropagation()
//    event.preventDefault();  
         
                   
// 			email = $('#email').val();            			
// 			password = $('#password').val();           			
            					
// 			$.ajax({
//                 url:'login_validator.php', //Give the ajax call a target url
//                 method: 'POST',
//                 data : {email: email, password: password},
//                 // {'name': name, 'price': price, 'category': category, 'image': image },
//                 // dataType: 'json',     
// 				error: function(data){
// 					// alert(data)
// 					location.href = "login.php"
// 				},           
//                 success: function(response){ //Supply an anonymous function to execute on success. The parameter will be the response text.
// 				alert(response)
				
// 				if(response)
// 						location.href = "index.php";
// 				else
// 				location.href = "login.php"

                   
                   
//                     // $('#your_result_div').html(data); //On success of the ajax call, put the response text into an html element on your page
//                 }
//             });

// 		}		
        
//     );
		



</script>




	</body>
</html>