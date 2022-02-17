<?php  include 'head.php'  ?>


<?php  include 'nav.php'  ?>

<?php  include 'side-bar.php'  ?>

<?php  include 'admin-header.php'  ?>


	
		

		<!-- <div class="row text-center mt-1">
    
    <div class="col-10 text-center">     -->
	
	<!-- <button class="btn btn-outline-warning btn-rounded" id="modalOpenCat"> -->
    <!-- <button type="button" class="btn btn-secondary btn-rounded" id="modalOpen"> 
     <div class="d-flex "> 
    
    <div>
    <img src="images/plus.png" alt="">
      <h6>Add Category</h6>
   
     </div>
    </div>
      </button>
    </div>
  </div>		 -->

		


		<div class="modal fade " id="theModalCat" tabindex="-1" role="dialog" aria-labelledby="theModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        
        <div class="modal-body">
        <form method="POST" id="insert_form">
  
        <div class="form-group row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Category</label>
        <input type="text" class="form-control" id="inputName" placeholder="Category">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Price</label>
        <input type="textfield" class="form-control" id="inputPrice" placeholder="Description">
      </div>
	  <div class="form-group col-md-6">
        <label for="inputEmail4">Image</label>
        <input type="file" class="form-control" id="inputImage" placeholder="Image">
      </div>
    </div>
    
    
    </div>
    
    <div class="form-group row text-center">
      <div class="form-group col-md-6">
      <button type="submit" id="submit_button" class="btn btn-warning col-md-6">Save</button>
      </div>
      <div class="form-group col-md-6">
      <button type="button" class="btn btn-warning col-md-6" id="modalCloseCat">Cancle</button>
      </div>
    </div>

      
    

    </div>
    
  </form>
  
        </div>
       
