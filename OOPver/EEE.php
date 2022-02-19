<?php

include('connect.php');

if (isset($_POST['confirm'])){
    $usen = mysqli_real_escape_string($conn,$_POST['uname']);
    $fn = mysqli_real_escape_string($conn,$_POST['fname']);
    $ln = mysqli_real_escape_string($conn,$_POST['lname']);
    $ema = mysqli_real_escape_string($conn,$_POST['Email']);
    $pw = mysqli_real_escape_string($conn,$_POST['pw']);
    $rpw = mysqli_real_escape_string($conn,$_POST['repw']);

        $sql = "INSERT INTO ucr(Username,name,lastname,Email,PW) VALUES ('$usen','$fn','$ln','$ema','$pw')";
       $result = mysqli_query($conn,$sql);
       if($result){
        header('location: edit.php');
         }}
        ?>