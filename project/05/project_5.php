<!DOCTYPE html>
<html>
    <head>
        <title>Project 5</title>
        <h1>Project #5</h1>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    
<?php
    // Setup a page title variable
    $page_title = "Form View (to Post Data)";
    // Include the page start
    include 'header.php';
?>
    <h2>UI for form input using POST</h2>
    <form action="subscribe.php" method="post">
        <label>What is your name?</label>
        <input type="text" name="my_name">
        <input type="submit" value="Save"/>
    </form>
<?php
    // Include the page end
    include 'footer.php';
?>