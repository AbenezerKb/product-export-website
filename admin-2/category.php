<?php  include 'head.php'  ?>


<?php  include 'nav.php'  ?>

<?php  include 'side-bar.php'  ?>

<?php  include 'admin-header.php'  ?>



<div class="row text-center mt-1">
    
    <div class="col-10 text-center">    
	
	<button class="btn btn-outline-warning btn-rounded" id="modalOpen">
    <!-- <button type="button" class="btn btn-secondary btn-rounded" id="modalOpen"> -->
    <div class="d-flex ">
    
    <div>
    <img src="images/plus.png" alt="">
      <h6>Add Category</h6>
   
     </div>
    </div>
      </button>
    </div>
  </div>		

		

		<div class="modal fade " id="theModal" tabindex="-1" role="dialog" aria-labelledby="theModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        
        <div class="modal-body">
            
        <form method="POST" id="insert_form" enctype="Multipart/form-data">
  
        <div class="form-group row">
      <div class="form-group col-md-6">
        <label for="inputCategory">Category Title</label>
        <input type="text" class="form-control" id="inputCategory" placeholder="Category Title" required>
      </div>
      <div class="form-group col-md-6">
        <label for="inputDescription">Description</label>
        <input type="textarea" class="form-control" id="inputDescription" placeholder="Description" required>
      </div>
      
             <div class="form-group custom-file col-md-12">
             <label for="validatedCustomFile">Image</label>
             <input type="file" class="custom-file-input" id="inputImage" required placeholder="Image">
             
             </div>

      <div class="form-group col-md-6" id="submit_button_id">
      <button type="submit" id="submit_button" class="btn btn-warning col-md-6 pull-left">Save</button>
      </div>
     
      <div class="form-group col-md-6" id="submit_button_id" style="display: none;">
      <button type="submit" id="id_button" class="btn btn-warning col-md-6 pull-left"></button>
      </div>


      <div class="form-group col-md-6">
      <button type="button" class="btn btn-warning col-md-6" id="modalClose">Cancle</button>
      </div>


      <div class="form-group col-md-6 " id="update_button_id">
      <button type="submit" id="update_button" updateid = "" class="btn btn-warning col-md-6">Update</button>
      </div>
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
  
									$set="SELECT * FROM categories";
  
									$results=$connect->query($set);
  
									while($final=$results->fetch_assoc()){ ?>	
									   
									   <?php 
																			 
										?>
										<tr>
										  
										  <td>
											<div class="d-flex ">                                          
											  <div>
                                              <?php echo "<h6   id='cate" .$final['ID'] . "'    >" . $final['category']. "</h6>"?>                                                                                                                           
											  </div>
											</div>
										  </td>   
										  <td>
											<?php echo "<h6  id='desc".$final['ID'] ."'> ". $final['description']. "</h6>"?>
											
										  </td>
										  <td>
											<div>
											  <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
											<?php echo "<img width='200px'  src='". $final['image'] ."'  id='img". $final['ID'] ."' />"?>
											  </div>
											  
											</div>
										  </td>                                                                                                                        
  
										  <td>
											<div>
											  <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
											   <button id=" <?php echo $final['ID']; ?>" button="catedit".<?php echo $final['ID']; ?> class="btn btn-warning edit">Edit</button>
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
						  </div>











		
		<div class="row">
			
			
			<!-- <div class="col-md-12">
				<div class="panel panel-default ">
					<div class="panel-heading"> -->

<!-- 
					<div class="row text-center mt-1">
    
    <div class="col-10 text-center">    
	
	<button class="btn btn-outline-warning btn-rounded" id="modalOpen">
    <button type="button" class="btn btn-secondary btn-rounded" id="modalOpen"> -->
    <!-- <div class="d-flex ">
    
    <div>
    <img src="images/plus.png" alt="">
      <h6>Add new product</h6>
   
     </div>
    </div>
      </button>
    </div> 
  </div> -->



<style>
    .delete {
  font-size: 1.2rem;
  font-weight: 700;
  font-family: "Poppins", sans-serif;
  padding: 0.5rem 3rem;
  border: 2px solid #9c5de2;
  border-radius: 0;
  background-color: transparent;
  color: #9c5de2;
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

$('#submit_button').click( // Bind an event handler to the submit button
        function(event){
// 	e.stopImmediatePropagation()
   event.preventDefault();  
   //alert($('#inputImage').val())
            image = $('#inputImage').val();            
            description = $('#inputDescription').val();            
            category = $('#inputCategory').val();      
           
                        
            $.ajax({
                url:'add_category.php', //Give the ajax call a target url
                method: 'POST',
                data : {category: category, description: description, image: image},                  
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
                url:'delete_category.php', //Give the ajax call a target url
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










    $(document).on('click', '.edit', function() { // Bind an event handler to the submit button
        
        // 	e.stopImmediatePropagation()
        //    event.preventDefault();  
        
              id = $(this).attr("id").trim()                                            
       category = document.getElementById("cate" + id)
       description = document.getElementById("desc" + id)
       image = document.getElementById("img" + id)

       document.getElementById('inputCategory').value = category.innerHTML;            
             document.getElementById('inputDescription').value = description.innerHTML;
             document.getElementById('inputImage').value = image.innerHTML;
             document.getElementById("update_button_id").style.display = "block";
      document.getElementById("submit_button_id").style.display = "none";
             document.getElementById("id_button").innerHTML = id   
      $("#theModal").modal("show");
      
    //    $("#modalOpen").click(function () {
    //     document.getElementById('inputCategory').value = category.innerHTML;            
    //          document.getElementById('inputDescription').value = description.innerHTML;
    //          document.getElementById('inputImage').value = image.innerHTML;
    //   $("#theModal").modal("show");

    // //   document.getElementById("update_button").style.display = "block";
    // //   document.getElementById("submit_button").style.display = "none";

           
    // });
    
    $("#modalClose").click(function () {
      $("#theModal").modal("hide");
    });
    
                
                    // $.ajax({
                    //     url:'delete_category.php', //Give the ajax call a target url
                    //     method: 'POST',
                    //     data : {id: id},                  
                    //     error: function(data){
                    //     alert("error")
                    //     },           
                    //     success: function(data){ //Supply an anonymous function to execute on success. The parameter will be the response text.
                        
                    //         $('.product-table').load(document.URL +  '  .product-table');
                            
                    //     }
                    // });        
                });
});

</script>



<script>

$('#update_button').click( // Bind an event handler to the submit button
        function(event){
// 	e.stopImmediatePropagation()
   event.preventDefault();  
         
            image = $('#inputImage').val();            
            description = $('#inputDescription').val();            
            category = $('#inputCategory').val();                        
            id = document.getElementById("id_button").innerHTML
                                
            $.ajax({
                url:'update_category.php', //Give the ajax call a target url
                method: 'POST',
                data : {category: category, description: description, image: image, id: id},                  
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


