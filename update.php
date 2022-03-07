<?php
include("connect.php");
//update the data
if(isset($_GET['name']))
{
    $name=$_GET['name'];
}
if(isset($_GET['email']))
{
    $email=$_GET['email'];  
}
if(isset($_GET['password']))
{
    $password=$_GET['password'];  }
?>
<!Doctype html>
<html lang="en">
  <head>
    <title> data updation</title>
    <style>
        table,td,th{
            border:3px black;
            border-style:solid double;
            margin:auto;
        }
        td{
            background-color: rgb(255,255,255);
        }
        body{
            background-image: url("img/fbanner1.jpg");
            background-size: cover;     
        }
        .he{
            background-color: rgb(255,192,203);
            text-align: center;
            font-style: italic;
        }
        img{
            height: 75px;
            width: 75px;
             transition: width 2s, height 2s, transform 2s;
        }
        img:hover{
              transform: rotate(180deg);
        }
    </style>
    
  </head>
  <body >
      <h1>Use of database and data update using PHP</h1>

      <?php
//UPDATE DATA
if(isset($name)){ 
  echo'
<form style="margin-top:20px;background-color:white;font-size:15px" method="post">
<div>
<label><b>Email</b></label><br>
<input type="text" name="heading" value="'.$email.'"></div>
<div>
<label><b>Passowrd</b></label><br>
<input type="text" name="description" value="'.$password.'"></div>
<br>
<div>
<button type="submit" name="update_data">Update  Data</button>
    </div>
</form>';
}
if(isset($_POST['update_data'])){
$email=$_POST['Email'];
$password=$_POST['Password'];
//updation
  $query2 = $con->prepare("UPDATE data SET email=?, password=? WHERE name=?");
    $query2->bind_param("sss",$email,$password,$name);
    $query2->execute();
    $query2->close();
    }  
    ?>

    <table>
        <tr>
        <th>ACTION</th>
        <th>email</th>
        <th>password</th>
    </tr>

<?php
$query = $con->prepare("SELECT * FROM data");
        $query->execute();
        $result = $query->get_result();
        while($row = $result->fetch_assoc()) {
        ?>
        <tr>
  <td>
      <a href="update.php?
      <?php echo "name=".$row['name']."&email=".$row['email']."&password=".$row['password'];?>">UPDATE</a> </td>
        <td class="he"><?php echo $row['email'];?></td>
            <td><?php echo $row['password'];?></td>
            </tr>
    <?php
         }
        ?>
    </table>

  </body>
  </html>
 
