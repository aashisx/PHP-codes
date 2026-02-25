<?php
$con = mysqli_connect('localhost', 'root', '', 'practice2');

if ($con) {
    $query = "SELECT * FROM course";
    $result = $con->query($query);

    if ($result && $result->num_rows > 0) {
        ?>
        <table border="1" cellpadding="8" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Credit</th>
                <th>Book</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['cname']; ?></td>
                    <td><?php echo $row['credit']; ?></td>
                    <td><?php echo $row['book']; ?></td>
                    <td><a href="edit-course.php?id=<?php echo $row['id']; ?>">Edit</a></td>
                    <td><a href="delete-course.php?id=<?php echo $row['id']; ?>">Delete</a></td>

                </tr>
                <?php
            }
            ?>
        </table>
        <?php
    } else {
        echo "No courses found or query failed.";
    }
} else {
    echo "Database connection failed: " . mysqli_connect_error();
}

mysqli_close($con);
?>