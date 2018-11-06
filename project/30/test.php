<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Albums</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <img src="Bear.png" alt="Bear Logo" />
        <h1>Exam 2</h1>
        <h2>Albums</h2>
    </header>
    <main>
        <p><a href="..">Home</a></p>
        <p><a href="log.php">Page Log</a></p>
        <div class="card">
            <h3>Albums in List</h3>
            <div class="musiccard">
<!--
                <p>28</p>
                <p>Thomas Rhett</p>
                <p>It Goes Like This</p><img src="https://images-na.ssl-images-amazon.com/images/I/81GHO4-iM%2BL._SX522_.jpg" style=width:100px;height:100px;"><br><a href="https://www.amazon.com/Goes-Like-This-Thomas-Rhett/dp/B00AO7HPXO">Buy me here</a>
                <p>This is awesome!</p>
                <p> 10/10</p> 
-->
            </div>
        </div>
        <div class="inputcard">
            <h3>Add Album</h3>

            <form action="index.php" method="post">
                <p><label>Artist:</label> &nbsp; <input type="text" name="artist"></p>
                <p><label>Name:</label> &nbsp; <input type="text" name="name"></p>
                <p><label>Artwork:</label> &nbsp; <input type="text" name="artwork"></p>
                <p><label>Purchase URL:</label> &nbsp; <input type="text" name="purchase_url"></p>
                <p><label>Description:</label> &nbsp; <input type="text" name="description"></p>
                <p><label>Review:</label> &nbsp; <input type="text" name="review"></p>
                <p><input type="submit" value="Submit" /></p>
                <input type="hidden" name="action" value="add">
            </form>
        </div>
        <a href="delete.php">Reset Album</a>
    </main>
</body>

</html>