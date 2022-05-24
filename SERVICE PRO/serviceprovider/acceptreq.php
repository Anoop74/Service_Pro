<?php
ob_start();
session_start();
$con=mysqli_connect("localhost","root","","houseservice");
$idd=$_GET['reqid'];
$n=$_SESSION['t_id'];
$q="UPDATE req_tbl SET status='1',t_id='$n' where reqid='$idd'";
mysqli_query($con,$q);
?><script type="text/javascript">
 alert("Accepted successfully");
window.location.href="req.php";
 </script>