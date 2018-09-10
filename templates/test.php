<?php

    // Decide on the domain and page to test
    $domain = "https://unco-bacs.org";
    $page = "$domain/bacs_350/demo/index.php";

    // Create a link for the page
    echo "<h2>Test Page for $page</h2>
        <p>Start simple but start now.</p>
        <p>Make sure that the page exists and has valid HTML.";

    echo '<h3>Page Exists</h3>
        <p><a href="' . $page . '">' . $page . '</a></p>';

    // Run your page through the validator
    echo '<h3>Valid HTML</h3>
        <p><a href="http://validator.w3.org">HTML Validator</a></p>'
?>