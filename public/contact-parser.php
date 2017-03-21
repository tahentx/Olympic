<?php




function parseContacts() {

	$file = "contacts.txt";

	$handle = fopen($file, "r");


	$content = trim(fread($handle, filesize($file)));

	$contacts = [];
	
	$contactsArray = explode("/n", $content);
	
	foreach ($contactsArray as $people) {

		$infoArray = explode("|", $people);
	
		$results = [];
		
		foreach ($infoArray as $key => $value) {
			
			if ($key == 0) {
	
				$results['name'] = $value;
	
			} else {
				
				$results['number'] = $value;
		
		} 
		
		array_push($contacts, $results);
	
	}
	fclose($handle);
	return $contacts;

}
}
   
var_dump(parseContacts());


