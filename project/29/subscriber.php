<?php

    // Create a database connection
    require_once 'db.php';
    require_once 'log.php';


    // Add a new record
    function add_subscriber($db) {
        try {
            $artist  = filter_input(INPUT_POST, 'artist');
            $name = filter_input(INPUT_POST, 'name');
            $artwork  = filter_input(INPUT_POST, 'artwork');
            $purchase = filter_input(INPUT_POST, 'purchase');
            $description  = filter_input(INPUT_POST, 'description');
            $review = filter_input(INPUT_POST, 'review');
            $query = "INSERT INTO music (artist, name, artwork, purchase, description, review) VALUES (:artist, :name, :artwork,:purchase, :description, :review);";
            $statement = $db->prepare($query);
            $statement->bindValue(':artist', $artist);
            $statement->bindValue(':name', $name);
            $statement->bindValue(':artwork', $artwork);
            $statement->bindValue(':purchase', $purchase);
            $statement->bindValue(':description', $description);
            $statement->bindValue(':review', $review);
            $statement->execute();
            $statement->closeCursor();
            header('Location: index.php');
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo "<p>Error: $error_message</p>";
            die();
        }
    }

    // Show form for adding a record
    function add_subscriber_view() {
        return '
            <div class="card">
                <h3>Add Album</h3>
                <form action="index.php" method="post">
                    <p><label>artist:</label> &nbsp; <input type="text" name="artist"></p>
                    <p><label>name:</label> &nbsp; <input type="text" name="name"></p>
                    <p><label>artwork:</label> &nbsp; <input type="text" name="artwork"></p>
                    <p><label>purchase link:</label> &nbsp; <input type="text" name="purchase"></p>
                    <p><label>description:</label> &nbsp; <input type="text" name="description"></p>
                    <p><label>review:</label> &nbsp; <input type="text" name="review"></p>
                    <p><input type="submit" value="Add Album"/></p>
                    <input type="hidden" name="action" value="create">
                </form>
            </div>
        ';
    }


    // Delete Database Record
    function delete_subscriber($db, $id) {
        $action = filter_input(INPUT_GET, 'action');
        $id = filter_input(INPUT_GET, 'id');
        if ($action == 'delete' and !empty($id)) {
            $query = "DELETE from music WHERE id = :id";
            $statement = $db->prepare($query);
            $statement->bindValue(':id', $id);
            $statement->execute();
            $statement->closeCursor();
        }
        header('Location: index.php');
    }
    

    // Show form for adding a record
    function edit_subscriber_view($record) {
        $artist  = $record['artist'];
        $name = $record['name'];
        $artwork  = $record['artwork'];
        $purchase = $record['purchase'];
        $description  = $record['description'];
        $review = $record['review'];
        return '
            <div class="card">
                <h3>Edit Album</h3>
                <form action="index.php" method="post">
                
                    <p><label>artist:</label> &nbsp; <input type="text" name="artist" value="' . $artist . '"></p>
                    <p><label>name:</label> &nbsp; <input type="text" name="name" value="' . $name . '"></p>
                    <p><label>artwork:</label> &nbsp; <input type="text" name="artwork" value="' . $artwork . '"></p>
                    <p><label>purchase link:</label> &nbsp; <input type="text" name="purchase" value="' . $purchase . '"></p>
                    <p><label>description:</label> &nbsp; <input type="text" name="description" value="' . $description . '"></p>
                    <p><label>review:</label> &nbsp; <input type="text" name="review" value="' . $review . '"></p>

                    <p><input type="submit" value="Save Record"/></p>
                    <input type="hidden" name="action" value="update">
                    <input type="hidden" name="id" value="' . $id . '">
                </form>
            </div>
        ';
    }


    // Lookup Record using ID
    function get_subscriber($db, $id) {
        $query = "SELECT * FROM music WHERE id = :id";
        $statement = $db->prepare($query);
        $statement->bindValue(':id', $id);
        $statement->execute();
        $record = $statement->fetch();
        $statement->closeCursor();
        return $record;
    }


    // Handle all action verbs
    function handle_actions() {
        $id = filter_input(INPUT_GET, 'id');
        global $subscribers;
        global $log;

        // POST
        $action = filter_input(INPUT_POST, 'action');
        if ($action == 'create') {    
            $log->log('music CREATE');                    // CREATE
            $subscribers->add();
        }
        if ($action == 'update') {
            $log->log('music UPDATE');                    // UPDATE
            $subscribers->update();
        }

        // GET
        $action = filter_input(INPUT_GET, 'action');
        if (empty($action)) {                                  
            $log->log('music READ');                      // READ
            return $subscribers->list_view();
        }
       if ($action == 'add') {
            $log->log('music Add View');
            return $subscribers->add_view();
        }
        if ($action == 'clear') {
            $log->log('music DELETE ALL');
            return $subscribers->clear();
        }
        if ($action == 'delete') {
            $log->log('music DELETE');                    // DELETE
            return $subscribers->delete($id);
        }
        if ($action == 'edit' and ! empty($id)) {
            $log->log('music Edit View');
            return $subscribers->edit_view($id);
        }
    }
       

    // Query for all subscribers
    function query_subscribers ($db) {
        $query = "SELECT * FROM music";
        $statement = $db->prepare($query);
        $statement->execute();
        return $statement->fetchAll();
    }


    // render_table -- Create a bullet list in HTML
    function subscriber_list_view ($table) {
        $s = render_button('Add music', 'index.php?action=add') . '<br><br>';
        $s .= '<table>';
        $s .= '<tr><th>Name</th><th>Album</th><th>Artwork</th></tr>';
        foreach($table as $row) {
            $edit = render_link($row[1], "index.php?id=$row[0]&action=edit");
            $name = $row[2];
            $imgpart = "<img src='".$row['3']."' style='width:200px; height:200px'>";
            $artwork = $imgpart;
            $buy = $row[4];
            $purchase = render_link("purchase",$buy);
            $delete = render_link("delete", "index.php?id=$row[0]&action=delete");
            $row = array($edit, $name, $artwork, $purchase, $delete);
            $s .= '<tr><td>' . implode('</td><td>', $row) . '</td></tr>';
        }
        $s .= '</table>';
        
        return $s;
    }


    // Update the database
    function update_subscriber ($db) {
        $id    = filter_input(INPUT_POST, 'id');
        $artist  = filter_input(INPUT_POST, 'artist');
        $name = filter_input(INPUT_POST, 'name');
        
        // Modify database row
        $query = "UPDATE subscribers SET name = :name, email = :email WHERE id = :id";
        $statement = $db->prepare($query);

        $statement->bindValue(':id', $id);
        $statement->bindValue(':name', $name);
        $statement->bindValue(':email', $email);

        $statement->execute();
        $statement->closeCursor();
        
        header('Location: index.php');
    }
 

    /* -------------------------------------------------------------
    
                        S U B S C R I B E R S
    
     ------------------------------------------------------------- */

    // My Subscriber list
    class Subscribers {

        // Database connection
        private $db;

        
        // Automatically connect
        function __construct() {
            global $db;
            $this->db =  $db;
        }

        
        // CRUD
        
        function add() {
            return add_subscriber ($this->db);
        }
        
        function query() {
            return query_subscribers($this->db);
        }
        
    
        function clear() {
            return clear_subscribers($this->db);
        }
        
        function delete() {
            delete_subscriber($this->db, $id);
        }
        
        function get($id) {
            return get_subscriber($this->db, $id);
        }
        
        function update() {
            update_subscriber($this->db);
        }
        
        
        // Views
        
        function handle_actions() {
            return handle_actions();
        }
        
        function add_view() {
            return add_subscriber_view();
        }
        
        function edit_view($id) {
            return edit_subscriber_view($this->get($id));
        }
        
        function list_view() {
            return subscriber_list_view($this->query());
        }
        
    }


    // Create a list object and connect to the database
    $subscribers = new Subscribers;

?>
