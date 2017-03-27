<?php

$message = 'Hello Codeup';


function bestPlayers (){

$data = [];

$data['favoritePlayer'] = 'Kawhi';
$data['runnerUp'] = 'Russ';

$data['instruments'] = ['piano','sax', 'guitar', 'drums']; 

return $data;

}

extract(bestPlayers());

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
    <div>s
	<p>
	    <ol>

	    This is my favorite <?= $instruments[0]?> on the Graves album!
	    <?php foreach($instruments as $instrument): ?>
	    	<li><?= $instrument; ?></li>
	    <?php endforeach; ?>

	    </ol>
	</p>
	</div>
</body>
</html>