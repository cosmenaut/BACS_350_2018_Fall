<?php

    /*
        begin_page -- Create the HTML for the beginning of a page.  Add a page title and headline.
    */

    function begin_page($site_title, $page_title) {

        header("Pragma: no-cache");
        header("Expires: 0");
        header("Cache-Control: no-store, no-cache, must-revalidate");
        
        echo '
            <!DOCTYPE html>
            <html lang="en">
                <head>
        
                    <meta charset="UTF-8">
                    <title>' . $page_title . '</title>

                    <link rel="stylesheet" href="style.css">

                </head>
                <body>

                    <header>
                        <img src="Bear.png" alt="Bear Logo"/>
                        <img src="githubrepo.png" alt="Github Repo"/>
                        <img src="localRepo.png" alt="Local Repo"/>
                        <img src="GHDesktop.png" alt="GH desktop"/>
                        <img src="CShistory.png" alt="Command Shell History"/>
                        <img src="updatedRepo.png" alt="Marks Commits"/>
                        <img src="sync.png" alt="Sync"/>
                        <h1>' . $site_title . '</h1>
                        <h2>' . $page_title . '</h2>
                    </header>
                    <main>
        ';
    }


    /*
        end_page -- Create the HTML for the end of a page.
    */

    function end_page() {

        echo '
                    </main>
                </body>
            </html>
        ';
        
    }


    /*
        render_simple_page -- Create the HTML page.
    */

    function render_simple_page($title, $text) {
        
        echo "<h1>$title</h1><p>$text</p>";
    }

?>