<?php include('config.php'); ?>
<h2>Add New Student</h2>
<form action="" method="POST">
    Name: <input type="text" name="name" required><br>
    Age: <input type="number" name="age" required><br>
    Email: <input type="email" name="email" required><br>
    <input type="submit" name="submit" value="Add Student">
</form>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];

    $sql = "INSERT INTO student (name, age, email) VALUES ('$name', '$age', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "New student added successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
<br>
<a href="index.php">View All Students</a>
