<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

   
   
   <?php
function addnumber($number1,$number2){
    
$sum = $number1+$number2;    
    
    
 return $sum ;
    
     
}     
    
 $result = addnumber(77,88);

    
    echo $result;
    echo"<br>";
 $result= addnumber(100, $result);//$result become 77+88.
    
 echo $result;   
    
        echo"<br>";
    $result=addnumber($result,30000);
    echo $result;

    ?>







</body>
</html>