<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','user_db');

// get the post records

$txtEmail = $_POST['txtEmail'];
$txtpass = $_POST['txtpass'];


// database insert SQL code
$sql = "INSERT INTO `tbl_user` (`id`, `email`, `password`) VALUES ('0','$txtEmail', '$txtpass')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
	
}

?>