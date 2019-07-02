<?php
include "side_bar.php";
    include "header.php";
    
?> 

<div class="breadcome-area">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="breadcome-list">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="breadcome-heading">
<form role="search" class="sr-input-func">
<input type="text" placeholder="Search..." class="search-int form-control">
<a href="#"><i class="fa fa-search"></i></a>
</form>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<ul class="breadcome-menu">
<li><a href="#">Home</a> <span class="bread-slash">/</span>
</li>
<li><span class="bread-blod">Services</span>
</li>
</ul>
</div>
</div> 
</div>
</div>
</div>
</div> 
</div>

     <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Services Add</a></li>
                                 <li><a href="#reviews"> Services Details</a></li>
                                
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad addcoursepro">
                                                    <form  class="dropzone dropzone-custom needsclick addcourse"  id="testimonials" name="testimonials">
                                                        <div class="row">
                                                          
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group res-mg-t-15">
                                                                    <input name="name" type="text" class="form-control" id="name"placeholder="Name">
                                                                 </div>
                                                                <div class="form-group">
                                                                    <textarea name="description" id="description" placeholder="Description"></textarea>
                                                                </div>
                                                              
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                                     <!--  <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Upload Photo"/> -->
                                                                </div>

                                                                <center><div id="result"></div></center>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="reviews">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                       <div class="product-status mg-b-15">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="product-status-wrap drp-lst">
<h4>Testimonials List</h4>

<div class="asset-inner">
<table id="example" class="table table-bordered table-striped">
<tr>
<th>Sr.No</th> 
<th>Name</th>
<th>Description</th>

<th>Action</th>

</tr>
 

<?php
 include("config.php");
 
  $select=mysql_query("SELECT * FROM services;");
  $i=0;
  while($userrow=mysql_fetch_array($select))
   {
    $name =$userrow['name'];
    $id =$userrow['id'];
    $discription =$userrow['discription'];
  
 $i++;
?>
<tr> 
<td><?php echo $i;?></td>
<td><?php echo $name; ?></td>

<td><?php echo $discription; ?></td>



<td>
<!-- <button data-toggle="tooltip" title="Edit" class="pd-setting-ed" onclick="add_form()">Reply</button>  -->

 <a href="#" title='Delete Record' data-toggle="modal" data-target="#deleteModal" class="btn-sm btn-danger"  onclick="$('#del_id').val('<?php echo $id;?>');"><span class="glyphicon glyphicon-trash"></span></a></td>
</tr>

  
 
<?php 
}  
?>

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
                                <div class="product-tab-list tab-pane fade" id="INFORMATION">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="devit-card-custom">
                              <div class="form-group">
                                <input type="url" class="form-control" placeholder="Facebook URL">
                              </div>
                              <div class="form-group">
                                <input type="url" class="form-control" placeholder="Twitter URL">
                              </div>
                              <div class="form-group">
                                <input type="url" class="form-control" placeholder="Google Plus">
                              </div>
                              <div class="form-group">
                                <input type="url" class="form-control" placeholder="Linkedin URL">
                              </div>
                              <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
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
                </div>
            </div>
        </div> 
<div class="panel-body"></div>
<div class="panel-body"></div>
<div class="panel-body"></div>
<div class="panel-body"></div>
<div class="panel-body"></div>



<!-- delete model -->
<div id="deleteModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" align="center">Delete Details</h4>
        </div>
         <form  id="del" autocomplete="off" enctype="multipart/formdata" method="POST">
            <div class="modal-body" id="deleteContent">
                   <input type="hidden" name="data" id="del_id">
                   <div class="form-group">
                         <p><b>Are you sure want to delete ?</b></p>
                  </div>
            </div>
            <center><div id='res'></div></center>
              <div class="modal-footer">
                   <button class="btn btn-success submit" id="delete_btn" name="submit">Confirm</button>
                   <button type="button" class="btn btn-primary btn-md" data-dismiss="modal">Cancel</button>      
              </div>
        </form>
    </div>
  </div>
</div>



<?php
include "footer.php";
  
    
?> 


 
<script>
  
  $('#testimonials').submit(function(e){
  
 
  e.preventDefault();
        
  
  
          $.ajax({
                     url:'insert_services.php',
                     type:'POST',
                     data:new FormData(this),
                     contentType:false,
                        processData:false,

                  success: function(data) 

                         { 
                           // alert(data);
                          if(data==1) 
                            {
                            $("#result").html('<div class="alert alert-success"><button type="button" class="close">×</button>Record Successfully Inserted!</div>');

                              window.setTimeout(function()
                      { 
                       location.reload();
                    } ,1500);
                            }

                          else 
                            { 
                             alert('error');
                              }
                          }//end of success


                })//end of ajax

             });
          
</script>
  <script>
    $("#delete_btn").click(function(e)
       { 
            var id=$('#del_id').val();
           
        e.preventDefault();
     
             $.ajax({
                            url:'delete_services.php',
                            type: "POST",
                            data: {
                                   id:id   
                            }, 
                            success: function(data) 
                                {
                                  //alert(data);
                                    if(data==1)
                                    {
                                         $("#res").html('<div class="alert alert-danger"><button type="button" class="close">×</button>Record Successfully Deleted!</div>');
                      window.setTimeout(function()
                      { 
                       location.reload();
                    } ,1500);
                          
                                        // window.location.reload();
                                        
                                    }                          
                                }
                        });
        })
</script>