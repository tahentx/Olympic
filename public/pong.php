<?php

require 'functions.php';

function pageController() {
	
	$data = [];
	
	if(inputHas('count')) {
		$data['count'] = inputGet('count');
	} else {
		$data['count'] = 0;
	}
	return $data;

}

extract(pageController());

?>



<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title>Counter GET</title>
	</head>
	<body>
		<h1>Counting... <?= escape ($count); ?></h1>
		<form method="GET" action="/counter.php">
			<button type="submit" name="count" value="<?= $count + 1 ?>">HIT</button>
			<button type="submit" name="count" value="<?= $count - 1 ?>">MISS</button>    
		</form>
	</body>
</html>