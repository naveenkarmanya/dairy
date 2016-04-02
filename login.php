


<?php
if (isset($_POST['login'])) {
    $email = $_POST['loginemail'];
    $password = $_POST['loginpassword'];






    /* echo "<b>Email:</b>" . $_POST["loginemail"];
      echo "<br><br>";
      echo "<b>password:</b>" . $_POST["loginpassword"];
      echo "<br><br>"; */

    $link = mysqli_connect('localhost', 'dbuser', '123', 'userdata');
//$query="insert into user (firstname,lastname,email,phone,city) values('naveen999@gmail.com','00000','4')";
//mysqli_query($link,$query);
//$query="insert into form1(email,password) values('$email','$password')";
//$result=mysqli_query($link,$query);
    $query1 = "select password,email from form1 where password='$password' and email='$email'";

    $result1 = mysqli_query($link, $query1);

    $row = mysqli_fetch_all($result1);
    if ($row) {
        header("Location:loginpage.php");
    } else {
        $message1 = "Please enter valid email and password";
    }
}
?>
</body>
</html>
