<?php
require_once 'conn.php';
$id = $_GET['user_id'];

$sql = "SELECT * FROM users WHERE id = $id";
$result = $conn->query($sql);

$row = $result->fetch_assoc();
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
<form action="update.php" method="post">
    <input type="hidden" name="user_id" value="<?php echo $id?>"/>
    <input type="text" placeholder="First Name" name="fname" value="<?php echo $row['f_name']?>"/><br>
    <input type="text" placeholder="Email" name="email" value="<?php echo $row['email']?>"/><br>
    <input type="password" placeholder="Password" name="password" value="<?php echo $row['password']?>"/><br>
    <input type="text" placeholder="Phone" name="phone" value="<?php echo $row['phone']?>"/><br>
    <input type="text" placeholder="Address" name="address" value="<?php echo $row['address']?>"/><br>
    <button type="submit" name="submit">Submit</button>
    <br>
</form>
</body>
</html>
