<?php
require("connect.php");

if($_SERVER['REQUEST_METHOD']=='POST'){
  $sql="INSERT INTO regester (username,password,phone,email) values (:username,:password,:phone,:email)";
  $statement=$pdo->prepare($sql);
  $username=$_POST['username'];
  $password=$_POST['password'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
 // $gender=$_POST['gender'];

  $statement->bindParam(":username",$username,PDO::PARAM_STR);
  $statement->bindParam(":password",$password,PDO::PARAM_STR);
  $statement->bindParam(":phone",$phone,PDO::PARAM_STR);
  $statement->bindParam(":email",$email,PDO::PARAM_STR);
  //$statement->bindParam(":gender",$gender,PDO::PARAM_STR);
  $statement->execute();
  $pdo=null;

  
  echo "user added, go login:";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sighnup</title>
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
        <h2>sign up</h2>
        <lable for="username">Username:</lable><br>
        <input type="text" id="username" name="username" placeholder="insert your username" required><br>
        <lable for="password">Password:</lable><br>
        <input type="password" id="password" name="password" placeholder="insert your password" required><br>
        <lable for="phone">Phone number:</lable><br>
        <input type="text" id="phone" name="phone" placeholder="insert your phone number" required><br>
        <lable for="email">Email:</lable><br>
        <input type="email" id="email" name="email" placeholder="insert your email" required>
        <br>
        <!--Gender:
        <input type="radio" id="male" name="gender"><lable for="male">Male</lable>
        <input type="radio" id="female" name="gender"><lable for="female">Female</lable>
        <br>-->
        <button type="submit" name="submit">submit</button><br>
        <a href="loginForm.php">press here to go back and login</a>


    </form>
</div>
</body>
</html>