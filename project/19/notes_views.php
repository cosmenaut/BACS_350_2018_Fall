<?php
    /*
        add_note_form -- Create an HTML form to add record.
    */

    function add_note_form() {
        
        echo '
            <div class="card">
                <h3>Add note</h3>
            
                <form action="insert.php" method="post">
                    <p><label>Title:</label> &nbsp; <input type="text" name="title"></p>
                    <p><label>Date:</label> &nbsp; <input type="date" name="date"></p>
                    <p><label>Body:</label> &nbsp; <input type="text" name="body"></p>
                    <p><input type="submit" value="Add Note"/></p>
                </form>
            </div>
            ';
        
    }


    
    /*
        render_list -- Loop over all of the notes to make a bullet list
    */
 
    function render_list($list) {

        echo '
            <div class="card">
                <h3>notes in List</h3> 
                <ul>
            ';
        foreach ($list as $s) {
            echo '<li>' . $s['id'] . ', ' . $s['title'] . ', ' . $s['body'] . '</li>';
        }
        echo '
                </ul>
            </div>';
    
    }
    

?>