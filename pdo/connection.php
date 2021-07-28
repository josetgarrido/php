<?php
//info server connection
$server   = 'localhost';
$username = 'root';
$password = '';
$database = 'db_local';

try {
  // Driver / Server /database
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);

  // Forcing connection to throws an exception type error
  $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  
} catch (PDOException $error) {
  // Die: Print message and exit
  die('Connection Failed: ' . $error->getMessage());
}
?>