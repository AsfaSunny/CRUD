<?php


$stu_id = $_POST['id'];
$stu_name = $_POST['name'];
$stu_address = $_POST['address'];
$stu_class = $_POST['class'];
$stu_phone = $_POST['phone'];



$db_conn = mysqli_connect("localhost", "root", "", "crud_data") or die("connection failed");

$sql_queries = "UPDATE `student` 
				SET `stu_name`='$stu_name',`stu_address`='$stu_address',`stu_class`='$stu_class',`stu_phone`='$stu_phone'
				WHERE `stu_id`='$stu_id'";

$result = mysqli_query($db_conn, $sql_queries) or die("query can't run");


header("Location: http://localhost/crud_html/index.php");


mysqli_close($db_conn);


?>