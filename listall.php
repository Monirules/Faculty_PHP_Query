
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List All</title>
</head>

<body style="background-color:gainsboro;">
<div style="margin:auto ; width: 30%; padding-top: 5%; font-size: 20px; font-weight: bold; color: rgb(3, 3, 156);">
<h2 style="color:crimson ;">List of All Students:</h2> <br><br>
<?php


error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
$con = mysqli_connect("localhost","root","", "quizproject");

$res = mysqli_query($con, "SELECT * FROM attempt");


    while($row=mysqli_fetch_array($res)){
        echo $row['id'];
        echo ". ";
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
