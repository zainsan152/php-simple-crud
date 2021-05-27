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
<form action="insert.php" method="post">
    <input type="text" placeholder="First Name" name="fname"/><br>
    <input type="text" placeholder="Email" name="email"/><br>
    <input type="password" placeholder="Password" name="password"/><br>
    <input type="text" placeholder="Phone" name="phone"/><br>
    <input type="text" placeholder="Address" name="address"/><br>
    <button type="submit" name="submit">Submit</button>
    <br>
    <a href="view.php">View data</a>
</form>
</body>
</html>