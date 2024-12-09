<?php

function fibonacci($n) {
    $a = 0;  
    $b = 1;  
        
    echo "Fibonacci Series up to $n terms: \n";      
    echo $a . " " . $b . " ";   
    for ($i = 3; $i <= $n; $i++) {
        $nextTerm = $a + $b;
        echo $nextTerm . " ";
        $a = $b;
        $b = $nextTerm;
    }
}

fibonacci(20);
?>
