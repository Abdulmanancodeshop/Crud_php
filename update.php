<?php
include('../connection.php');
error_reporting(0);

$_GET['rollno'];
$_GET['name'];
$_GET['gender'];
$_GET['class'];

?>
<html>
    <head>
</head>
<body>
    <h1>Update data</h1>
 <div class="container">
<form action="" method="get">
    Roll No: <input type="text" name = "rollno" id = "rollno" value=" <?php echo $_GET['rollno'];?>"><br><br>
    Name: <input type="text" name = "name" id = "name"  value=' <?php echo  $_GET['name'];?>'><br><br>
    Gender: <input type="text" name = "gender" id = "gender" value=' <?php echo $_GET['gender'];?>' ><br><br>
    Class: <input type="text" name = "class" id = "class" value=' <?php echo $_GET['class'];?>' ><br><br>
    <input type="submit" name = "submit" id = "submit" value='update'  >
    <a href='display1.php'>Go to display data page</a> 
</form>
</div>
</body>
</html>
<?php
if($_GET['submit'])
{
$rollno = $_GET['rollno'];
$name = $_GET['name'];
$gender = $_GET['gender'];
$class = $_GET['class'];
 $query= "UPDATE INSERTT SET NAME ='$name', GENDER ='$gender', CLASS ='$class' WHERE ROLLNO='$rollno'";
    $result = mysqli_query($conn,$query);
        if($result)
        {
        echo "<br><br><font color='green' >Data update successfully<br>";
        }
        else 
        {
            echo "<font color='red'>Not update----->";
        }
            }


?>