<?php
class dbcon
{
	function query($sql)
	{
		//echo $sql;
		$this->con=mysqli_connect("localhost","root","","dbplantnsry");
		$result=mysqli_query($this->con,$sql)or die("Error.".mysqli_error($this->con));
		return $result;
	}
}
?>