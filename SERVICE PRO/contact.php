<?php
	$con=mysqli_connect("localhost","root","","houseservice");
	if(isset($_POST['submit']))
	{
	
		$cn=$_POST['cn'];
		$ml=$_POST['ml'];	
		$msg=$_POST['msg'];

		$d="INSERT INTO `contact` VALUES ('','$cn','$ml','$msg')";
		mysqli_query($con,$d);?>
        <script type="text/javascript">
		alert("Successfully send message..");
		window.location.href="index.php";
		</script>
        <?php
	
	}
	?>

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
	  <a class="navbar-brand" href="index.html">Service Pro</a>
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
          <a class="dropdown-item" href="servicep">Service Provider</a>
          
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

	<!-- Content -->
    
	<!-- contact -->

    <section class="contact py-lg-5 py-md-4 py-md-3 py-2">
	<div class="container py-4 mt-2">
				<h3 class="hdg mt-5">contact us</h3>
			<div class="row contact-form ">
				<div class="col-lg-6 wthree-form-left">
					<!-- contact form grid -->
					<div class="contact-top1">
						<form method="post" class="f-color">
							<div class="form-group">
								<label for="contactusername">Name</label>
								<input type="text" class="form-control" name=cn required>
							</div>
							<div class="form-group">
								<label for="contactemail">Email</label>
								<input type="email" class="form-control" name=ml required>
							</div>
							<div class="form-group">
								<label for="contactcomment">Your Message</label>
								<textarea class="form-control" rows="5" name=msg required></textarea>
							</div>
							<button type="submit" class="btn btn-info btn-block" name="submit">Send message</button>
						</form>
					</div>
					<!--  //contact form grid ends here -->
				</div>
				<!-- contact details -->
				<!-- contact map grid -->
				<div class="col-lg-6  mt-lg-0 mt-5 map contact-right">
					
					<div class="address mt-3">
						<h5 class="pb-3 text-capitalize">Contact info</h5>
						<address>
							<p class="c-txt">Edappally, Kochi, Kerala 670306.</p>
							<p>
								1234567891</p>
							<p>
								<p>
									<a href="#">www.servicepro.com</a>
								</p>
						</address>
					</div>
				</div>
				<!--//contact map grid ends here-->
			</div>
			<!-- //contact details container -->
		</div>
	</section>
	</section>
	<!-- //contact -->
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
	<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script> <!-- Team -->
	<script  src="js/bootstrap.min.js"></script>
	<script  src="js/move-top.js"></script>
	<script  src="js/easing.js"></script>
	<script  src="js/SmoothScroll.min.js"></script>	
	
		<script src="js/easy-responsive-tabs.js"></script>

	
	
	</body>
	</html>