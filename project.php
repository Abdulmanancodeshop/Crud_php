
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">


    <title>project</title>
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/coding/project/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/phpmyadmin/index.php?route=/sql&server=1&db=login&table=login&pos=0">Database</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
    </ul>
    <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
</div>
</div>
</nav>
<?php
$insert = false ;
// if(isset($_POST['email'])){
// connection to database
// if(isset($_POST['submit'])){
    // if(!empty($_post['email'])){
        if(isset($_POST['submit'])){ 
        // if($_SERVER['REQUEST_METHOD']=='POST'){
            $insert = true;
            $email=$_POST['email'];
            $password=$_POST['password'];
            // $email = $_POST['email'];
            // $password = $_POST['password'];
              $server ='localhost';
              $username = 'root';
              $password = '';
              $con = mysqli_connect($server,$username,$password);
              if(!$con){
                  die('Error to connecting woth databse--->'.mysqli_connect_error());
              }
              else
              {
              // echo 'connection is successfully created';
              
            $sql= "INSERT INTO `login`.`login` (`email`, `password`, `dt`) VALUES ('$email', '$password', current_timestamp())";
            // echo $sql;
            $result = mysqli_query($con,$sql);
            if($result )
            {
                if($insert == true){
                // $insert = true; 
                echo '<div class="alert alert-success" role="alert" style="padding: 10px">
                <strong>Congratulation!!</strong> Your $email and $Password successfully entered in database <a href="#" class="alert-link"></a>';
                }
            }
            else {
            echo 'Error to inserted the record--> '.mysqli_error($con);
            }
            $con->close();
            }
            
        }
    
    // else{
    //     echo 'please insert your email';        
    // }


?>
</div>
<div class="container">
<form action ="project.php" method= "post">
    <h2>Please Enter your Availibilty</h2>
  <div class="mb-3">
    <label for="email" >Email</label>
    <input type="email" class="form-control" id="email" name= 'email' aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name= 'password'>
  </div>
  <button type="submit" id='submit' name='submit' class="btn btn-primary">Submit</button>
</form>
</div>

<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>