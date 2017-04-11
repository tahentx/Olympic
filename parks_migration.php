<?php

require __DIR__ . '/db_connection.php';

$addTable = 'CREATE TABLE if not exists national_parks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(150) NOT NULL,
    location VARCHAR(150) NOT NULL DEFAULT \'NONE\',
    date_established DATE, 
    area_in_acres DOUBLE(12,2),
    PRIMARY KEY (id)
)';

$connection->exec($addTable);


?>