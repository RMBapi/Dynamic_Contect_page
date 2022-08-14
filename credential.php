<?php 
    //Start Session
    session_start();


    //Create Constants to Store Non Repeating Values
    define('SITEURL', 'http://localhost/bafi/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'assignment3');
    
    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die("Connection failed: " . mysqli_connect_error()); //Database Connection
    $db_select = mysqli_select_db($conn, DB_NAME) or die("Connection failed: " . mysqli_connect_error()); //SElecting Database


?>