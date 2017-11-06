<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

    <title>My Profile</title>
    <!-- Loading third party fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|" rel="stylesheet" type="text/css">
    <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="fonts/iconmoon.css" rel="stylesheet" type="text/css">
    <!-- Loading main css file -->
    <link rel="stylesheet" href="style.css">

    <!--[if lt IE 9]>
    <script src="js/ie-support/html5.js"></script>
    <script src="js/ie-support/respond.js"></script>

    <![endif]-->
    <style>
        th, td {
            padding: 5px;
            text-align: center;
        }
    </style>

    <script>
        function fun()
        {
            var x = parseInt(document.getElementById('w').value);
            var y =  parseInt(document.getElementById('h').value);
            y=y/100;
            y=y*y;

            var z =(x/y)+1;
            document.getElementById('bmi').value=z;
        }
    </script>


    <title>W3.CSS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .mySlides {display:none}
        .w3-left, .w3-right, .w3-badge {cursor:pointer}
        .w3-badge {height:13px;width:13px;padding:0}
    </style>
</head>


<body class="homepage" style="background-image: url('about1.jpg');
	background-size: 100% 100%;
			" >


<header class="site-header" style="height: 100px; width: 100% ;opacity: .7;background-color: black;" >
    <div class="container"  >
        <div id="branding" class="pull-left">

            <!-- Default snippet for navigation -->
            <h1 class="site-title"><a href="index.html" style="align-content: center"></a></h1>
            <button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
            <!-- .menu -->
        </div> <!-- .main-navigation -->

        <div class="mobile-navigation"></div>
    </div>
    </div>

</header> <!-- .site-header -->
<div id="site-content" style="height: 100%;">
    <main class="main-content">


        <div class="container">

          <p><a href="addCources.php">add cources </a></p>

            <div class="row">
                <div class="Columnin2 container2" style="background-color:white; ">

                        <p> Welcome <strong>
                            <?php

                            $id=$_SESSION['user'];
                            $db_server = 'localhost';
                            $db_user_name = 'anm';
                            $db_password = '123456';
                            $db_name = 'disksol';

                            @ $db = mysqli_connect($db_server,$db_user_name,$db_password,$db_name) or die("unable to connect to database");
                            $query="select name from student where id='$id'";
                            $result=mysqli_query($db,$query) or die("error");
                            while($row = mysqli_fetch_assoc($result)) {
                                $fromID = $row['name'];
                            }


                            echo $fromID   ?>
                            </strong>
                        </p>

                </div>


                <div class="columnin" style="height: 700px;">
                    <p align="center"><h3 style="color: gray"> here's your courses: </h3> </p>
                    <div class="containervideo">

                      <?php

                      $id=$_SESSION['user'];
                      $db_server = 'localhost';
                      $db_user_name = 'anm';
                      $db_password = '123456';
                      $db_name = 'disksol';

                      @ $db = mysqli_connect($db_server,$db_user_name,$db_password,$db_name) or die("unable to connect to database");
                      $query="select courseName from course where Studentid='$id'";
                      $result=mysqli_query($db,$query) or die("error");
                      while($row = mysqli_fetch_assoc($result)) {
                          $fromID = $row['courseName'];
                          echo $fromID  ;
                          echo "<br>" . PHP_EOL;
                      }


                     ?>

                    </div>




                     <p align="center"><h3 style="color: gray"> You're grades </h3> </p>
                     <div class="containervideo">
            <?php

            $id=$_SESSION['user'];
            $db_server = 'localhost';
            $db_user_name = 'anm';
            $db_password = '123456';
            $db_name = 'disksol';



            @ $db = mysqli_connect($db_server,$db_user_name,$db_password,$db_name) or die("unable to connect to database");
            $query="select * from course where Studentid='$id'";
            $result=mysqli_query($db,$query) or die("error");
            while($row = mysqli_fetch_assoc($result)) {
                $fromID = $row['courseName'];
                echo $fromID;
                echo "  &nbsp";
                $fromID = $row['first'];
                echo " first: ";
                if($fromID > 0){ echo $fromID;}
                else {
                  echo "there's no data yet.";
                }
                echo "  &nbsp";
                $fromID = $row['second'];
                echo " second: ";
                if($fromID > 0){ echo $fromID;}
                else {
                  echo "there's no data yet.";
                }
                echo "  &nbsp";
                $fromID = $row['final'];
                echo " final: ";
                if($fromID > 0){ echo $fromID;}
                else {
                  echo "there's no data yet.";
                }
                echo "<br>" . PHP_EOL;

                  echo "<br>" . PHP_EOL;
                    echo "<br>" . PHP_EOL;






            }


               ?>

                 <p><a href="LogOut.php"> Log Out</a></p>

</div>
</div>






         <div class="category-content"></div>

     </main> <!-- .main-content -->






 </div>



 <script src="js/jquery-1.11.1.min.js"></script>
 <script src="js/plugins.js"></script>
 <script src="js/app.js"></script>

 </body>

 </html>
