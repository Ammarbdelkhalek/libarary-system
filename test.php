<?php
// Connect to the database (replace with your credentials)
session_start();
   include 'db_connect.php';

// SQL query to fetch course data along with instructor name
$sql = "SELECT course.title AS course_title, Instructors.Name AS instructor_name, course.description AS course_description
        FROM course
        INNER JOIN Instructors ON course.instructor_id = Instructors.InstructorID";

$result = $conn->query($sql);

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Cards</title>
    <style>
        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            margin: 10px;
            width: 300px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
        }
        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                ?>
                <div class="card">
                    <h3><?php echo $row["course_title"]; ?></h3>
                    <p>Instructor: <?php echo $row["instructor_name"]; ?></p>
                    <p><?php echo $row["course_description"]; ?></p>
                </div>
                <?php
            }
        } else {
            echo "0 results";
        }
        ?>
    </div>
</body>
</html>
