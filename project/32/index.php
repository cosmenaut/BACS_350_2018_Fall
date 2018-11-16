<?php
    
    require_once 'auth.php';
    require_once 'views.php';

    // Display the page content
    $content = render_button('Templates', '../templates');

    
    // Create main part of page content
    $settings = array(
        "site_title" => "Cosmenaut",
        "page_title" => "PassMan", 
        "logo"       => "myLogo1.png",
        "style"      => 'style.css',
        "content"    => $content);

    echo render_page($settings);
?>
