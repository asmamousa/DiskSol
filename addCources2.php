<?php
session_start();
$ID5=$_SESSION['user'];

//echo $ID5;

if (isset($_POST)) {
  $CN2=$_POST['CN2'];
  $T=$_POST['T'];


  if(empty($CN2) || empty($ID5) || empty($T))
  {
      header('location:addCources.php?no=true');
      exit;
  }

  else{
      $db_server = 'localhost';
      $db_user_name = 'anm';
      $db_password = '123456';
      $db_name = 'disksol';

      @ $db = mysqli_connect($db_server,$db_user_name,$db_password,$db_name) or die("unable to connect to database");

      $raw_results = mysqli_query($db,"SELECT * FROM courseinfo
              WHERE (`courseName` LIKE '%".$CN2."%')") ;



        if(mysqli_num_rows($raw_results) > 0 ){

                  $query="select * from course where courseName='$CN2' and Studentid='$ID5'";
                  $result=mysqli_query($db,$query) or die("error1");
                  $row=mysqli_fetch_array($result);

          if(($row['courseName']==$CN2)and ($row['Studentid']==$ID5)){
            header('location:addCources.php?show=true');
            exit;
          }

          else{

            // $query="select * from course where courseName='$CN2' and Studentid='$ID5'";
            // $result=mysqli_query($db,$query) or die("error1");
            // $row=mysqli_fetch_array($result);


          $sq55=" SELECT * FROM course WHERE Studentid='$ID5' and timee='$T'";
          $raw_results3=mysqli_query($db,$sq55) or die("error2");

          if(mysqli_num_rows($raw_results3) > 0 ){
            header('location:addCources.php?tt=true');
            exit;
          }

          else{


          $sq58=" SELECT * FROM courseinfo WHERE courseName='$CN2' and timee='$T'";
          $results3=mysqli_query($db,$sq58) or die("error3");
          $row=mysqli_fetch_array($results3);

          $t1=$row['timee'];
          $b=20;
          if(($row['StCount']>=$b)){

            echo "i'm here";
            header('location:addCources.php?full=true');
            exit;
          }


          else{

        if($t1 == $T){
  $sq1 = "INSERT INTO course (`courseName`,`Studentid`,`timee`)
        VALUES ('$CN2','$ID5','$t1')";

        if ($db->query($sq1) === TRUE) {

          header('location:addCources.php?succ=true');

        } else {
            echo "Error: " . $sq1 . "<br>" . $db->error;
        }


        $sq99=" SELECT * FROM courseinfo WHERE courseName='$CN2' and timee='$t1'";
        $results99=mysqli_query($db,$sq99) or die("error99");
        $row=mysqli_fetch_array($results99);

        $SC=$row['StCount'];
        $SC=$SC+1;

        $sq100="UPDATE courseinfo SET StCount='$SC' WHERE timee='$T' and courseName='$CN2'";
        $results100=mysqli_query($db,$sq100) or die("error100");



}

else{
  header('location:addCources.php?bad=true');
}


          }//else 70

        }//else 57



          }//else



}



else{
          header('location:addCources.php?yes=true');
          exit;
        }



}//else
}//if




?>
