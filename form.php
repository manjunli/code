<?php
if(isset($_POST['submit'])){
 $username= $_POST['username'];   
 $password= $_POST['password'];
 if(strlen($username)<5){
     echo"username has to be longer than 5.";
 }



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    
<form action="form.php" method="post">

<input type= "text" name="username" placeholder="Enter Username"><br>

<input type= "password" name="password" placeholder="Enter Password"><br>    
<input type="submit" name="submit">
   
    
      </form>   
</body>
</html>