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
$sID=$_SESSION['user'];

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
if(isset($_GET['tt']))
{
    ?>
    <div class="first_letter ">
        <strong>you have a course in this time</strong>
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
if(isset($_GET['bad']))
{
    ?>
    <div class="first_letter ">
        <strong>there's no such a time for this course </strong>
    </div>
    <?php
}
?>

<?php
if(isset($_GET['full']))
{
    ?>
    <div class="first_letter ">
        <strong>this course has reached its maximum count of students</strong>
    </div>
    <?php
}
?>




<?php
if(isset($_GET['yes']))
{
    ?>
    <div class="second_letter ">
<p class="message"> This course doesn't exist</p>



    </div>
    <?php
}
?>


<?php
if(isset($_GET['show']))
{
    ?>
    <div class="first_letter ">
        <strong>you are already enrolled in this course</strong>
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
  <div class="form">
      <div class="thumbnail">
<?php
$db_server = 'localhost';
$db_user_name = 'anm';
$db_password = '123456';
$db_name = 'disksol';

@ $db = mysqli_connect($db_server,$db_user_name,$db_password,$db_name) or die("unable to connect to database");

//$raw_results = mysqli_query($db,"SELECT * FROM courseinfo") or die("error1") ;


$query="select * from courseinfo";
$result=mysqli_query($db,$query) or die("error1");
//$row2=mysqli_fetch_array($result);

while($row = mysqli_fetch_assoc($result)){
//if(mysqli_num_rows($result) > 0 ){
  $CN55=$row['courseName'];
  echo $CN55;
  echo "  " . PHP_EOL;



  $T55=$row['timee'];
  echo $T55;
  echo "  " . PHP_EOL;

  $DN55=$row['DrName'];
  echo $DN55;
  echo "<br>" . PHP_EOL;
  echo "<br>" . PHP_EOL;

}

?>

</div>
</div>

    <br><br><br><br><br><br>

    <div class="form">
        <div class="thumbnail">
            <br><br>

            <form name="form" class="login-form" method="post"  action="addCources2.php" id="log" >
                &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

                <div class="buttoninput"> <input type="text" placeholder="Course Name" name="CN2" id="CN2" /></div>
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                <!-- <div class="buttoninput"> <input type="text" placeholder="Student ID" name="ID5" id="ID5" /></div> -->

                <div class="buttoninput"> <input type="text" placeholder="Course Time" name="T" id="T" /></div>


                <br> <br><br><br>
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                <button class="buttoninput" style="color: black ; opacity: .9; ">add course</button>

&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

                <a href="StudentProfile.php">Student Profile</a>


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
