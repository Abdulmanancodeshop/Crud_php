<style>
    td{
        padding: 10px;
    }
</style>
<?php
include('../connection.php');
$query = "Select * from insertt";
$result = mysqli_query($conn,$query);
$total = mysqli_num_rows($result);
// echo $total;
// $data = mysqli_fetch_assoc($result);
?>
<table>
    <tr>
        <th>Roll No</th>
        <th>Name </th>
        <th>Gender </th>
        <th>Class </th>
        <th colspan ="2"> Operation</th>
    </tr>
<script>
    function checkdelete(){
        return confirm("Are you really want to delete the data");
    }
</script>
<?php

while($data = mysqli_fetch_assoc($result)){
    echo "<tr>
            <td>".$data['rollno']."</td>
            <td>".$data['name']."</td>
            <td>".$data['gender']."</td>
            <td>".$data['class']."</td>
            <td><a  href='update.php?rollno=$data[rollno]&name=$data[name]&gender=$data[gender]&class=$data[class]'>Edit</a><td>
            <td><a href='delete.php?rollno=$data[rollno]' onclick ='return checkdelete()'>Delete</a><td>
        </tr>";
}
"</table>"
?>
<html>
    <body>
    <a href='http://localhost/coding/project/'>Go to home page></a>
    </body>
</html>