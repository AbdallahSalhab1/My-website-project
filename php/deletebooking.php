<?php
require'connect.php';
$sql="DELETE from flight where id=:id";
$id=$_GET['id'];
$statement=$pdo->prepare($sql);
$statement->bindParam(":id",$id,PDO::PARAM_STR);
$statement->execute();
$pdo=null;

echo"the flight with the id $id has been deleted <br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete flight</title>
</head>
<body>
    <a href="booking.php">go to booking</a>
</body>
</html>