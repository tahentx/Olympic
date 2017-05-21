<?php

session_start();

function pageController (){

	$data = [];
	
	if(isset($_SESSION['username']) && $_SESSION['username'] == "admin") {
			header("Location: http://codeup.dev/authorize.php");
			die();
		}

	if(!empty($_POST)) {
			
			$username = isset($_POST['username']) ? $_POST['username'] : "";
			$password = isset($_POST['password']) ? $_POST['password'] : "";
			
			if($username === "admin" && $password === "password") {
				$_SESSION['username'] = $username;
				header("Location: http://codeup.dev/authorize.php");
				die();
			} else {
				$data['inputClass'] = "form-group has-error";
				$data['usernamePlaceholder'] = "Username or password is incorrect";
				$data['background'] = "error";
			}


	}
			return $data;
}


function assignSessionKey ($username) {
	$sessionID = session_id();
	$_SESSION['logged_in_user'] = $username;
}

function userLoginCheck (){
	if (isset($_SESSION['logged_in_user']) && $_SESSION['logged_in_user'] === 'guest') {
		header("Location: authorize.php");
	} else {
		echo strip_tags("Please log in");
	}
}


userLoginCheck();



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

    	<form method='POST' class="form-horizontal">
 	
 		<div class="form-group">
    
    	<label for="inputEmail3" class="col-sm-2 control-label">Username</label>
	    	
	    	<div class="col-sm-10">
	      	<input type="text" name="username"class="form-control" id="inputEmail3" placeholder="Email">
	    	</div>

  		</div>

  		<div class="form-group">
    	
    	<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    	
    	<div class="col-sm-10">
    	 <input type="text" name="password" class="form-control" id="inputPassword3" placeholder="Password">
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