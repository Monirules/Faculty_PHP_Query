
<h2 style="width: 40%; margin: auto; color:brown; padding-top: 10%;">List of the students who got 100 marks:</h2>

<div style="margin:auto ; width: 20%; font-size: 21px;">
    <?php

    error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
    $con = mysqli_connect("localhost","root","", "quizproject");
    $res = mysqli_query($con, "SELECT sid, fname, lname FROM attempt WHERE percentage=100 AND attempt=1");
    
    while($row=mysqli_fetch_array($res)){
        echo "<br>";
        echo "<br>";
    
        echo $row['fname'];
        echo " - ";
        echo $row['lname'];
        echo " - ";
        echo $row['sid'];
       
        echo "<br>";
        echo "<br>";
    }
    ?>
</div>
