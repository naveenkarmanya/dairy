<?php

if (isset($_POST['signup'])) 
    {
    if ($_POST["signup"] == "Sign Up") 
        {
        $email = $_POST['email'];
        $password = $_POST['password'];


        $link = mysqli_connect('localhost', 'dbuser', '123', 'userdata');

        if (!($_POST["email"] == "" && !($_POST["password"]))) {
            $queryselect = "select * from form1 where email='$email' and password='$password'";
            $resultselect = mysqli_query($link, $queryselect);
            $values = mysqli_fetch_array($resultselect);

            if ($values) {
                $error = "email already registered";
            } else {
                $query = "insert into form1(email,password) values('$email','$password')";
                $result = mysqli_query($link, $query);
            }
        } else {
            $error = "Please enter Email and password to sign Up";
        }

        if (!isset($error)) {
            $message = "Sign up successful " . "Please login to use your secret diary";
        }
    }
}
?>

