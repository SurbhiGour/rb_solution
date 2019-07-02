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
<li><span class="bread-blod">Clients</span>
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
    <div id="myTabContent" class="tab-content custom-product-edit">
    <div class="product-tab-list tab-pane fade active in" id="description">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="review-content-section">
    <div id="dropzone1" class="pro-ad">
    <form action="#"  id="profile_photo" enctype="multipart/form-data" class="dropzone" >
    <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="form-group">
     <img id="blah" src="" alt=""/ height="150px" width="150px">
                            <div class="form-group">
                               
                                <input type="file" name="file" onchange="readURL(this);">
                                  
                            </div>
                             <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Upload Image"/>
                        <center><div id="profile_photo1"></div></center>
    </div>
   
</div>
</div> 
</form>
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
        <div class="contacts-area mg-b-15">
<div class="courses-area">
            <div class="container-fluid" >
            	
           

 <?php  
 include "config.php";

               $sr_no=0;
              $sql =mysql_query("SELECT * from clients ")or die(mysql_error($conn));
           
                         while($row=mysql_fetch_array($sql))
                       {
                           $image =$row['image'];
                            $id =$row['id'];
                         
                         
             ?>
                        
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12"  ">
                      <!--   <div class="courses-inner res-mg-b-30"> -->
                            <div class="courses-title">
                                <a href="#" title='Delete Record' data-toggle="modal" data-target="#deleteModal"   onclick="$('#del_id').val('<?php echo $id;?>');"><img src="<?php echo $image ?>" alt=""  width="100%" height="100%" class="project1" ></a>
                                <h2></h2>
                                 <h2></h2>
                          <!--   </div> -->
                   
                          
                        </div>
                    </div>

                <?php }?>
                   
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

<!-- Image Preview -->
<script type="text/javascript">

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

</script>

<script>
  
  $('#profile_photo').submit(function(e){
  
  e.preventDefault();
         
 
  
          $.ajax({
                     url:'client_upload.php',
                     type:'POST',
                     data:new FormData(this),
                     contentType:false,
                        processData:false,

                  success: function(data) 

                         { 
                           // alert(data);
                          if(data==1) 
                         {
                             $("#profile_photo1").html('<div class="alert alert-success"><button type="button" class="close">×</button>Client image Successfully Upload!</div>');

                            window.setTimeout(function()
                     { 
                       location.reload();
                    } ,1500);

//                     alert('Certificate Successfully Upload!');
// location.reload();

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
                            url:'delete_clients.php',
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