<?php
$con=mysqli_connect("localhost","root","","houseservice");
$idd=$_GET['reqid'];
$q="DELETE from `req_tbl` where reqid='$idd'";

mysqli_query($con,$q);

?> <script type="text/javascript">
 alert("successfully cancelled ");
window.location.href="customerhome.php";
 </script>