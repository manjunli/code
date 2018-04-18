
 <?php  include "db.php";?>
<?php include "functions.php";?>
 
 



 
 
 
 
 
 
 
 
 

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Ressio</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
 <div class="container"><!--the type of login tag !-->

 <div class="col-sm-6"><!--dimension of the login tag!-->
 <form action="login_create.php" method="post">
        <div class="form-group">
         <label for="username">Username</label>
          <input type="text" name="username" class="form-control">
        </div>

        <div class="form-group"> <!--  the type of the form!-->
         <label for="password">Password</label>
          <input type="password" name="password" class="form-control">
        </div>
        
        <div class="form-group">
        
        
        
        
        
        
  <select name="id" id=""> 
      <!--<option value="">5</option>  !-->
           
          <?php
    
      showalldata();//function.php using include
      
      
      ?>
           
           
          
           
            </select>   
 </div>
        <input type="submit" value="UPDATE" name="submit" class="btn btn-primary">

     </form>
 </div>
 </div>
</body>
</html>