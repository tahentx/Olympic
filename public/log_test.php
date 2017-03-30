<?php

require_once 'Log.php';

$log = new Log();

$log->logMessage('critical','This is an error');
$log->logInfo('This is information');
$log->logError('This is log error');


?>

