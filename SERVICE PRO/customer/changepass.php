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
<script type="text/javascript">
function validation()
{
  var newpassword=/^[a-zA-Z0-9]{4,8}$/;
  var confirmpassword=/^[a-zA-Z0-9]{4,8}$/;
    var currentpassword=/^[a-zA-Z0-9]{4,8}$/;
	if(document.getElementById('p').value.length==0)
 {
   alert("please enter your current password");
   document.getElementById('p').focus();
   return false;
   }
   else if(document.getElementById('np').value.length==0)
 {
   alert("please enter new password");
   document.getElementById('np').focus();
   return false;
   }
   else if(!document.getElementById('np').value.match(newpassword))
   {
     alert("mismatch new password");
	 document.getElementById('np').focus();
	 return false;
   }
    else if(document.getElementById('cp').value.length==0)
 {
   alert("please enter confirm password");
   document.getElementById('cp').focus();
   return false;
   }
  else if(!document.getElementById('cp').value.match(confirmpassword))
   {
     alert("mismatch confirmpassword");
	 document.getElementById('cp').focus();
	 return false;
   }
  else if(!document.getElementById('np').value.match(document.getElementById('cp').value))
   
   {
     alert("mismatch password");
	 
	 return false;
   }
   }
   </script>
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
        <a class="nav-link" href="#">Change password</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="givefeed.php">Feedback</a>
      </li>

          


<li class="w3">
                            <a href="../logout.php" class="nav-link">Logout</a>
                        </li>

    </ul>
 
</nav>
	



	<!-- //banner-slider -->
    <section class="contact py-lg-5 py-md-4 py-md-3 py-2">
        <div class="container2">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card2 text-center justify-content-center shaodw-lg card-1 border-0 bg-white px-sm-2 mt-5">
                <div class="card-body show ">
                    <div class="row">
                        <div class="col">
                            <h3><b>CHANGE PASSWORD</b></h3>
                            <?php
                            
$s=@$_SESSION['uid'];
$con=mysqli_connect("localhost","root","","houseservice");
if(isset($_POST['SAVE']))
{
 
$p=$_POST['p'];
$np=$_POST['np'];
$cp=$_POST['cp'];
$q="select password from login where rid='".$_SESSION['uid']."' and password='$p' and type='customer'";
$e=mysqli_query($con,$q);

if($r=mysqli_fetch_array($e))
	{
	    if($np==$cp)
		 {
		 $up="UPDATE `login` SET `password`= '$np' WHERE rid='".$_SESSION['uid']."' and type='customer'";
		    mysqli_query($con,$up);
			$upd="UPDATE `customer_registration` SET `password`= '$np' WHERE id='".$_SESSION['uid']."'";
		    mysqli_query($con,$upd);
		 ?>
		 <script type="text/javascript">
		 alert("password changed successfully");
		 //window.location.href="view_login_D.php";
		 </script>
		 <?php
		 }
		 
	}
	else
	{?>
	<script type="text/javascript">
	alert("Please check your Current Password..");
	</script>
	<?php
	 
	 }
		   }
		   ?>


				
        <section class="contact_area p_120">
        <div class="container">
          <div class="row">
                <div class="col-lg-3">
                  <div class="contact_info"></div>
                </div>
                <div class="col-lg-9">
               
                    <form class="row contact_form"  method="post" id="contactForm" novalidate="novalidate" enctype="multipart/form-data">
                        <div class="col-md-6">
                           
                           <div class="form-group">
                                <input type="password" class="form-control" name="p" id="p"  placeholder="Current Password">
                            </div>  
                        
                        
                            <div class="form-group">
                                <input type="password" class="form-control" name="np" id="np"  placeholder="New Password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="cp" id="cp"  placeholder="Confirm Password">
                            </div>
                        <div class="col-md-12">
                            <input type="submit" name="SAVE" value="SAVE" onClick="return validation()" class="btn submit_btn"  style="margin-left:110px">
                        </div>
                        </div>
            </div>                    </form>
                </div>

        </div>
        </section>
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
