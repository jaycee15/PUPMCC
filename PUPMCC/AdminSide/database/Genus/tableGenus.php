<?php 

	$connect = mysqli_connect("localhost", "root", "", "pupmcc") or die (mysqli_error());

	$columns = array('GenusID', 'FamilyName', 
		'GenusName' 
	 	);

	$query = "SELECT GenusID, FamilyName, GenusName  
		  		FROM genus_tbl G JOIN 
		  		family_tbl F on G.FamilyID = F.FamilyID ";

	// datatable column index  => database column name
	
if(isset($_POST['search']['value']) ) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter AND ItemOnHandStatus = 1
	 $query .= ' 
 		WHERE GenusName LIKE "%'.$_POST["search"]["value"].'%" AND  G.isDeleted = 0  
 		';
}

if(isset($_POST["order"]))
{
 $query .= ' ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir']. ' 
 ';
}
else
{
 $query .= ' ORDER BY GenusID ASC ';
}

$query1 = '';
if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$filter_row = mysqli_query($connect, $query);
$number_filter_row = mysqli_num_rows($filter_row);

$result = mysqli_query($connect, $query . $query1);

$data = array();


while($row = mysqli_fetch_array($result)) {  // preparing an array
	$sub_array = array();
	$sub_array[] = '<div contenteditable class="update" data-id="'.$row["GenusID"].'" 	data-column="GenusID">' . $row["GenusID"] . '</div>';
	$sub_array[] = '<div contenteditable class="update" data-id="'.$row["GenusID"].'" data-column="FamilyName">' . $row["FamilyName"] . '</div>';
 	$sub_array[] = '<div contenteditable class="update" data-id="'.$row["GenusID"].'" data-column="GenusName">' . $row["GenusName"] . '</div>';
	$sub_array[] = 
		'
		<button type="button" name="edit" class="btn btn-success fa fa-edit btn-sm btnViewGenus" id="'.$row["GenusID"].'"></button>

		<button type="button" name="delete" class="btn btn-danger fa fa-trash btn-sm btnDeleteGenus" id="'.$row["GenusID"].'"></button>';
	
	$data[] = $sub_array;
}


function get_all_data($connect)
{
 $query = "SELECT * FROM genus_tbl Where isDeleted = 0";
 $result = mysqli_query($connect, $query);
 return mysqli_num_rows($result);
}

$output = array(
 //"draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($connect),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);  // send data as json format



?>
