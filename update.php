<?php
require_once 'conn.php';
echo '<pre>', print_r($_POST), '</pre>';

if (isset($_POST['submit'])) {
    $id = $_POST['user_id'];
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Email is invalid';
        die();
    }

    $sql = "UPDATE `users` SET `f_name`='$fname',`email`='$email',`password`='$password',`phone`='$phone',`address`='$address' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "New record updated successfully";
        header('location:view.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}

$conn->close();
