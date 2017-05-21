<?php

// var_dump($_POST);

function userLoginCheck () {

	if (!isset($_SESSION['logged_in_user'])) {
	header("Location: login.PHP");
	} else {
		echo strip_tags($_SESSION['logged_in_user']);
	}
}

userLoginCheck();

?>

<!DOCTYPE html>
<html>
<head>
    <title>POST Example</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body>
<h3>Authorized!</h3>
    
<a href= "logout.php"></a>
</body>
</html>