<?php
$con=mysqli_connect("localhost","root","","houseservice");
$idd=$_GET['id'];
$q="UPDATE `tech_login` SET status='reject' where t_id='$idd'";
mysqli_query($con,$q);

?> <script type="text/javascript">
 alert("Rejected successfully");
window.location.href="servphome.php";
 </script>