<?php
if(isset($_POST['signup']))
{
$email=$_POST['email'];
$password=$_POST['password'];




/*echo "<u><h1>Your Output</h1></u>";
echo "<b>Email Address:</b>" . $_POST["email"];
echo "<br><br>";
echo "<b>Password:</b>" . $_POST["password"];
echo "<br><br>";*/


$link=mysqli_connect('localhost','dbuser','123','userdata');
//$query="insert into user (firstname,lastname,email,phone,city) values('naveen999@gmail.com','00000','4')";
//mysqli_query($link,$query);

$query="insert into form1(email,password) values('$email','$password')";
$result=mysqli_query($link,$query);
$query1="select * from form1";

$result1=mysqli_query($link,$query1);
$row=mysqli_fetch_all($result1);
if ($row) {
        $message = "successfully signed up";
    } else {
        $error = "Please enter email and password";
    }
}
?>

    