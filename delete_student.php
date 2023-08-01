<?php
include('config.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM student WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Student deleted successfully.";
    } else {
        echo "Error deleting student: " . $conn->error;
    }
}

$conn->close();
?>
<br>
<a href="index.php">Back to Student List</a>
