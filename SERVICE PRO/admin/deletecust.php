<?php
$con=mysqli_connect("localhost","root","","houseservice");
$idd=$_GET['rid'];
$q="DELETE from `login` where uid='$idd'";

mysqli_query($con,$q);

?> <script type="text/javascript">
 alert("successfully deleted ");
window.location.href="cust_list.php";
 </script>