<?php 
include 'header.php';

include 'config.php';



if (isset($_POST['deletebtn'])) {

    $del_id = $_POST['id'];


    $sql_queries = "DELETE FROM `student` WHERE `stu_id` = '$del_id'";

    $result = mysqli_query($db_conn, $sql_queries) or die("query can't run");



    header("Location: http://localhost/crud_html/index.php");

    mysqli_close($db_conn);
}


?>


<div id="main-content">
    <h2>Delete Record</h2>

    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">

        <div class="form-group">
            <label>ID</label>
            <input type="text" name="id" />
        </div>
        
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>

</div>
</div>
</body>
</html>
