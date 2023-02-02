<?php 
include 'header.php'; 

include 'config.php';

?>

<div id="main-content">
    <h2>Add New Record</h2>

    <form class="post-form" action="add_data.php" method="post">

        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" />
        </div>

        <div class="form-group">
            <label>Address</label>
            <input type="text" name="address" />
        </div>


        <div class="form-group">
            <label>Class</label>
            <select name="class">
                <option value="" selected disabled>Select Class</option>

            <?php

                $sql_queries = "SELECT * FROM `classes`";

                $cls_result = mysqli_query($db_conn, $sql_queries) or die("query can't run");

                while ($cls_row = mysqli_fetch_assoc($cls_result)) {
            ?>

                <option value="<?php echo $cls_row['class_id']; ?>">
                    <?php echo $cls_row['class_name']; ?>
                </option>

            <?php 
                } 
            ?>

            </select>
        </div>


        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="phone" />
        </div>

        <input class="submit" type="submit" value="Save"  />

    </form>

</div>
</div>
</body>
</html>
