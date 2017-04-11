<?php

require __DIR__ . "/db_connection.php";

require "input.php";

$page = Input::get('page');
$limit = '4';
$offset = $limit * $page;

$select = "SELECT * FROM national_parks LIMIT {$limit} OFFSET {$offset}";

$statement = $connection->query($select);

$parks = [];

while ($park = $statement->fetchAll(PDO::FETCH_ASSOC)){
	$parks[] = $park;
};


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
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

</body>
</html>