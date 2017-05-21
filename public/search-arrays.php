<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

$query = 'Bob';

$namesResult = array_search($query, $names, $strict = true);

$compareResult = array_search($query, $compare, $strict = true);

// if ($result !== false) {
// 	echo $names[$namesResult] . PHP_EOL;
// } else {
// 	echo "Your input is not in our database" . PHP_EOL;
// }

function namesinCommon($namesResult,$compareResult) {
	
	foreach ($namesResult as $name) {
		if (array_search($name, $compareResult) !== false){
		echo $name;

	} else {
		echo "It's not here" . PHP_EOL;	
		}
	}
}

namesinCommon($names, $compare);

?>