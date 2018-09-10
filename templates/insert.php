<?php

    // Connect to the database
    require_once 'db.php';


    echo '<h2>Add Test User</h2>';


    // Add new record
    $name = 'Test User';
    $email = 'tester@gmail.com';


    // Add database row
    $query = "INSERT INTO subscribers (name, email) VALUES (:name, :email);";

    $statement = $db->prepare($query);

    $statement->bindValue(':name', $name);
    $statement->bindValue(':email', $email);

    $statement->execute();
    $statement->closeCursor();


    // Display subscriber records
    require 'select.php';

?>
