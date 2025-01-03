<?php
// review_handler.php

// Include the configuration
$config = include('config.php');
$database = $config['reviews'];

echo "Database: " . $database . "<br>";
echo "Mixtape: " . $mixtape . "<br>";

// Create a connection
try {
    $link = new PDO("sqlite:$database");
    $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection to SQLite database successful.<br>";
} catch (PDOException $e) {
    die("Connection failed: " . htmlspecialchars($e->getMessage()));
}

// Ensure `$mixtape` is set and valid
if (!isset($mixtape) || empty($mixtape)) {
    die("Mixtape not specified.");
}
$mixtape = htmlspecialchars(trim($mixtape)); // Sanitize to avoid XSS

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if stars and comments are set in POST data
    if (isset($_POST['stars']) && isset($_POST['comments'])) {
        $stars = intval($_POST['stars']);
        $comments = htmlspecialchars(trim($_POST['comments']));
        $date = date("Y-m-d H:i:s");

        // Debug sanitized input
        echo "Sanitized inputs: Mixtape=$mixtape, Stars=$stars, Comments=$comments, Date=$date<br>";

        try {
            // Prepare and execute the INSERT query
            $stmt = $link->prepare("INSERT INTO reviews_table (mixtape, stars, comments) VALUES (?, ?, ?)");
            $success = $stmt->execute([$mixtape, $stars, $comments]);

            if (!$success) {
                $errorInfo = $stmt->errorInfo();
                die("Error executing query: " . implode(", ", $errorInfo) . "<br>");
            } else {
                echo "Review submitted successfully!<br>";
            }
        } catch (PDOException $e) {
            die("Database error again: " . htmlspecialchars($e->getMessage()) . "<br>");
        }
    } else {
        die("Form data is incomplete. Stars or comments missing.<br>");
    }
}

// Prepare and execute the SELECT query
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
            echo "<div class='comments_div'><i>" . htmlspecialchars($row['comments']) . "</i></div>";
            echo "<div class='date_div'>" . htmlspecialchars($row['date']) . "</div>";
            echo "</div>";
        }
    } else {
        echo "<div class='comments_div'>Be the first to review this mixtape!</div>";
    }
} catch (PDOException $e) {
    die("Error fetching reviews: " . htmlspecialchars($e->getMessage()));
}

// Close connection
$link = null;
