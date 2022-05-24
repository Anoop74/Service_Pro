
<?php
	$con=mysqli_connect("localhost","root","","houseservice");
	if(isset($_POST['submit']))
	{
	
	$c=$_POST['c'];
	
	$d="INSERT INTO `city` VALUES ('','$c')";
	mysqli_query($con,$d);
	?>
	<script type="text/javascript">
		window.location.href="addcity.php";
	</script>
	<?php
	}

	if(isset($_GET['edit']))
	{
		$cid=$_GET['edit'];

		$d="DELETE FROM `city` WHERE cid=$cid";
		mysqli_query($con,$d);
	?>
	<script type="text/javascript">
		alert('Deletion successfull');
		window.location.href="addcity.php";
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
<!-- <div class="header-w3l" style="background: url('../images/bb2.jpg') no-repeat center center;background-size: cover;" > -->
	
		
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgba(10, 5, 5, 0.650);">
	  <a class="navbar-brand" href="#">Service Pro</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

	
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="adminhome.php">Dashboard</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Add
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="addservice.php">Add new Service</a>
          <a class="dropdown-item" href="#">Add new City</a>
          
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
	

	
		<!-- //header -->
	
		<!-- banner -->

	</div>
	</header>
	<!-- Content -->
	<section class="contact py-lg-5 py-md-4 py-md-3 py-2">
	<div class="container py-4 mt-2">
				<h3 class="hdg mt-5">ADD NEW CITY</h3>
				<form method="post">

				<div class="modal-body">
		  <div class="contact" id="contact">
			 <div class="container">
				<div class=" contact-form">
				   <form method="post">
					  <div class="row contact-bothside-agileinfo">
						 <div class="col-md-6 col-sm-6 col-xs-6 form-right form-left">
							<input type="text" name="c" placeholder="New city" required="" id="city">
						 </div>
						 </div>
						 <input type="submit" value="SUBMIT" name="submit">
					  </div>
</form>
	
	
	
	
	
	
	
<?php
$a="SELECT * FROM `city`";
$e=mysqli_query($con,$a);
?>

<table class="table table-hover mt-5">
<tr class="bg-dark">
<th>#</th>
<th>CITY</th>
<th>ACTION</th>
</tr>
<?php
while($f=mysqli_fetch_array($e))
{
?>
<tr>
<td><?php echo $f[0];?></td>
<td><?php echo $f[1];?></td>
<td><a href="addcity.php?edit=<?php echo $f[0]; ?>" class="btn btn-danger">DELETE</a></td>
</tr>
<?php
}
?>
</table>

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
	<script type="text/javascript" src="../js/jquery-1.7.1.min.js"></script> <!-- Team -->
	<script  src="../js/bootstrap.min.js"></script>
	<script  src="../js/move-top.js"></script>
	<script  src="../js/easing.js"></script>
	<script  src="../js/SmoothScroll.min.js"></script>	
	
		<script src="../js/easy-responsive-tabs.js"></script>

	
	
	</body>
	</html>