<?php  include 'head.php' ?>

<?php  include 'side-bar.php' ?>


<div class="form-group row text-center">
<div class="form-group col-md-6 ">
  
                      <div class="col-lg-10 d-flex flex-column">
                        
                       
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">                                

<form method="POST" id="insert_form">
  
  <div class="form-group row">
<div class="form-group col-md-10">
  <label for="inputName">Category Name</label>
  <input type="text" class="form-control" id="inputName" placeholder="Category Name">
</div>      
</div>
</form>



<div class="form-group col-md-8">
<button type="submit" id="submit_button" class="btn btn-outline-info col-md-6">Save</button>
</div>


</div>

</div>
</div>
</div>
</div>
</div>


<div class="form-group col-md-6 ">
<div class="col-lg-10 d-flex flex-column">
                        
                       
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">         




                                  <table class="table select-table category-table">
                                    <thead>
                                      <tr>                                        
                                        <th>Product Name</th>                                       
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
                                              <h6><?php echo $final['name']; ?></h6>                                              
                                            </div>
                                          </div>
                                        </td>                                        
                                        <td>
                                          <div>
                                            <div class="d-flex justify-content-between align-items-center mb-12 max-width-progress-wrap">
                                             <button id=" <?php echo $final['ID']; ?>" button="edit".<?php echo $final['ID']; ?> class="btn btn-outline-info edit">Edit</button>
                                            </div>
                                            
                                          </div>
                                        </td>   


                                        <td>
                                          <div>
                                            <div class="d-flex justify-content-between align-items-center mb-12 max-width-progress-wrap">
                                             <button id=" <?php echo $final['ID']; ?>" button="del".<?php echo $final['ID']; ?> class="btn btn-outline-info delete">Delete</button>
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

<div class="row text-center mt-1">
    
    <div class="col-10 text-center">    
    <button type="button" class="btn btn-outline-info" id="modalOpen">
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


<?php include 'footer.php' ?>




<script>

$('#submit_button').click( // Bind an event handler to the submit button
        function(event){
          // event.preventDefualt();
          
            name = $('#inputName').val();            
           
            //This is necessary if you are using a an submit button input element as normal behavior is to submit the form without ajax causing the page location to change. Event is automatically passed in, and we can call preventDefault() on this object to stop the browser from navigating away from our page.
           
            
           
           alert(name)
           
            $.ajax({
                url:'add_category.php', //Give the ajax call a target url
                method: 'POST',
                data : {name: name},
                // {'name': name, 'price': price, 'category': category, 'image': image },
                // dataType: 'json',                
                success: function(data){ //Supply an anonymous function to execute on success. The parameter will be the response text.
                    alert(['tttttttttttt']);
                    $('.category-table').load(document.URL +  '  .category-table');


                    $('#insert_form')[0].reset();
                    $('#theModal').modal('hide');
                    $('#your_result_div').html(data); //On success of the ajax call, put the response text into an html element on your page
                }
            });
        }
    );


</script>


<script>

$('#submit_button').click( // Bind an event handler to the submit button
        function(event){
          // event.preventDefualt();
          
            name = $('#inputName').val();            
            price = $('#inputPrice').val();            
            category = $('#inputCategory').val();            
            image = $('#inputImage').val();            
           
            //This is necessary if you are using a an submit button input element as normal behavior is to submit the form without ajax causing the page location to change. Event is automatically passed in, and we can call preventDefault() on this object to stop the browser from navigating away from our page.
           
            
           
           alert(name)
           alert(price)
           alert(category)
           alert(image)
           
            $.ajax({
                url:'add_product.php', //Give the ajax call a target url
                method: 'POST',
                data : {name: name, price: price, category: category, image: image},
                // {'name': name, 'price': price, 'category': category, 'image': image },
                // dataType: 'json',                
                success: function(data){ //Supply an anonymous function to execute on success. The parameter will be the response text.
                    alert(['tttttttttttt']);
                    $('.category-table').load(document.URL +  '  .category-table');


                    $('#insert_form')[0].reset();
                    $('#theModal').modal('hide');
                    $('#your_result_div').html(data); //On success of the ajax call, put the response text into an html element on your page
                }
            });
        }
    );


</script>


