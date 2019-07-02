
<?php

session_start();
if(isset($_SESSION['id']) && isset($_SESSION['name']) )
{
  $id=$_SESSION['id'];
  $username=$_SESSION['name'];
  //$login_user=$_SESSION['user_id'];
}
else
{
  
  header('location:index.php');
} 


?> 
<!doctype html>
<html class="no-js" lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Dashboard | RB Solution</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- favicon
============================================ -->
<link rel="shortcut icon" type="image/x-icon" href="img/RB2.png">
<!-- Google Fonts
============================================ -->
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
<!-- Bootstrap CSS
============================================ -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Bootstrap CSS
============================================ -->
<link rel="stylesheet" href="css/font-awesome.min.css">
<!-- owl.carousel CSS
============================================ -->
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.transitions.css">
<!-- animate CSS
============================================ -->
<link rel="stylesheet" href="css/animate.css">
<!-- normalize CSS
============================================ -->
<link rel="stylesheet" href="css/normalize.css">
<!-- meanmenu icon CSS
============================================ -->
<link rel="stylesheet" href="css/meanmenu.min.css">
<!-- main CSS
============================================ -->
<link rel="stylesheet" href="css/main.css">
<!-- educate icon CSS
============================================ -->
<link rel="stylesheet" href="css/educate-custon-icon.css">
<!-- morrisjs CSS
============================================ -->
<link rel="stylesheet" href="css/morrisjs/morris.css">
<!-- mCustomScrollbar CSS
============================================ -->
<link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
<!-- metisMenu CSS
============================================ -->
<link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
<link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
<!-- calendar CSS
============================================ -->
<link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
<link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
<!-- style CSS
============================================ -->
<link rel="stylesheet" href="style.css">
<!-- responsive CSS
============================================ -->
<link rel="stylesheet" href="css/responsive.css">
<!-- modernizr JS
============================================ -->

<link rel="stylesheet" type="text/css" href="datatables/media/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="datatables/media/css/dataTables.bootstrap.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.css"/>
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
 
<div class="left-sidebar-pro">
<nav id="sidebar" class="">
<div class="sidebar-header">
<a href="dashboard.php"><img class="main-logo" src="img/RB2.png" alt="" height="109px" width="166px" /></a>
<strong><a href="dashboard.php"><img src="img/RB2.png" alt="" height="65px" width="59px" /></a></strong>
</div>
<div class="left-custom-menu-adp-wrap comment-scrollbar">
<nav class="sidebar-nav left-sidebar-menu-pro">
<ul class="metismenu" id="menu1">
<li></li>
<li></li>
<li>
<a title="Landing Page" href="gallery.php" aria-expanded="false"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span><span class="mini-click-non">Gallery</span></a>
</li>


<li>
<a title="Landing Page" href="certificate.php" aria-expanded="false"><span class="fa fa-wpforms" aria-hidden="true"></span> <span class="mini-click-non">Certificates</span></a>
</li>

<li>
<a title="Landing Page" href="press_coverge.php" aria-expanded="false"><span class="fa fa-newspaper-o" aria-hidden="true"></span> <span class="mini-click-non">Press Coverge</span></a>
</li>

<li>
<a title="Landing Page" href="clients.php" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <span class="mini-click-non">Clients</span></a>
</li> 


<li>
<a title="Landing Page" href="services.php" aria-expanded="false"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> <span class="mini-click-non">Services</span></a>
</li>
<li>
<a title="Landing Page" href="testimonials.php" aria-expanded="false"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> <span class="mini-click-non">Testimonials</span></a>
</li>
<!--<li>-->
<!--<a title="Landing Page" href="enquiry.php" aria-expanded="false"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> <span class="mini-click-non">Enquiry</span></a>-->
<!--</li>-->


</ul>
</nav> 
</div> 
</nav>
</div> 