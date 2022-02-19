<?php
session_start();

if(!isset($_SESSION['Username'])){
    $_SESSION['msg'] = "ล็อคอินเข้าก่อนครับ";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['Username']);
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device=width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title></title>
    </head>
        <body>
            <div class="container my-5">
                <h2 class="display-2">หน้าหลัก</h2>
                <br>

                <!--  หน้าต่างแจ้งเตือน -->
            <?php if (isset($_SESSION['success'])) : ?>
                <div class = "success">
                    <h3>
                        <?php
                            echo $_SESSION['success'];
                            unset($_SESSION['success']);
                        ?>
                    </h3>
                </div>
             <?php endif ?> 
                <br>
            <?php if (isset ($_SESSION['Username'])):?>
                <p>Welcome <strong><?php echo  $_SESSION['Username']; ?></strong></p>
                <p><a href="index.php?logout='1'" name = "logout "style="color: red;">Logout</a></p>
            <?php endif ?> 
            </div>
            
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        </body>
        
</html>