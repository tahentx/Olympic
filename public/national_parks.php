<?php

require __DIR__ . "/db_connection.php";

require __DIR__ . "/../input.php";


// function controlUserInput ($connection) {
// 	$statement->bindValue(':description', PDO::PARAM_STR);
// 	$statement->bindValue(':area_in_acres', PDO::PARAM_INT);
// }


function getLastPage ($connection, $limit){

	$statement = $connection->prepare("SELECT count(*) from national_parks");
	// $statement = $connection->query("SELECT count(*) from national_parks");
	$count = $statement->fetch()[0]; 
	$lastPage = ceil($count / $limit);
	return $lastPage;
}

function getPaginatedParks ($connection, $page, $limit){

	$statement = $connection->prepare("SELECT * from national_parks Limit :limit offset :offset");

	$statement->bindValue(':limit', 4, PDO::PARAM_INT);
	$statement->bindValue(':offset', (($page - 1)* $limit), PDO::PARAM_INT);

	$statement->execute();

	return $statement->fetchAll(PDO::FETCH_ASSOC); 
}

function controlRequests ($page) {
	if ($page < 1 || !is_numeric($page)){
		$page = 1;
	}
}

function addParktoDatabase ($connection) {
// $name = if (isset($_POST['name']) {
// 	$name->bindValue
// }
	if ($_POST){
		
		$insert = 'INSERT INTO national_parks (name, area_in_acres, date_established, location, description) VALUES (:name, :area_in_acres, :date_established, :location, :description)';
		
		$statement = $connection->prepare($insert);
		
		$statement->bindValue(':name', $_POST['name'],PDO::PARAM_STR);
		$statement->bindValue(':area_in_acres', $_POST['area_in_acres'],PDO::PARAM_STR);
		$statement->bindValue(':date_established', $_POST['date_established'],PDO::PARAM_STR);
		$statement->bindValue(':location', $_POST['location'],PDO::PARAM_STR);
		$statement->bindValue(':description', $_POST['description'],PDO::PARAM_STR);	

		$statement->execute();

	}

}



function pageController ($connection){
	addParktoDatabase($connection);

	$data = [];
	
	$limit = 4;
	$page = Input::get('page', 1);

	$lastPage = getLastPage($connection, $limit);

	controlRequests($page, $lastPage);

	$data['parks'] = getPaginatedParks($connection, $page, $limit);
	$data['page'] = $page;
	$data['lastPage'] = $lastPage;

	return $data;
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

 <form method="POST" class="navbar-form navbar-left">
    
    <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" value="" class="form-control" placeholder="Name">
    </div>
    
    <div>
    <label>Area</label>
    <input type="text" name="area_in_acres" value="" class="form-control" placeholder="Area in acres">
    </div>
    
    <div>
    <label>Date established</label>
    <input type="text" name="date_established" value="" class="form-control" placeholder="Date established">	
    </div>
    
    <div>
    <label>Location</label>
    <input type="text" name="location" value="" class="form-control" placeholder="Location">
    </div>
    
    <div>
    <label>Description</label>
	<input type="text" name="description" value="" class="form-control" placeholder="Description">
    </div>
    
    <button type="submit" class="btn btn-default">Submit</button>
 
 </form>



<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>