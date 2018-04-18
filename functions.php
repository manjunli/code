<?php    include  "db.php"; ?>


<?php
function showalldata(){
    
    
    global $connection;
 $query = "SELECT * FROM users"; //pulling information from database uses table
 $result = mysqli_query($connection, $query); // send in the connection ($query)
 if (!$result) {
 die('query failed'. mysqli_error() );
 }

 while($row=mysqli_fetch_assoc($result)){
    $id = $row['id'];
         echo "<option value='$id'>$id</option>" ;
     } 


}




?>