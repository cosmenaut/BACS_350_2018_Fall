<?php

    /* -------------------------------
        DB CONNECT
    ------------------------------- */

    // Connect to the remote database
    function remote_connect() {
        
        $host = 'localhost';
        $port = '3306';
        $dbname = 'sbkacbmy_subscribers';
        $username = 'sbkacbmy_cmart';
        $password = 'BACS_350';
        $db_connect = "mysql:host=$host:$port;dbname=$dbname";

    }


    // Local Host Database settings
    function local_connect() {

        $host = 'localhost';
        $dbname = 'subscribers';
        $username = 'sbkacbmy_cmart';
        $password = 'BACS_350';
        $db_connect = "mysql:host=$host;dbname=$dbname";
        return db_connect($db_connect, $username, $password);

    }

    // Open the database or die
    function db_connect($db_connect, $username, $password) {
        echo "<h2>DB Connection</h2><p>Connect String:  $db_connect, $username, $password</p>";
        try {
            $db = new PDO($db_connect, $username, $password);
            // echo '<p><b>Successful Connection</b></p>';
            return $db;
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo "<p>Error: $error_message</p>";
            die();
        }

    }


    // Open the database or die
    function subscribers_connect() {
        
        $local = ($_SERVER['SERVER_NAME'] == 'localhost');
        if ($local) {
            return local_connect();
        } 
        else {
            return remote_connect();
        }
        
    }


    /* -------------------------------
        CRUD OPERATIONS
    ------------------------------- */


    // Add a new record
    function add_subscriber($db, $name, $email, $success) {

        // Show if insert is successful or not
        try {

            // Add database row
            $query = "INSERT INTO subscribers (name, email) VALUES (:name, :email);";
            $statement = $db->prepare($query);
            $statement->bindValue(':name', $name);
            $statement->bindValue(':email', $email);
            $statement->execute();
            $statement->closeCursor();

            header("Location: $success");
            //echo '<p><b>Insert successful</b></p>';

        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo "<p>Error: $error_message</p>";
            die();
        }
        
    }


    // Delete all database rows
    function clear_subscribers($db, $success) {
        
        try {
            $query = "DELETE FROM subscribers";
            $statement = $db->prepare($query);
            $row_count = $statement->execute();
//            echo '<p><b>Delete successful</b></p>';
            return true;
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo "<p>Error: $error_message</p>";
            die();
        }
        
    }


    // Query for all subscribers
    function query_subscribers ($db) {

        $query = "SELECT * FROM subscribers";
        $statement = $db->prepare($query);
        $statement->execute();
        return $statement->fetchAll();

    }

?>
