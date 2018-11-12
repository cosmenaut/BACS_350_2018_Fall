<?php

    require_once 'files.php'; 
    require_once 'log.php';
    require_once 'notes_data.php';
    require_once 'views.php'; 
    

    // Page content

    $text = 'Experiment with page rendering, before proceeding to the next steps.';

    $preform = '<pre> function render() { do_this(); }</pre>';

    $markdown = render_markdown("* Bullet lists\n* Styles\n* Headings");

    $notes = note_list_view(query_notes());

    $source = '<pre>' . read_file("page.html") . '</pre>';
        

    // Assemble all the cards
    $content = render_page_content(array(
        render_card('Page Rendering', $text),
        render_card('Preformatted Text', $preform),
        render_card('Markdown', $markdown),
        render_card('Notes', $notes),
        render_card('Source Code', $source)
    ));
        


    // Create main part of page content
    $settings = array(
        "site_title" => "Exterior Brain",
        "page_title" => "Test of Dev Features", 
        "content"    => $content);

    echo render_page($settings);

?>
