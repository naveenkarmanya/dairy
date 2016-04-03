


<?php
if (isset($_POST['login'])) {
    $email = $_POST['loginemail'];
    $password = $_POST['loginpassword'];




    $link = mysqli_connect('localhost', 'dbuser', '123', 'userdata');

    $query1 = "select password,email from form1 where password='$password' and email='$email'";

    $result1 = mysqli_query($link, $query1);

    $row = mysqli_fetch_all($result1);
    if (!$row) {
        $error = "Login Failed check the credentials ";
    }
       
     else {
         $_SESSION['id']=$row['sesionid'];
 $message1 = "We could not find a user with that email and password. Please try again.";
        header("Location:loginpage.php");
      
    }
}
?>
</body>
</html>
