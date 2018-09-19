<?php

    // Connect to the database
    require_once 'db.php';

// Show heading
    echo '<h2> Subscribe User User</h2>';
    // Add new record
    $name = $_POST["name"];
    $name = $_POST["email"];
    // Show if insert is successful or not
    try {
        
        // Add database row
        $query = "INSERT INTO subscribers (name, email) VALUES (:name, :email);";
        $statement = $db->prepare($query);
        $statement->bindValue(':name', $name);
        $statement->bindValue(':email', $email);
        $statement->execute();
        $statement->closeCursor();
        
        echo '<p><b>Insert successful</b></p>';
        
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        echo "<p>Error: $error_message</p>";
        die();
    }    
    // Manually return to show list
     echo '<a href="/project/10/project_10.php">Go Back</a>';
    
    // End the page
    require_once '../../footer.php';
?>

<!--
////MY CODE 
//    echo '<h2>Subscribe</h2>';
//    // Add new record
//    //$name = 'Test User';
//    $name = $_POST("my_name");
//    $email = $_POST("my_email");
//    //$email = 'tester@gmail.com';
//    //$email = <input type="text" name="my_email">;
//
//
//    // Add database row
//    $query = "INSERT INTO subscribers (my_name, my_email) VALUES (:name, :email)";
//
//    $statement = $db->prepare($query);
//
//    $statement->bindValue(':name', $name);
//    $statement->bindValue(':email', $email);
//
//    $statement->execute();
//    $statement->closeCursor();
//
//
//    // Display subscriber records
//    require 'select.php';
?>
-->

<?php
    // Include the page end
    include 'footer.php';
?>