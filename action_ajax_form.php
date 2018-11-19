<?php
require 'file.php';

if (isset($_POST["customer"]) && isset($_POST["item"]) && isset($_POST["amount"]) ) { 

	$cus = $_POST["customer"];
	$item = $_POST["item"];
	$am = $_POST["amount"];


	$AddQuery = "INSERT INTO
    `sales` (`id`, `name`, `item`, `amount`)
VALUES
    (null, '$cus', '$item', '$am')
";
	$query = mysqli_query($conn, $AddQuery);
}

if (isset($_POST["ChoseEdit"]) && isset($_POST["ChangeCustomer"]) && isset($_POST["ChangeItem"]) && isset($_POST["ChangeAmount"]) ) { 

	$edit = $_POST["ChoseEdit"];
	$cus = $_POST["ChangeCustomer"];
	$item = $_POST["ChangeItem"];
	$am = $_POST["ChangeAmount"];


	$ChangeQuery = "UPDATE sales
					SET name = '$cus', item = '$item', amount = '$am'
					WHERE name = '$edit'";
	$query = mysqli_query($conn, $ChangeQuery);
}

if (isset($_POST["ChoseEdit"]) && isset($_POST["ChangeCustomer"]) && isset($_POST["ChangeItem"]) && isset($_POST["ChangeAmount"]) ) { 

	$edit = $_POST["ChoseEdit"];
	$cus = $_POST["ChangeCustomer"];
	$item = $_POST["ChangeItem"];
	$am = $_POST["ChangeAmount"];


	$ChangeQuery = "UPDATE sales
					SET name = '$cus', item = '$item', amount = '$am'
					WHERE name = '$edit'";
	$query = mysqli_query($conn, $ChangeQuery);
}
if (isset($_POST["ChoseDelete"]) && isset($_POST["ChoseDeleteItem"])){
	$WhatToDelete = $_POST["ChoseDelete"];
	$WhatToDeleteItem = $_POST["ChoseDelete"];


	$DeleteQuery = "DELETE FROM sales WHERE name = '$WhatToDelete' AND item = '$WhatToDeleteItem'";

	$query = mysqli_query($conn, $DeleteQuery);

}

?>