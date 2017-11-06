<?php

session_start();
$db_server = 'localhost';
$db_user_name = 'anm';
$db_password = '123456';
$db_name = 'disksol';
$_SESSION['count']=0;
$DName=$_SESSION["newsession"];

if (isset($_POST['CN22']) and isset($_POST['T22'])) {
    $CN22 = $_POST['CN22'];
    $T22 = $_POST['T22'];

    if (empty($CN22) || empty($T22)) {

        header('location:addCourcesT.php?no=true');
        exit;
    }

    else{

        @ $db = mysqli_connect($db_server,$db_user_name,$db_password,$db_name) or die("unable to connect to database");

        $raw_results = mysqli_query($db,"SELECT * FROM courseinfo
                WHERE (`courseName` LIKE '%".$CN22."%')") ;

                  if(mysqli_num_rows($raw_results) > 0 ){
                    header('location:addCourcesT.php?exist=true');
                    exit;
                  }

                  else{
                    $query="select * from courseinfo where timee='$T22' and DrName='$DName'";
                    $result=mysqli_query($db,$query) or die("error1");
                    $row=mysqli_fetch_array($result);

            if(($row['timee']==$T22)and ($row['DrName']==$DName)){
              header('location:addCourcesT.php?timeExist=true');
              exit;
            }

          else{

            $sq1 = "INSERT INTO courseinfo (`courseName`,`timee`,`DrName`)
                  VALUES ('$CN22','$T22','$DName')";


                  if ($db->query($sq1) === TRUE) {

                    header('location:addCourcesT.php?succ=true');

                  } else {
                      echo "Error: " . $sq1 . "<br>" . $db->error;
                  }
          }//else 43



                  }//else 32
}// 20


}
?>
