<?php
include 'db.php';
$stmt = $conn->prepare("SELECT * FROM results");
$stmt->execute();
$result = $stmt->get_result();
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grading System</title>
</head>
<body>
    <h1>Student Grading System</h1>
    <h1></h1>

    <a href="add.php">Add Student Result</a>
    <form method="GET" action="">
        <input type="text" name="search" placeholder="Search by Student Name, Matric No, Subject Name, and Code" value="">
        <input type="submit" name="search" value="Search">
        <a href="index.php">Show All</a>
    
    </form>
    <table border="1">

        <tr>
            <th>No</th>
            <th>Student Name</th>
            <th>Matric No</th>
            <th>Subject Name</th>
            <th>Subject Code</th>
            <th>Test 1 (20)</th>
            <th>Test 2 (30)</th>
            <th>Final (50)</th>
            <th>Total (100)</th>
            <th>Grade</th>
            <th>Actions</th>
        </tr>
        <?php
        $no = 1;
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $no++ . "</td>";
            echo "<td>" . htmlspecialchars($row['student_name']) . "</td>";
            echo "<td>" . htmlspecialchars($row['matric_no']) . "</td>";
            echo "<td>" . htmlspecialchars($row['subject_name']) . "</td>";
            echo "<td>" . htmlspecialchars($row['subject_code']) . "</td>";
            echo "<td>" . number_format($row['test1'], 2) . "</td>";
            echo "<td>" . number_format($row['test2'], 2) . "</td>";
            echo "<td>" . number_format($row['final_exam'], 2) . "</td>";
            echo "<td>" . number_format($row['total_marks'], 2) . "</td>";
            echo "<td>" . htmlspecialchars($row['grade']) . "</td>";
            echo "<td><a href='edit.php?id=" . $row['id'] . "'>Edit</a> | <a href='delete.php?id=" . $row['id'] . "' onclick=\"return confirm('Are you sure you want to delete this record?')\">Delete</a></td>";
            echo "</tr>";
        }
        
        ?>
    </table>
</body>
</html>