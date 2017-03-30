<?php

class Log {

	public $filename;

	function logMessage($level, $message) {
		$today = date("Y-m-d H:i:s");
		$filename = 'log-' . date('Y-m-d') . ".log";
	    
	    $handle = fopen($filename, 'a');

	    fwrite($handle, PHP_EOL . "$today, $message");
	}

	function logInfo($message) {
		$this->logMessage("INFO", $message) . PHP_EOL;
	}

	function logError($message) {
		$this->logMessage("ERROR", $message) . PHP_EOL;
	}

}

?>

