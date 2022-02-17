
<?php  include 'head.php' ?>
<?php  include 'side-bar.php' ?>







      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                 
                 
                </div>
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="statistics-details d-flex align-items-center justify-content-between">
                          <div>
                            <p class="statistics-title">Bounce Rate</p>
                            <h3 class="rate-percentage">32.53%</h3>
                            <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>-0.5%</span></p>
                          </div>
                          <div>
                            <p class="statistics-title">Page Views</p>
                            <h3 class="rate-percentage">7,682</h3>
                            <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+0.1%</span></p>
                          </div>
                          <div>
                            <p class="statistics-title">New Sessions</p>
                            <h3 class="rate-percentage">68.8</h3>
                            <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">Avg. Time on Site</p>
                            <h3 class="rate-percentage">2m:35s</h3>
                            <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">New Sessions</p>
                            <h3 class="rate-percentage">68.8</h3>
                            <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">Avg. Time on Site</p>
                            <h3 class="rate-percentage">2m:35s</h3>
                            <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                          </div>
                        </div>
                      </div>
                    </div> 
                    
                    
 <div>
 <div class="container">
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
    </div>
  </div>
                    <div class="row">
                      <div class="col-lg-10 d-flex flex-column">
                        
                       
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">                                
                                  <div>
                                    <h4 class="card-title card-title-dash">Products</h4>
                                  <div class="table-responsive  mt-3">
                                  <table class="table select-table">
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
                      <div class="col-lg-4 d-flex flex-column">
                        
                        
                        





                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/jquery.cookie.js" type="text/javascript"></script>
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->

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
          event.preventDefualt();
          
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
                data : $('#insert_form').serialize(),
                // {'name': name, 'price': price, 'category': category, 'image': image },
                // dataType: 'json',                
                success: function(data){ //Supply an anonymous function to execute on success. The parameter will be the response text.
                    alert(['tttttttttttt']);
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


$('.delete').click( // Bind an event handler to the submit button
        function(event){
          alert($(this).attr('id'));
          //event.preventDefualt();
          
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
                data : $('#insert_form').serialize(),
                // {'name': name, 'price': price, 'category': category, 'image': image },
                // dataType: 'json',                
                success: function(data){ //Supply an anonymous function to execute on success. The parameter will be the response text.
                    alert(['tttttttttttt']);
                    alert(data);
                    $('#insert_form')[0].reset();
                    $('#theModal').modal('hide');
                    $('#your_result_div').html(data); //On success of the ajax call, put the response text into an html element on your page
                }
            });
        });
      });


</script>



</body>

</html>

