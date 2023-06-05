<?php
  $host='localhost';
  $conn=mysqli_connect($host,'root','','gym');
 if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
 }
 $pass=$_POST["pass"];
 $mailid=$_POST["mailid"];
 $sql=$conn->prepare("update gymusers set password=? where emailid=?"); 
 $sql->bind_param("ss",$pass,$mailid);
 $sql->execute();
header("Location:login.php");
 $sql->close();
 $conn->close();
?>