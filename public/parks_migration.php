<?php

require __DIR__ . '/db_connection.php';

$connection->exec('DROP TABLE IF exists national_parks');

$addTable = 'CREATE TABLE national_parks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(150) NOT NULL,
    location VARCHAR(150) NOT NULL DEFAULT \'NONE\',
    date_established DATE, 
    area_in_acres DOUBLE(12,2),
    description VARCHAR(150) NOT NULL,
    PRIMARY KEY (id)
)';

$connection->exec($addTable);


?>