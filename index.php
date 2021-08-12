<?php
// connection to database
$insert = false ;
if(isset($_POST['gender'])){
$server = 'localhost';
$username = 'root';
$password = '';
$con = mysqli_connect($server,$username,$password);
if(!$con){
    die('connnection to database is failed due to-->'.mysqli_connect_error());
}
$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$desc = $_POST['desc'];

$sql = "INSERT INTO `trip`.`trip` (`name`, `gender`, `age`, `phone`, `email`, `other`, `dt`) VALUES ('$name', '$gender', '$age', '$phone', '$email', '$desc', current_timestamp())";
// echo $sql;
if(!$con->query($sql)){
    // echo ' <br> successfully inserted';
    $insert = true;
}
else 
{
    echo "error in: $sql <br> $con->error";
}
$con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <img src="bg.jpg" alt="error">
  <div class="container">
    <h1>Welcome to Bahria University Trip Form</h1>
    <p>Students can enter their detail here!!</p>
    <?php
    if($insert == true){
    echo "<p style='color: red' >Thanks for submiting the form</p>";
    }
    ?>
    
    <form action="index.php" method="post">
      <input type="text" id="name" name= "name" placeholder = "Enter your name">
      <input type="text" id="gender" name= "gender" placeholder = "Enter your gender">
      <input type="text" id="age" name= "age" placeholder = "Enter your age">
      <input type="text" id="phone" name= "phone" placeholder = "Enter your phone no">
      <input type="text" id="email" name= "email" placeholder = "Enter your Email">
      <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter your destination where you want to go"></textarea>
      <button class ="btn">Submit</button>
    </form>
  </div>
  
 <script src="index.js"></script> 
</body>
</html>