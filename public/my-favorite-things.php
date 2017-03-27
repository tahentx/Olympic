<?PHP


function favoriteThingDisplay (){

$data = ['West Coast Get Down', 'Pickup Basketball', 'Reading', 'Whisler old fashioned', 'Steve Coll and James Kwak'];

 return $data;

}

extract(favoriteThingDisplay());

?>
 
<!DOCTYPE html>
<html>
<head>
    <title>HTML + PHP</title>
</head>
<style type="text/css">


</style>
<body>
    <h1>Favorite Things</h1>
	    <ol>
	    <?php

	    foreach (favoriteThingDisplay() as $data) { ?>
		<li> <?PHP echo $data; ?></li>

	    <?PHP } ?>
	    
	    </ol>
	</p>
	</div>
</body>
</html>