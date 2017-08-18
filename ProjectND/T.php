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


<html>

<body>
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
       if($result=mysql_query("SELECT `username` FROM `users` WHERE `DLIB`='REQUEST'")or die(mysql_error())){
          
           while($array=mysql_fetch_array($result))
           {
           	echo $array[1];
           	echo '<br>';
           }
         }
  
 ?>

</body>
</html>