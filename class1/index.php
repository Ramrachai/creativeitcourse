<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    $a = 20 ; 
    $b = 30 ; 
    $c = 'hello world'; 
    $d = 'do not hello '; 
    $e = [3,4,5,6]; 
    $f = [11,22,33,44,55];

    if ( gettype($a) == gettype($b)){
        echo " a and b  are same type" ; 
    } else {
        echo "a and b  are not same type";
    }
    echo "<hr>"; 

    if ( gettype($b) == gettype($c)){
        echo " b and c  are same type" ; 
    } else {
        echo "b and c  are not same type";
    }
    echo "<hr>"; 
    if ( gettype($c) == gettype($d)){
        echo " c and d  are same type" ; 
    } else {
        echo "c and d  are not same type";
    }
    echo "<hr>"; 
    if ( gettype($d) == gettype($e)){
        echo " d and e  are same type" ; 
    } else {
        echo "d and e  are not same type";
    }

    echo "<hr>"; 
    if ( gettype($e) == gettype($f)){
        echo " e and f  are same type" ; 
    } else {
        echo "e and f  are not same type";
    }
    
    echo "<hr>"; 
    
    ?>
</body>
</html>