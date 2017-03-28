<?php

session_start();

function assignSessionKey ($username) {
	$sessionID = session_id();
	$_SESSION['logged_in_user'] = $username;
	return $session_id;
}

function userLoginCheck (){
	if (isset($_SESSION['logged_in_user']) && $_SESSION['logged_in_user'] === 'guest') {
		header("Location: authorize.PHP");
	} else {
		echo strip_tags("Please log in");
	}
}

userLoginCheck();

function pageController (){
	$data = [];
	if(isset($_POST['name'])) {
	if ($_POST['name'] === 'guest' && $_POST['number'] === 'password') {
		assignSessionKey($_POST['name']);
		header("Location: authorize.PHP");
		} else {
			echo strip_tags("I'm sorry, there was a problem");	
		}
	}
	return $data;
}

extract(pageController());

?>

<!DOCTYPE html>
<html>
<head>
    <title>POST Example</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body>
<h2>Welcome!</h2>
    <form method="POST">
        <label>Name</label>
        <input type="text" name="name"><br>
        <label>Number</label>
        <input type="text" name="number"><br>
        <input type="submit">
    </form>
</body>
</html>