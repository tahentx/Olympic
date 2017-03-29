<?php

require "functions.php";

function pageController() {
	$data = [];
	// $form = var_dump($_GET);
	if(inputHas['count'])) {
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
		<h1>Counting... <?= $count; ?></h1>
		<form method="GET" action="/counter.php">
			<button type="submit" name="count" value="">UP</button>
			<button type="submit" name="count" value="">DOWN</button>    
		</form>
	</body>
</html>