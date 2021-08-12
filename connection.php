<?php
// Connecting to database
$servername = 'localhost';
$username = 'root';
$password = '';
$database ='insertt';
// Create a connection object
$conn = mysqli_connect($servername,$username,$password,$database);
// echo '<br>Connection was successful';
if(!$conn)
{
    die('Sorry there is an error to connect with database') . mysqli_connect_error();
}

?>
