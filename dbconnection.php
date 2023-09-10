<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "enudatabase";


$con = mysqli_connect($server, $username, $password, $database);

if (!$con) {
  die("connection to this database failed to" . mysqli_connect_error());
} else {
  // echo "connection was successful";
}
?>