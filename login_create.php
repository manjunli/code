<?php
if(isset($_POST['submit'])) {
$username= $_POST['username'];
$password=$_POST['password'];
$connection = mysqli_connect('localhost','root','','loginapp');
if ($connection) {
echo "we are connected to the database";} else {
die("database connected fail");}

    
$query= "INSERT INTO USERS(username,password)";
$query .="VALUES('$username','$password')";

  $result= mysqli_query($connection, $query); 
    if(!$result){
        die('query failed' . mysqli_error());
    }
    
    
    
    

    
  
}

 
 

?>

<!DOCTYPE html>

<html>

<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>

<body>

<div class="container">

  <div class="col-sm-6">
     <form action="login_create.php" method="post">
        <div class="form-group">
         <label for="username">Username</label>
          <input type="text" name="username" class="form-control">
        </div>

        <div class="form-group">
         <label for="password">Password</label>
          <input type="password" name="password" class="form-control">
        </div>

        <input type="submit" value="submit" name="submit" class="btn btn-primary">

     </form>
  </div>

</div>

</body>

</html>