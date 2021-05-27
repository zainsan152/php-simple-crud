<?php
require_once 'conn.php';
$id = $_GET['user_id'];

$sql = "DELETE FROM users WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header('location:view.php');
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
