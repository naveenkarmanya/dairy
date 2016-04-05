<?php
$link = mysqli_connect('localhost', 'dbuser', '123', 'userdata');
session_start();
$session=$_SESSION["id"];
$textarea=$_POST["diary"];
$query="update form1 set diarydata='$textarea' where sesionid='$session'";
mysqli_query($link,$query);
?>