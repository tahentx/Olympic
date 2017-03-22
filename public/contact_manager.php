<?php

// $filename = 'contacts.txt';

// function showContacts($file) {

// 	$handle = fopen($file, 'r');
	
// 	$contents = fread($handle, filesize($file));
	
// 	fclose($handle);

//     return $contents;

// }

// echo showContacts($filename);

// -----

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

echo createNewContact();


// // ---

// function addContacts ($file) {

// 	$handle = fopen($file, 'a');
 	
//  	fwrite($handle, $newContact);
	
// 	echo  . PHP_EOL;
// 	fclose($handle);

// }


// // ---



// function searchContacts () {
// // fread; one of the native search functions should work
// }

// function deleteContacts () {
// // fwrite with the "w"	
// }

// ?>