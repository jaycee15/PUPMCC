<?php
$connect = mysqli_connect("localhost", "root", "", "pupmcc")or die (mysqli_error());

//alert('warning');
if(isset($_POST['id']))
{
 
  $query = "UPDATE family_tbl SET 
	isDeleted = 1
	WHERE FamilyID = '".$_POST['id']."'";


 mysqli_query($connect, $query);

 $connect->close();
}
?>