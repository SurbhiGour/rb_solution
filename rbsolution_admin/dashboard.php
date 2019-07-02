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
<li><span class="bread-blod">Dashboard</span>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="analytics-sparkle-area">
<div class="container-fluid">
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
<?php  
include "config.php";

$sr_no=0;
$sql =mysql_query("SELECT * from gallery")or die(mysql_error($conn));
$count=mysql_num_rows($sql);

?>
<div class="analytics-sparkle-line reso-mg-b-30">
<div class="analytics-content">
<h5>Total Gallery Count</h5>

<h2><span class="text-success"><?php echo $count;?></span></h2>

 
</div>
</div>
</div>

<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
<?php  
include "config.php";

$sr_no=0;
$sql =mysql_query("SELECT * from certificate")or die(mysql_error($conn));
$count=mysql_num_rows($sql);

?>
<div class="analytics-sparkle-line reso-mg-b-30">
<div class="analytics-content">
<h5>Total Certificates Count</h5>
<h2><span class="text-success"><?php echo $count;?></span></h2>



</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
<?php  
include "config.php";

$sr_no=0;
$sql =mysql_query("SELECT * from press_coverge")or die(mysql_error($conn));
$count=mysql_num_rows($sql);

?>
<div class="analytics-sparkle-line reso-mg-b-30">
<div class="analytics-content">
<h5>Total Press Coverge Count</h5>
<h2><span class="text-success"><?php echo $count;?></span></h2>

</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
	<?php  
include "config.php";

$sr_no=0;
$sql =mysql_query("SELECT * from clients")or die(mysql_error($conn));
$count=mysql_num_rows($sql);

?>
<div class="analytics-sparkle-line reso-mg-b-30">
<div class="analytics-content">
<h5>Total Client Image Count</h5>
<h2><span class="text-success"><?php echo $count;?></span></h2>
</div>
</div>
</div>
</div>
</div>
</div>
<br>
<div class="analytics-sparkle-area">
<div class="container-fluid">
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
	<?php  
include "config.php";

$sr_no=0;
$sql =mysql_query("SELECT * from services")or die(mysql_error($conn));
$count=mysql_num_rows($sql);

?>
<div class="analytics-sparkle-line reso-mg-b-30">
<div class="analytics-content">
<h5>Total Services Count</h5>
<h2><span class="text-success"><?php echo $count;?></span></h2>

</div>
</div>
</div>

<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
	<?php  
include "config.php";

$sr_no=0;
$sql =mysql_query("SELECT * from testimonials")or die(mysql_error($conn));
$count=mysql_num_rows($sql);

?>
<div class="analytics-sparkle-line reso-mg-b-30">
<div class="analytics-content">
<h5>Total Testimonials Count</h5>
<h2><span class="text-success"><?php echo $count;?></span></h2>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
	<?php  
include "config.php";

$sr_no=0;
$sql =mysql_query("SELECT * from enquiry")or die(mysql_error($conn));
$count=mysql_num_rows($sql);

?>
<!--<div class="analytics-sparkle-line reso-mg-b-30">-->
<!--<div class="analytics-content">-->
<!--<h5>Total Enquiry Count</h5>-->
<!--<h2><span class="text-success"><?php echo $count;?></span></h2>-->
<!--</div>-->
<!--</div>-->
</div>


</div>
</div>
</div>
<br>



<div class="panel-body"></div>
<div class="panel-body"></div>
<div class="panel-body"></div>
<div class="panel-body"></div>
<div class="panel-body"></div>
<div class="panel-body"></div>
<div class="panel-body"></div>
<div class="panel-body"></div>
<div class="panel-body"></div>
<div class="panel-body"></div>
<div class="panel-body"></div>
<div class="panel-body"></div>



<?php
include "footer.php";
  
    
?> 