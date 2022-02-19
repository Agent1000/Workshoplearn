<?php
require('connect.php');

$id=$_GET["ID"];

$sql = "DELETE FROM ucr WHERE ID = $id";

$result = mysqli_query($conn,$sql);

if($result){
    header('location: mainOOP.php');
}
?>