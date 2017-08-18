<?php
// Start the session
session_start();
  if($_SESSION['sid']==session_id())
  {
    //echo "Welcome to you<br>";
    //echo "<a href='logout.php'>Logout</a>";
    $username=$_SESSION['username'];
    $password=$_SESSION['password'];
    $position=$_SESSION['position'];
  }
  else
  {
    header("location:loginpage.php");
  }
?>

<?php
      //connecting database
      //echo "hi there" ;
    $mysql_host="localhost";
    $mysql_user="root";
    $mysql_password='';
    $db=mysql_select_db("data");
    if(!mysql_connect($mysql_host,$mysql_user,$mysql_password)||!mysql_select_db("data")){
    die(mysql_error());
     }
     //echo "hi there" ;
     ?>

     <?php 
       if($result=mysql_query("SELECT `username` FROM `users` WHERE `$username`='1'")or die(mysql_error())){
        
       //$array=mysql_fetch_array($result);
        //echo $array[0];


          while($array=mysql_fetch_array($result)){
                $n=$array[0];
                $r=mysql_query("SELECT * from `users` WHERE `username`='$n'")or die(mysql_error());
                $row=mysql_fetch_array($r)or die(mysql_error());
               $s=$row['counter']+2;

                mysql_query("UPDATE `users` SET `$username`='2' WHERE `username`='$n'") or die(mysql_error());
                mysql_query("UPDATE `users` SET `counter`='$s' WHERE `username`='$n'") or die(mysql_error());
         }
//
          header('Location: teacher.php');
      }
       ?>