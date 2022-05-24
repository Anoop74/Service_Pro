<?php
	$con=mysqli_connect("localhost","root","","houseservice");
	if(isset($_POST['submit']))
	{
	
	$u=$_POST['nm'];
	
	$a=$_POST['city'];
	$ph=$_POST['ph'];
	$g=$_POST['em'];
	
	$e=$_POST['un'];
	$pw=$_POST['psw'];
	$d="INSERT INTO `customer_registration` VALUES ('','$u','$a','$ph','$g','$e','$pw')";
	mysqli_query($con,$d);
	$b="INSERT into `login` values('','$e','$pw','customer')";
	mysqli_query($con,$b);
	}

	?>
<!DOCTYPE html>
<html>
<head>
<title>service pro</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link href="../css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
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

<div class="header-w3l" >	
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgba(10, 5, 5, 0.650);">
	  <a class="navbar-brand" href="index.html">Service Pro</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="#navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
	</button>
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto">
		  <li class="nav-item ">
			<a class="nav-link" href="../index.php">Home </a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="../about.html">About</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="../services.php">Services</a>
		  </li>
		  <li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			  Registration
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
			  <a class="dropdown-item" href="#">Customer</a>
			  <a class="dropdown-item" href="typography.html">Service provider</a>
			  
			</div>
		  </li>
		  <li class="nav-item">
			<a class="nav-link " href="../contact.php">Contact</a>
		  </li>
	
	<li class="w3">
	<a href="../login.php" class="nav-link">Login</a>
	</li>
	
		</ul>
	 
	</nav>
	
		<!-- //header -->

	</div>
	</header>

	<!-- Content -->
    
	<!-- contact -->
	
    <section class="contact py-lg-5 py-md-4 py-md-3 py-2">
	<div class="container py-4 mt-2">
				<h3 class="hdg mt-5">customer registration</h3>
               <form method="post">
                  <div class="row contact-bothside-agileinfo">
                     <div class="col-md-6 col-sm-6 col-xs-6 form-right form-left">
                        <input type="text" name="nm" placeholder="Name" required="">
                     </div>
                     <div class="col-md-6 col-sm-6 col-xs-6 form-right ">
                        <!-- <input type="text" name="ct" placeholder="City" required=""> -->
						<?php
						$con=mysqli_connect("localhost","root","","houseservice");
						?>
						<select name="city"  style="position: relative">
							<option value="0">City</option>
							<?php
								$sql="select * from city ";
								$exe=mysqli_query($con,$sql);
								while($fetch=mysqli_fetch_array($exe))
								{
							?>
									<option value="<?php echo $fetch['cname'];?>"><?php echo $fetch['cname'];?></option>
							<?php
								}
							?>
							</select>
						<span class="fa fa-arrow-down" style="position: absolute;top: 15px;left: 92%;margin: 0;"></span>
                     </div>
                     <div class="col-md-6 col-sm-6 col-xs-6 form-right form-left">
                        <input type="email" name="em" placeholder="Email" required="">
                     </div>
                     <div class="col-md-6 col-sm-6 col-xs-6 form-right ">
                        <input type="text" name="ph" placeholder="Phone" required="">
                     </div>
                     <div class="col-md-6 col-sm-6 col-xs-6 form-right form-left">
                        <input type="text" name="un" placeholder="User name" required="">
                     </div>
                     
					 <div class="col-md-6 col-sm-6 col-xs-6 form-right ">
                        <input type="password" placeholder="Password" name="psw">
                        </div>
                     <div class="text-center mx-auto">
                     <input type="submit" value="REGISTER" name="submit"></div>

                  </div>
               </form>
            </div>
         </div>
	</section>

		
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
	
	<script  src="../js/jquery.min.v3.js"></script>
	<script type="text/javascript" src="../js/jquery-1.7.1.min.js"></script> <!-- Team -->
	<script  src="../js/bootstrap.min.js"></script>
	<script  src="../js/move-top.js"></script>
	<script  src="../js/easing.js"></script>
	<script  src="../js/SmoothScroll.min.js"></script>	
	
		<script src="../js/easy-responsive-tabs.js"></script>

	
	
	</body>
	</html>