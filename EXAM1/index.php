 <?php

    // Start the page
    $page_title = 'EXAM 1';

    echo '<h1>contacts</h1>';

    // Connect to the database
    require 'db.php';


    // Show the list after the insert
    require 'select.php';


    // Add a record
    echo '<a href="insert.php">Add a contact</a>';

    echo '<form action="insert.php" method="get">
        
        <p><label>name:</label> &nbsp; <input type="text" name="name"></p>
        <p><label>address:</label> &nbsp; <input type="text" name="address"></p>
        <p><label>phone number:</label> &nbsp; <input type="text" name="phone"></p>
        
        <p><input type="submit" value="Add contact"/></p>
        
    </form>';
    require 'test.php';


    // End the page

?>