<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Login - No Dues Website</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="css/login.css" rel="stylesheet">

  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="POST" >
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputname" class="sr-only">User Id</label>
        <input type="text" id="inputname" class="form-control" placeholder="User Id" required autofocus name="user" value=<?php if($_SERVER["REQUEST_METHOD"]=="POST") echo $_POST["user"];?>>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="pass"  value=<?php if($_SERVER["REQUEST_METHOD"]=="POST") echo $_POST["pass"];?>>
        <div class="checkbox">
          <label>
            Student:<input type="radio" name="position" value="checked">
        		Teacher:<input type="radio" name="position" value="unchecked">
          </label>
        </div>
       <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
      <?php
      if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(!empty($_POST["user"]&&!empty($_POST["pass"])))
        include 'process.php';
        else
        echo "fill all fields";

      }
      ?>
    </div> <!-- /container -->

  </body>
</html>
