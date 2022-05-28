<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Student</title>
</head>


<body style="background-color:rgb(165, 169, 169);">
    <h1 style="color: brown; width: 35%; margin: auto; padding-top: 10%;">Delete by Student ID</h1>
    <br>
    <div style="width: 35%; margin: auto; padding-top: 20px;">
        <form method='POST' action='delete.php'>
            
            <input type="number" name="sid" placeholder="Enter Student ID"><br><br>
            <button type="submit">Delete</button>
        </form>
    </div>
    

<br><br><br>

<h2 style="width: 35%; margin: auto; color:brown; ">All Students List</h2>
<div style="margin:auto ; width: 35%; font-size: 20px; font-weight: bold; color: rgb(3, 3, 156);">
<?php


    error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
    $con = mysqli_connect("localhost","root","", "quizproject");

    $sid = $_POST['sid'];

    $res = mysqli_query($con, "DELETE FROM attempt WHERE sid = '$sid'");

    $show = mysqli_query($con, "SELECT * FROM attempt");

    
    while($row=mysqli_fetch_array($show)){
        
        echo "<br>";
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
        
       
        

    }
?>

</div>


</body>
</html>