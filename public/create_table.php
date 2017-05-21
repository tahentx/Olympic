<?php

require __DIR__ . '/db_connection.php';

$createUserTable = 'CREATE TABLE users (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    email VARCHAR(240) NOT NULL,
    name VARCHAR(50) NOT NULL,
    PRIMARY KEY (id)
)';

$connection->exec($createUserTable);

$createRolesTable = '

'

?>