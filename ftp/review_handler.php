<?php
// review_handler.php

// Include the configuration
$config = include('config.php');
$host_name = $config['host_name'];
$database = $config['database'];
$user_name = $config['user_name'];
$password = $config['password'];

// Create a connection
$link = new mysqli($host_name, $user_name, $password, $database);

// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['stars']) && isset($_POST['comments'])) {
        $stars = intval($_POST['stars']);
        $comments = trim($_POST['comments']);
        # $comments = $link->real_escape_string($comments);
        $date = date("Y-m-d H:i:s");

        // Prepare and execute the INSERT query
        $stmt = $link->prepare("INSERT INTO reviews (mixtape, stars, comments, date) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("siss", $mixtape, $stars, $comments, $date);

        if (!$stmt->execute()) {
            die("Error executing query: " . $stmt->error);
        }
        $stmt->close();
    }
}

// Prepare and execute the SELECT query
$stmt = $link->prepare("SELECT mixtape, stars, comments, date FROM reviews WHERE mixtape = ? ORDER BY date DESC");
$stmt->bind_param("s", $mixtape);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "<div class='mixtape_div'>Feedback for " . htmlspecialchars($mixtape) . ":</div>";
    while ($row = $result->fetch_assoc()) {
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

// Close statement and connection
$stmt->close();
$link->close();
