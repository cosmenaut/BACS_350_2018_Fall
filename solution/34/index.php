<?php

    require_once 'files.php'; 
    require_once 'log.php';
    require_once 'notes_data.php';
    require_once 'views.php'; 
    

    // Page content

    $text = 'Display slide shows';

    $markdown = render_markdown_file("slides.md");

//    $notes = note_list_view(query_notes());

    $source = 'Markdown <pre>' . read_file("slides.md") . '</pre>';
        
    $pagelog = $log->show_log();
        
        
    // Assemble all the cards
    $content = render_cards(array(
        'Create Slide Show' => $text,
        'HTML View' => $markdown,
        'Markdown' => $source,
    ));
        


    // Create main part of page content
    $settings = array(
        "site_title" => "BACS 350 Demo Server",
        "page_title" => "Slide Show Display", 
        "content"    => $content);

    echo render_page($settings);

?>
