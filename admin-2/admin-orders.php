<?php  include 'head.php'  ?>


<?php  include 'nav.php'  ?>

<?php  include 'side-bar.php'  ?>

<?php  include 'admin-header.php'  ?>



	
		
<div class="modal fade " id="theModal" tabindex="-1" role="dialog" aria-labelledby="theModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        
        <div class="modal-body">
        <h3><strong>  Customer Address </strong></h3>    
        <h4 id="country"> <strong> Country: </strong> </h4>
        <h4 id="city"><strong> City: </strong> </h4>
        <h4 id="state"><strong> State: </strong> </h4>
        <h4 id="postcode"><strong> Postcode: </strong> </h4>
        
        
      <!-- <div class="form-group col-md-6">
      <button type="button" class="btn btn-warning col-md-6" id="modalClose">Cancle</button>
      </div> -->


      <!-- <div class="form-group col-md-6 " id="update_button_id">
      <button type="submit" id="update_button" updateid = "" class="btn btn-warning col-md-6">Confirm</button>
      </div> -->
      </div>
        
        
    
     
      </div>

      
    

    </div>
    
  
  
        </div>
       
</div>		








		<div class="panel-body timeline-container h-100 row align-items-center ">
    
    
						<div class="col-lg-7 d-flex flex-column">
            <h3 id="new_h3" > <strong>New orders</strong> </h3>										  
						 
						  <div class="row flex-grow">
							<div class="col-12 grid-margin stretch-card">
							  <div class="card card-rounded">
								<div class="card-body">                                
									<div>
						  
									<div class="table-responsive  mt-3">
									<table class="table select-table product-table new">
									  <thead>
										<tr>                                        
										  <th>Product Name</th>
										  <th>Price</th>
										  <th>Size</th>                                      
                      <th>Total</th>                                      										  
										  <th></th>
                      <th></th>
										</tr>
									  </thead>
									  <tbody>
									   
									  <?php
  
  include("connect.php");
  
									$set="SELECT * FROM orders WHERE status='pending' ";
  
									$results=$connect->query($set);
  
									while($final=$results->fetch_assoc()){ ?>	
									   
									   <?php 
																			 
										?>
										<tr>
										  
										  <td>
											<div class="d-flex ">                                          
											  <div>
                                              
                           <?php echo "<h6   id='name" .$final['ID'] . "'    >" . $final['product_name']. "</h6>"?>                                                                                                                           
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
											   <button id=" <?php echo $final['customer_id']; ?>" user="<?php echo $final['customer_id']; ?>" class="btn btn-warning view_address">View Customer Address</button>
											  </div>
											  
											</div>
										  </td>   
                      <td>
											<div>
											  <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
											   <button id=" <?php echo $final['ID']; ?>" user="<?php echo $final['customer_id']; ?>" class="btn btn-warning confirm">Confirm</button>
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





<div class="space-holder" style="max-height:100px;">
<input type="hidden"/>
</div>

            
            <div class="panel-body timeline-container ">
						
						  <div class="col-lg-7 d-flex flex-column">
						  <h3 id="confirmed_h3" >  <strong>   Confirmed Orders   </strong>  </h3>  
						 
						  <div class="row flex-grow">
							<div class="col-12 grid-margin text-center" style="width: auto !important;"  >
							  <div class="card card-rounded">
								<div class="card-body">                                
									<div>
						  
									<div class="table-responsive  mt-3">
									<table class="table select-table product-table confirmed ">
									  <thead>
										<tr>                                        
										  <th>Product Name</th>
										  <th>Price</th>
										  <th>Size</th>                                      
                      <th>Total</th>                                      										  
										  <th></th>
                      <th></th>
										</tr>
									  </thead>
									  <tbody>
									   
									  <?php
  
  include("connect.php");
  
									$set="SELECT * FROM orders WHERE status='order confirmed' ";
  
									$results=$connect->query($set);
  
									while($final=$results->fetch_assoc()){ ?>	
									   
									   <?php 
																			 
										?>
										<tr>
										  
										  <td>
											<div class="d-flex ">                                          
											  <div>
                                              
                           <?php echo "<h6   id='name" .$final['ID'] . "'    >" . $final['product_name']. "</h6>"?>                                                                                                                           
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
											   <button id=" <?php echo $final['customer_id']; ?>" user="<?php echo $final['customer_id']; ?>" class="btn btn-warning view_address">View Customer Address</button>
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
		
		</div><!--/.row-->
	</div>	<!--/.main-->


<style>




.timeline-container {
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}




</style>

	

    <script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>

    <script>
  $(document).ready(function () {
  
  $("#modalOpen").click(function () {
    document.getElementById("update_button_id").style.display = "none";
    document.getElementById("submit_button_id").style.display = "block";  
    $("#theModal").modal("show");
    

  });
  
  $("#modalClose").click(function () {
    $("#theModal").modal("hide");
  });

  
});
</script>






<script>

$('#update_button').click( // Bind an event handler to the submit button
        function(event){
// 	e.stopImmediatePropagation()
   
         
            name =  $('#inputName').val();            
            image = $('#inputImage').val();            
            price = $('#inputPrice').val();            
            category = $('#inputCategory').val();                  

           // alert(document.getElementById("inputImage").files[0].path)
                event.preventDefault();         
            $.ajax({
                url:'add_product.php', //Give the ajax call a target url
                method: 'POST',
                data : {name: name, price: price, category: category, image: image},                  
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



<script>


$(document).ready(function() {


    $(document).on('click', '.delete', function() { // Bind an event handler to the submit button
        
// 	e.stopImmediatePropagation()
//    event.preventDefault();  
      id = $(this).attr("id")
                      
            $.ajax({
                url:'delete_product.php', //Give the ajax call a target url
                method: 'POST',
                data : {id: id},                  
				error: function(data){
				alert("error")
				},           
                success: function(data){ //Supply an anonymous function to execute on success. The parameter will be the response text.
			
                   
                    $('.product-table').load(document.URL +  '  .product-table');
                    
                }
            });

        }
    );










    $(document).on('click', '.view_address', function() { // Bind an event handler to the submit button
        
    id = $(this).attr("id").trim()           
      
//alert(id)
    $.ajax({
                        url:'customer_address.php', //Give the ajax call a target url
                        method: 'POST',
                        data : {id: id},                  
                        error: function(data){
                        alert("error")
                        },           
                        success: function(data){ //Supply an anonymous function to execute on success. The parameter will be the response text.
                          //const obj = data.
                          
                           const obj = JSON.parse(data)
                           //alert(obj.country)
                          //alert(data)
                          document.getElementById('country').innerHTML +=  obj.country
                          document.getElementById('city').innerHTML +=  obj.city
                          document.getElementById('state').innerHTML +=  obj.state
                          document.getElementById('postcode').innerHTML +=  obj.postcode
                          $("#theModal").modal("show");
                            
                        }
                    });       


           
    });


    

    $(document).on('click', '.confirm', function() { // Bind an event handler to the submit button
        
        id = $(this).attr("id")           
          
    
        $.ajax({
                            url:'confirm_order.php', //Give the ajax call a target url
                            method: 'POST',
                            data : {id: id},                  
                            error: function(data){
                            alert("error")
                            },           
                            success: function(data){ //Supply an anonymous function to execute on success. The parameter will be the response text.
                              $('.confirmed').load(document.URL +  '  .confirmed');
                              $('.new').load(document.URL +  '  .new');
                              //$('.timeline-container').load(document.URL +  '  .timeline-container');
                              
                              
                              //$('.no-padding').load(document.URL +  '  .no-padding');
                              
                              //const obj = data.
                             // alert(data)
                             //  const obj = JSON.parse(data)
                               //alert(obj.country)
                              //alert(data)
                              // document.getElementById('country').innerHTML +=  obj.country
                              // document.getElementById('city').innerHTML +=  obj.city
                              // document.getElementById('state').innerHTML +=  obj.state
                              // document.getElementById('postcode').innerHTML +=  obj.postcode
                              // $("#theModal").modal("show");
                                
                            }
                        });       
    
    
               
        });

    
    $("#modalClose").click(function () {
      $("#theModal").modal("hide");
    });
                                      
                });


</script>



<script>

$('#update_button').click( // Bind an event handler to the submit button
        function(event){
// 	e.stopImmediatePropagation()
   event.preventDefault();  
         
            image = $('#inputImage').val();            
            category = $('#inputCategory').val();            
            name = $('#inputName').val();                        
            price = $('#inputPrice').val();                        
            id = document.getElementById("id_button").innerHTML
                                
            $.ajax({
                url:'update_product.php', //Give the ajax call a target url
                method: 'POST',
                data : { name:name, price:price , category: category,  image: image, id: id},                  
				error: function(data){
				
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


