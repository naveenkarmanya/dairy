<!Doctype Html>
<html>
    <head>
        <title>Login page </title>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script type="text/JavaScript" src="jquery.min.js"></script>
        <script src="js/bootstrap.min.js" ></script>
        <style>
            .navbar-brand
            {
                font-size: 1.8em;
            }
            #topContainer
            {
                background-image: url(1.jpg);
                height: 645px;
                width: 100%;
                background-size:cover; 
                position: relative;
                top: 35px;  
                color: white;
            }
            .navbar-brand{
                font-size:1.8em;

            }



            #topRow {
                text-align: center;
                position: relative;
                top: 50px;

            }

            #topRow h1{
                font-size:300%;

            }
            textarea.form-control {
                height: 350px;
            }
            .bold{
                font-weight:bold;
            }



        </style>

    </head>
    <body data-spy="scroll" data-target=".navbar-collapse">
        <nav class="nav navbar-default navbar-fixed-top">
            <div class="nav container-fluid">
                <div class="navbar-header">
                    <a href="" class="navbar-brand">My Apps</a>

                </div>
                <div class="collapse navbar-collapse pull-right">
                    <ul class="nav navbar-nav ">
                        <li class="active"><a href="index.php">Log Out</a></li>

                    </ul>



                </div>

            </div>
        </nav>

        <div class="container contentContainer" id="topContainer">
            <div class="row">

                <div class="col-md-6 col-md-offset-3" id="topRow">

                    <textarea class="form-control area"><?php echo $diary; ?></textarea>
                </div>

            </div>

        </div>


        <script>


            $(".contentContainer").css("min-height", $(window).height());

            $("textarea").css("height", $(window).height() - 110);

            $("textarea").keyup(function () {

                $.post("updatediary.php", {diary: $("textarea").val()});

            });



        </script>
    </body>
</html>