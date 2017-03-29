<?php

function logMessage($level, $message) {
	$today = date("Y-m-d H:i:s");
	$filename = 'log-YYYY-MM-DD.log';
    
    $handle = fopen($filename, 'a');

    fwrite($handle, PHP_EOL . "$today $logLevel $message");
}

// logMessage("INFO", "This is an info message.");
// logMessage("ERROR", "This is an info message.");

function logInfo($level, $message) {
	logMessage("INFO", "This is an info message.") . PHP_EOL;
}
function logError($level, $message) {
	logMessage("ERROR", "This is an error message.") . PHP_EOL;
}

logInfo();
logError();

?>
