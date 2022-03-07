<?php
//create the variables of connections
$servername="localhost";
$username="root";
$password="";
$dbname="web database";
//create the connection for the database
$con=mysqli_connect("localhost","root","","web database");
//check the connection
if(mysqli_connect_errno())
{
echo"Failed to connect to MySQL:".mysqli_connect_errno();
}
?>
