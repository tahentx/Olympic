<?php


require __DIR__ . '/db_connection.php';

$truncate = 'TRUNCATE national_parks';

$connection->exec($truncate);

$parks = [
['name'=>'Big Bend', 'area_in_acres'=>'801163', 'date_established'=>'1944-12-10', 'location'=>'Texas'],

['name'=>'Acadia', 'area_in_acres'=>'48995', 'date_established'=>'1222-12-12', 'location'=>'Maine'],

['name'=>'American Samoa', 'area_in_acres'=>'8256', 'date_established'=>'1988-10-31', 'location'=>'American Samoa'],

['name'=>'Arches', 'area_in_acres'=>'67678', 'date_established'=>'1971-11-12', 'location'=>'Utah'],

['name'=>'Badlands', 'area_in_acres'=>'996263', 'date_established'=>'1978-11-10', 'location'=>'South Dakota'],

['name'=>'Biscayne', 'area_in_acres'=>'172971', 'date_established'=>'1980-06-28', 'location'=>'Florida'],

['name'=>'Bryce Canyon', 'area_in_acres'=>'35835', 'date_established'=>'1928-02-25', 'location'=>'Utah'],

['name'=>'Canyonlands', 'area_in_acres'=>'337597', 'date_established'=>'1964-09-12', 'location'=>'Utah'],

['name'=>'Capitol Reef', 'area_in_acres'=>'241904', 'date_established'=>'1971-12-18', 'location'=>'Utah'],

['name'=>'Acadia', 'area_in_acres'=>'48995', 'date_established'=>'1222-12-12', 'location'=>'Maine'],

];

foreach ($parks as $park) {

$query = "INSERT INTO national_parks (name, area_in_acres, date_established, location)
	VALUES ('{$park['name']}', '{$park['area_in_acres']}', '{$park['date_established']}', '{$park['location']}')";

$connection->exec($query);

echo "Insert ID:" . $connection->lastInsertId() . PHP_EOL;

};


?>