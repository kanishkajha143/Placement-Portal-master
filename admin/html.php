<?php // opening php tags

session_start(); // Adding semicolon to end the statement

// Adding single quotes around the filename
require_once('Placement_portal.php');

$sql = "SELECT * FROM users"; // SQL queries should be in uppercase

$result = $conn->query($sql); // Adding semicolon to end the statement

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) { // Fetching each row into $row variable
        echo $row['Name']; // Removing unnecessary echo and double quotes
    }
}

?> // closing php tags
