<?php
require("../connection.php");
// error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>
<body>
    <h1>Insert the Data</h1>
    <div class="container">
        <form action="insert.php" method="get">
            Roll No: <input type="text" name = "rollno" id = "rollno"><br><br>
            Name: <input type="text" name = "name" id = "name"  ><br><br>
            Gender: <input type="text" name = "gender" id = "gender"  ><br><br>
            Class: <input type="text" name = "class" id = "class"  ><br><br>
            <input type="submit" name = "submit" id = "submit"  >
        </form>
    </div>
    <?php
    if(isset($_GET['submit']))
    {
        $rollno = $_GET['rollno'];
        $name = $_GET['name'];
        $gender = $_GET['gender'];
        $class = $_GET['class'];
    if($rollno != '' && $name != '' && $gender != '' && $class != '')
        {
            $query= "INSERT INTO `insertt`.`insertt` (`rollno`, `name`, `gender`, `class`) VALUES ('$rollno','$name','$gender', '$class')"; 
            $result = mysqli_query($conn,$query);
                if($result)
                {
                echo "<br><br>Data inserted successfully<br>";
                echo $name." ".$class;
                }
                else 
                {
                    echo 'Error to insert the data into database--->'.mysqli_error($conn);
                }
                    }
        else
        {
            echo 'All feild are required';
        }
    }
    
    
    ?>
</body>
</html>