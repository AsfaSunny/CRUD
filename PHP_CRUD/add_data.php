<?php


$stu_name = $_POST['name'];
$stu_address = $_POST['address'];
$stu_class = $_POST['class'];
$stu_phone = $_POST['phone'];



$db_conn = mysqli_connect("localhost", "root", "", "crud_data") or die("connection failed");

$sql_queries = "INSERT INTO `student`(`stu_name`, `stu_address`, `stu_class`, `stu_phone`) 
				VALUES ('$stu_name','$stu_address','$stu_class','$stu_phone')";

$result = mysqli_query($db_conn, $sql_queries) or die("query can't run");


header("Location: http://localhost/crud_html/index.php");


mysqli_close($db_conn);


?>