<!DOCTYPE html>
<html>
    <head>
        <title>Project 10</title>
        <h1>Project #10</h1>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    
<?php
    // Setup a page title variable
    $page_title = "Form View (to Post Data)";
    // Include the page start
    include 'header.php';
    

    require "select.php";
    echo '<a href= "insert.php">Add Record</a>';
    //require_once "test.php";    
?>
    
    <h2>SUBSCRIBE</h2>
    <form action="insert.php" method="POST">
        <label>What is your name?</label>
        <input type="text" name="name">
        <label>What is your email?</label>
        <input type="text" name="email">
        <input type="submit" value ="Insert"/>
        
    </form>
    
<?php
    // Include the page end
    include 'footer.php';
?>

