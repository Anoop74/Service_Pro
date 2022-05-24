<!DOCTYPE html>
<html>
<?php
require_once "db.php";
require_once "../login/login.php";
    if (isset($_POST['submit'])) {
        $bio = $_POST['bio'];
        $t_id=$_SESSION['t_id']; 

     $updatebio = "UPDATE profile set descri='".$bio."' WHERE t_id='".$t_id."'";
        $result = mysqli_query($conn, $updatebio);

    if($result!=0)
    {
        ?>
        <script>
            alert("successfully updated");
            window.location.href="../web/index.php";
            </script>
            <?php
    }
}
      
?>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
.header {
  padding: 15px;
  text-align: center;
  background: #1abc9c;
  color: white;
  font-size: 10px;
}
</style>
<body>



<div>
  <form method="post">
  <div class="header">
  <h1>ENTER BIO</h1>
</div>
    <input type="text" id="bio" name="bio" placeholder="Your BIO..">
  
    <input type="submit" name="submit">
  </form>
</div>

</body>
</html>
