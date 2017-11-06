<?php
session_start();


if (isset($_POST)) {

    $SI3=$_POST['ID3'];
    $pass2=$_POST['pass2'];
    $N1=$_POST['N1'];


    if(empty($SI3) || empty($pass2) || empty($N1))
    {
        header('location:SignUp2.php?no=true');
        exit;
    }

    else{
        $db_server = 'localhost';
        $db_user_name = 'anm';
        $db_password = '123456';
        $db_name = 'disksol';

        @ $db = mysqli_connect($db_server,$db_user_name,$db_password,$db_name) or die("unable to connect to database");

        $sq44=" SELECT * FROM teacher WHERE id=$SI3";
        $raw_results=mysqli_query($db,$sq44) or die("error");

          if(mysqli_num_rows($raw_results) > 0){
            header('location:SignUp2.php?yes=true');
            exit;
          }

else {
        $sq1 = "INSERT INTO teacher (`id`,`pass`,`Tname`)
        VALUES ('$SI3','$pass2','$N1')";


        if ($db->query($sq1) === TRUE) {

  header('location:Login.php');

        } else {
            echo "Error: " . $sq1 . "<br>" . $db->error;
        }


        }

    }


}


?>
