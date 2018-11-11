<?php

    require_once 'views.php'; 
    require_once 'log.php';
    require_once 'notes_data.php';
    

    // Page content
    $content = "<h1>Test This Page";


    // Create main part of page content
    $settings = array(
        "site_title" => "Exterior Brain",
        "page_title" => "Test of Dev Features", 
        "style"      => 'https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css',
        "content"    => $content);

    echo render_page($settings);

?>
