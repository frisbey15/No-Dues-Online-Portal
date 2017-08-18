<?php
session_start();
?>

<?php
	$username=$_POST["user"];
	$password=$_POST["pass"];
	$position=$_POST["position"];

	

	$username=stripslashes($username);
	$password=stripslashes($password);

	
	//$username=mysql_real_escape_string($username);
	//$password==mysql_real_escape_string($password);

	$mysql_host="localhost";
	$mysql_user="root";
	$mysql_password='';
	$db=mysql_select_db("data");
	if(!mysql_connect($mysql_host,$mysql_user,$mysql_password)||!mysql_select_db("data")){
		die(mysql_error());
	}
	//$query=;
	if($result=mysql_query("SELECT * FROM `users` WHERE `username`='$username' AND `password`='$password' AND `position`='$position'") or die(mysql_error())){ 
		$n=mysql_num_rows($result);
		if($n==0){
			$result=mysql_query("SELECT * FROM `teacher` WHERE `username`='$username' AND `password`='$password' AND `position`='$position'")or die(mysql_error());
			$n=mysql_num_rows($result);
		}
		//echo 'n is'.$result;
		if($n!=0){
			session_start();
			$_SESSION['sid']=session_id();
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;
			$_SESSION['position'] = $position;
			//echo '<a href ="student.php">click</a>';
			if($position=='student')
				header('Location: student_f.php');
			else
				header('Location: teacher.php');
			//include 'student.php';
		}else{
			echo '<span style="color:#800000;text-align:center;">invalid';
		}
	}

	//$row=mysql_fetch_array($result) or die("failed fetch".mysql_error());
	

	//if($row['username']== $username && $row['password']== $password){
	//	echo 'LOGIN SUCCESS';
	//}
	//else{
	//	echo $row['username']; 
	//	echo 'failed';
	//}

	
?>