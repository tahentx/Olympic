<?php

$message = 'Hello Codeup';



function randomNoun (){

$noun = ['papa', 'knucklehead', 'priest', 'diver', 'saint', 'chief', 'captain', 'runner', 'gunner', 'playboy'];

	$randomName = array_rand($noun);
	return $noun[$randomName];
}

function randomAdjective() {

$adjectives = ['sloppy','fairweather', 'drunk', 'shady', 'musty', 'lightweight', 'lowdown', 'basic', 'malicious', 'feisty'];

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

    <div class="box" id="red"></div>
<div class="box" id="orange"></div>
<div class="box" id="yellow">570-590 nm</div>
<div class="box" id="green">495-570 nm</div>
<div class="box" id="blue">450-495 nm</div>
<div class="box" id="violet">380-450 nm</div>





	    <button id = "refresh" Refresh></button>

	<p>
	    <ol>
	    <?php

		echo randomNameOutput();
	    
	     ?>
	    </ol>
	</p>
	</div>
</body>
</html>