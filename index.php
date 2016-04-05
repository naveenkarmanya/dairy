<?php
include("project.php");
include("login.php");
?>

<!Doctype Html>
<html>
    <head>
        <title>Mysql project </title>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <script src="js/bootstrap.min.js" ></script>
        <style>
            .navbar-brand
            {
                font-size: 1.8em;
            }
            #topcontainer
            {
                background-image: url(1.jpg);
                height: 630px;
                width: 100%;
                background-size:cover; 
            }

            #toprow
            {
                margin-top: 100px;
                text-align: center;
                color: white;
            }



        </style>

    </head>
    <body data-spy="scroll" data-target=".navbar-collapse">
        <nav class="nav navbar-default">
            <div class="nav container-fluid">
                <div class="navbar-header">
                    <a href="" class="navbar-brand">My Apps</a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="">home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#footer">Download Apps</a></li>
                    </ul>
                    <form class="navbar-form navbar-right" id="login" method="post">
                        <div class="form-group">
                            <input type="email" placeholder="Email" name="loginemail" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Password" name="loginpassword" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-success" name="login" value="Log In">
                        <?php
                        if (isset($message1) == "Log In") {
                            echo "<div class='alert alert-danger'>" . $message1 . "</div>";
                        }
                        ?>
                    </form>


                </div>


            </div>
        </nav>

        <div class="container contentContainer" id="topcontainer">
            <div class="row">
                <div class="col-md-6 col-md-offset-3" id="toprow">
                    <h1>My Awesome Apps</h1>
                    <p class="lead">This is why should download this fantastic app.</p>
                    <p class="bold">Some more information about the app. You can go into a little more detail here if you want to.</p>
                    <p class="bold marginTop">Interested? Join our mailing list!</p>

                    <form class="margintop" method="post" >
                        <div class="form-group">
                            <label for="email" title="Your Email" class="control-label">Email Address:</label>

                            <input type="email" name="email" class="form-control" placeholder="your Email">
                        </div>
                        <div class="form-group">
                            <label for="password" title="Your passsword should be 8 characters" class="control-label">Password:</label>

                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <input type="submit" class="btn btn-success btn-lg margintop" name="signup" value="Sign Up">
                    </form>
                    <?php
                    if (isset($error)) {
                        echo '<div class="alert alert-danger">' . $error . '</div>';
                    }
                    if (isset($message)) {
                        echo '<div class="alert alert-danger">' . $message . '</div>';
                    }
                    ?>
                </div>


            </div>

        </div>
    </body>
</html>