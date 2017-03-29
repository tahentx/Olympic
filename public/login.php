<?php

session_start();

function assignSessionKey ($username) {
	$sessionID = session_id();
	$_SESSION['logged_in_user'] = $username;w
	return $session_id;
}

function userLoginCheck (){
	if (isset($_SESSION['logged_in_user']) && $_SESSION['logged_in_user'] === 'guest') {
		header("Location: authorize.php");
	} else {
		echo strip_tags("Please log in");
	}
}

function formSubmissionCheck (){
	if(!empty($_POST)) {
		$username = isset($_POST['username']) ? $_POST['username'] : "";
		$password = isset($_POST['password']) ? $_POST['password'] : "";
		if($username == "guest" && $password == "password") {
			header("Location: http://codeup.dev/authorized.php");
			exit;
		} else {
			$message = "Please retry your username or password";
			$image = "/img/401.jpeg";
		}
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
<html lang="en-us">
<head>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	<meta charset="utf-8">
    <title>POST Example</title>
   
    <style type="text/css">
    
    	.btn-default {
    		color: light blue;
    	}

    </style>

</head>
	<body>
	<h2 id ="welcome">Welcome!</h2>

    	<form class="form-horizontal">
 	
 		<div class="form-group">
    
    	<label for="inputEmail3" class="col-sm-2 control-label">Name</label>
	    	
	    	<div class="col-sm-10">
	      	<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
	    	</div>

  		</div>

  		<div class="form-group">
    	
    	<label for="inputPassword3" class="col-sm-2 control-label">Number</label>
    	
    	<div class="col-sm-10">
    	 <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    	</div>
  		</div>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <div class="checkbox">
		        <label>
		          <input type="checkbox"> Remember me
		        </label>
		      </div>
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-default">Sign in</button>
		    </div>
		  </div>
		</form>
	</body>
</html>