<?php 
//Connecting to the database 
$servername = "localhost";
$username = "root";
$password = "";
$database = "infinitedb";


//Create a connection
$conn = mysqli_connect($servername, $username, $password, $database );

if (!$conn){
    die("Sorry! We failed to connect to the Database : ".mysqli_connect_error());
}
else{
    echo "Connection was successful";
}


?>