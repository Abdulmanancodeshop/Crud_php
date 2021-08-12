<?php
echo '<h1>Welcome to connect with database</h1>';
// Connecting to database
$servername = 'localhost';
$username = 'root';
$password = '';
// Create a connection object
$conn = mysqli_connect($servername,$username,$password);
// echo '<br>Connection was successful';
if(!$conn)
{
    die('Sorry there is an error to connect with database') . mysqli_connect_error();
}
else 
{
    echo '<br>Connection was successful';
}
$sql = 'create database dbfirst2';
$result = mysqli_query($conn,$sql);
if($result){
    echo 'database created successfully';
}
else{
    echo 'database is already exist---><br>'.mysqli_error($conn) ;
    echo '<br>';
}

?>
