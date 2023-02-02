<?php

include 'config.php'; //database connection



$del_id = $_GET['id'];

$sql_queries = "DELETE FROM `student` WHERE `stu_id` = '$del_id'";

$result = mysqli_query($db_conn, $sql_queries) or die("query can't run");



header("Location: http://localhost/crud_html/index.php");

mysqli_close($db_conn);


?>