<?php
include("./connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retrive data</title>
    <style>
        tr,th,td{
            border:1px solid black;
           
        }
    </style>
</head>
<body>
    <table style=" border-collapse:collapse">
        <tr>
            <th>Name</th>
            <th>email</th>
            <th>password</th>
        </tr>
        <?php
     $query=$con->prepare("select * from data");
   $query->execute();
   $result=$query->get_result();
   
   while($row=$result->fetch_assoc()){
       ?>
       <tr>
            <td>
               <?php 
               echo $row['name']
                ?>
            </td>
            <td>
               <?php 
               echo $row['email']
                ?>
            </td>
            <td>
               <?php 
               echo $row['password']
                ?>
            </td>
   </tr>
   <?php
   }
   ?>
    </table>
</body>
</html>