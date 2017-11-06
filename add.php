<?php

session_start();
$db_server = 'localhost';
$db_user_name = 'anm';
$db_password = '123456';
$db_name = 'disksol';
$_SESSION['count']=0;

if (isset($_POST['CN']) and isset($_POST['SI']) and isset($_POST['M']) and isset($_POST['exam1'])) {

  $CN = $_POST['CN'];
  $SI = $_POST['SI'];
  $M = $_POST['M'];
  $exam=$_POST['exam1'];

  if (empty($SI) || empty($SI) || empty($M) || empty($exam)) {

      header('location:TeacherProfile.php?no=true');
      exit;
  }

  @ $db = mysqli_connect($db_server,$db_user_name,$db_password,$db_name) or die("unable to connect to database");

  $raw_results = mysqli_query($db,"SELECT courseName FROM course
          WHERE (`Studentid` LIKE '%".$SI."%')") ;

if(mysqli_num_rows($raw_results) > 0){

  $query="select * from course where Studentid='$SI' and courseName='$CN'";
  $result=mysqli_query($db,$query) or die("error");
   $row=mysqli_fetch_array($result);

   if(($row['Studentid']==$SI)and ($row['courseName']==$CN)){

     if($exam=="final"){
    $query="UPDATE course SET final='$M' WHERE Studentid='$SI' and courseName='$CN'";
        }

        if($exam=="first"){
       $query="UPDATE course SET first='$M' WHERE Studentid='$SI' and courseName='$CN'";
           }

           if($exam=="second"){
          $query="UPDATE course SET second='$M' WHERE Studentid='$SI' and courseName='$CN'";
              }

              if ($db->query(  $query) === TRUE) {

                header('location:TeacherProfile.php?SU=true');

                      } else {
                          echo "Error: " . $query . "<br>" . $db->error;
                      }


   }

   else{
       header('location:TeacherProfile.php?H=true');
   }

}

header('location:TeacherProfile.php?C=true');

}

?>
