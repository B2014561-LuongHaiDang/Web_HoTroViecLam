<?php
$mysqli = new mysqli("localhost","root","","web_mysqli");

// Check connection
if ($mysqli->connect_errno) {
  echo "Lỗi kết nối" . $mysqli->connect_error;
  exit();
}

$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=web_mysqli", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>


