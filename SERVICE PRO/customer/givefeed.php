<?php
	$con=mysqli_connect("localhost","root","","houseservice");
	if(isset($_POST['submit']))
	{
	
		$cn=$_POST['cn'];
		$ml=$_POST['ml'];
        $sd=$_POST['sd'];	
		$msg=$_POST['msg'];

		$d="INSERT INTO `feedback` VALUES ('','$cn','$ml','$sd','$msg')";
		mysqli_query($con,$d);?>
        <script type="text/javascript">
		alert("Successfully send feedback..");
		window.location.href="customerhome.php";
		</script>
        <?php
	
	}
	?>
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
        <a class="nav-link" href="customerhome.php">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="request.php">Services Requests</a>
		  <a class="dropdown-item" href="reqlist.php">Requests list</a>
          <a class="dropdown-item" href="servicestatus.php">Services status</a>
          
        </div>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="s.php">Notifications</a>
      </li>

        <li class="nav-item ">
        <a class="nav-link" href="changepass.php">Change password</a>
      </li>
   
      <li class="nav-item ">
        <a class="nav-link" href="#">Feedback</a>
      </li>

          


<li class="w3">
                            <a href="../logout.php" class="nav-link">Logout</a>
                        </li>

    </ul>
 
</nav>
	



	<!-- //banner-slider -->
</div>
</header>
<section class="contact py-lg-5 py-md-2 py-md-3 py-2">
	<div class="container py-4 mt-2">
				<h3 class="hdg mt-5">FEEDBACK</h3>
			<div class="row contact-form ">
				<div class="col-lg-6 wthree-form-left">
					<!-- contact form grid -->
					<div class="contact-top1">
						<form method="post" class="f-color">
							<div class="form-group">
								<label for="contactusername">Name</label>
								<input type="text" class="form-control" name=cn required>
							</div>
							<div class="col-md-12 col-sm-2 col-xs-6 form-right form-left">  
						<?php
						$con=mysqli_connect("localhost","root","","houseservice");
						?>
						<select name="ml"  style="position: relative">
							<option value="0">Service</option>
							<?php
								$sql="select * from services ";
								$exe=mysqli_query($con,$sql);
								while($fetch=mysqli_fetch_array($exe))
								{
							?>
									<option value="<?php echo $fetch['service'];?>"><?php echo $fetch['service'];?></option>
							<?php
								}
							?>
							</select>
							
                            						<?php
						$con=mysqli_connect("localhost","root","","houseservice");
						?>
						<select name="sd"  style="position: relative">
			
							<option value="0">Service provider</option>
							<?php
							$sql="select * from tech_login ";
							$exe=mysqli_query($con,$sql);
							while($fetch=mysqli_fetch_array($exe))
							{
						?>
								<option value="<?php echo $fetch['t_name'];?>"><?php echo $fetch['t_name'];?></option>
						<?php
							}
						?>
						</select>
							</div>
				<div class=form-group>
                       
								<label for="contactcomment">Feedback</label>
								<textarea class="form-control" rows="5" name=msg required></textarea>
							</div>
							<button type="submit" class="btn btn-info btn-block" name="submit">Submit</button>
						</form>
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
	
	<script  src="../js/jquery.min.v3.js"></script>
	<script type="text/javascript" src="../js/jquery-1.7.1.min.js"></script> 
	<script  src="../js/bootstrap.min.js"></script>
	<script  src="../js/move-top.js"></script>
	<script  src="../js/easing.js"></script>
	<script  src="../js/SmoothScroll.min.js"></script>	
	
		<script src="../js/easy-responsive-tabs.js"></script>

	
	
	</body>
	</html>
