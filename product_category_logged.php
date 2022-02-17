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
										<h2>Ethiopian Clay & Ceramic Products</h2>
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
<a  class='add-to-cart btn btn-warning '><div class='card' style='width: 20rem;'  >
<img class='card-img-top' src='admin-2/". $final['image'] ."' alt='Card image cap'  style='min-height:200px; max-height:200px; min-width:200px; max-width:200px;'   >
<div class='card-block'>
  <h4 class='card-title'  id='name". $final['ID'] ."'>". $final['name'] ."</h4>
  <h4 class='card-title' id='price". $final['ID'] ."' >". $final['price'] ."</h4>
  <h4 class='card-text ' style='color:red;'>
  
<div style='font-size:12px' >

<button id='plus'  name='".$final['ID']."' style='border-radius: 15px;'><i class='fas fa-plus'></i></button>
<button   type='submit'  style='border-radius: 17px;'    class='tag cart_item' id='prod".$final['ID']."' name='prod".$final['ID']."' value='1'> 1 Add to cart</button>
<button  id='minus'  style='border-radius: 15px;'   ><i class='fas fa-minus'></i></button>  
</div>

  
 
  </h4>  
</div>
</div>

</a>
</div>
<div  height='50px' >&nbsp
</div>

";

} ?>


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
							
								<?php                                         
//                                        session_start();

                                        if(!empty($_SESSION['email'] AND $_SESSION['password']))
                                            {
                                                $email = $_SESSION['email'];
                                                $set="SELECT COUNT(user_id) FROM cart WHERE user_id = '$email'";
                                                $results=$connect->query($set);
                                                $final = $results->fetch_array()[0];

							echo	"<a href='cart.php' >	<div class='floating-button'>  <i class='fas fa-shopping-cart fa-sm '  id = 'cart-num' style='font-size:15px;'>&nbsp". $final ."</i></div></a>
<style>
	.floating-button {
  position: fixed;
  z-index: 100;
  width: 50px;
  height: 50px;
  background: #f3c765;
  color: #FFF;
  font-size: 2em;
  border-radius: 50%;
  top: 30vh;
  right: 10%;
  margin-top: -25px;
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
  -webkit-justify-content: center;
  justify-content: center;
  -webkit-flex-direction: column;
  flex-direction: column;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.26);
  -moz-box-shadow: 0 2px 5px rgba(0, 0, 0, 0.26);
  -webkit-box-shadow: 0 2px 5px rgba(0, 0, 0, 0.26);
  -webkit-transition: all 0.3s linear;
  -o-transition: all 0.3s linear;
  -moz-transition: all 0.3s linear;
  -ms-transition: all 0.3s linear;
  -kthtml-transition: all 0.3s linear;
  transition: all 0.3s linear;
}
	</style>

";
}
?>



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


$(document).on('click', '.cart_item', function() {



id = $(this).attr('id').toString().replace(/[^0-9]/g,'')
 
value = $(this).text().replace(/[^0-9]/g,'')

// alert('price'+id)
// alert( $('#price'+id).val())
price = document.getElementById('price'+id).innerHTML;
name = document.getElementById('name'+id).innerHTML;
//price = $('#price'+id).val()

    $.ajax({


      
            type : 'POST',          
            url :  'add_cart.php',
            data : {'item_id': id, 'value': value, 'price': price, 'name':name },
            dataType: 'json',
            success : function(response){
       //     alert($(this).innerHTML)
	   			$('.cart_item').html("1 Add to cart")
				  // var json = $.parseJSON(response); 
				  
				   document.getElementById("cart-num").innerHTML = "&nbsp" + parseInt(response.number)
				   //$('#cart-num').load(document.URL +  '  .sidebar');
			//.replace(/[^0-9]/g,'"1 Add to cart"') 
            //reset the form after successful submit
                // $("#contactForm")[0].reset(); 
            },
            error : function(response){
				//alert(response)
                console.log(response)
            }
        });




 }); 



$(document).ready(function() {

  $("#plus").click(function() {
    // alert($("#plus").next().attr('id'))
  });

$(document).on('click', '#plus', function() {
  // alert($(this).attr('name'))
  // alert($("#plus").next().get().val())
  
  // $(this).next().text()
  // alert($(this).next().attr('id'))
  
  
  
  var c = parseInt(document.getElementById($(this).next().attr('id')).innerHTML)
  c +=1
  document.getElementById($(this).next().attr('id')).innerHTML = c + "  Add to cart"

  
});



$(document).on('click', '#minus', function() {
  
	
  var c = parseInt(document.getElementById($(this).prev().attr('id')).innerHTML.replace(/[^0-9]/g,''))

  
  if (c > 1)
  {c -=1
  document.getElementById($(this).prev().attr('id')).innerHTML = c + "  Add to cart"
  }

  
  
  
  
});




});
  </script>






<script>


let minus = document.querySelector(".minus");
let plus = document.querySelector(".plus");
let value = document.querySelector(".value");
value.innerHTML = "0" + 1;
window.localStorage.setItem("value", value.innerHTML);
plus.onclick = function () {
  value.innerHTML++;
  if (value.innerHTML < 10) {
    value.innerHTML = "0" + value.innerHTML;
  }
  window.localStorage.setItem("value", value.innerHTML);
};
minus.onclick = function () {
  if (value.innerHTML == 1) {
    value.innerHTML = "0" + 1;
  } else if (value.innerHTML != 0) {
    value.innerHTML--;
    if (value.innerHTML != 0 && value.innerHTML < 10) {
      value.innerHTML = "0" + value.innerHTML;
    }
  }
  window.localStorage.setItem("value", value.innerHTML);
};
value.innerHTML = window.localStorage.getItem("value");

let clearButton = document.querySelector(".add-to");
clearButton.onclick = function () {
  window.localStorage.setItem("value", 0);
  value.innerHTML = 0;
};




$('.add-to').click( // Bind an event handler to the submit button
        function(event){
// 	e.stopImmediatePropagation()
   event.preventDefault();  
    id = $(this).attr('id')         
           
                        
            $.ajax({
                url:'add_cart.php', //Give the ajax call a target url
                method: 'POST',
                data : {id: id },                  
				error: function(data){
				alert("error")
				},           
                success: function(data){ //Supply an anonymous function to execute on success. The parameter will be the response text.
			
					alert("succes")
                    // $('.product-table').load(document.URL +  '  .product-table');


                    // $('#insert_form')[0].reset();
                    // $('#theModal').modal('hide');
                    // $('#your_result_div').html(data); //On success of the ajax call, put the response text into an html element on your page
                }
            });

        }
    );





</script>
	</body>
</html>