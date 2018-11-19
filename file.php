<?php
$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'root';
$db_name = 'DataGridBase';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}
function sql(){
		if ($_GET['sort'] == 'NO'){
		    $order = "ORDER BY id";
		}
		elseif ($_GET['sort'] == 'CUSTOMER'){
		    $order = "ORDER BY name";
		}
		elseif ($_GET['sort'] == 'ITEM'){
		    $order = "ORDER BY item";
		}
		elseif($_GET['sort'] == 'AMOUNT'){
		    $order = "ORDER BY amount";
		}
		return $sql = 'SELECT * FROM sales '.$order;
}

$NameSql = 'SELECT name FROM sales';
$newQuery = mysqli_query($conn, $NameSql);
$option = array();
while ($row = mysqli_fetch_array($newQuery)){
	array_push($option, $row);
}

$ItemSql = 'SELECT item FROM sales';
$NextNewQuery = mysqli_query($conn, $ItemSql);
$items = array();
while ($rowe = mysqli_fetch_array($NextNewQuery)){
	array_push($items, $rowe);
}

	
$sql = sql();
$query = mysqli_query($conn, $sql);





?>