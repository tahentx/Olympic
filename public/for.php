<?php

do {

	fwrite(STDOUT, 'Input a starting number');
	$startNumber = trim(fgets(STDIN));

} while (!is_numeric($startNumber));

do {

	fwrite(STDOUT, 'Input an ending number');
	$endingNumber = trim(fgets(STDIN));

} while (!is_numeric($endingNumber));

fwrite(STDOUT, 'Input an incrementing value');
$userIncrement = trim(fgets(STDIN));

for (
	$i = $startNumber; 
	$i <= $endingNumber; 
	$i += $userIncrement

	){
	echo "\$i has a value of {$i}\n";
}

?>