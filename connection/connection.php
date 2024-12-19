<?php
    //$hostname = "localhost";
    //$username = "root";
    //$password = "";
    //$database = "yummyunion";

    $hostname = "127.0.0.1";
    $username = "root";
    $password = "mariadb";
    $database = "yummyunion";

    $connection = mysqli_connect($hostname,$username,$password,$database);
?>