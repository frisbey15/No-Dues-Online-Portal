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
       if($result=mysql_query("SELECT * FROM `users`")or die(mysql_error())){
          
          $array=mysql_fetch_array($result)or die("failed fetch".mysql_error());
         }
  
 ?>
 <?php echo $array[0]?>
<?php echo $array[0][0]?>
<?php echo $array[0][1]?>
 <?php echo $array[1][0]?>
  <?php echo $array[1][3]?>
<?php// echo $array[3]?>
<?php //echo $array[4]?>
<?php //echo $array[5]?>
<?php //echo $array[6]?>
	<table>
			<tr>
				<th>
					Name
				</th>
				<th>
					Status
				</th>
				<?php for($i=0;$i<8;$i++){?>
				<tr>
						<td>
								<?php echo $i;?>
						</td>
				</tr>
				<?php }?>

			</tr>
	</table>

</body>
</html>