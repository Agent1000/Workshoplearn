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
            <h3>Log in เข้าระบบ</h3>

                <form action = "LL.php" method="POST">

                    <br>
                    <p class="container">
                        <label for ="">username</label> 
                        <input type = "text" name= "uname">
                    </p>
                    <p class="container">
                        <label for ="">Password</label> 
                        <input type = "password" name= "pw" >
                    </p>

                <br>
                    <input type = "submit" name = "l" value="Login" class="btn btn-success">
                    <a href="savform.php" class="btn btn-primary">ยังไม่สมัครเหรอ? คลิก</a>
                

                </form>
            
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        </body>

</html>