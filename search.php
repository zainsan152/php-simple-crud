<?php
require_once 'conn.php';

$sql = '';
$row = array();
if (isset($_GET['user_id'])) {
    $id = $_GET['user_id'];
    $sql = "SELECT * FROM users WHERE id = $id";
    print $sql;
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();
}

print_r($row);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
    <input type="text" name="user_id"><br>
    <button type="submit">Search</button>
    <br>
    <button type="reset">Reset</button>
</form>

</body>
</html>
