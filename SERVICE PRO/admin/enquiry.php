<?php 
$con=mysqli_connect("localhost","root","","houseservice");
if(isset($_GET['edit']))
{
    $id=$_GET['edit'];

    $d="DELETE FROM `contact` WHERE id=$id";
    mysqli_query($con,$d);
?>
<script type="text/javascript">
    alert('Deletion successfull');
    window.location.href="enquiry.php";
</script>
<?php
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
		<a class="dropdown-item" href="#">Enquiries</a>
          <a class="dropdown-item" href="feedbacks.php">Feedbacks</a>
          
        </div>
      </li>

<li class="w3">
                            <a href="../logout.php" class="nav-link">Logout</a>
                        </li>

    </ul>
 
</nav>
	



	
		<!-- //header -->

	</div>
	</header>

	<!-- Content -->
	<section class="contact py-lg-5 py-md-4 py-md-3 py-2">
	<div class="container py-4 mt-2">
				<h3 class="hdg mt-5">ENQUIRIES</h3>
				<form method="post">



<?php

$con=mysqli_connect("localhost","root","","houseservice");
$v="select * from contact";
$f=mysqli_query($con,$v);
if(mysqli_num_rows($f)>0)
{
    ?>
				
				<table class="table table-hover">
<tr>
<th>#</th>
<th>NAME</th>
<th>EMAIL</th>
<th>MESSAGE</th>
<th colspan="2">ACTION</th>
</tr>
<?php
while($g=mysqli_fetch_array($f))
{
?>
<tr>
<td>
<?php echo $g['id'];?>
</td>
<td>
<?php echo $g['name'];?>
</td>
<td>
<?php echo $g['email'];?>
</td>
<td>
<?php echo $g['message'];?>
</td>
<td><a href="enquiry.php?edit=<?php echo $g["id"]; ?>" class="btn btn-danger">DELETE</a></td>
</tr>
<?php
}
}
else
{
?>
<div class="text-center mx-auto">
<font color="#FF0000" size="+3" face="Times New Roman, Times, serif" style="margin-top:50px"><?php echo "NO DATA FOUND";?></font>
</div>
<?php
}

?>
</table>
</form>


		  </div>
		  
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
	<script type="text/javascript" src="../js/jquery-1.7.1.min.js"></script> <!-- Team -->
	<script  src="../js/bootstrap.min.js"></script>
	<script  src="../js/move-top.js"></script>
	<script  src="../js/easing.js"></script>
	<script  src="../js/SmoothScroll.min.js"></script>	
	
		<script src="../js/easy-responsive-tabs.js"></script>

	
	
	</body>
	</html>