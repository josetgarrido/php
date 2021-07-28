<?php
//info server connection
$server   = 'here_server_name';
$username = 'here_user';
$password = 'here_password';
$database = 'here_data_base';

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