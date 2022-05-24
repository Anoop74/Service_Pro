<?php
ob_start();
session_start();
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
		  <a class="dropdown-item" href="#">Requests list</a>
          <a class="dropdown-item" href="servicestatus.php">Services status</a>
          
        </div>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="notifications.php">Notifications</a>
      </li>

        <li class="nav-item ">
        <a class="nav-link" href="changepass.php">Change password</a>
      
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="givefeed.php">Feedback</a>
      </li>

          


<li class="w3">
                            <a href="../logout.php" class="nav-link">Logout</a>
                        </li>

    </ul>
 
</nav>
	


	

	
		<!-- //header -->
	
		<!-- banner -->
		<div class="container px-1 px-md-4 py-5 mx-auto">
		<!-- //banner-slider -->
	</div>
	</header>
	<div class="container py-4 mt-2">
	<div class="grid_3 grid_4 w3layouts pt-4 mt-md-4">
				<h3 class="hdg">Your requests</h3>
				<form method="post">
				<table class="table table-hover">

<?php
$s=@$_SESSION['uid'];
$i=1;
$con=mysqli_connect("localhost","root","","houseservice");
$v="select * from req_tbl where status='0' and cus_id='$s'";
$f=mysqli_query($con,$v);
if(mysqli_num_rows($f)>0)
{?>
<tr>
<th>#</th>
<th>NAME</th>
<th>DATE</th>
<th>SERVICE</th>
<th colspan="2">ACTION</th>
</tr>
<?php
while($g=mysqli_fetch_array($f))
{
?>
<tr><td><?php echo $i;?></td>
<td>
<?php echo $g['cus_name'];?>
</td>
<td>
<?php echo $g['date'];?>
</td>
<td>
<?php echo $g['job'];?>
</td>


<td><a href="cancelreq.php?reqid=<?php echo $g['reqid'];?>"class="btn btn-danger">CANCEL</a></td>
</tr>
<?php
$i=$i+1;
}
}
else
{
?>
 <font color="#FF0000" size="+3" face="Times New Roman, Times, serif"><?php echo "NO REQUESTS FOUND";?></font>
 <?php
}
?>
</table>
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