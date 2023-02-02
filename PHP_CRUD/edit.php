<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>

<?php 
    $db_conn = mysqli_connect("localhost", "root", "", "crud_data") or die("connection failed");

    $stu_id = $_GET['id'];

    $sql_queries = "SELECT * FROM `student` WHERE `stu_id` = {$stu_id}";

    $result = mysqli_query($db_conn, $sql_queries) or die("query can't run");

    if (mysqli_num_rows($result) > 0) {
      while ($data_row = mysqli_fetch_assoc($result)) {
?>    
    <form class="post-form" action="update_data.php" method="post">

      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="id" value="<?php echo $data_row['stu_id']; ?>"/>
          <input type="text" name="name" value="<?php echo $data_row['stu_name']; ?>"/>
      </div>

      <div class="form-group">
          <label>Address</label>
          <input type="text" name="address" value="<?php echo $data_row['stu_address']; ?>"/>
      </div>

      <div class="form-group">
          <label>Class</label>
          <select name="class">
          
              <?php 
                $sql_queries1 = "SELECT * FROM `classes`";
                $cls_result = mysqli_query($db_conn, $sql_queries1) or die("query can't run");

                if (mysqli_num_rows($cls_result) > 0) {
                  // echo '<select name="class">';

                  while ($select_row = mysqli_fetch_assoc($cls_result)) {
                    if ($select_row['class_id'] == $data_row['stu_class']) {
                      $select = "selected";
                    } else {
                      $select = "";
                    }
                    echo "<option {$select} value='{$select_row['class_id']}'>{$select_row['class_name']}</option>";
                  }

                  // echo "</select>";
                }
              ?>
          </select>
      </div>

      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="phone" value="<?php echo $data_row['stu_phone']; ?>"/>
      </div>

      <input class="submit" type="submit" value="Update"/>

    </form>

<?php 
  }
}
?>


</div>
</div>
</body>
</html>
