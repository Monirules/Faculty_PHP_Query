<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student</title>
</head>

<body style="background-color:rgb(165, 169, 169);">
    <h1 style="color: brown; width: 35%; margin: auto; padding-top: 10%;">Search by Student ID or Name</h1>
    <br>
    <div style="width: 35%; margin: auto; padding-top: 20px;">
        
    <form method='POST' action='update.php'>      
            <input type="number" name="sid" placeholder="Enter Student ID"><br><br>
            <input type="number" name="attempt" placeholder="Enter Student Attempt"> <br><br>
            <input type="number" name="percentage" placeholder="Enter Updated Marks"><br><br>
            <button type="submit">Update</button>
        </form>

    </div>
    

<br><br>

<div style="margin:auto ; width: 35%; font-size: 20px; font-weight: bold; color: rgb(3, 3, 156);">

<?php

error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
$con = mysqli_connect("localhost","root","", "quizproject");
$attempt = $_POST['attempt'];
$sid = $_POST['sid'];
$percentage = $_POST['percentage'];

$res = mysqli_query($con, "UPDATE attempt SET percentage = '$percentage' WHERE sid = '$sid' AND attempt = '$attempt'");
$show = mysqli_query($con, "SELECT * FROM attempt");

while($row=mysqli_fetch_array($show)){
    

    echo $row['id'];
    echo ".  ";
    echo $row['fname'];
    echo " - ";
    echo $row['lname'];
    echo " - ";
    echo $row['sname'];
    echo " - ";
    echo $row['sid'];
    echo " - ";
    echo $row['attempt'];
    echo " - ";
    echo $row['percentage'];
    
    echo "<br>";
    echo "<br>";

}


?>
</div>



</body>
</html>