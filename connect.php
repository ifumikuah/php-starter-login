<?php
$servername = "localhost";
$username = "detrux";
$password = "Root1234";
$dbname = "picogram";

try {
  $conn = mysqli_connect($servername, $username, $password, $dbname);
} catch (mysqli_sql_exception) {
  echo "Fail to connect!";
}
?>