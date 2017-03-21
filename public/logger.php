<?php

function logMessage($logLevel, $message) {
	
	$filename = 'log-YYYY-MM-DD.log';

	$handle = fopen($filename, 'a');
	
	$finalOutput = $logLevel . " " . $message;
 	
 	fwrite($handle, $finalOutput);
	
	fclose($handle);

}



// function logError(){
	
// }

// function logInfo(){


// }




logMessage("INFO", "This is an info message.");
// logMessage("ERROR", "This is an info message.");


?>
