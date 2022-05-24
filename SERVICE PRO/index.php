
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
  body {
    letter-spacing: 0.9px;
    background-color: #fff;
}

.container2 {
    margin-top: 10px;
    margin-bottom: 10px
}

p {
    font-size: 14px
}
.pic {
    margin-top: 20px;
    margin-bottom: 20px
}

.card-block {
    width: 200px;
    border: 1px solid lightgrey;
    border-radius: 5px !important;
    background-color: #FAFAFA;
    margin-bottom: 10px
}


.card2 {
    padding-bottom: 10px;
    box-shadow: 2px 2px 10px 4px rgb(200, 167, 216)
}


.a {
    justify-content: center !important
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
        <a class="nav-link" href="#">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.html">About</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="services.php">Services</a>
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
                            <a href="login.php" class="nav-link">Login</a>
                        </li>

    </ul>
 
</nav>
	


	<!-- //header -->

	<!-- banner -->
	<!-- banner-slider -->
	<div class="w3l_banner_info">
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides" id="slider-3">
					<li>

						<div class="slider-img-3 position-relative w-100">
							<div class="slider_banner_info w-100">
					
								  <h1 style="color: aliceblue;position: absolute;top: 40%;left: 10%;transform: translate(-23%,-50%);">Welcome to Service <strong>Pro<br/></strong><span style="font-size: 2rem;font-family :'Roboto',sans-serif"> We are here for all your home needs</span> </h1>
								</div>
								
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //banner-slider -->
</div>
</header>
<section class="contact py-lg-5 py-md-4 py-md-3 py-2">
        <div class="container2">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card2 text-center justify-content-center shaodw-lg card-1 border-0 bg-white px-sm-2">
                <div class="card-body show ">
                    <div class="row">
                        <div class="col">
                            <h3><b>HOW IT WORKS</b></h3>
                        </div>
                    </div>
                    <div class="radio-group row justify-content-between px-3 text-center a">
                        <div class="col-auto mr-sm-2 mx-1 card-block py-0 text-center radio selected ">
                            <div class="flex-row">
                                <div class="col">
                                    <div class="pic"> <img class="irc_mut img-fluid" src="images/outsourcing-header-icon.png" width="100" height="100"> </div>
                                    <p><b>Choose your task & date and post a request</b></p>
                                </div>
                            </div>
                        </div>
                    <div class="radio-group row justify-content-between px-3 text-center a">
                        <div class="col-auto mr-sm-2 mx-5 card-block py-0 text-center radio selected ">
                            <div class="flex-row">
                                <div class="col">
                                    <div class="pic"> <img class="irc_mut img-fluid" src="images/servicedesk-header-icon.png" width="100" height="100"> </div>
                                    <p><b>You will get notification when your request is accepted</b></p>
                                </div>
                            </div>
                        </div>

                        <div class="radio-group row justify-content-between px-3 text-center a">
                        <div class="col-auto mr-sm-2 mx-5 card-block py-0 text-center radio selected ">
                            <div class="flex-row">
                                <div class="col">
                                    <div class="pic"> <img class="irc_mut img-fluid" src="images/OIP.jfif" width="100" height="100"> </div>
                                    <p><b>Service provider will be on your doorstep</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                   
            </div>
        </div>
    </div>
</div>
    </section>
<section class="bannerbottom py-lg-5 py-md-4 py-md-3 py-2">


  
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
  <img class="card-img-top"  src="images/<?php echo $f['image'];?>"  alt="">
  <div class="card-body">
    <h5 class="card-title"><?php echo $f['service'];?></h5>
    <div class="test-wel">	
      <p><strong><?php echo $f['description'];?></strong></p>
      <h4><b>Fixed charge:<?php echo $f['charge'];?>₹</b></h4>

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
      <h4><b>Fixed charge:<?php echo $f['charge'];?>₹</b></h4>


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