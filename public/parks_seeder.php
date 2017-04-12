<?php 

require __DIR__ . '/db_connection.php';

$truncate = 'TRUNCATE national_parks';

$connection->exec($truncate);

$parks = [

['name'=>'Big Bend', 'area_in_acres'=>'801163', 'date_established'=>'1944-12-10', 'location'=>'Texas', 'description'=>' -'],

['name'=>'Acadia', 'area_in_acres'=>'48995', 'date_established'=>'1222-12-12', 'location'=>'Maine', 'description'=>' -'],

['name'=>'American Samoa', 'area_in_acres'=>'8256', 'date_established'=>'1988-10-31', 'location'=>'American Samoa', 'description'=>' -'],

['name'=>'Arches', 'area_in_acres'=>'67678', 'date_established'=>'1971-11-12', 'location'=>'Utah', 'description'=>' -'],

['name'=>'Badlands', 'area_in_acres'=>'996263', 'date_established'=>'1978-11-10', 'location'=>'South Dakota', 'description'=>'- '],

['name'=>'Biscayne', 'area_in_acres'=>'172971', 'date_established'=>'1980-06-28', 'location'=>'Florida', 'description'=>' -'],

['name'=>'Bryce Canyon', 'area_in_acres'=>'35835', 'date_established'=>'1928-02-25', 'location'=>'Utah', 'description'=>'- '],

['name'=>'Canyonlands', 'area_in_acres'=>'337597', 'date_established'=>'1964-09-12', 'location'=>'Utah', 'description'=>' -'],

['name'=>'Capitol Reef', 'area_in_acres'=>'241904', 'date_established'=>'1971-12-18', 'location'=>'Utah', 'description'=>' -'],

['name'=>'Acadia', 'area_in_acres'=>'48995', 'date_established'=>'1222-12-12', 'location'=>'Maine', 'description'=>' -'],

];

$statement = $connection->prepare("INSERT INTO national_parks (name, area_in_acres, date_established, location, description) VALUES (:name, :area_in_acres, :date_established, :location, :description)");

foreach ($parks as $park) {
	
	$statement->bindValue(':name', $park['name'],PDO::PARAM_STR);
	$statement->bindValue(':area_in_acres', $park['area_in_acres'],PDO::PARAM_STR);
	$statement->bindValue(':date_established', $park['date_established'],PDO::PARAM_STR);
	$statement->bindValue(':location', $park['location'],PDO::PARAM_STR);
	$statement->bindValue(':description', $park['description'],PDO::PARAM_STR);	

	$statement->execute();

	echo "Insert ID:" . $connection->lastInsertId() . PHP_EOL;

};

?>