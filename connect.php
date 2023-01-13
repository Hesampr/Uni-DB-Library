<?php
    
    $conn = new mysqli('localhost', 'admin1', 'admin1234', 'paygah_prj_db');
    if (!$conn) {
        die("Connection failed: " . $conn->connect_error);
    }
    

?>



