<?php

    // Add a new record
    function add_note($db, $artist, $name, $artwork, $purchase, $description, $review) {

        // Show if insert is successful or not
        try {

            // Add database row
            $query = "INSERT INTO music (artist, name, artwork, purchase, description, review) VALUES (:artist, :name, :artwork,:purchase, :description, :review );";
            $statement = $db->prepare($query);
            $statement->bindValue(':artist', $artist);
            $statement->bindValue(':name', $name);
            $statement->bindValue(':artwork', $artwork);
            $statement->bindValue(':purchase', $purchase);
            $statement->bindValue(':description', $description);
            $statement->bindValue(':review', $review);
            $statement->execute();
            $statement->closeCursor();
            return true;
             
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo "<p>Error: $error_message</p>";
            die();
        }
        
    }


    // Delete all database rows
    function clear_music($db) {
        
        try {
            $query = "DELETE FROM music";
            $statement = $db->prepare($query);
            $row_count = $statement->execute();
            return true;
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo "<p>Error: $error_message</p>";
            die();
        }
        
    }


    // Query for all music
    function query_music ($db) {

        $query = "SELECT * FROM music";
        $statement = $db->prepare($query);
        $statement->execute();
        return $statement->fetchAll();

    }

?>
