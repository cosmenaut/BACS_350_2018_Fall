<?php

    require_once 'views.php';
    require_once 'log.php';


    // Show buttons to go to other pages
    $content = render_button('Templates', 'index.php');
    $content .= render_button('Solutions', '../solution');
    $content .= render_button('Show Log', 'pagelog.php');


    $log->handle_actions();
    $log->log_page();


    // Show page history
    $content .=  $log->show_log();
  

    // Show Page
    $settings = array(
        "site_title" => "Brain",
        "page_title" => "Page Loading History", 
        'logo'       => 'Bear.png',
        "style"      => 'style.css',
        "content"    => $content);

    echo render_page($settings);

?>
