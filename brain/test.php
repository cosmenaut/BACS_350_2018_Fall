<?php

    require_once 'views.php'; 
    require_once 'log.php';
    require_once 'notes_data.php';
    

    // Page content
    $content = render_card('Page Rendering', 'Experiment with page rendering, before proceeding to the next steps.');


    // Create main part of page content
    $settings = array(
        "site_title" => "Exterior Brain",
        "page_title" => "Test of Dev Features", 
        "content"    => $content);

    echo render_page($settings);

?>
