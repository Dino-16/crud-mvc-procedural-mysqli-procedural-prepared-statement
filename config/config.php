<?php
    $host = 'localhost:3307';
    $user = 'root';
    $pass = '';
    $db = 'crud';

    $conn = mysqli_connect($host, $user, $pass, $db);
    if(!$conn) {
        die('Connection Failed.' . mysqli_connect_error());
    }
?>