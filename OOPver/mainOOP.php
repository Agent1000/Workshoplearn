<?php
require('connect.php');
$sql = "SELECT * FROM ucr";
$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);

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
            <div class="container">
            <h3 class = "text-center" >ข้อมูลUSER </h3>
                <hr>
                <form action = "search.php" class = "form-group" method="POST">
                    <label for = "">UsernameChecker</label>
                    <input type = "text" name="User" placeholder="ป้อนชื่อUsername" class="form-control" required>
                    <br>
                    <a href="search.php" class="btn btn-primary">ค้นหา</a>
                </form>

                <hr>

                <?php if($count>0){?>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>name</th>
                            <th>lastname</th>
                            <th>email</th>
                            <th>password</th>
                            <th>ลบข้อมูล?</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row=mysqli_fetch_assoc($result)) {?>
                            <tr>
                                <td><?php echo$row["ID"];?></td>
                                <td><?php echo$row["Username"];?></td>
                                <td><?php echo$row["name"];?></td>
                                <td><?php echo$row["lastname"];?></td>
                                <td><?php echo$row["Email"];?></td>
                                <td><?php echo$row["PW"];?></td>
                                <td>
                                    <a href="DelQueryString.php?ID=<?php echo $row["ID"]?>" class="btn btn-danger">ลบข้อมูล</a>
                                </td>
                            <tr>
                            <?php } ?>
                    </tbody>

                </table>
                <?php } else {?>
                            <div class = "alert alert-danger">
                            ไม่มีข้อมูล
                            </div>
                            <?php }
                            mysqli_close($conn);?>

                   
                    <a href="edit.php" class="btn btn-success">ลงทะเบียน</a>

                </form>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        </body>

</html>