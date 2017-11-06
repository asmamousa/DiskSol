<!DOCTYPE html>
<html >
<head>

    <meta charset="UTF-8">
    <title>Login Page</title>

    <style type="text/css">
        .first_letter {
            color:red;
            position: absolute;
            top: 550px;
            left: 510px;
        }
    </style>

    <style type="text/css">
        .second_letter {
            color:red;
            position: absolute;
            top: 550px;
            left: 510px;
        }
    </style>
    <style type="text/css">
        .first {
            color:red;
            position: absolute;
            top: 827px;
            left: 550px;
        }

        body {
            width:100% ; height: 700px;
            background-size: 100% 100%;
        }
        td,tr{

            align-items: center;

        }

    </style>

    <style type="text/css">
        .second {
            color:red;
            position: absolute;
            top: 827px;
            left: 580px;
        }

        .third {
            color:black;
            position: absolute;
            top: 827px;
            left: 510px;
        }
    </style>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Montserrat:400,700'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Montserrat:400,700'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="css/style.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|" rel="stylesheet" type="text/css">
    <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="fonts/iconmoon.css" rel="stylesheet" type="text/css">
    <!-- Loading main css file -->
    <link rel="stylesheet" href="style.css">

    <!--[if lt IE 9]>
    <script src="js/ie-support/html5.js"></script>
    <script src="js/ie-support/respond.js"></script>
    <![endif]-->
    <meta charset="UTF-8">
    <title>Sign Up Page</title>
    <meta charset="UTF-8">
    <title>Sign Up Page</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Montserrat:400,700'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="css/style.css">


</head>

<body>

<?php session_start();


?>

<?php
if(isset($_GET['no']))
{
    ?>
    <div class="first_letter ">
        <strong>You did not fill out the required fields</strong>
    </div>
    <?php
}
?>



<?php
if(isset($_GET['succ']))
{
    ?>
    <div class="first_letter ">
        <strong>course was successfully added  </strong>
    </div>
    <?php
}
?>

<?php
if(isset($_GET['timeExist']))
{
    ?>
    <div class="first_letter ">
        <strong>you already have a course in this time </strong>
    </div>
    <?php
}
?>


<?php
if(isset($_GET['exist']))
{
    ?>
    <div class="second_letter ">
<p class="message"> This course already exist</p>



    </div>
    <?php
}
?>


<header class="site-header" style="height: 100px; width: 100% ;opacity: .7;background-color: black;" >
    <div class="container" >
        <div id="branding" class="pull-left">

            <h1 class="site-title"><a href="index.html" style="align-content: center"></a></h1>
        </div>
    </div>
</header>

<div class="container container2" style="height: 500px ; width : 950px;background-color: white ">



    <br><br><br><br><br><br>

    <div class="form">
        <div class="thumbnail">
            <br><br>

            <form name="form" class="login-form" method="post"  action="addCourcesT2.php" id="log" >
                &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

                <div class="buttoninput"> <input type="text" placeholder="Course Name" name="CN22" id="CN22" /></div>
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                <!-- <div class="buttoninput"> <input type="text" placeholder="Student ID" name="ID5" id="ID5" /></div> -->

                <div class="buttoninput"> <input type="text" placeholder="Course Time" name="T22" id="T22" /></div>


                <br> <br><br><br>
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                <button class="buttoninput" style="color: black ; opacity: .9; ">add course</button>

&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

                <a href="TeacherProfile.php">back to Profile</a>


            </form>

        </div>
    </div>
</div>

<footer class="site-footercontainer " style="height: 100px; width: 100% ;opacity: .7;background-color: black;">
    <div class="container ">

        <div class="subscribe">
            <form action="#">


            </form>
        </div>
        <br>



    </div>
</footer>
</body>
</html>
