<?php
    /*
        add_note_form -- Create an HTML form to add record.
    */

    function add_note_form() {
        
        echo '
            <div class="card">
                <h3>Add an Artist</h3>
            
                <form action="insert.php" method="post">
                    <p><label>artist:</label> &nbsp; <input type="text" name="artist"></p>
                    <p><label>name:</label> &nbsp; <input type="text" name="name"></p>
                    <p><label>artwork:</label> &nbsp; <input type="text" name="artwork"></p>
                    <p><label>purchase link:</label> &nbsp; <input type="text" name="purchase"></p>
                    <p><label>description:</label> &nbsp; <input type="text" name="description"></p>
                    <p><label>review:</label> &nbsp; <input type="text" name="review"></p>
                    <p><input type="submit" value="Add Note"/></p>
                </form>
            </div>
            ';
        
    }


    
    /*
        render_list -- Loop over all of the music to make a bullet list
    */
 
    function render_list($list) {

        echo '
            <div class="card">
                <h3>music in List</h3> 
                <ul>
            ';
        foreach ($list as $s) {
            echo '<li>' . $s['id'] . ', ' . $s['artist'] . ', ' . $s['artwork'] . '</li>';
        }
        echo '
                </ul>
            </div>';
    
    }
    

?>