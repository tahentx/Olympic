<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

$query = 'Tina';

$result = array_search($query, $names, $strict = true);

if ($result !== false) {
	echo $names[$result] . PHP_EOL;
}


?>
