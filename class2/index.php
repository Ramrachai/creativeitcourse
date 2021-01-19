<!-- solved this problem in php.
1. Write a factorial program using for loop in php. 
2. Write a Program to create given pattern with * using for loop.
3. Write a PHP program to check whether a number is positive, negative or zero.
4. Write a PHP program to find the length of the string.
5. Write a program Odd and Even Number using php loop.
6. check if current year is leap year php. -->

<h1>Home work by Ram: </h1>

<h1>1. Factorial Program : </h1>
<?php

$factorial_input = 9;
$factorial_result = 1;

for ($i = $factorial_input; $i >= 1; $i--) {
    $factorial_result = $factorial_result * $i;
}
echo "Factorial of <b> $factorial_input   is  $factorial_result </b>"

?>
<hr>
<h1>2. Create Pattern </h1>

<?php

$how_many_stars = 20; 
for ($i = 1; $i <= $how_many_stars; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo " * ";
    }
    echo "<br/>";
}
?>


<h1>3. Positive / Negative checker: </h1>

<?php
$number = 0;
if ($number > 0) 
{
    echo $number . " is a positive number";
} else if ($number < 0) 
{
    echo $number . " is a negative number ";
} else if ($number == 0) // condition for zero
{
    echo "You have entered zero";
} else {
    echo " please enter a numeric value";
}
?>


<hr> 

<h1>4. Find lenth of a String </h1>
<?php 


function check_lenth($x) {
    $y = strlen($x) ; 
    echo " String lenth is :  $y " ; 
}


$string = "Check its lenth,, now ? "; 
check_lenth($string);

?>


<hr> 

<h1>5. Odd and Even number program:  </h1>
<?php 

function even($x) {
    echo "Even numbers till $x are: " ; 
    for ($i = 1; $i <=$x; $i++ ){
        if ($i% 2 == 0) {
            echo " $i , "; 
        }
    }
}

function odd($x) {
    echo "Odd numbers till $x are: " ; 
    for ($i = 1; $i <=$x; $i++ ){
        if ($i% 2 == 1) {
            echo " $i , "; 
        }
    }
}
 
even(25);
echo "<br>"; 
odd(30);

?>



<hr> 

<h1>6. Leap year checker:  </h1>
<?php 


function leapyear_check($x) {
    if ($x % 4 == 0) {
        echo "Wow, $x is Leap year"; 
    } else {
        echo " Sorry, $x is not leap year"; 
    }
}

leapyear_check(2024);

?>
