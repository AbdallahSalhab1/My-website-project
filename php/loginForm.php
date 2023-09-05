<?php

session_start();
require("connect.php");

if(isset($_POST['login'])){
    $sql="SELECT * from regester where username=:username and password=:password";
    $statement=$pdo->prepare($sql);
    $username=$_POST['username'];
    $password=$_POST['password'];
    $statement->bindParam(":username",$username,PDO::PARAM_STR);
    $statement->bindParam(":password",$password,PDO::PARAM_STR);

    $statement->execute();

    $count=$statement->rowCount();
    if($count==1){
        $_SESSION['privilleged']=$username;
      
      header("location:services.php");
    } else{
        echo"invalid username or password";
    }
$pdo=null;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signin</title>
    <link rel="stylesheet" type="text/css" href="style.css/forms.css">
    <style type="text/css">
       body{
    background-image: url(images/abstract-cube-motif-vector-seamless-pattern-design-awesome-classic-product-design-fabric-backgrounds-invitations-packaging-design-projects-surface-pattern-design_562551-96.avif);
    
   }
     </style>
</head>
<body>
    <center>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
<div class="form">
        <form action="" method="POST">
            <h2>sign in</h2>
            <lable for="username">Username:</lable><br>
            <input type="text" id="username" name="username" placeholder="insert your username" required><br>
            <lable for="password">Password:</lable><br>
            <input type="password" id="password" name="password" placeholder="insert your password" required><br>
            
            <button type="submit" name="login">submit</button><br>
            <a href="index.html">press here to go back to the home screen</a><br>
            <a href="logout.php">press here to logout</a>



        </form>

        <footer>
            <a href="sighnup.php">press here if you dont have an account</a>
        </footer>
    </div>
</body>
</html>