</div>		









		<!-- <div class="panel-body timeline-container">
						
						<div class="col-lg-10 d-flex flex-column">
						  
						 
						  <div class="row flex-grow">
							<div class="col-12 grid-margin stretch-card">
							  <div class="card card-rounded">
								<div class="card-body">                                
									<div>
						  
									<div class="table-responsive  mt-3">
									<table class="table select-table product-table">
									  <thead>
										<tr>                                        
										  <th>Category</th>
										  <th>Description</th>
										  <th>Image</th>                                      
										  <th></th>
										  <th></th>
										</tr>
									  </thead>
									  <tbody>
									   
									  <?php
  
									include("connect.php");
  
									$set="SELECT * FROM products";
  
									$results=$connect->query($set);
  
									while($final=$results->fetch_assoc()){ ?>	
									   
									   <?php 
																			 
										?>
										<tr>
										  
										  <td>
											<div class="d-flex ">                                          
											  <div>
												<h6><?php echo $final['category']; ?></h6>                                              
											  </div>
											</div>
										  </td>
										  <td>
											<h6><?php echo $final['description']; ?></h6>
											
										  </td>
										  <td>
											<div>
											  <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
											  <?php echo $final['image']; ?>
											  </div>
											  
											</div>
										  </td>                                                                                                                        
  
										  <td>
											<div>
											  <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
											   <button id=" <?php echo $final['ID']; ?>" button="catedit".<?php echo $final['ID']; ?> class="btn btn-warning">Edit</button>
											  </div>
											  
											</div>
										  </td>   
  
  
										  <td>
											<div>
											  <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
											   <button id=" <?php echo $final['ID']; ?>" button="catdel".<?php echo $final['ID']; ?> class="btn btn-warning delete">Delete</button>
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
						  </div> -->











		
		<div class="row">
			
			
			<div class="col-md-12">
				<div class="panel panel-default ">
					<div class="panel-heading">


					<div class="row text-center mt-1">
    
    <div class="col-10 text-center">    
	
	<button class="btn btn-outline-warning btn-rounded" id="modalOpen">
    <!-- <button type="button" class="btn btn-secondary btn-rounded" id="modalOpen"> -->
     <div class="d-flex ">
    
    <div>
    <img src="images/plus.png" alt="">
      <h6>Add new product</h6>
   
     </div>
    </div>
      </button>
    </div>
  </div> 


						<div class="modal fade " id="theModal" tabindex="-1" role="dialog" aria-labelledby="theModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        
        <div class="modal-body">
        <form method="POST" id="insert_form">
  
        <div class="form-group row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Product Name</label>
        <input type="text" class="form-control" id="inputName" placeholder="Product Name">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Price</label>
        <input type="number" class="form-control" id="inputPrice" placeholder="Price">
      </div>
    </div>
    <div class="form-group">
      <label for="inputCategory">Category</label>
            <select class="form-select" aria-label="Default select example" id="inputCategory" placeholder="Category">
            
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
            </select>
      
    </div>
    <div class="form-group">
      <label for="inputImage">image</label>
      <input type="file" class="form-control" id="inputImage" placeholder="Image, studio, or floor">
    </div>      
    </div>
    
    <div class="form-group row text-center">
      <div class="form-group col-md-6">
      <button type="submit" id="submit_button" class="btn btn-warning col-md-6">Save</button>
      </div>
      <div class="form-group col-md-6">
      <button type="button" class="btn btn-warning col-md-6" id="modalClose">Cancle</button>
      </div>
    </div>

      
    

    </div>
    
  </form>
  
        </div>
       
      </div>



						
						<div class="panel-body timeline-container">
						
                      <div class="col-lg-10 d-flex flex-column">
                        
                       
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">                                
                                  <div>
                        
                                  <div class="table-responsive  mt-3">
                                  <table class="table select-table product-table">
                                    <thead>
                                      <tr>                                        
                                        <th>Product Name</th>
                                        <th>Catagory</th>
                                        <th>Price</th>                                      
                                        <th></th>
                                        <th></th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                     
                                    <?php

                                  include("connect.php");

                                  $set="SELECT * FROM products";

                                  $results=$connect->query($set);

                                  while($final=$results->fetch_assoc()){ ?>	
                                     
                                     <?php 
                                                                           
                                      ?>
                                      <tr>
                                        
                                        <td>
                                          <div class="d-flex ">                                          
                                            <div>
                                              <h6><?php echo $final['name']; ?></h6>                                              
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <h6><?php echo $final['category']; ?></h6>
                                          
                                        </td>
                                        <td>
                                          <div>
                                            <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                            <?php echo $final['price']; ?>
                                            </div>
                                            
                                          </div>
                                        </td>                                                                                                                        

                                        <td>
                                          <div>
                                            <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                             <button id=" <?php echo $final['ID']; ?>" button="edit".<?php echo $final['ID']; ?> class="btn btn-warning">Edit</button>
                                            </div>
                                            
                                          </div>
                                        </td>   


                                        <td>
                                          <div>
                                            <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                             <button id=" <?php echo $final['ID']; ?>" button="del".<?php echo $final['ID']; ?> class="btn btn-warning delete">Delete</button>
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
						</div>
				</div>
			</div><!--/.col-->
			<div class="col-sm-12">
				<p class="back-link">YAMA GENERAL TRADING 	&#169;</a></p>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script>
// 		window.onload = function () {
// 	var chart1 = document.getElementById("line-chart").getContext("2d");
// 	window.myLine = new Chart(chart1).Line(lineChartData, {
// 	responsive: true,
// 	scaleLineColor: "rgba(0,0,0,.2)",
// 	scaleGridLineColor: "rgba(0,0,0,.05)",
// 	scaleFontColor: "#c5c7cc"
// 	});
// };
	</script>
		<script>
  $(document).ready(function () {
  
  $("#modalOpen").click(function () {
    $("#theModal").modal("show");
  });
  
  $("#modalClose").click(function () {
    $("#theModal").modal("hide");
  });


});

</script>





<script>

$('#submit_button').click( // Bind an event handler to the submit button
        function(event){
// 	e.stopImmediatePropagation()
   event.preventDefault();  
         
            name = $('#inputName').val();            
            price = $('#inputPrice').val();            
            category = $('#inputCategory').val();            
             image = "";            
           //$('#inputImage').val()
            //This is necessary if you are using a an submit button input element as normal behavior is to submit the form without ajax causing the page location to change. Event is automatically passed in, and we can call preventDefault() on this object to stop the browser from navigating away from our page.
                                         
           
            $.ajax({
                url:'add_product.php', //Give the ajax call a target url
                method: 'POST',
                data : {name: name, price: price, category: category, image: image},
                // {'name': name, 'price': price, 'category': category, 'image': image },
                // dataType: 'json',     
				error: function(data){
				alert("error")
				},           
                success: function(data){ //Supply an anonymous function to execute on success. The parameter will be the response text.
				
                    $('.product-table').load(document.URL +  '  .product-table');


                    $('#insert_form')[0].reset();
                    $('#theModal').modal('hide');
                    $('#your_result_div').html(data); //On success of the ajax call, put the response text into an html element on your page
                }
            });

        }
    );


</script>

</body>
</html>
