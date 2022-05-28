<?php

error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);

$con = mysqli_connect("localhost", "root");

mysqli_select_db ($con,'quizproject');

$sname = $_POST['sname'];
$sid = $_POST['sid'];
$attempt = $_POST['attempt'];
$percentage = $_POST['percentage'];
$lname = $_POST['lname'];
$fname = $_POST['fname'];



$query = "INSERT INTO attempt(fname, lname, sname,sid,attempt,percentage)
VALUES('$fname', '$lname', '$sname', '$sid', '$attempt', '$percentage')";

mysqli_query ($con, $query);
header('location:index.html');

?>