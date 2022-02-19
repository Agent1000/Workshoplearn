<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device=width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel= "stylesheet" href= 'style.css'>
        <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
    <title></title>
    </head>
        <body>
            <div class="container">
            <h3>ลงทะเบียน</h3>
                <form action = "t.php" method="POST">
                    <?php include 'error.php';?>
                    <?php if (isset($_SESSION['error']));?>
                        <div class="error">
                            <h2>
                                <?php
                                    echo $_SESSION['error'];
                                    unset($_SESSION['error']);
                                ?>
                            </h2>
                        </div>

                        <br>

                    <p class="container">
                        <label for ="">username</label> 
                        <input type = "text" name= "uname">
                    </p>
                    <p class="container">
                        <label for ="">ชื่อ</label> 
                        <input type = "text" name= "fname" >
                    </p>
                    <p class="container">
                        <label for ="">นามสกุล</label> 
                        <input type = "text" name= "lname" >
                    </p>
                    <p class="container">
                        <label for ="">Email</label> 
                        <input type = "text" name= "Email" >
                    </p>
                    <p class="container">
                        <label for ="">Password</label> 
                        <input type = "Password" name= "pw" >
                    </p>
                    <p class="container">
                        <label for ="">Re-Password</label> 
                        <input type = "Password" name= "repw" >
                    </p>

                <br>

                    <input type = "submit" name = "confirm" value="บันทึกข้อมูล" class="btn btn-success">
                    <input type = "reset" value="ล้าง" class="btn btn-danger">
                    <a href="index.php" class="btn btn-primary">กลับหน้าหลัก</a>

                </form>
            
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        </body>

</html>