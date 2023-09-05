<?php
$id=0;
require'connect.php';
if(isset($_POST['update'])){
    $sql="UPDATE flight SET destination=:destination, startingdate=:startingdate, num_of_days=:num_of_days where id=:id";
    $statement=$pdo->prepare($sql);
    $destination=$_POST['destination'];
    $startingdate=$_POST['startingdate'];
    $num_of_days=$_POST['num_of_days'];
    $id=$_POST['id'];
  
    $statement->bindParam(":destination",$destination,PDO::PARAM_STR);
    $statement->bindParam(":startingdate",$startingdate,PDO::PARAM_STR);
    $statement->bindParam(":num_of_days",$num_of_days,PDO::PARAM_STR);
    $statement->bindParam(":id",$id,PDO::PARAM_STR);
    $statement->execute();

}

//if ($id=0){echo"warning"};
$sql="SELECT id, destination, startingdate, num_of_days from flight where id=$id";
$statement=$pdo->prepare($sql);
$statement->execute();
$data=$statement->fetchAll();
echo"<h2>";
foreach($data as $row){
 

   echo 'destination:'.$row['destination']. '<br>startingdate:' .$row['startingdate']. '<br>number of days:' .$row['num_of_days'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>editbooking</title>
</head>
<body>
  <br>
  <a href="viewallbookings.php">go back</a>
</body>
</html>