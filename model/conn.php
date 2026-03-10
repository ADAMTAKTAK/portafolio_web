<?php
    $conn = new mysqli("localhost", "root", "", "portafolio_web");
    
    $conn->set_charset("utf8");
    
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }
?>