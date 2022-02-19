<?php
require('connect.php');

$sql = "SELECT * FROM ucr";
$result=mysqli_query($conn,$sql);

//ตัวอย่าง fetch_ assoc
$assoc = mysqli_fetch_assoc($result);
echo '<pre>',print_r($assoc),'</pre>';
//ตัวอย่าง fetch_array(ตัวแปร,รูปแบบแสดงผลarray'MYSQLI_BOTH,MYSQLI_ASSOC,MYSQLI_NUM')
$ar = mysqli_fetch_array($result,MYSQLI_BOTH);
echo '<pre>',print_r($ar),'</pre>';
//ตัวอย่าง fetch_object(จะเปลี่ยนให้ระบบมอง Array เป็น object แทน'->')
$obj = mysqli_fetch_object($result);
echo '<pre>',print_r($obj),'</pre>';





?>