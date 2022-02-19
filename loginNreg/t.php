<?php
session_start();
include('connect.php');

$error = array();

if (isset($_POST['confirm'])){
    $usen = mysqli_real_escape_string($conn,$_POST['uname']);
    $fn = mysqli_real_escape_string($conn,$_POST['fname']);
    $ln = mysqli_real_escape_string($conn,$_POST['lname']);
    $ema = mysqli_real_escape_string($conn,$_POST['Email']);
    $pw = mysqli_real_escape_string($conn,$_POST['pw']);
    $rpw = mysqli_real_escape_string($conn,$_POST['repw']);

    if (empty($usen)){
        array_push($error, "โปรด กรอกUsernameด้วย");
    }
    if (empty($fn)){
        array_push($error, "โปรดกรอกชื่อของคุณด้วย");
    }
    if (empty($ln)){
        array_push($error, "โปรดกรอกนามสกุลของคุณด้วย");
    }
    if (empty($ema)){
        array_push($error, "โปรดกรอกEmailของคุณด้วย");
    }
    if (empty($pw)){
        array_push($error, "โปรดกรอกpasswordของคุณด้วย");
    }if (empty($rpw)){
        array_push($error, "โปรดกรอกPasswordครั้งที่2ด้วย");
    }
    if ($pw != $rpw){
        array_push($error, "Password 2 ตัวไม่ตรงกัน โปรดกรอก Password กับ RePasswordใหม่");
    }

    $user_check_query = "SELECT * FROM ucr WHERE Username = '$usen' OR Email = '$ema' ";
    $query = mysqli_query($conn,$user_check_query);
    $result = mysqli_fetch_assoc($query);

    if ($result){
        if ($result['Username'] ===$usen){
            array_push($errors,"มีคนใช้ Username นี้แล้ว โปรดใช้ชื่ออี่น");
        }
        if ($result['Email'] ===$usen){
            array_push($errors,"มีคนใช้ Email นี้แล้ว โปรดใช้Emailตัวอี่น");
        }
    }

    if(count($error)==0){
        $sql = "INSERT INTO ucr(Username,name,lastname,Email,PW) VALUES ('$usen','$fn','$ln','$ema','$pw')";
        mysqli_query($conn,$sql);

       $_SESSION['Username'] = $usen;
       $_SESSION['success'] = "ลงทะเบียนสำเร็จแล้ว";
       header('location: index.php');
    }else{
        $_SESSION['error'] = "กรอกใหม่ ให้ครบถ้วนครับ/ มีข้อผิดพลาด";
        header('location: savform.php');
    }
}

?>
   