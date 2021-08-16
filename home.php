<style>
tbody, td, tfoot, th, thead, tr {
    border-color: inherit;
    border-style: solid;
    border-width: 0;
    padding: 9px 23px;
} 
</style>
<?php
// error_reporting(0);
include('../connection.php');
$insert = false;
if(isset($_POST['submit']))
{
$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "img/".$filename;
// echo $folder.$filename;
move_uploaded_file($tempname,$folder);

  $sno = $_POST['sno'];
  $title = $_POST['title'];
  $desc = $_POST['desc'];
  // $iquery = "insert into notes values ('$title','$desc',current_timestamp())";
  if($title!='' && $desc!='' && $sno!='' && $filename!=''){
  $iquery = "INSERT INTO `notes`.`notes` (`sno`,`title`, `desc`, `dt`,`picsource`) VALUES ('$sno','$title', '$desc', current_timestamp(),'$folder')";
  $idata = mysqli_query($conn,$iquery);
  if($idata)
{
  // echo 'data inserted successfully;
  $insert = true;
}
else{
  // echo 'data is not inserted';
  $insert == false;
  echo "<div class='alert alert-danger' role='alert'>
  Error!! you data has not been inserted 
</div>";

}
}}

else {
  echo 'all field are required';
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Dashboard</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <img src="logo.png" height='40' width='60' alt="">
    <!-- <a class="navbar-brand" href="#"</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#" tabindex="1" >Contact US</a>
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
// if($insert==true){
//   echo "<div class='alert alert-success' role='alert'>
//   Success!! you data has been inserted successfully
// </div>";
// }

?>

<div class="container  my-4" >
  <form  action='home.php' method='post' enctype="multipart/form-data" >
  <h2>Add Notes</h2>
  <div class="mb-3">
      <label for="sno" class="form-label">Serial no</label>
      <input type="text" class="form-control" id="sno" name= 'sno' >
  </div>
    <div class="mb-3">
      <label for="title" class="form-label">Note title</label>
    <input type="text" class="form-control" id="title" name= 'title' >
  </div>
  <div class="mb-3">
  <label for="Description" class="form-label">Description</label>
  <textarea class="form-control" id="desc" name='desc' rows="3"></textarea>
</div>
<input type="file" name='uploadfile'>
<button type="submit" class="btn btn-primary" name='submit'>Add note</button><br>
</form>
</div>
<?php
$dquery = "SELECT * FROM notes";
$ddata = mysqli_query($conn,$dquery);
// echo mysqli_num_rows($ddata);
// $d=mysqli_fetch_assoc($ddata);
// echo $d;
?>

<table>
  <tr>
    <th>Serial no</th>
    <th>Image</th>
    <th>Note title</th>
    <th>Description</th>
    <th>Time</th>
    <th colspan='2'>Operations</th>
  </tr>
  <script>
  function checkedit(){
    return confirm("Are you really want to delete");
  }
</script>

  <?php
  while($d=mysqli_fetch_assoc($ddata)){
    echo "<tr>
            <td>".$d['sno']."</td>
            <td><a href ='".$d['picsource']."'><img src='".$d['picsource']."' height='100' width = '100'/></a></td>
             <td>".$d['title']."</td>
            <td>".$d['desc']."</td>
             <td>".$d['dt']."</td>
             <td><a href='edit.php?sno=$d[sno]&picsource=$d[picsource]&title=$d[title]&desc=$d[desc]&dt=$d[dt]'  <button type='submit' class='btn btn-secondary' >Edit</button></a></td>
             <td><a href='delete.php?sno=$d[sno]'onclick='return checkedit()' <button type='submit' class='btn btn-danger' >Delete</button></a></td>
             </tr>";
    }
"</table>"
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

  </body>
</html>
