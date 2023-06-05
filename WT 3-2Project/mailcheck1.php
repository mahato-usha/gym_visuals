<?php
    session_start();
    $host='localhost';
    $email=$_POST["mailid"];
    $con=mysqli_connect($host,'root','','gym');
    $query="select count(*) from gymusers where emailid='$email'";
    $result=mysqli_query($con,$query);
    if($result){
        $row = mysqli_fetch_row($result);
        $count = $row[0];
        if ($count > 0) {
            header("Location: password.html");
            exit();
        } else {
            echo "Username does not exist. Please register";
            header("Location: register.php");
            exit();
        }
    } else {
        echo "Error in executing the query.";
    }
    mysqli_close($con);
?>
        