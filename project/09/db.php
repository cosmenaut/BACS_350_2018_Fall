<?php

$port = '3306';
$dbname = 'sbkacbmy_subscribers';
$db_connect = "mysql:host=localhost:$port;dbname=$dbname";
$username = 'sbkacbmy_cmart';
$password = 'BACS_350';




try {
$db = new PDO($db_connect, $username, $password);
echo '<p><b>Successful Connection</b></p>';
} catch (PDOException $e) {
$error_message = $e->getMessage();
echo "<p>Error: $error_message</p>";
}
?>
