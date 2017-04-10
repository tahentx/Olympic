<?php

class Log {

	public $filename;

	public $handle;

	function __constructor($prefix = "log"){
		$this->filename = $prefix . "-" . date("YYYY-MM-DD") . ".log";
	    $this->handle = fopen($filename, 'a');
	}


	public function logMessage($level, $message) {
		$timestamp = date("Y-m-d H:i:s");
		$logEntry = PHP_EOL . "$timestamp - $level - $message";
		$fwrite($handle, $logEntry);
	}

	public function logInfo($message) {
		$this->logMessage("INFO", $message) . PHP_EOL;
	}

	public function logError($message) {
		$this->logMessage("ERROR", $message) . PHP_EOL;
	}

	function __destructor(){
		fclose($this->handle);
	}

}

?>

