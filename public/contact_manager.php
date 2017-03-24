<?php

// $filename = 'contacts.txt';


function readFile($file) {

	$handle = fopen($file, 'r');
	
	$contents = fread($handle, filesize($file));
	
	fclose($handle);

    return $contents;

}

$content = readFile($filename);


function createContactsArray($content) {

	$mainContactArray = explode("/n" , $content);

	return $mainContactArray;

}

$mainArray = createContactsArray($content);

function createOuterArray ($mainArray) {
	$outerArray = explode("/n", $mainArray);
	return $outerArray;
}

$outerArray = createOuterArray($mainArray);

var_dump($outerArray);

function createInnerArray () {

}



var_dump($mainArray);


function createNewContact() {

	fwrite(STDOUT, 'What is the name of your new contact?');

	$newName = fgets(STDIN);

	fwrite(STDOUT, 'What is the best number for your new contact?');

	$newNumber = fgets(STDIN);

		settype($newNumber, "integer");

		if (!is_string($newName)){
			echo "Are you sure that's his/her name?";
		}

	 $newContact = $newName . "|" . $newNumber;

	 return $newContact;

}

$newContactInput = createNewContact();


function addNewContact($filename, $newContactInput) {

	$handle = fopen($filename, 'a');

	fwrite($handle, PHP_EOL . $newContactInput);

	fclose($handle);

}

addNewContact($filename, $newContactInput);

function searchContacts($mainArray){

	fwrite(STDOUT, 'Who are you looking for?');

	$query = fgets(STDIN);

	$result = in_array($query, $mainArray, true);

		if ($result == true) {
			
			echo $mainArray[$result];
		
		}	else {
		
			echo "That contact is not saved. Would you like to add it to your list?" . PHP_EOL; 
	
	}			
}

searchContacts($mainArray);

function deleteContacts($delete) {
	
	$delete = fgets(STDIN);

	$handle = fopen($filename, 'w');

	fclose($handle);	

}



?>