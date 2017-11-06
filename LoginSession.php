<?php

session_start();
$db_server = 'localhost';
$db_user_name = 'anm';
$db_password = '123456';
$db_name = 'disksol';
$_SESSION['count']=0;

if (isset($_POST['ID1']) and isset($_POST['pass'])) {
    $ID1 = $_POST['ID1'];
    $pass = $_POST['pass'];
    if (empty($ID1) || empty($pass)) {

        header('location:logIn.php?no=true');
        exit;
    }



     @ $db = mysqli_connect($db_server,$db_user_name,$db_password,$db_name) or die("unable to connect to database");

    $raw_results = mysqli_query($db,"SELECT * FROM teacher
            WHERE (`id` LIKE '%".$ID1."%')") ;

    if(mysqli_num_rows($raw_results) > 0){

        $query="select * from teacher where id='$ID1' and pass='$pass'";
        $result=mysqli_query($db,$query) or die("error");
        $row=mysqli_fetch_array($result);

        if(($row['id']==$ID1)and ($row['pass']==$pass)){

            $_SESSION['user']=$row['id'];
          header("Location: TeacherProfile.php");

            //  header('location:login.php?show1=true');
          //  header('location:MonthsProfile.php');

        }
        else{

            header('location:Login.php?show=true');

        }

     }


    else {


        $raw_results = mysqli_query($db,"SELECT * FROM student
             WHERE (`id` LIKE '%".$ID1."%')") ;

        if(mysqli_num_rows($raw_results) > 0) {
            $query2 = "select * from student where id='$ID1' and pass='$pass'";
            $result2 = mysqli_query($db, $query2) or die("error");
            $row2 = mysqli_fetch_array($result2);

            if (($row2['id'] == $ID1) and ($row2['pass'] == $pass)) {

                $_SESSION['user']=$row2['id'];
                header("Location: StudentProfile.php");

            } else {

                   header('location:Login.php?show=true');
            }

        }

        else {
            header('location:Login.php?yes=true');

        }

    }

}

?>
