<?php

require_once 'conn.php';
echo '<pre>', print_r($_POST), '</pre>';
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Email is invalid';
        die();
    }

    $sql = "INSERT INTO users (`f_name`, `email`, `password`, `phone`, `address`)
VALUES ('$fname', '$email', '$password', '$phone', '$address')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}

$conn->close();
