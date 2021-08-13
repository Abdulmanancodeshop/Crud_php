<?php
error_reporting(0);

?>
    <body>
        <form action="image.php" method="post" enctype="multipart/form-part">
      <input type="file" name ="uploadfile" value=''>
      <input type="submit" name ='submit' value='Upload file'>  
      </form>
    </body>
<?php
$folder = "student/";
print_r($_FILES['uploadfile']);
// echo $_FILES["uploadfile"];
?>