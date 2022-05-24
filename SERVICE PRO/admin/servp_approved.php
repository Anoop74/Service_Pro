<?php
ob_start();
session_start();
$con=mysqli_connect("localhost","root","","houseservice");
$idd=$_GET['id'];
$q="UPDATE tech_login SET status='approve' where t_id='$idd'";
mysqli_query($con,$q);

$v="SELECT t_name,t_pass from tech_login where t_id='$idd' and status='approve'";
$f=mysqli_query($con,$v);
$g=mysqli_fetch_array($f);
$u=$g['t_name'];
$w=$g['t_pass'];

$b="INSERT into `login` values('$idd','$u','$w','serviceprovider')";


 mysqli_query($con,$b);
?><script type="text/javascript">
 alert("Approved successfully");
window.location.href="servp_requests.php";
 </script>