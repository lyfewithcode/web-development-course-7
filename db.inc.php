<?php
    $host = "localhost";
    $user = "root";
    $password = '';
    
    if(@mysqli_connect($host, $user, $password)) { // adding "@" symbol to hiding server error responeses
        // echo 'connected';
    } else {
        echo 'oops... not connected';
    }

?>