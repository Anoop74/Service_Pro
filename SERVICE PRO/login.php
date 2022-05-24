

<?php
ob_start();
session_start();
$con=mysqli_connect("localhost","root","","houseservice");
if(isset($_POST['submit']))
{
  
 $name=$_POST['un'];
 $pwd=$_POST['pwd'];
  $sql="select * from login where username='$name' && password='$pwd'";
  $exe=mysqli_query($con,$sql);
  $fetch=mysqli_fetch_array($exe);
  $count=mysqli_num_rows($exe);
  if($count>0)
  {
  $idd=$fetch['rid'];
  
  $_SESSION['uid']=$idd;
  $_SESSION['gid']=$fetch['username'];
  $type=$fetch['type'];
  if($type=="admin")
  {
  header("location:admin/adminhome.php");
  }
  elseif($type=="customer")
  {
    header("location:customer/customerhome.php");
	}
	 elseif($type=="servicepro")
    {
    header("location:serviceprovider/servphome.php");
	}
	}
	else
	{
    ?>
    <script>
	alert("Incorrect username or password");</script>
  <?php
	}
 }
 ?><!DOCTYPE html>
<html>
<head>
<title>service pro</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="//fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<style>



.card {
    width: 32%;
    padding: 30px;
    background:rgb(255, 255, 255);
    box-shadow: 0px 8px 8px 0px #1976D2;
    max-width: 511px;
}

.card0 {
    width: 100%;
    padding-right: 30px;
    box-shadow: none
}


input {
    padding: 1px 0px 3px 0px;
    border: none;
    border-bottom: 1px solid lightgrey;
    margin-bottom: 3px;
    margin-top: 2px;
    box-sizing: border-box;
    color: #000;
    font-size: 16px;
    letter-spacing: 1px;
    font-weight: 500
}

input:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border-bottom: 1px solid #EF5350;
    outline-width: 0
}

button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0
}


@media screen and (max-width: 1056px) {
    .card {
        width: 100%
    }

    .align {
        justify-content: center !important
    }
}
  .nav-link:hover {
    color: #00ffff !important;
  }

  .nav-link {
      color: #fff !important;
  }
</style>
</head>
<body>
<header>
	<!-- header -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgba(10, 5, 5, 0.650);font-weight: 500;">
	  <a class="navbar-brand text-white" href="#">Service Pro</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

	
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto" style="font-weight: 500;">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.html">About</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="services.html">Services</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Registration
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="customer/customer_reg.php">Customer</a>
          <a class="dropdown-item" href="serviceprovider/servp_reg.php">Service Provider</a>
          
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="contact.php">Contact</a>
      </li>

<li class="w3">
                            <a href="#" class="nav-link">Login</a>
                        </li>

    </ul>
 
</nav>
	


	<!-- //header -->


	</div>
	</header>
    <section class="contact py-lg-5 py-md-4 py-md-3 py-2" style="background-image:url('images/loginbg2.jpg'); background-size:cover">
	<div class="container py-4 mt-5">
    <div class="card p-0 border-0 rounded-0 mb-5">
    <form method="post">
            <div class="card border-0 rounded-0 card0">
                <h1 class="mb-0">Hello!</h1>
                <p>Please login with your account</p> 
                
                <label class="font-weight-bold mb-0">User name</label>
                <input type="text" name="un" required="" class="mb-4">
                                    
                 <label class="font-weight-bold mb-0">Password</label>
                  <input type="password" name="pwd" > 
                  <a href="customer/customer_reg.php" class="text-sm ml-auto text-dim">Customer Registration</a>
                <div class="row justify-content-center mt-4"> 
                <input type="submit" name="submit" value="Login"> </div>
          
    
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
	
	<script  src="js/jquery.min.v3.js"></script>
	<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script> 
	<script  src="js/bootstrap.min.js"></script>
	<script  src="js/move-top.js"></script>
	<script  src="js/easing.js"></script>
	<script  src="js/SmoothScroll.min.js"></script>	

	
		<script src="js/easy-responsive-tabs.js"></script>

	
	
	</body>
	</html>