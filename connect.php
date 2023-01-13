<?php
    
    $conn = new mysqli('localhost', 'root', '', 'paygah_prj_db');
    if (!$conn) {
        die("Connection failed: " . $conn->connect_error);
    }
    

?>



