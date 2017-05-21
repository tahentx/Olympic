<?php

function add($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
        return $a + $b;
    } else {
        return "ERROR: Both arguments must be numbers\n";
    }
}

function subtract($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a - $b;
    } else {
        return "ERROR: Both arguments must be numbers\n";
    }
}

function multiply($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a * $b;
    } else {
        return "ERROR: Both arguments must be numbers\n";
    }
}

function divide($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a / $b;
    } else if ($b !== 0) { 
    	return "ERROR: Can't divide by zero!";
    } else {
        return "ERROR: Both arguments must be numbers\n";
    }
}

echo add(10,12) . PHP_EOL;
echo subtract(10,12) . PHP_EOL;
echo multiply(10,12) . PHP_EOL;
echo divide(10,12) . PHP_EOL;

?>
