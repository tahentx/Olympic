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
		echo $name . PHP_EOL;

	} else {
		echo "Indices don't match" . PHP_EOL;	
		}
	}
}
namesinCommon($names, $compare);

//====

	array_push($names, "Tommy");
	array_unshift($names, "Fred");

	array_push($compare, "Tommy");
	array_unshift($compare, "Doug");
	array_unshift($compare, "Reggie");

function combine_arrays($names,$compare) {
	print_r($names);
	print_r($compare);
}

echo combine_arrays($names, $compare);

?>

