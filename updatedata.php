<?php
include 'config.php';
$sid = $_POST['sid'];
$name = $_POST['sname'];
$addaress = $_POST['saddress'];
$class = $_POST['sclass'];
$phone = $_POST['sphone'];
$update = "UPDATE student SET sname ='{$name}',saddress ='{$addaress}',sclass ='{$class}',sphone ='{$phone}' WHERE sid  = '{$sid}'";
$query = mysqli_query($conn,$update) or die("query unsussefully");
header("Location: index.php");
mysqli_close($con);
?>