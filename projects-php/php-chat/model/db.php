<?php
//TODO: CONSTRUCT A CLASS
$servername = "us-cdbr-east-05.cleardb.net";
$username = "b0817db7aec7bc";
$password = "bef6c00e";

try {
  $chatDB = new PDO("mysql:host=$servername;dbname=heroku_6e46b6c258abfc4", $username, $password);
  // set the PDO error mode to exception
  $chatDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}