<!DOCTYPE>
	<html>
	<head>
	    <title>External J </title>
	</head>
	<body>
	    <script>
	    (function () {
    // variables and functions in here are only accessible inside this function's scope
    	
    	var iffeVar = "I'm local to the IIFE.";
	    	'use strict';
	    	function saySomething () {
	    		var message = saySomething * 2
	    	}

	    })();
	    </script>
	</body>
</html>