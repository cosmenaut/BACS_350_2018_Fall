<?php

    // Start the page
    require_once 'views.php';
 
    $site_title = 'Cosme Martinez';
    $page_title = 'Subs #14';
    begin_page($site_title, $page_title);


    // Page Content

    
    // Bring in subscribers logic
    require_once 'subscriber.php';


    // Render a list of subscribers
    $subscribers->show_subscribers();
    

    // Show the add form
    $subscribers->add_form();


    // Button to clear
    echo '<a href="delete.php">Reset Subscribers</a>';


    end_page();
?>
