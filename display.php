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
    </tr>

<?php

while($data = mysqli_fetch_assoc($result)){
    echo "<tr>
            <td>".$data['rollno']."</td>
            <td>".$data['name']."</td>
            <td>".$data['gender']."</td>
            <td>".$data['class']."</td>
        </tr>";
    // echo $data['rollno']." ".$data['name']." ".$data['gender']." ".$data['class']."<br>";
}
"</table>"
?>