<?php
include 'config.php';

$name = $_POST['sname'];
$addaress = $_POST['saddress'];
$class = $_POST['class'];
$phone = $_POST['sphone'];

$sql = "INSERT INTO `student`(`sname`, `saddress`, `sclass`, `sphone`) 
VALUES ('{$name}','{$addaress}','{$class}','{$phone}')";

$result = mysqli_query($conn,$sql);
header("Location: index.php");
mysqli_close($con);
?>