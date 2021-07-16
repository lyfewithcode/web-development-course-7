<?php
    include 'db.inc.php';

    $query = "SELECT * FROM emp";
    if(mysqli_query($connect, $query)) {
        echo 'Yup';
    }
?>