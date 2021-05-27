<?php

require_once 'conn.php';

$sql = "SELECT * FROM users";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
    // output data of each row
    ?> <table border="1"><thead>
    <td>Sr.</td>
    <td>Name</td>
    <td>Email</td>
    <td>Phone</td>
    <td>Address</td>
    <td colspan="2">Actions</td>
    </thead><tbody><?php

    while($row = $result->fetch_assoc()) {
        ?> <tr><?php
        ?><td><?php echo $row['id']?></td><?php
        ?><td><?php echo $row['f_name']?></td><?php
        ?><td><?php echo $row['email']?></td><?php
        ?><td><?php echo $row['phone']?></td><?php
        ?><td><?php echo $row['address']?></td><?php
        ?><td><a href="edit_form.php?user_id=<?php echo $row['id']?>">Edit</a></td><?php
        ?><td><a href="delete.php?user_id=<?php echo $row['id']?>">Delete</a></tr><?php

    }?> </tbody></table><?php
} else {
    echo "0 results";
}
$conn->close();
?>
