<?php
session_start();
    //include('connect.php');
   // $errors = array();

        if (isset($_POST('L'))){
            $usen = mysqli_real_escape_string($conn,$_POST['uname']);
            $pw = mysqli_real_escape_string($conn,$_POST['pw']);

            echo $usen;
            echo $pw;
        }
            /*
            if(empty($usen)){
                array_push($errors,"โปรดกรอก username");
            }
            if(empty($pw)){
                array_push($errors,"โปรดกรอก Password");
            }

            if(count($errors)== 0){
                $query = "SELECT * FROM ucr WHERE Username LIKE %$usen% AND PW LIKE %$pw%";
                $result = mysqli_query($conn,$query);
                if(mysqli_num_rows($result)==1){
                    $_SESSION['Username'] = $usen;
                    $_SESSION['success'] = "log in สำเร็จ";
                    header("location: index.php");
                }else{
                    array_push($errors,"ไม่มี Usernameนี้/Password ไม่ถูกต้อง");
                    $_SESSION['error'] = "ไม่มี Usernameนี้/Password ไม่ถูกต้อง ลองอีกครั้ง";
                    header("location: login.php");
                }
            }else {
                array_push($errors, "Username & Password is required");
                $_SESSION['error'] = "Username & Password is required";
                header("location: login.php");        
        }
    }*/
?>