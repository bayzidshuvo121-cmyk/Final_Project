<?php
$conn = mysqli_connect("localhost", "root", "", "judging_db");

if (!$conn) { 
    die("Database Connection Failed: " . mysqli_connect_error()); 
}

// ONLY start the session if it hasn't been started yet
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>