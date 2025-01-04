<?php
// review_handler.php

$config = include('config.php');
$database = $config['reviews'];

// echo "Database: " . $database . "<br>";
// echo "Mixtape: " . $mixtape . "<br>";

// Create a connection
try {
    $link = new PDO("sqlite:$database");
    $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connection to SQLite database successful.<br>";
} catch (PDOException $e) {
    die("Connection failed: " . htmlspecialchars($e->getMessage()));
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['stars']) && isset($_POST['comments'])) {
        $stars = intval($_POST['stars']);
        $comments = htmlspecialchars(trim($_POST['comments']));
        $date = date("Y-m-d H:i:s");

        try {
            $stmt = $link->prepare("INSERT INTO reviews_table (mixtape, stars, comments, date) VALUES (?, ?, ?, ?)");
            $success = $stmt->execute([$mixtape, $stars, $comments, $date]);

            if (!$success) {
                die("Error executing query");
            }
        } catch (PDOException $e) {
            die("Database error: " . htmlspecialchars($e->getMessage()));
        }
    }
}

// Fetch reviews
try {
    $stmt = $link->prepare("SELECT stars, comments, date FROM reviews_table WHERE mixtape = ? ORDER BY date DESC");
    $stmt->execute([$mixtape]);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (count($result) > 0) {
        echo "<div class='mixtape_div'>Feedback for " . htmlspecialchars($mixtape) . ":</div>";
        foreach ($result as $row) {
            $num = $row['stars'];
            echo "<div class='review-container'>";
            echo "<div class='stars_div'>" . str_repeat("*", $num) . "</div>";
            echo "<div class='comments_div'>" . htmlspecialchars($row['comments']) . "</div>";
            echo "<div class='date_div'>" . htmlspecialchars($row['date']) . "</div>";
            echo "</div>";
        }
    } else {
        echo "<div class='comments_div'>Be the first to review " . htmlspecialchars($mixtape) . "!<br><br></div>";
    }
} catch (PDOException $e) {
    die("Error fetching reviews: " . htmlspecialchars($e->getMessage()));
}

$link = null;
