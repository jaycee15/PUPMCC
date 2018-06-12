<?php
$connect = mysqli_connect("localhost", "root", "", "pupmcc")or die (mysqli_error());

//alert('warning');
if(isset($_POST['id']))
{

 $query = "SELECT GenusID, FamilyName,  GenusName 
 		   FROM genus_tbl G JOIN 
		  		family_tbl F on G.FamilyID = F.FamilyID 
		   WHERE GenusID = '".$_POST['id']."'";


 $result= mysqli_query($connect, $query);
 $row = mysqli_fetch_array($result);
 echo json_encode($row);


}
?>

