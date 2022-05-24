
<!DOCTYPE html>
<html>
<head>
<title>Service Pro</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
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
        <a class="nav-link" href="index.php">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.html">About</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Registration
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="customer/customer_reg.php">Customer</a>
          <a class="dropdown-item" href="serviceprovider/servp_reg.php">Service provider</a>
          
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="contact.php">Contact</a>
      </li>

<li class="w3">
                            <a href="login.php" class="nav-link">Login</a>
                        </li>

    </ul>
 
</nav>
	



	<!-- //banner-slider -->
</div>
</header>
<section class="bannerbottom py-lg-5 py-md-4 py-md-3 py-2">

  
<div class="bannerbottom py-lg-5 py-md-4 py-md-3 py-2 mt-4">
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
  <img class="card-img-top"  src="images/<?php echo $f['image'];?>"  alt="">
  <div class="card-body">
    <h5 class="card-title"><?php echo $f['service'];?></h5>
    <div class="test-wel">	
      <p><strong><?php echo $f['description'];?></strong></p>


    </div>
    <a href="login.php" class="btn btn-primary">Explore</a>
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
  <img class="card-img-top"  src="images/<?php echo $f['image'];?>"  alt="">
  <div class="card-body">
    <h5 class="card-title"><?php echo $f['service'];?></h5>
    <div class="test-wel">	
      <p><strong><?php echo $f['description'];?></strong></p>


    </div>
    <a href="login.php" class="btn btn-primary">Explore</a>
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


<section class="mission py-lg-5 py-md-4 py-md-3 py-2">

<div>
<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width slides/quotes -->
  <div class="mySlides">
  <img src="images/test1.jpg" alt="xyt" class="img-fluid">
    <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
    
  </div>

</div>


    



</section>


<!-- /Conatct -->
<!-- Footer-->
<section class="footer">
<div class="container">
<h3>Service Pro</h3>
     <div class="wrapper">
<ul class="social-icons icon-circle icon-zoom list-unstyled list-inline"> 
<li> <a href="#"><i class="fab fa-facebook-f"></i></a></li> 
<li> <a href="#"><i class="fab fa-twitter"></i></a></li> 
<li> <a href="#"><i class="fab fa-linkedin-in"></i></a></li>
</ul>
</div>
	</div>
</section>
<!-- /Footer-->


<script  src="js/jquery.min.v3.js"></script>
<script  src="js/bootstrap.min.js"></script>
<script  src="js/move-top.js"></script>
<script  src="js/easing.js"></script>
<script  src="js/SmoothScroll.min.js"></script>	


	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>





</body>
</html>