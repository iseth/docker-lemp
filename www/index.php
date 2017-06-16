<?php
// foreach ($_SERVER as $key => $value) {
//   echo $key . " => " . $value . "<br>";
//
// }

echo "asdf";
$mysqli = new mysqli("db", "root", "examplepass", "hello", 3306);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

if (!$mysqli->query("SELECT * FROM `whois`")) {
    echo $mysqli->query("SELECT * FROM `whois`"). "Table creation failed: (" . $mysqli->errno . ") " . $mysqli->error;
}
?>
