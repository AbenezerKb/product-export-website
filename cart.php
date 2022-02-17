<?php

include("session.php");

?>


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
								<header id="header" >
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
										<h2>Cart</h2>
									</header>
                                    
								</section>
                                <div class="row gtr-50 gtr-uniform">
									
										
									


									<?php

include("admin-2/connect.php");


 ?>

<div class="panel-body timeline-container">
						
						<div class="col-lg-10 d-flex flex-column">
						  
						 
						  <div class="row flex-grow">
							<div class="col-12 grid-margin stretch-card">
							  <div class="card card-rounded">
								<div class="card-body">                                
									<div>
						  
									<div class="table-responsive  mt-3">
									<table class="table select-table product-table" style="font-size: 18px;">
									  <thead>
										<tr>                                        
										  <th>Item</th>
										  <th>Price</th>
										  <th>Quantity</th>                                      
										  <th>Total</th>
										  <th></th>
										</tr>
									  </thead>
									  <tbody>
									   
									  <?php
  

  
									$set="SELECT * FROM cart WHERE user_id = '" . $_SESSION['email'] ."'";

  
									$results=$connect->query($set);
  
									while($final=$results->fetch_assoc()){ ?>	
									   
									   <?php 
																			 
										?>
										<tr>
										  
										  <td>
											<div class="d-flex ">                                          
											  <div>
                                              
                                              <?php echo "<h6   id='name" .$final['ID'] . "'    >" . $final['item_name']. "</h6>"?>                                                                                                                           
											  </div>
											</div>
										  </td>   
										  <td>
											<?php echo "<h6  id='price".$final['ID'] ."'> ". $final['price']. "</h6>"?>
											
										  </td>
                                          <td>
											<div class="d-flex ">                                          
											  <div>
                                              <?php echo "<h6   id='size" .$final['ID'] . "'    >" . $final['size']. "</h6>"?>                                                                                                                           
											  </div>
											</div>
										  </td> 
                                          <td>
											<div class="d-flex ">                                          
											  <div>
                                              <?php echo "<h6   id='total" .$final['ID'] . "'    >" . $final['total_price']. "</h6>"?>                                                                                                                           
											  </div>
											</div>
										  </td>     										                                                                                                                        

                                          <td>
											<div>
											  <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
											   <button id=" <?php echo $final['ID']; ?>" button="catord".<?php echo $final['ID']; ?>  style=" font-size:small;"  class="button order">Order</button>
											  </div>
											  
											</div>
										  </td>   
										  <td>
											<div>
											  <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
											   <button id=" <?php echo $final['ID']; ?>" button="catdel".<?php echo $final['ID']; ?>  style=" font-size:small;"  class="button delete">Delete</button>
											  </div>
											  
											</div>
										  </td>   
  
										</tr>
										<?php } ?>
									  </tbody>
									</table>
								  </div>  
									</div>                                  
									</div>
								  </div>
								  
								</div>
							  </div>
							</div>
						  </div>


<style>




.container {
  width: 120px;
  height: 35px;
  display: flex;
  justify-content: space-around;
  align-items: center;
  align-content: center;
  background-color: antiquewhite;
  border-radius: 2rem;
}
.container .plus,
.container .minus {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 7px;
  height: 14px;
}

.container .minus i,
.container .plus i {
  cursor: pointer;
  font-size: 14px;
}
.container .value {
  font-size: 14px;
  width: 7px;
  text-align: center;
}
.add-to {
  display: flex;
  justify-content: center;
  align-items: center;
  color: black;
  width: 125px;
  height: 35px;
  border-radius: 1rem;
  background: antiquewhite;
  text-align: center;
  font-size: 15px;
  margin-top: 5px;
  cursor: pointer;
}


.box {
  transition: box-shadow .3s;
  width: 200px;
  height: 350px;
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
					<?php 	include("side-bar.php")	 ?>

			</div>

            	<!-- Scripts -->
		
		
		<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>

    
		
		
		
		<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

<script>

$(document).ready(function() {


$(document).on('click', '.order', function() { // Bind an event handler to the submit button
    
// 	e.stopImmediatePropagation()
//    event.preventDefault();  
  id = $(this).attr("id")
  
  name = document.getElementById('name'+id.trim()).innerHTML;
  price = document.getElementById('price'+id.trim()).innerHTML;
  size = document.getElementById('size'+id.trim()).innerHTML;
  total = document.getElementById('total'+id.trim()).innerHTML;

                    
        $.ajax({
            url:'order_item.php', //Give the ajax call a target url
            method: 'POST',
            data : {id: id, name:name, price:price, size:size, total:total},                  
            error: function(data){
            alert("error")
            },           
            success: function(data){ //Supply an anonymous function to execute on success. The parameter will be the response text.
            
                $('.product-table').load(document.URL +  '  .product-table');
                
            }
        });
    });

    }
);





</script>