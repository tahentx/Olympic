<?PHP


function favoriteThingDisplay (){

$favorites = ['West Coast Get Down', 'Pickup Basketball', 'Reading', 'Whisler old fashioned', 'Steve Coll and James Kwak'];

 return $favorites;

}

favoriteThingDisplay();

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

	    foreach (favoriteThingDisplay() as $item) { ?>
		<li> <?PHP echo $item; ?></li>

	    <?PHP } ?>
	    
	    </ol>
	</p>
	</div>
</body>
</html>