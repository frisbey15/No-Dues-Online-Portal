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
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>Dues Clearance Portal - Teacher</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

  </head>
 <style>
 body {
    background-image: url("done.jpg");
    background-repeat: no-repeat;
    background-size:cover;
      background-position: 0% 15%;


     background-attachment: fixed;
}
 .jumbotron{
background-color:#FFFFFF;}
.first {
position: absolute;
 top: -25px;
left: 40px;
}

.second {
position: absolute;
 top: 279px;
left: 50px;
}
.button {
    background-color: #008080;
    border: none;
    border-radius: 12px;
    color: white;
    padding: 7px 18px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    margin: 0px 0px;
    cursor: pointer;
}
h3 {
	 font-size: 52px;
}
</style>
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
       if($result=mysql_query("SELECT `username` FROM `users` WHERE `$username`='1'")or die(mysql_error())){
          
//$array=mysql_fetch_array($result)or die("failed fetch".mysql_error());
         
  
 ?>


    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Dues Clearance Portal</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php">Log Out</a></li>
            
          </ul>
          
        </div>
      </div>
    </nav>

    <div class="container first">

          <h1 class="page-header"><br><br><h3>Home - Logged in as <?php echo $username;?></h3></h1>
          <h2 class="sub-header">Dues Requests</h2><br>
          </div>
          <div class="container second">
         <div class="row">
        	<form action='approve_all.php' method='POST'><input type="submit" class="button" name="name" value="Approve All"></form>
          
          <div class="table-responsive">
           <center>
            <table class="table ">
              <thead>

                <tr>
                  
                  <th>Name</th>
                  <th>Status</th>
                  <th>ADD Comment</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                    while($array=mysql_fetch_array($result)){
                     //if($array[0]=='REQUEST'){
              ?>
                <tr>
               
                  <td><?php echo $array[0]; ?></td>
                  <td>Pending</td>
                  <td><form action="add_comment.php" method="POST"><input type="hidden" name="data" value=<?php echo $array[0]?> > <input type="textarea" name="area" placeholder="comments here"> <input type="submit" class="button" name="comment_s" value="ADD"></form></td>
                  <td><form action="approve.php" method="POST"><input type="hidden" name="name" value=<?php echo $array[0]?>><input type="submit" class="button" value="Approve"></form></td>
                </tr>
              <?php
					//}
					}              
         	}
              ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</center>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
