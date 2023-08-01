<?php
include('config.php');

// Fetch all students from the database
$sql = "SELECT * FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Student Management System</h2>";
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Email</th>
                <th>Action</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['name'] . "</td>
                <td>" . $row['age'] . "</td>
                <td>" . $row['email'] . "</td>
                <td><a href='delete_student.php?id=" . $row['id'] . "'>Delete</a></td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "No students found.";
}

$conn->close();
?>
<br>
<a href="add_student.php">Add New Student</a>
