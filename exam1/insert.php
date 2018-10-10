<?php

    // Connect to the database
    require_once 'db.php';


    // Pick out the inputs
    $title = filter_input(INPUT_GET, 'name');
    $author = filter_input(INPUT_GET, 'address');
    $summary = filter_input(INPUT_GET, 'phone');

//    echo "Title: $title, Author: $author";


    // Show if insert is successful or not
    try {
        
        // Add database row
        $query = "INSERT INTO contacts (name, address, phone) VALUES (:name, :address, :phone);";

        $statement = $db->prepare($query);

        $statement->bindValue(':name', $name);        
        $statement->bindValue(':address', $address);
        $statement->bindValue(':phone', $phone);
 
        $statement->execute();
        $statement->closeCursor();
        
        header('Location: index.php');
//        echo '<p><b>Add Book successful</b></p>';
        
        
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        echo "<p>Error: $error_message</p>";
        die();
    }

?>
