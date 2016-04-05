


<?php

session_start();
if (isset($_POST['login'])) {
    $email = $_POST['loginemail'];
    $password = $_POST['loginpassword'];

    $link = mysqli_connect('localhost', 'dbuser', '123', 'userdata');

    $query1 = "select * from form1 where password='$password' and email='$email'";

    $result1 = mysqli_query($link, $query1);

    $row = mysqli_fetch_array($result1);
    if (!$row) {
        $error = "Login Failed check the credentials ";
    } else {
        $_SESSION['id'] = $row['sesionid'];

        header("Location:loginpage.php");
    }
}
?>
