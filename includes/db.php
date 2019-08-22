<?php
//database connection code starts
$db_host = "localhost"; //local server name 
$db_user = "root"; //database username
$db_password = ""; //database password
$db_name = "zeta"; //database name

//connection for the database
$connection = mysqli_connect( $db_host , $db_user , $db_password , $db_name);

if(!$connection){
    die("Query Failed. " . mysqli_error());
}

?>