<html>
<head>

</head>

<style>
div.fixed {
    position: fixed;
    top: 229px;
    right: 94px;
    width: 400px;
    border: 4px solid RGB(50,160,86);
    border-radius: 22px;
}
div.absolute {
    position: absolute;
    top: 40px;
    right:94px;
    width: 400px;
    height: 180px;
    border: 4px solid RGB(50,160,86);
    background-color: #008080;
    border-radius: 22px;
}
h1 {
  font-family: "Courier New", Courier, "Lucida Sans Typewriter", "Lucida Typewriter", monospace;
	font-size: 67px;
	font-style: normal;
	font-variant: normal;
	font-weight: 500;
        color: white;
}
p.abcde {
    font-family: "Courier New", Courier, "Lucida Sans Typewriter", "Lucida Typewriter", monospace;
    font-weight: 400;
    font-size: 13px;
}
p.abcd {
    font-family: "Courier New", Courier, "Lucida Sans Typewriter", "Lucida Typewriter", monospace;
    font-weight: 800;
    font-size: 23px;
    
}
.button {
    background-color: #008080;
    border: none;
    border-radius: 12px;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    margin: 4px 2px;
    cursor: pointer;
}
body {
    background-image: url("xyz.jpg");
    background-repeat: no-repeat;
    -webkit-background-size: cover;
   -moz-background-size: cover;
   -o-background-size: cover;
    background-size: cover;
}
input[type="text"] {
  padding: 07px;
  border: solid 3px #dcdcdc;
  transition: box-shadow 0.3s, border 0.3s;
}
input[type="password"] {
  padding: 07px;
  border: solid 3px #dcdcdc;
  transition: box-shadow 0.3s, border 0.3s;
}
</style>
<body align=center>
<div class="absolute"><h1>WEB-LOGIN</h1></div>
	
<div class="fixed">
	<form method="POST">
		<br>
		<p class="abcd">Username:<br> <input type="text" name="user" placeholder="username" value=<?php if($_SERVER["REQUEST_METHOD"]=="POST") echo $_POST["user"];?>><br></p>
		<p class="abcd">Password:<br> <input type="password" name="pass" placeholder="password"  value=<?php if($_SERVER["REQUEST_METHOD"]=="POST") echo $_POST["pass"];?>><br><br></p> 
		<p class="abcd">Student:<input type="radio" name="position" style="margin-right: 30px" value="student" checked>
		Teacher:<input type="radio" name="position" value="teacher"></p>
		<br><input type="submit" class="button" name="sub" value="Login">
	</form>
		<?php
		if($_SERVER["REQUEST_METHOD"]=="POST"){
			if(!empty($_POST["user"])&&!empty($_POST["pass"])&&!empty($_POST["position"])){
			include 'process.php';
			}
			else{ 
			echo '<span style="color:#800000;text-align:center;">Please Fill all Fields';
			}
		}
		?>	
</div>	


</body>

</html>