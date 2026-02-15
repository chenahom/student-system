<?php 
include "../config/database.php";

if (isset($_POST['submit'])) {
    $name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];

    mysqli_query($conn, "INSERT INTO students 
    (full_name, email, phone, course)
    VALUES ('$name', '$email', '$phone', '$course')");

    header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<div class="form-container">

    <div class="form-card">
        <h2>Add New Student</h2>

        <form method="POST">

            <div class="input-group">
                <label>Full Name</label>
                <input type="text" name="full_name" required>
            </div>

            <div class="input-group">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>

            <div class="input-group">
                <label>Phone</label>
                <input type="text" name="phone">
            </div>

            <div class="input-group">
                <label>Course</label>
                <input type="text" name="course">
            </div>

            <button type="submit" name="submit" class="btn submit-btn">
                Save Student
            </button>

            <a href="../index.php" class="back-link">← Back to Dashboard</a>

        </form>
    </div>

</div>

</body>
</html>

