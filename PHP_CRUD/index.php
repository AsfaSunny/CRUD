<?php
include 'header.php';

include 'config.php';
?>

<div id="main-content">
    <h2>All Records</h2>

    <?php

        $sql_queries = "SELECT *
                        FROM student 
                        JOIN classes 
                        ON student.stu_class = classes.class_id;";

        $result = mysqli_query($db_conn, $sql_queries) or die("query can't run");


        if (mysqli_num_rows($result) > 0) { //DATABASE er data jodi 0 theke beshi hoy tobei dekhabe
    ?>

    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>

            <?php 
                while ($data_row = mysqli_fetch_assoc($result)) {
            ?>

            <tr>
                <td><?php echo $data_row['stu_id']; ?></td>
                <td><?php echo $data_row['stu_name']; ?></td>
                <td><?php echo $data_row['stu_address']; ?></td>
                <td><?php echo $data_row['class_name']; ?></td>
                <td><?php echo $data_row['stu_phone']; ?></td>
                <td>
                    <a href='edit.php?id=<?php echo $data_row['stu_id']; ?>'>Edit</a>
                    <a href='delete-data.php?id=<?php echo $data_row['stu_id']; ?>'>Delete</a>
                </td>
            </tr>

            <?php 
                }
            ?>

        </tbody>
    </table>

    <?php 
    } else {
            echo "<h2>But No Record Found</h2>";
    }

    mysqli_close($db_conn);
    ?>

</div>
</div>
</body>
</html>
