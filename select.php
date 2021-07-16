<?php
    include 'db.inc.php';

    $id = 3;
    $name = "Monica";
    $mob = 3456;

    // $query = "SELECT * FROM emp";
    $query = "SELECT name, mob FROM emp WHERE empid = '$id'";
    
    $query_run = mysqli_query($connect, $query);

    if(mysqli_num_rows($query_run) > 0) {
        while($row = mysqli_fetch_assoc($query_run)) {
            // echo $row['name'], $row['mob'];
            echo $row['name'].' is having '.$row['mob'].' mobile number<br>';
        }
    }
?>