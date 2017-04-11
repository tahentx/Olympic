<?php


require __DIR__ . '/db-connection.php';

echo $connection->getAttribute(PDO::ATTR_CONNECTION_STATUS), PHP_EOL;

?>