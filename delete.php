<?php
include('../connection.php');
error_reporting(0);
$sno = $_GET['sno'];
$title = $_GET['tilte'];
$desc = $_GET['desc'];
// $dt = $_GET['dt'];
$dlquery = "DELETE FROM `notes` WHERE `notes`.`sno` = '$sno'";
$data = mysqli_query($conn,$dlquery);
if($data){
    echo 'data deleted successfull';

?>
<META HTTP-EQUIV='refresh' content='0; url="http://localhost/coding/dashboard/home.php"' >
<?php
}
else {
    echo 'data is not deleted';
}

?>