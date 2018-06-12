<?php
$connect = mysqli_connect("localhost", "root", "", "pupmcc")or die (mysqli_error());

//alert('warning');
if(isset($_POST['id']))
{

 $query = "SELECT FamilyID,  FamilyName 
 		FROM family_tbl  
		WHERE FamilyID = '".$_POST['id']."'";


 $result= mysqli_query($connect, $query);
 $row = mysqli_fetch_array($result);
 echo json_encode($row);


}
?>

