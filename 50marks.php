


<h2 style="width: 40%; margin: auto; color:brown; padding-top: 10%;">List of the students who got less than 50 marks:</h2>

<div style="margin:auto ; width: 20%;font-size: 20px; font-weight: bold; color: rgb(3, 3, 156);">
<br>
<?php

error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
$con = mysqli_connect("localhost","root","", "quizproject");
$res = mysqli_query($con, "SELECT sid, fname, lname FROM attempt WHERE percentage < 50 AND attempt=2");


while($row=mysqli_fetch_array($res)){
    echo "<br>";
    echo "<br>";

    echo $row['fname'];
    echo " - ";
    echo $row['lname'];
    echo " - ";
    
    echo $row['sid'];
   
    
    
    echo "<br>";
   

}
?>
</div>
