<style>
    .btn a {
    color: #0d6efd;
    text-decoration: none;
    color: white;
    /* margin: auto; */
}
.btn a:hover{
    color: red;
}
</style>
<?php
include('../connection.php');
// error_reporting(0);
// $update =false;
$_GET['sno'];
$_GET['title'];
$_GET['desc'];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<?php
// if($update==true)
{
  
}
// else{
// echo "<div class='alert alert-danger' role='alert'>
//       Error!! Your data has not been updated.
//       </div>";

// }
?>
<div class="container  my-4" >
  <form  action='edit.php' method='get' enctype="multipart/form-data">
  <h2>Add Notes</h2>
  <div class="mb-3">
      <label for="sno" class="form-label">Serial no</label>
      <input type="text" class="form-control" id="sno" name= 'sno' value="<?=$_GET['sno'];?>" >
  </div>
    <div class="mb-3">
      <label for="title" class="form-label">Note title</label>
    <input type="text" class="form-control" id="title" name= 'title' value="<?=$_GET['title']; ?>" >
  </div>
  <div class="mb-3">
  <label for="Description" class="form-label">Description</label>
  <textarea class="form-control" id="desc" name='desc' value="" rows="3" ><?=$_GET['desc'];?></textarea>
</div>
<input type="file" name="uploadfile" value="<?=$_GET['picsource'];?>" id='uploadfile'>


  <button type="submit" class="btn btn-primary" name='submit'>Update note</button>
  <button class="btn btn-dark"><a href='http://localhost/coding/dashboard/' >Back to display</a></button>
  <!-- <a href='http://localhost/coding/dashboard/'><button class="btn btn-dark"></button>Back to display</a> -->

</form>
</div>

<?php
if(isset($_GET['submit'])){
    $sno = $_GET['sno'];
    $title = $_GET['title'];
    $desc = $_GET['desc'];
    if(isset($_FILES['uploadfile']['name']))
    {
    $filename = $_FILES['uploadfile']['name'];
        $tempname = $_FILES['uploadfile']['tmp_name'];
        $folder = 'img/'.$filename;
        move_uploaded_file($tempname,$folder);
    }
    // $dt = $_GET['dt'];
    if($sno!='' && $title!='' && $desc!='' && $filename!=''){
    $equery = "UPDATE `notes` SET `title` = '$title', `desc` = '$desc',`picsource`='$folder' WHERE `notes`.`sno` = '$sno'";
    $data = mysqli_query($conn,$equery);
    if($data){
      // $update = true;
          echo "<div class='alert alert-success' role='alert'>
      Success!! Your data has been updated successfully 
      </div>";
     
    }
    else{
        echo 'not updated';
    }
}
else{
    echo 'All field are required';
}
}

?>
