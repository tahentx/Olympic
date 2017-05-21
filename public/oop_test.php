<?php

require_once 'pet.php';

//------Pet objects below

$fido = new Pet();

$fido->species = 'dog';
$fido->weight = 80;
$fido->color = 'black';
$fido->name = 'fido';

$fido->eat(['gravy','kibbles']);
$fido->move();


//-------------

$grover = new Pet();

$grover->species = 'dog';
$grover->weight = '95';
$grover->color = 'brown';
$grover->name = 'grover';

$fido->eat(['rawhide bone','IAMS']);
$fido->move();

//-------------

$joe = new Pet();

$grover->species = 'dog';
$grover->weight = '120';
$grover->color = 'spot';
$grover->name = 'joe';

$fido->eat(['vegetables','sausage']);
$fido->move();

//-----------

?>