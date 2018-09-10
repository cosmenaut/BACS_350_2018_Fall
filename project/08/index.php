<?php

    // Setup a page title variable
    $page_title = "PAGE TITLE";

    // Include the page start
    include 'header.php';

    // Include the main page content
    echo '<h1>BACS 350 - Project #8</h1><p>BODY</p>';

    require 'select.php';

    echo '<a href="insert.php">Add Record</a>';
    // Include the page end
    include 'footer.php';

 ?>
