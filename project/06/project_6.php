<!doctype html>
<html>
    <head>
        <title>Project #6</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    
    <body>
        <li><a href="../index.html">Home Page</a></li>
        <li><a href="https://github.com/cosmenaut">GITHUB</a></li>
        <h1>Project #6</h1>
     </body>
</html>

<?php

// Form the DB Connection string
$port = '3306';
$dbname = 'sbkacbmy_subscribers';
$db_connect = "mysql:host=localhost:$port;dbname=$dbname";
$username = 'sbkacbmy_cmart';
$password = 'BACS_350';

echo "<h1>DB Connection</h1>" .
"<p>Connect String: $db_connect, $username, $password</p>";


// Open the database or die
try {
$db = new PDO($db_connect, $username, $password);
echo '<p><b>Successful Connection</b></p>';
} catch (PDOException $e) {
$error_message = $e->getMessage();
echo "<p>Error: $error_message</p>";
}

// Query for all subscribers
$query = "SELECT * FROM subscribers";

$statement = $db->prepare($query);
$statement->execute();


// Loop over all of the subscribers to make a bullet list
$subscribers = $statement->fetchAll();
echo '<ul>';
foreach ($subscribers as $s) {
echo '<li>' . $s['name'] . ', ' . $s['email'] . '</li>';
}
echo '</ul>';


// Add database row
$query = "INSERT INTO subscribers (name, email) VALUES (:name, :email);";

$statement = $db->prepare($query);

$statement->bindValue(':name', $name);
$statement->bindValue(':email', $email);

$statement->execute();
$statement->closeCursor();
?>

<?php
    include 'footer.php';
?>