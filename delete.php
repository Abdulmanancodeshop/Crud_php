<?php
include('../connection.php');
error_reporting(0);

$_GET['rollno'];
$_GET['name'];
$_GET['gender'];
$_GET['class'];

$rollno = $_GET['rollno'];
$name = $_GET['name'];
$gender = $_GET['gender'];
$class = $_GET['class'];
 $query= "DELETE FROM INSERTT WHERE ROLLNO='$rollno'";
    $result = mysqli_query($conn,$query);
        if($result)
        {
        echo "<br><br><font color='green' >Data deleted successfully<br> <a href ='display1.php'>Go to display page</a>";
        ?>
        <META HTTP-EQUIV='refresh' content ='0; url=http://localhost/coding/project/display1.php'>
        <?php
        }
        else 
        {
            echo "<font color='red'>Not update----->";
        }
            


?>