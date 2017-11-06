<?php
session_start();


if (isset($_POST)) {

    $SI2=$_POST['ID2'];
    $pass1=$_POST['pass1'];
    $N=$_POST['N'];


    if(empty($SI2) || empty($pass1) || empty($N))
    {
        header('location:SignUp.php?no=true');
        exit;
    }

    else{
        $db_server = 'localhost';
        $db_user_name = 'anm';
        $db_password = '123456';
        $db_name = 'disksol';

        @ $db = mysqli_connect($db_server,$db_user_name,$db_password,$db_name) or die("unable to connect to database");

        $sq44=" SELECT * FROM student WHERE id=$SI2";
        $raw_results=mysqli_query($db,$sq44) or die("error");

          if(mysqli_num_rows($raw_results) > 0){
            header('location:SignUp.php?yes=true');
            exit;
          }

else {
        $sq1 = "INSERT INTO student (`id`,`pass`,`name`)
        VALUES ('$SI2','$pass1','$N')";


        if ($db->query($sq1) === TRUE) {

header('location:Login.php');

        } else {
            echo "Error: " . $sq1 . "<br>" . $db->error;
        }


        }

    }


}


?>
