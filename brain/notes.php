<?php

    require_once 'views.php';
    require_once 'db.php';    
    require_once 'log.php';
    require_once 'files.php';
    require_once 'Parsedown.php';
    

    // Markdown Text
    $markdown = read_file('notes.md');


    // Convert the Markdown into HTML
    $Parsedown = new Parsedown();
    $content = $Parsedown->text($markdown);
    

    // Create main part of page content
    $settings = array(
        "site_title" => "Exterior Brain",
        "page_title" => "Notes App", 
        "style"      => 'style.css',
        "content"    => $content);

    echo render_page($settings);

?>
