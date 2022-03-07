<?php
include("Connect.php");
?>
<table border=1px>
    <tr><th>Roll Number</th>
    <th>Name</th>
    <th>Course</th>
    <th>Status</th></tr>

<?php
$query = $con->prepare("SELECT * FROM students");
$query->execute();
$result = $query->get_result();
while($row = $result->fetch_assoc()){
    ?>

<tr>
    <td>
        <?php echo $row['RollNumber'];?>
    </td>
    <td>
        <?php echo $row['Name'];?>
    </td>
    <td>
        <?php echo $row['Course'];?>
    </td>
    <td>
        <?php echo $row['Status'];?>
    </td>
</tr>

<?php
}
?>
</table>
