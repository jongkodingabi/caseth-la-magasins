<?php
$NAMA = "localhost";
$USER = "root";
$PASSWORD = "";
$DATABASE = "dbpkwu";

$conn = mysqli_connect($NAMA, $USER, $PASSWORD, $DATABASE);
    if(mysqli_connect_errno() ) {
        exit('Failed to connect: ' . mysqli_connect_errno());
    }
?>