<?php

    require_once 'views.php'; 
    require_once 'log.php';
    require_once 'files.php';
    require_once 'notes_object.php';
    

    // Page content
    $content = render_markdown_file('notes.md'). render_notes_view();
    

    // Create main part of page content
    $settings = array(
        "site_title" => "Exterior Brain",
        "page_title" => "Notes App", 
        "style"      => 'style.css',
        "content"    => $content);

    echo render_page($settings);

?>
