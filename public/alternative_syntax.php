<?php

$message = 'Hello Codeup';



function randomNoun (){

$noun = ['papa', 'knucklehead', 'priest', 'diver', 'saint', 'chief', 'captain', 'runner', 'gunner', 'playboy'];

	$randomName = array_rand($noun);
	return $noun[$randomName];
}

function randomAdjective() {


	$randomAdjective = array_rand($adjectives);


	return $adjectives[$randomAdjective];

}


function randomNameOutput() {
	return randomAdjective(). " " . randomNoun();
}



?>
 
<!DOCTYPE html>
<html>
<head>
    <title>HTML + PHP</title>
</head>
<style type="text/css">


</style>
<body>
    <h1>Server Name Generator</h1>
    <div>
	    <button id = "refresh" Refresh></button>



	    <ul>
	    
	    <?php  $adjectives = ['sloppy','fairweather', 'drunk', 'shady', 'musty', 'lightweight', 'lowdown', 'basic', 'malicious', 'feisty']; ?>

	    <?php foreach ($adjectives as $adjective) { ?>
	    	<li> <? echo $adjective; ?> </li>
	   <?php }  ?>


	    </ul>
	</div>
</body>
</html>