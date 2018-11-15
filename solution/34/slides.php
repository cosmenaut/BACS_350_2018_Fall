<?php

    require_once 'files.php'; 
    require_once 'log.php';
//    require_once 'notes_data.php';
    require_once 'views.php'; 
    

    // Page content

    $content = 'read_file("slides.md")';
        

    // Create main part of page content
    $settings = array(
        "site_title" => "BACS 350 Demo Server",
        "page_title" => "Slide Show Display", 
        "content"    => $content);

    echo render_template('slides.html', $settings);

?>
