<?php

    // Start the page
    $page_title = 'BACS 350 - Project #6';
    require_once 'header.php';

    
    // Form the DB Connection string
    $port = '3306';
    $dbname = 'uncobacs_subscribers';
    $username = 'uncobacs_350';
    $password = 'BACS_350';
    $db_connect = "mysql:host=localhost:$port;dbname=$dbname";
    

    // Open the database or die
    echo "<h2>DB Connection</h2>" .
        "<p>Connect String:  $db_connect, $username, $password</p>";

    try {
        $db = new PDO($db_connect, $username, $password);
        echo '<p><b>Successful Connection</b></p>';
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        echo "<p>Error: $error_message</p>";
    }


    // Query for all subscribers
    echo "<h2>Subscribers</h2>";
    $query = "SELECT * FROM subscribers";

    $statement = $db->prepare($query);
    $statement->execute();


    // Loop over all of the subscribers to make a bullet list
    $subscribers = $statement->fetchAll();
    echo '<ul>';
    foreach ($subscribers as $s) {
        echo '<li>' . $s['name'] . ', ' . $s['email'] . '</li>';
    }
    echo '</ul>';


    // End the page
    require_once 'footer.php';

?>
