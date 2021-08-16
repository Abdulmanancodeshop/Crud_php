<?php
// include('../connection.php');
// error_reporting(0);
// $filename = $_FILES["uploadfile"]["name"];
// $tempname = $_FILES["uploadfile"]["tmp_name"];
// $folder = "img/".$filename;
// move_uploaded_file($tempname,$folder);
// echo "<img src='$folder' width='100' height= '100'";
error_reporting(0);

?>
    <body>
        <form action="image.php" method="post" enctype="multipart/form-data">
      <input type="file" name ="uploadfile" value=''>
      <input type="submit" name ='submit' value='Upload file'>  
      </form>
    </body>
<?php
// print_r($_FILES['uploadfile']);
// echo $_FILES["uploadfile"];
$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "img/".$filename;
// echo $folder.$filename;
move_uploaded_file($tempname,$folder);
echo "<br><img src='$folder' width='100' height='100' alt=''>"
?>