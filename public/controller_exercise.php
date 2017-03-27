<?php

function pageController (){
	$data = ['variable', 'variable', ]


	return $data;
}

extract(pageController());

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