<?php 

$conn = new mysqli('localhost', 'root', 'kamal', 'house_rental_db');

// Check connection
if ($conn->connect_error) {
    die("Could not connect to MySQL: " . $conn->connect_error);
}
?>
