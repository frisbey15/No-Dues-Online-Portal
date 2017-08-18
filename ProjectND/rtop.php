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
      //fetching user info
        
        //  echo "hi there" ;

         if($result=mysql_query("SELECT * FROM `users` WHERE `username`='$username' AND `password`='$password' AND `position`='$position'")or die(mysql_error())){
          
           $row=mysql_fetch_array($result)or die("failed fetch".mysql_error());
         }
         
         ?>

<?php 
	$r=$_POST['name'];
	//echo $r;
	//$r=$row['inuse'];
	mysql_query("UPDATE `users` SET `$r`='1' WHERE `username`='$username'") or die(mysql_error());
	header('Location: student_f.php');
?>