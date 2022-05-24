<?php
    require_once "../web/db.php";
    $_REQUEST['id'];
    if(isset($_REQUEST['id']))
    {
       $id= $_REQUEST['id'];
       
       $delete = "DELETE FROM req_tbl WHERE rid=$id";
       $result = mysqli_query($conn, $delete);
       if($result!=0)
       {
           ?>
        <script>
        alert("successfully deleted");
        window.location.href="../web/req.php";
        </script>
        <?php
}
}

?>