<?php
include("Connect.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Web Eng Php Lab 2 
        </title>
    </head>
    <body>
        <form method="post">
            <label >Roll Number</label> 
            <input type="text" name="rn"></input><br><br>

            <label >Name</label> 
            <input type="text" id="name" name="fn"> <br><br> 

            <label >course</label> 
            <input type="text" name="crs"><br><br>

            <label >status</label> 
            <input type="text" id="status" name="st"> <br><br> 

            <button type="submit" name="submit_data">Insert Data</button>
        </form>        
    </body>
</html>

<?php
if(isset($_POST['submit_data'])){
    $roll_number=$_POST['rn'];
    $full_name=$_POST['fn'];
    $course_name=$_POST['crs'];
    $status=$_POST['st'];

    $query=$con->prepare("INSERT INTO students(RollNumber, Name, Course, Status)values(?,?,?,?)");
    $query->bind_param("ssss", $roll_number, $full_name, $course_name, $status);
    $query->execute();
    $query->close();

    echo '<h2 style="color:green">Data Inserted Successfully</h2>';
}
?>
