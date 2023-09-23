<?php
// Establish Connection to Database
function connect() {
    static $conn;
    if ($conn === NULL){ 
        $conn = mysqli_connect('localhost','root','nice1234','DDL.sql');
    }
    return $conn;
}

?>