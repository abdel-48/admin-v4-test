<?php

$host = "us-cdbr-east-06.cleardb.net";
$username = "b2c7862bad6283";
$password = "5ca079e7";
$database = "heroku_88462ca54c0f82c";

//Connect to database :
$con = mysqli_connect($host, $username, $password, $database);

//Check Connection : 
if(!$con)
{
    //header("Location: ../errors/db.php");
    die(mysqli_connect_error($con));
}
//else{
//    echo "Database Connected.!";
//}

?>