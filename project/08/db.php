<?php
    // Form the DB Connection string
    $port = '3306';
    $dbname = 'sbkacbmy_subscribers';
    $db_connect = "mysql:host=localhost:$port;dbname=$dbname";
    $username = 'sbkacbmy_cmart';
    $password = 'BACS_350';

echo "<h1>DB Connection</h1>" .
"<p>Connect String: $db_connect, $username, $password</p>";
    require "select.php";
    echo '<a href= "insert.php">Add Record</a>';
    require_once "test.php";
?>

######
    // Open the database or die
    try {
        $db = new PDO($db_connect, $username, $password);
        echo '<p><b>Successful Connection</b></p>';
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        echo "<p>Error: $error_message</p>";
        die();
    }

?>
