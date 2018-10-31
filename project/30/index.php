<?php

    // Start the page
    require_once 'views.php';
 
    $site_title = 'Cosmenaut';
    $page_title = 'Music Man';
    $settings = array("content" => "none");
    echo render_page($settings);
    
    // Bring in music logic
    require_once 'music.php';


    // Render a list of music
    $music->show_music();
    

    // Show the add form
    $music->add_form();


    // Button to clear
//    echo '<a href="delete.php">Reset music</a>';

//pagelogging
  require_once 'log.php';
    $log->add('solution/11/index.php');
    $log->show_log();

    end_page();
?>
