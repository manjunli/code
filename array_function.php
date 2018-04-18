<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>


<?php
    // php.net/manual/en/ref.array.php
    
    $list=[343,34,323,23,54,232,453];
    echo max($list);
    
    echo"<br>";
    echo min($list)."<br>";
   sort($list);//from small to big
    print_r($list);
    
?>

</body>
</html>  
 