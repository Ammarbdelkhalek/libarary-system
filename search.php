 <?php
session_start();
include 'db_connect.php';
// Initialize variables for search results
$searchResults = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchTerm = htmlspecialchars($_POST['search']);

    // Prepare SQL query to search in books, instructors, and courses
    $sql = "SELECT 'Instructor' AS type, Name AS title, Specialization AS description 
            FROM Instructors 
            WHERE Name LIKE ? OR Specialization LIKE ?
            UNION
            SELECT 'Book' AS type, title, author AS description 
            FROM books 
            WHERE title LIKE ? OR author LIKE ?
            UNION
            SELECT 'Course' AS type, title, description 
            FROM course 
            WHERE title LIKE ? OR description LIKE ?";

    $stmt = $conn->prepare($sql);
    $likeSearchTerm = "%" . $searchTerm . "%";
    $stmt->bind_param("ssssss", $likeSearchTerm, $likeSearchTerm, $likeSearchTerm, $likeSearchTerm, $likeSearchTerm, $likeSearchTerm);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $searchResults[] = $row;
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>محرك البحث</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        header {
            background: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        header h1 {
            margin: 0;
        }
        .search-form {
            padding: 20px;
            background: #fff;
            margin-top: 20px;
            text-align: center;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .search-form input[type="text"] {
            width: 80%;
            padding: 10px;
            font-size: 16px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .search-form input[type="submit"] {
            padding: 10px 20px;
            background: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .search-results {
            padding: 20px;
            background: #fff;
            margin-top: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .search-results h2 {
            text-align: center;
        }
        .card {
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 10px 0;
        }
        .card-title {
            font-size: 1.5em;
            margin: 0 0 10px;
        }
        .card-description {
            font-size: 1em;
            color: #666;
        }
    </style>
</head>
<body>
    <header id = newsearch_engine>
        <h1>محرك البحث</h1>
    </header>
    <div class="container">
        <div class="search-form">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <input type="text" name="search" placeholder="ادخل عنصر البحث" required>
                <input type="submit" value="بحث">
            </form>
        </div>
        <div class="search-results">
            <h2>نتائج البحث</h2>
            <?php if (!empty($searchResults)): ?>
                <?php foreach ($searchResults as $result): ?>
                    <div class="card">
                        <div class="card-title">
                            <strong><?php echo $result['type']; ?>:</strong> <?php echo $result['title']; ?>
                        </div>
                        <div class="card-description">
                            <?php echo $result['description']; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>لا يوجد اي نتائج</p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
