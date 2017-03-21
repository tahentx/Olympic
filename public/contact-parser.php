<?php

$file = "contacts.txt";

$handle = fopen('contacts.txt', "r");


function parseContacts($filename)
{
    $contacts = array();

	$contacts = fread($handle, filesize($filename));

	$contactsArray = explode('/n', $contacts);

    return $contactsArray;
}

var_dump(parseContacts('contacts.txt'));

fclose($handle);
