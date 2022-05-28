<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Student</title>
</head>

<body>
    <h1 style="color: brown; width: 35%; margin: auto; padding-top: 10%;">Search by Student ID or Name</h1>
    <br>
    <div style="width: 35%; margin: auto; padding-top: 20px;">
        <form method='POST' action='particular.php'>
            <input type="text" name="sname" placeholder="Enter Student Name">
            <input type="number" name="sid" placeholder="Enter Student ID">
            <button type="submit">Search</button>
        </form>
    </div>
    
   
</body>
</html>



<div style="margin:auto ; width: 30%;">
    <?php


    error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
    $con = mysqli_connect("localhost","root","", "quizproject");
    
    $sname = $_POST['sname'];
    $sid = $_POST['sid'];
    
    $res = mysqli_query($con, "SELECT * FROM attempt WHERE sname = '$sname' OR sid = '$sid'");
    
    while($row=mysqli_fetch_array($res)){
        echo "<br>";
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
        
        echo "<br>";
        echo "<br>";
    
    }
    
    
    ?>
</div>

