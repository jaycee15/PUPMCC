<?php
$connect = mysqli_connect("localhost", "root", "", "pupmcc")or die (mysqli_error());

//alert('warning');
if(isset($_POST['id']))
{
 
  $query = "UPDATE genus_tbl SET 
	isDeleted = 1
	WHERE GenusID = '".$_POST['id']."'";


 mysqli_query($connect, $query);

 $connect->close();
}
?>