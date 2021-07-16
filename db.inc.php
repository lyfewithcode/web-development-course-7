<?php
    $host = "localhost";
    $user = "root";
    $password = '';
    $db = "company";

    $connect = @mysqli_connect($host, $user, $password);
    
    if(@mysqli_select_db($connect, $db)) {
        // echo 'db selected';
    } else {
        echo 'oops... not connected';
    }

?>