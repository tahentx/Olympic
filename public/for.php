<?php

fwrite(STDOUT, 'Input a starting number');

$startNumber = trim(fgets(STDIN));

fwrite(STDOUT, 'Input an ending number');

$endingNumber = trim(fgets(STDIN));

for ($i = $startNumber; $i <= $endingNumber; $i += 1) {
	echo "\$i has a value of {$i}\n";
}


?>