<?php
$host='localhost';
$conn=mysqli_connect($host,'root','','gym');
$name=$_POST["nm"];
$emailid=$_POST["em"];
$age=$_POST["age"];
$password= $_POST["pass"];
$state= $_POST["st"];
$district= $_POST["dist"];
$city= $_POST["cit"];
$sql="INSERT INTO gymusers VALUES('$name','$emailid','$age','$password','$state','$district','$city')";
if (mysqli_query($conn, $sql)) {
    header('LOCATION:login.php');
 }
 else{
    echo("Connection failed");
 }  
 $conn->close();
 ?>