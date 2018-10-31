<?php

    // Bring in music logic
    require_once 'music_db.php';
    require_once 'music_crud.php';
    require_once 'music_views.php';


    // My note list
    class music {

        // Database connection
        private $db;

        
        // Automatically connect
        function __construct() {
            $this->db =  music_connect();
        }

        
        // CRUD
        
        function query() {
            return query_music($this->db);
        }
        
    
        function clear() {
            return clear_music($this->db);
        }
        
        
        function add($artist, $name, $artwork,$purchase,$description,$review) {
            return add_note ($this->db,$artist, $name, $artwork,$purchase,$description,$review);
        }
        
        
        //Views
        
        function show_music() {
            render_list($this->query());
        }
        
        
        function add_form() {
            add_note_form();
        }
    }


    // Create a list object and connect to the database
    $music = new music;

?>
