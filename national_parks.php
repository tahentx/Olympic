<?php

require __DIR__ . "/db_connection.php";

require __DIR__ . "/input.php";

function getLastPage ($connection, $limit){
	$statement = $connection->query("SELECT count(*) from parks");
	$count = $statement->fetch()[0]; 
	$lastPage = ceil($count / $limit);
	return $lastPage;
}

function getPaginatedParks ($connection, $page, $limit){
	$offset = ($page - 1) * $limit;
	$select = "SELECT * from parks limit $limit offset $offset";
	$statement = $connection->query($select);
	return $statement->fetchAll(PDO::FETCH_ASSOC); 
}

function controlRequests ($page) {
	if ($page < 1 || !is_numeric($page)){
		$page = 1;
	}
}


function pageController ($connection){
	$data = [];
	
	$limit = 4;
	$page = Input::get('page', 1);

	$lastPage = getLastPage($connection, $limit);

	handleOutOfRangeRequests($page, $lastPage);

	$data['parks'] = getPaginatedParks($connection, $page, $limit);
	$data['page'] = $page;
	$data['lastPage'] = $lastPage;

	return $data;

	$errors = [];

	try {
	$park->name = Input::getString('name'); 
	} catch (Exception $e) {
	    echo 'An error occurred: ' . $e->getMessage() . PHP_EOL;
	}

	try {
	$park->date_established = Input::getDate('date_established');
	}	catch (Exception $e) {
		echo 'There was an issue with your date format: ' . $e->getMessage() . PHP_EOL;
	}	

	try {
	$park->area_in_acres = Input::getNumber('area_in_acres');
	}	catch (Exception $e) {
		echo 'There was an issue with your number input: ' . $e->getMessage() . PHP_EOL;
	}

	if (!empty($errors)){
		echo "There was an issue with your input";		
	}
}

extract(pageController($connection));

?>


<!DOCTYPE html>
<html>
<head>
	<title>National Parks Application</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<h1>National Parks</h1>

<table>
	<tr>
		<th>Name</th>
		<th>Location</th>
		<th>Date Established</th>
		<th>Area in Acres</th>
	</tr>
<?php foreach ($parks as $park): ?> 
	<tr>
		<td><?= $park['name'] ?></td>
		<td><?= $park['location'] ?></td>
		<td><?= $park['date_established'] ?></td>
		<td><?= $park['area_in_acres'] ?></td>
	</tr>
<?php endforeach; ?>
</table>

<a href="/national_parks.php?page=<?= $page-1?>">Previous</a>
<a href="/national_parks.php?page=<?= $page+1?>">Next</a>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>