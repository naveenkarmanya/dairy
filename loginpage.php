
<?php

 $link = mysqli_connect('localhost', 'dbuser', '123', 'userdata');
session_start();
$session = $_SESSION["id"];
$query = "select * from form1 where sesionid='$session'";
$resultlogin = mysqli_query($link, $query);
$row1 = mysqli_fetch_array($resultlogin);
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Secret Diary</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script type="text/javascript" src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <style>
            .left{
                margin-left: 10px;
            }
            #backimg{
                
                background-size: cover;
                width: 100%;
                padding-top: 100px;
            }
            #lastimg{
                background-color: honeydew;
                background-size: cover;
                width: 100%;

            }
            h1{
                font-size: 300%;
                color:black;
                font-weight: 500;
                text-align: center;
            }
            .top{
                margin-top: 30px;
            }
            .bottom{
                margin-bottom: 50px;
            }
            .center{
                text-align: center;
            }
            .img1{
                height: 120px;
                width:350px;
                border-radius: 10px;
                border: 1px solid honeydew;
            }
            .img2{
                height: 120px;
                width: 350px;
                border-radius: 10px;
                border: 1px solid honeydew;
            }
            .img3{
                height: 120px;
                width: 350px;
                border-radius: 10px;
                border: 1px solid honeydew;
            }
            .jumbotron{
                background-color: gainsboro;
                margin:50px;

            }
        </style>

    </head>
    <body data-spy="scroll" data-target=".navbar-collapse">
        <nav class="navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header"><a class="navbar-brand">MyApp</a>
                    <button type="button" class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" >
                        <span class="sr-only">Toggle</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>

                    </button>
                </div>
                <div class="navbar-nav nav pull-right">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">LogOut</a></li>

                    </ul>

                </div>
            </div>
        </nav>
        <div class="container contentContainer" id="backimg">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h1>
                        Secret Diary
                    </h1>

                </div>
            </div>
            <div class="col-md-12 ">
                <textarea class="containertext form-control"><?php echo $row1["diarydata"]; ?></textarea>
            </div>
        </div>

        <script>
            $(".containertext").css("height", $(window).height() - 200);

            $(".contentContainer").css("min-height", $(window).height());
            $("textarea").keyup(function () {
                $.post("updatediary.php", {diary: $("textarea").val()});
            });

        </script>
    </body>
</html>