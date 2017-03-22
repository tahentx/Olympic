<?PHP

$greats = array(

	"tennis" => 'Federer', 
	
	"basketball" => 'Jordan', 
	
	"golf" => 'Tiger',
	
	22 => 'c',
	
	"cleaner" => true,

);

// var_dump($greats);

function filler($array){
	array_fill(4, 3, "test");
}

echo filler($greats);


	
?>