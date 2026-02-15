<?php include "config/database.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Management System</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="container">

    <h1>Student Management</h1>

    <div class="top-bar">
        <a href="students/create.php" class="btn add-btn">+ Add Student</a>
        <input type="text" id="searchInput" placeholder="Search student...">
    </div>

    <div class="table-container">
        <table id="studentTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Course</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = mysqli_query($conn, "SELECT * FROM students");
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td><?= $row['full_name']; ?></td>
                    <td><?= $row['email']; ?></td>
                    <td><?= $row['phone']; ?></td>
                    <td><?= $row['course']; ?></td>
                    <td>
                        <a href="students/edit.php?id=<?= $row['id']; ?>" class="btn edit-btn">Edit</a>
                        <a href="students/delete.php?id=<?= $row['id']; ?>" class="btn delete-btn">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</div>

<script src="assets/js/script.js"></script>
</body>
</html>

