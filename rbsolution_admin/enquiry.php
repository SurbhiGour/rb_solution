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
<li><span class="bread-blod">Enquiry</span>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div> 
</div>
 
  <div class="product-status mg-b-15">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="product-status-wrap drp-lst">
<h4>Enquiry List</h4>

<div class="asset-inner">
<table id="example" class="table table-bordered table-striped">
<tr>
<th>No</th> 
<th>Customer Name</th>
<th>Customer Email</th>
<th>Subject</th> 
<th>Description</th>
<th>Image</th> 
<th>Reply Through RBsolution</th>
<th>Reply</th>

</tr>


<?php
 include("config.php");
 
  $select=mysql_query("SELECT * FROM enquiry;");
  $i=0;
  while($userrow=mysql_fetch_array($select))
   {
  $id=$userrow['id'];
  $customer_name=$userrow['customer_name'];
  $customer_email=$userrow['customer_email'];
  $customer_subject=$userrow['customer_subject'];
  $customer_desc=$userrow['customer_desc'];
  $customer_img=$userrow['customer_img'];
  $reply=$userrow['reply'];
 $i++;
?>
<tr> 
<td><?php echo $i;?></td>
<td><?php echo $customer_name; ?></td>

<td><?php echo $customer_email; ?></td>
<td><?php echo $customer_subject; ?></td> 
<td><?php echo $customer_desc; ?></td>
 <td><a href="../<?php echo $userrow['customer_img']; ?>"><?php echo basename($customer_img) ?></a></td> 

<td><?php echo $reply; ?></td>
<td>
<!-- <button data-toggle="tooltip" title="Edit" class="pd-setting-ed" onclick="add_form()">Reply</button>  -->

<a href="#" data-toggle="modal" title="Record Update" data-target="#modal_form1" class="btn btn-primary btn-xs" onclick="getdata(<?php echo $id; ?>)"> Reply</a>
</td>
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

 <!-- INSERT AND DELETE MODEL -->
  <div class="modal fade" id="modal_form1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" align="center">REPLY</h4>
      </div>
 
      <div class="modal-body form">
      <form id="form_insert" data-parsley-validate class="form-horizontal form-label-left" action="#" method="POST">
           <input type="hidden" name="rec_id" id="rec_id">
             
            <div class="col-md-6">
              <label >Customer Name</label>
              <input id="name" class="form-control" type="text" name="name" required="" placeholder="Enter Customer Name" readonly="">
            </div>
        
            <div class="col-md-6">
              <label >Subject</label>
              <input id="subject" class="form-control" type="text" name="subject" required="" placeholder="Enter Subject" readonly="" >
            </div>
 
            <div class="panel-body"></div>
        
        <div class="col-md-6">
              <label >Email</label>
              <input id="email" class="form-control" type="text" name="email" required="" placeholder="Enter Email"  readonly="">
            </div>
            <div class="col-md-6">
              <label >Description</label>
             <textarea id="description" class="form-control"  rows="4" cols="50" name="description" required="" placeholder="Enter Description">
              </textarea> 
            </div>
            

        
          <div class="panel-body"></div>
         
            
          </div>
          <div class="panel-body"></div>
          <div class="col-md-12 col-sm-12 col-xs-12">
            
         </div>
           <div class="panel-body"></div>

          <div class="modal-footer">
            <input type="submit" name="add_expense1" id="add_expense1" class="btn btn-primary" value="Send">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
          </div>
           <center><div id='result'></div></center>
        </form>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div>
<div class="panel-body"></div>
<div class="panel-body"></div>
<div class="panel-body"></div>
<div class="panel-body"></div>
<div class="panel-body"></div>



 

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
                     url:'certificate_upload.php',
                     type:'POST',
                     data:new FormData(this),
                     contentType:false,
                        processData:false,

                  success: function(data) 

                         { 
                           // alert(data);
                          if(data==1) 
                            {
                    //         $("#profile_photo1").html('<div class="alert alert-success"><button type="button" class="close">×</button>Certificate Successfully Upload!</div>');

                    //           window.setTimeout(function()
                    //   { 
                    //    location.reload();
                    // } ,1500);

                    alert('Certificate Successfully Upload!');
                    location.reload();

                            }

                          else 
                            {
                             alert('error');
                              }
                          }//end of success


                })//end of ajax

             });
          
</script>

<script type="text/javascript">
  function add_form()
    {
    
      $('#form_expense')[0].reset(); // reset form on modals
      $('#modal_form1').modal('show'); // show bootstrap modal
    //$('.modal-title').text('Add Role'); // Set Title to Bootstrap modal title
    }

</script>

<script>

function getdata(id) 
{
  var id=id;
  
  $.ajax({
        url:'get_artical_data.php',
        type:'POST',
        data:{
          id:id 
        }, 

        success: function(data)
        {
          var obj = $.parseJSON(data); // this 

          $('#rec_id').val(obj.id);          
          $('#name').val(obj.customer_name);
          $('#subject').val(obj.customer_subject);
          $('#email').val(obj.customer_email);
          $('#description').val(obj.reply);
       
          
        }

      })
}
</script>

   

<script>

$('form#form_insert').submit(function(e){

     e.preventDefault(); 
 
    $.ajax({ 

            url:'insert_enquiry.php',
            type:'POST',
           
            data:new FormData(this),
            contentType:false,
            processData:false, 

            success: function(data)
            {
             
              if(data==1) 
              {
                  $("#result").html('<div class="alert alert-success"><button type="button" class="close">×</button>Reply Send!</div>');
                
                    window.setTimeout(function()
                      { 
                       location.reload();
                    } ,1500);
                
              }
              else 
              {
                alert('Msg Not Send !!!');
                
              } 
              
            }
           
           })
   
});
  </script>