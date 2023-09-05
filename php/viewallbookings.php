<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>viewallbookings</title>
<style>
th.td{border-bottom:1px solid #ddd;}

tr:hover{background-color: #D3D3D3;}
    </style>
</head>
<body>
    <a href="booking.php">press here to go back to booking</a>
</body>
</html>


<?php
require("connect.php");
$sql="SELECT id, destination, startingdate, num_of_days from flight";
$statement=$pdo->prepare($sql);
$statement->execute();
echo"<table style='border:1px solid; width:80%; text-alighn:center; margin:auto;'>";
echo"<tr>";
echo"<th>destination</th>";
echo"<th>startingdate</th>";
echo"<th>num_of_days</th>";
echo"<th>edit</th>";
echo"<th>delete</th>";
echo"</tr>";
$data=$statement->fetchAll();

foreach($data as $row){
    echo"<tr>".
    "<td>" .$row['destination']. "</td>".
    "<td>" .$row['startingdate']. "</td>".
    "<td>" .$row['num_of_days']. "</td>".

    "<td>" ."<a href=viewbooking.php?id=".$row['id']."> edit </a></td>".
    "<td>" ."<a href=deletebooking.php?id=".$row['id']."> delete </a></td>".
    "</tr>";
}
?>