<?php
    include 'db.inc.php';

    $id = 1;
    $name = "Monica";
    $mob = 3456;

    $query = "UPDATE emp SET name = '$name', mob = '$mob' WHERE empid = '$id'";
    if(mysqli_query($connect, $query)) {
        echo 'Updated';
    }
?>