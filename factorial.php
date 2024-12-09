<?php

function factorial($n) {
   
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        // Recursive call to calculate factorial
        return $n * factorial($n - 1);
    }
}

$num = 5; 

$result = factorial($num);
echo "Factorial of $num is: $result";
?>
