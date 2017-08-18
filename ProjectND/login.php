<html>
<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body align=centre>
	<div class="container">
	  <h2>Horizontal form</h2>
	  <form class="form-horizontal" method="post">
	    <div class="form-group">
	      <label class="control-label col-sm-2" for="email">Email:</label>
	      <div class="col-sm-10">
	        <input type="text" name="user" value=<?php if($_SERVER["REQUEST_METHOD"]=="POST") echo $_POST["user"];?> class="form-control" id="email" placeholder="Enter email">
	      </div>
	    </div>
	    <div class="form-group">
	      <label class="control-label col-sm-2" for="pwd">Password:</label>
	      <div class="col-sm-10">
	        <input type="password" class="form-control" id="pwd" placeholder="Enter password">
	      </div>
	    </div>
	    <div class="form-group">
	      <div class="col-sm-offset-2 col-sm-10">
	        <div class="checkbox">
	          <label><input type="checkbox"> Remember me</label>
	        </div>
	      </div>
	    </div>
	    <div class="form-group">
	      <div class="col-sm-offset-2 col-sm-10">
	        <button type="submit" class="btn btn-default">Submit</button>
	      </div>
	    </div>
	  </form>
	</div>
	<form method="POST">
		<br><br>
		Username:
		<input type="text" name="user" value=<?php if($_SERVER["REQUEST_METHOD"]=="POST") echo $_POST["user"];?> > <br><br>
		Password:
		<input type="password" name="pass"  value=<?php if($_SERVER["REQUEST_METHOD"]=="POST") echo $_POST["pass"];?>><br><br>
		Student:<input type="radio" name="position" value="checked">
		Teacher:<input type="radio" name="position" value="unchecked">
		<input id="btn" type="submit" name="sub" value="login">
	</form>
		<?php
		if($_SERVER["REQUEST_METHOD"]=="POST"){
			if(!empty($_POST["user"]&&!empty($_POST["pass"])))
			include 'process.php';
			else
			echo "fill all fields";

		}
		?>
</body>

</html>
