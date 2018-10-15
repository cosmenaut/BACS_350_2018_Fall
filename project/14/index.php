<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <title>MVC Pattern</title>

        <link rel="stylesheet" href="style.css">

    </head>
    <body>

        <header>
            <img src="Bear.png" alt="Bear Logo"/>
            <h1>Cosme Martinez</h1>
            <h2>MVC Pattern</h2>
        </header>
        <main>
<p><a href="pattern.php">MVC Pattern</a></p>
<div class="card">
    <h3>Subscribers in List</h3> 
    <ul>

    </ul>
</div>
<div class="card">
    <h3>Add Subscriber</h3>

    <form action="insert.php" method="get">
        <p><label>Name:</label> &nbsp; <input type="text" name="name"></p>
        <p><label>Email:</label> &nbsp; <input type="text" name="email"></p>
        <p><input type="submit" value="Sign Up"/></p>
    </form>
</div>
<a href="delete.php">Reset Subscribers</a>
        </main>
    </body>
</html>
        
//    // Start the page
//    require_once 'views.php';
// 
//    $site_title = 'COSME MARTINEZ';
//    $page_title = 'MVC Pattern';
//    begin_page($site_title, $page_title);
//
//
//    // Page Content
//    echo '<p><a href="pattern.php">MVC Pattern</a></p>';
//
//    
//
//    // Use subscriber code
//    require_once 'subscriber_views.php';
//    require_once 'subscriber_db.php';
//
//
//    // Connect the appropriate database
//    $db =  remote_connect();
//
//
//    // View for listing subscribers
//    render_list(query_subscribers($db));
//
//
//    // Form view to add subscriber
//    add_subscriber_form();
//
//
//    // Button to clear
//    echo '<a href="delete.php">Reset Subscribers</a>';
//
//        
//    // End the page
//    end_page();