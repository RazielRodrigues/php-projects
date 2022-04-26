<?php
//TODO: CONSTRUCT A CLASS
$servername = "localhost";
$username = "root";
$password = "";

try {
  $chatDB = new PDO("mysql:host=$servername;dbname=studiesdb", $username, $password);
  // set the PDO error mode to exception
  $chatDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}