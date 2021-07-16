<?php
    include 'db.inc.php';

    $id = NULL;
    $name = "Alex";
    $mob = 1234;

    $query = "INSERT INTO emp VALUES ('$id', '$name', '$mob')";
    if(mysqli_query($connect, $query)) {
        echo 'Yup, '.$name.' Your informations are inserted';
    }
?>