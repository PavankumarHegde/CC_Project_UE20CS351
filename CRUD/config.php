<?php

$databaseHost = 'studentdb.c6nmgc0qv0u7.us-east-1.rds.amazonaws.com';
$databaseName = 'test';
$databaseUsername = 'admin';
$databasePassword = 'admin1234';

//$databaseHost = 'localhost';
//$databaseName = 'test';
//$databaseUsername = 'username';
//$databasePassword = 'Password123*';

try {
        // http://php.net/manual/en/pdo.connections.php
        $dbConn = new PDO("mysql:host={$databaseHost};dbname={$databaseName}", $databaseUsername, $databasePassword);

        $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Setting Error Mode as Exception
        // More on setAttribute: http://php.net/manual/en/pdo.setattribute.php
} catch(PDOException $e) {
        echo $e->getMessage();
}
 
?>
