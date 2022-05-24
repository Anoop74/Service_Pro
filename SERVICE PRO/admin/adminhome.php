<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" rel="stylesheet" type="text/css">
<link href="../css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="all">
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="//fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">

<style type="text/css">
  .nav-link:hover {
    color: #00ffff !important;
  }
</style>
</head>
<body>
<header>
	<!-- header -->
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgba(10, 5, 5, 0.650);">
	  <a class="navbar-brand" href="#">Service Pro</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

	
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="#">Dashboard</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Add
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="addservice.php">Add new Service</a>
          <a class="dropdown-item" href="addcity.php">Add new City</a>
          
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Customer
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
       
          <a class="dropdown-item" href="cust_list.php">Customer list</a>
          
        </div>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Service Providers
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="servp_requests.php">Service Provider requests</a>
          <a class="dropdown-item" href="servp_list.php">Service Provider list</a>
          
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Feedbacks & Queries
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		<a class="dropdown-item" href="enquiry.php">Enquiries</a>
          <a class="dropdown-item" href="feedbacks.php">Feedbacks</a>
          
        </div>
      </li>
          


<li class="w3">
                            <a href="../logout.php" class="nav-link">Logout</a>
                        </li>

    </ul>
 
</nav>
	



	<!-- //banner-slider -->
</div>
</header>
<section class="bannerbottom py-lg-5 py-md-4 py-md-3 py-2">

    <div class="container py-md-3 py-2">


<div class="bannerbottom py-lg-5 py-md-4 py-md-3 py-2">
<div class="container">
  <?php
  $count=0;
  				$con=mysqli_connect("localhost","root","","houseservice");
          $a="select * from services";
          $e=mysqli_query($con,$a);
          while($f=mysqli_fetch_array($e))
          {
            if($count==0)
            {
          ?>
<div class="row">
<div class="col-md-4 col-sm-12 w3_ban1">
<div class="card" >
  <img class="card-img-top"  src="../images/<?php echo $f['image'];?>"  alt="">
  <div class="card-body">
    <h5 class="card-title"><?php echo $f['service'];?></h5>
    <div class="test-wel">	
      <p><strong><?php echo $f['description'];?></strong></p>
      <h4><b>Fixed charge:<?php echo $f['charge'];?>₹</b></h4>


    </div>
    <a href="#" class="btn btn-primary">Explore</a>
  </div>
</div>
          </div>
<?php
            }
            else if($count>0)
            {
              ?>
              <div class="col-md-4 col-sm-12 w3_ban1">
<div class="card" >
  <img class="card-img-top"  src="../images/<?php echo $f['image'];?>"  alt="">
  <div class="card-body">
    <h5 class="card-title"><?php echo $f['service'];?></h5>
    <div class="test-wel">	
      <p><strong><?php echo $f['description'];?></strong></p>
      <h4><b>Fixed charge:<?php echo $f['charge'];?>₹</b></h4>


    </div>
    <a href="#" class="btn btn-primary">Explore</a>
  </div>
</div>
            </div>
<?php
            }
            $count++;
            if($count==3) {
              $count=0;
              ?>
              </div>
              <?php
            }
          }
          ?>
</section>
  


<!-- Footer-->
<section class="footer">
<div class="container">
<h3>Service Pro</h3>
     <div class="wrapper mt-5">
<h4>Aromal | Anoop</h4>
</div>
	</div>
</section>
<!-- /Footer-->

	
	<script  src="../js/jquery.min.v3.js"></script>
	<script type="text/javascript" src="../js/jquery-1.7.1.min.js"></script> 
	<script  src="../js/bootstrap.min.js"></script>
	<script  src="../js/move-top.js"></script>
	<script  src="../js/easing.js"></script>
	<script  src="../js/SmoothScroll.min.js"></script>	
	
		<script src="../js/easy-responsive-tabs.js"></script>

	
	
	</body>
	</html>->
