<?php
    require_once "../web/db.php";
    $_REQUEST['id'];
    if(isset($_REQUEST['id']))
    {
       $id= $_REQUEST['id'];
       
       $up = "UPDATE req_tbl set status=1  WHERE rid=$id";
       $result = mysqli_query($conn, $up);
       if($result!=0)
       {
           ?>
        <script>
        alert("successfully Accepted");
        window.location.href="../web/req.php";
        </script>
        <?php
}
}

?>