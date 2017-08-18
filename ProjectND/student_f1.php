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
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
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
 top: 32px;
left: -20px;
}

.second {
position: absolute;
 top: 259px;
left: 40px;
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

</style>



<body>
   <a href='logout.php'>Logout</a>
    
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
<br>
      <?php

         if($result=mysql_query("SELECT * FROM `users` WHERE `username`='$username' AND `password`='$password' AND `position`='$position'")or die(mysql_error())){
          
           $row=mysql_fetch_array($result)or die("failed fetch".mysql_error());

         }

         if($result=mysql_query("SELECT * FROM `messages` WHERE `username`='$username'")or die(mysql_error())){
          
          $mes=mysql_fetch_array($result)or die("failed fetch".mysql_error());

         }
         
         ?>

    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse" >
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand" href="#">HOME</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
           <!-- <li> <span class="glyphicon glyphicon-log-out" style="font-size: 35px;"></span></li>-->
            <li class="active"><a href='logout.php'>Log out <span class="sr-only">(current)</span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<div class="container first">

      <!-- Main component for a primary marketing message or call to action -->
      <div style="background: transparent; !important" class="jumbotron">
        <h1>Student Homepage</h1>
        <p><?php echo "Welcome ".$username." !!"; ?></p>
        <p><strong>Note:</strong> The Student is required to get all clearances latest by 1/12/16</p>
      </div>

    </div> <!-- /container -->
  <div class="container second">
  <div class="panel-group" id="DuesList">
  <div class="panel panel-primary">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#DuesList" href="#collapse11">Professors</a>
        </h4>
      </div>
      <div id="collapse11" class="panel-collapse collapse">
      <table class="table">
    <thead>
      <tr>
        <th>Person of Interest</th>
        <th>Status</th>
        <th>Message</th>
      </tr>
    </thead>
    <tbody>
    
      <tr class="success">
        <td>Amit Awekar</td>
        <td> <?php if($row['amit']=="0"){?> <form action="rtop.php" method="POST"><input type="hidden" name="name" value="amit"><input type="submit" class="button"  value="REQUEST"></form> <?php ;}?>
        <?php if($row['amit']=="1"){echo "PENDING";}?>
        <?php if($row['amit']=="2"){echo "CLEARED";}?>
          </td>
          <td><?php if($row['amit']!=2){echo $mes['amit'];} ?></td>
      </tr>

            <tr class="success">
        <td>Arijit Sur</td>
        <td> <?php if($row['arijit']=="0"){?> <form action="rtop.php" method="POST"><input type="hidden" name="name" value="arijit"><input type="submit" class="button" value="REQUEST"></form> <?php ;}?>
        <?php if($row['arijit']=="1"){echo "PENDING";}?>
        <?php if($row['arijit']=="2"){echo "CLEARED";}?>
          </td>
          <td><?php if($row['arijit']!=2){echo $mes['arijit'];} ?></td>
      </tr>
            <tr class="success">
        <td>Arnab Sarkar</td>
        <td> <?php if($row['arnab']=="0"){?> <form action="rtop.php" method="POST"><input type="hidden" name="name" value="arnab"><input type="submit" class="button" value="REQUEST"></form> <?php ;}?>
        <?php if($row['arnab']=="1"){echo "PENDING";}?>
        <?php if($row['arnab']=="2"){echo "CLEARED";}?>
          </td>
          <td><?php if($row['arnab']!=2){echo $mes['arnab'];} ?></td>
      </tr>
            <tr class="success">
        <td>Aryabartta Sahu</td>
        <td> <?php if($row['aryabartta']=="0"){?> <form action="rtop.php" method="POST"><input type="hidden" name="name" value="aryabartta"><input type="submit" class="button" value="REQUEST"></form> <?php ;}?>
        <?php if($row['aryabartta']=="1"){echo "PENDING";}?>
        <?php if($row['aryabartta']=="2"){echo "CLEARED";}?>
          </td>
          <td><?php if($row['aryabartta']!=2){echo $mes['aryabartta'];} ?></td>
      </tr>
            <tr class="success">
        <td>Ashish Anand</td>
        <td> <?php if($row['ashish']=="0"){?> <form action="rtop.php" method="POST"><input type="hidden" name="name" value="ashish"><input type="submit" class="button" value="REQUEST"></form> <?php ;}?>
        <?php if($row['ashish']=="1"){echo "PENDING";}?>
        <?php if($row['ashish']=="2"){echo "CLEARED";}?>
          </td>
          <td><?php if($row['ashish']!=2){echo $mes['ashish'];} ?></td>
      </tr>
            <tr class="success">
        <td>Benny George K</td>
        <td> <?php if($row['benny']=="0"){?> <form action="rtop.php" method="POST"><input type="hidden" name="name" value="benny"><input type="submit" class="button"  value="REQUEST"></form> <?php ;}?>
        <?php if($row['benny']=="1"){echo "PENDING";}?>
        <?php if($row['benny']=="2"){echo "CLEARED";}?>
          </td>
          <td><?php if($row['benny']!=2){echo $mes['benny'];} ?></td>
      </tr>
            <tr class="success">
        <td>Chandan Karfa</td>
        <td> <?php if($row['chandan']=="0"){?> <form action="rtop.php" method="POST"><input type="hidden" name="name" value="chandan"><input type="submit" class="button"  value="REQUEST"></form> <?php ;}?>
        <?php if($row['chandan']=="1"){echo "PENDING";}?>
        <?php if($row['chandan']=="2"){echo "CLEARED";}?>
          </td>
          <td><?php if($row['chandan']!=2){echo $mes['chandan'];} ?></td>
      </tr>
            <tr class="success">
        <td>Deepanjan Kesh</td>
        <td> <?php if($row['deepanjan']=="0"){?> <form action="rtop.php" method="POST"><input type="hidden" name="name" value="deepanjan"><input type="submit" class="button" value="REQUEST"></form> <?php ;}?>
        <?php if($row['deepanjan']=="1"){echo "PENDING";}?>
        <?php if($row['deepanjan']=="2"){echo "CLEARED";}?>
          </td>
          <td><?php if($row['deepanjan']!=2){echo $mes['deepanjan'];} ?></td>
      </tr>
            <tr class="success">
        <td>Diganta Goswami</td>
        <td> <?php if($row['diganta']=="0"){?> <form action="rtop.php" method="POST"><input type="hidden" name="name" value="diganta"><input type="submit" class="button"  value="REQUEST"></form> <?php ;}?>
        <?php if($row['diganta']=="1"){echo "PENDING";}?>
        <?php if($row['diganta']=="2"){echo "CLEARED";}?>
          </td>
          <td><?php if($row['diganta']!=2){echo $mes['diganta'];} ?></td>
      </tr>
            <tr class="success">
        <td>G. Sajith</td>
        <td> <?php if($row['sajith']=="0"){?> <form action="rtop.php" method="POST"><input type="hidden" name="name" value="sajith"><input type="submit" class="button"  value="REQUEST"></form> <?php ;}?>
        <?php if($row['sajith']=="1"){echo "PENDING";}?>
        <?php if($row['sajith']=="2"){echo "CLEARED";}?>
          </td>
          <td><?php if($row['sajith']!=2){echo $mes['sajith'];} ?></td>
      </tr>
            <tr class="success">
        <td>Gautam Barua</td>
        <td> <?php if($row['gautam']=="0"){?> <form action="rtop.php" method="POST"><input type="hidden" name="name" value="gautam"><input type="submit"  class="button" value="REQUEST"></form> <?php ;}?>
        <?php if($row['gautam']=="1"){echo "PENDING";}?>
        <?php if($row['gautam']=="2"){echo "CLEARED";}?>
          </td>
          <td><?php if($row['gautam']!=2){echo $mes['gautam'];} ?></td>
      </tr>
            <tr class="success">
        <td>Hemangee K. Kapoor</td>
        <td> <?php if($row['hemangee']=="0"){?> <form action="rtop.php" method="POST"><input type="hidden" name="name" value="hemangee"><input type="submit" class="button" value="REQUEST"></form> <?php ;}?>
        <?php if($row['hemangee']=="1"){echo "PENDING";}?>
        <?php if($row['hemangee']=="2"){echo "CLEARED";}?>
          </td>
          <td><?php if($row['hemangee']!=2){echo $mes['hemangee'];} ?></td>
      </tr>
            <tr class="success">
        <td>Jatindra Kumar Deka</td>
        <td> <?php if($row['jatindra']=="0"){?> <form action="rtop.php" method="POST"><input type="hidden" name="name" value="jatindra"><input type="submit" class="button" value="REQUEST"></form> <?php ;}?>
        <?php if($row['jatindra']=="1"){echo "PENDING";}?>
        <?php if($row['jatindra']=="2"){echo "CLEARED";}?>
          </td>
          <td><?php if($row['jatindra']!=2){echo $mes['jatindra'];} ?></td>
      </tr>
            <tr class="success">
        <td>John Jose</td>
        <td> <?php if($row['john']=="0"){?> <form action="rtop.php" method="POST"><input type="hidden" name="name" value="john"><input type="submit" class="button" value="REQUEST"></form> <?php ;}?>
        <?php if($row['john']=="1"){echo "PENDING";}?>
        <?php if($row['john']=="2"){echo "CLEARED";}?>
          </td>
          <td><?php if($row['john']!=2){echo $mes['john'];} ?></td>
      </tr>
            <tr class="success">
        <td>Pinaki Mitra</td>
        <td> <?php if($row['pinaki']=="0"){?> <form action="rtop.php" method="POST"><input type="hidden" name="name" value="pinaki"><input type="submit" class="button" value="REQUEST"></form> <?php ;}?>
        <?php if($row['pinaki']=="1"){echo "PENDING";}?>
        <?php if($row['pinaki']=="2"){echo "CLEARED";}?>
          </td>
          <td><?php if($row['pinaki']!=2){echo $mes['pinaki'];} ?></td>
      </tr>
            <tr class="success">
        <td>Pradip Kr. Das</td>
        <td> <?php if($row['pradip']=="0"){?> <form action="rtop.php" method="POST"><input type="hidden" name="name" value="pradip"><input type="submit" class="button" value="REQUEST"></form> <?php ;}?>
        <?php if($row['pradip']=="1"){echo "PENDING";}?>
        <?php if($row['pradip']=="2"){echo "CLEARED";}?>
          </td>
          <td><?php if($row['pradip']!=2){echo $mes['pradip'];} ?></td>
      </tr>
            <tr class="success">
        <td>Purandar Bhaduri</td>
        <td> <?php if($row['purandar']=="0"){?> <form action="rtop.php" method="POST"><input type="hidden" name="name" value="purandar"><input type="submit" class="button" value="REQUEST"></form> <?php ;}?>
        <?php if($row['purandar']=="1"){echo "PENDING";}?>
        <?php if($row['purandar']=="2"){echo "CLEARED";}?>
          </td>
          <td><?php if($row['purandar']!=2){echo $mes['purandar'];} ?></td>
      </tr>
            <tr class="success">
        <td>R. Inkulu</td>
        <td> <?php if($row['inkulu']=="0"){?> <form action="rtop.php" method="POST"><input type="hidden" name="name" value="inkulu"><input type="submit" class="button" value="REQUEST"></form> <?php ;}?>
        <?php if($row['inkulu']=="1"){echo "PENDING";}?>
        <?php if($row['inkulu']=="2"){echo "CLEARED";}?>
          </td>
          <td><?php if($row['inkulu']!=2){echo $mes['inkulu'];} ?></td>
      </tr>
            <tr class="success">
        <td>Rashmi Dutta Baruah</td>
        <td> <?php if($row['rashmi']=="0"){?> <form action="rtop.php" method="POST"><input type="hidden" name="name" value="rashmi"><input type="submit" class="button" value="REQUEST"></form> <?php ;}?>
        <?php if($row['rashmi']=="1"){echo "PENDING";}?>
        <?php if($row['rashmi']=="2"){echo "CLEARED";}?>
          </td>
          <td><?php if($row['rashmi']!=2){echo $mes['rashmi'];} ?></td>
      </tr>
            <tr class="success">
        <td>S. V. Rao</td>
        <td> <?php if($row['svrao']=="0"){?> <form action="rtop.php" method="POST"><input type="hidden" name="name" value="svrao"><input type="submit" class="button" value="REQUEST"></form> <?php ;}?>
        <?php if($row['svrao']=="1"){echo "PENDING";}?>
        <?php if($row['svrao']=="2"){echo "CLEARED";}?>
          </td>
          <td><?php if($row['svrao']!=2){echo $mes['svrao'];} ?></td>
      </tr>
            <tr class="success">
        <td>Samit Bhattacharya</td>
        <td> <?php if($row['samit']=="0"){?> <form action="rtop.php" method="POST"><input type="hidden" name="name" value="samit"><input type="submit" class="button" value="REQUEST"></form> <?php ;}?>
        <?php if($row['samit']=="1"){echo "PENDING";}?>
        <?php if($row['samit']=="2"){echo "CLEARED";}?>
          </td>
          <td><?php if($row['samit']!=2){echo $mes['samit'];} ?></td>
      </tr>
            <tr class="success">
        <td>Sanasam Ranbir Singh</td>
        <td> <?php if($row['sanasam']=="0"){?> <form action="rtop.php" method="POST"><input type="hidden" name="name" value="sanasam"><input type="submit" class="button" value="REQUEST"></form> <?php ;}?>
        <?php if($row['sanasam']=="1"){echo "PENDING";}?>
        <?php if($row['sanasam']=="2"){echo "CLEARED";}?>
          </td>
          <td><?php if($row['sanasam']!=2){echo $mes['sanasam'];} ?></td>
      </tr>
            <tr class="success">
        <td>Santosh Biswas</td>
        <td> <?php if($row['santosh']=="0"){?> <form action="rtop.php" method="POST"><input type="hidden" name="name" value="santosh"><input type="submit" class="button" value="REQUEST"></form> <?php ;}?>
        <?php if($row['santosh']=="1"){echo "PENDING";}?>
        <?php if($row['santosh']=="2"){echo "CLEARED";}?>
          </td>
          <td><?php if($row['santosh']!=2){echo $mes['santosh'];} ?></td>
      </tr>
            <tr class="success">
        <td>Shivashankar B. Nair</td>
        <td> <?php if($row['shivashankar']=="0"){?> <form action="rtop.php" method="POST"><input type="hidden" name="name" value="shivashankar"><input type="submit" class="button" value="REQUEST"></form> <?php ;}?>
        <?php if($row['shivashankar']=="1"){echo "PENDING";}?>
        <?php if($row['shivashankar']=="2"){echo "CLEARED";}?>
          </td>
          <td><?php if($row['shivashankar']!=2){echo $mes['shivashankar'];} ?></td>
      </tr>
            <tr class="success">
        <td>Sukumar Nandi</td>
        <td> <?php if($row['sukumar']=="0"){?> <form action="rtop.php" method="POST"><input type="hidden" name="name" value="sukumar"><input type="submit" class="button"  value="REQUEST"></form> <?php ;}?>
        <?php if($row['sukumar']=="1"){echo "PENDING";}?>
        <?php if($row['sukumar']=="2"){echo "CLEARED";}?>
          </td>
          <td><?php if($row['sukumar']!=2){echo $mes['sukumar'];} ?></td>
      </tr>
            <tr class="success">
        <td>Sushanta Karmakar</td>
        <td> <?php if($row['sushanta']=="0"){?> <form action="rtop.php" method="POST"><input type="hidden" name="name" value="sushanta"><input type="submit" class="button" value="REQUEST"></form> <?php ;}?>
        <?php if($row['sushanta']=="1"){echo "PENDING";}?>
        <?php if($row['sushanta']=="2"){echo "CLEARED";}?>
          </td>
          <td><?php if($row['sushanta']!=2){echo $mes['sushanta'];} ?></td>
      </tr>
            <tr class="success">
        <td>T. Venkatesh</td>
        <td> <?php if($row['venkatesh']=="0"){?> <form action="rtop.php" method="POST"><input type="hidden" name="name" value="venkatesh"><input type="submit" class="button" value="REQUEST"></form> <?php ;}?>
        <?php if($row['venkatesh']=="1"){echo "PENDING";}?>
        <?php if($row['venkatesh']=="2"){echo "CLEARED";}?>
          </td>
          <td><?php if($row['venkatesh']!=2){echo $mes['venkatesh'];} ?></td>
      </tr>
            <tr class="success">
        <td>V. Vijaya Saradhi</td>
        <td> <?php if($row['vijaya']=="0"){?> <form action="rtop.php" method="POST"><input type="hidden" name="name" value="vijaya"><input type="submit" class="button"  value="REQUEST"></form> <?php ;}?>
        <?php if($row['vijaya']=="1"){echo "PENDING";}?>
        <?php if($row['vijaya']=="2"){echo "CLEARED";}?>
          </td>
          <td><?php if($row['vijaya']!=2){echo $mes['vijaya'];} ?></td>
      </tr>
 </tbody>
  </table>
    </div>
    </div>

    <div class="panel panel-primary">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#DuesList" href="#collapse1">Departmental Dues</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
      <table class="table">
    <thead>
      <tr>
        <th>Person of Interest</th>
        <th>Status</th>
        <th>Message</th>
      </tr>
    </thead>
    <tbody>
    
      <tr class="success">
        <td>Lab Dues</td>
        <td> <?php if($row['DLAB']=="0"){?> <form action="rtop.php" method="POST"><input type="hidden" name="name" value="DLAB"><input type="submit" class="button"  value="REQUEST"></form> <?php ;}?>
        <?php if($row['DLAB']=="1"){echo "PENDING";}?>
        <?php if($row['DLAB']=="2"){echo "CLEARED";}?>
          <td><?php if($row['DLAB']!=2){echo $mes['DLAB'];} ?></td>
        
      </tr>
      <tr class="success">
        <td>Departmental Library</td>
        <td><?php if($row['DLIB']=="0"){?> <form action="rtop.php" method="POST"><input type="hidden" name="name" value="DLIB"><input type="submit" class="button" value="REQUEST"></form> <?php ;}?>
        <?php if($row['DLIB']=="1"){echo "PENDING";}?>
        <?php if($row['DLIB']=="2"){echo "CLEARED";}?></td>
        <td><?php if($row['DLIB']!=2){echo $mes['DLIB'];} ?></td>
      </tr>
      <tr class="success">
        <td>Thesis</td>
        <td><?php if($row['THESIS']=="0"){?> <form action="rtop.php" method="POST"><input type="hidden" name="name" value="THESIS"><input type="submit" class="button" value="REQUEST"></form> <?php ;}?>
        <?php if($row['THESIS']=="1"){echo "PENDING";}?>
        <?php if($row['THESIS']=="2"){echo "CLEARED";}?></td>
        <td><?php if($row['THESIS']!=2){echo $mes['THESIS'];} ?></td>
      </tr>
      <tr class="success">
        <td>Superviser/Guide</td>
        <td><?php if($row['GUIDE']=="0"){?> <form action="rtop.php" method="POST"><input type="hidden" name="name" value="GUIDE"><input type="submit" class="button" value="REQUEST"></form> <?php ;}?>
        <?php if($row['GUIDE']=="1"){echo "PENDING";}?>
        <?php if($row['GUIDE']=="2"){echo "CLEARED";}?></td>
        <td><?php if($row['GUIDE']!=2){echo $mes['GUIDE'];} ?></td>
      </tr>
    </tbody>
  </table>
    </div>
    </div>

    <div class="panel panel-primary">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#DuesList" href="#collapse2">Library</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <table class="table">
      <thead>
        <tr>
          <th>Person of Interest</th>
          <th>Status</th>
          <th>Message</th>
        </tr>
      </thead>
      <tbody>
        <tr class="success">
          <td>Librarian / Asst.Librarian</td>
          <td><?php if($row['LIB']=="0"){?> <form action="rtop.php" method="POST"><input type="hidden" name="name" value="LIB"><input type="submit" class="button"  value="REQUEST"></form> <?php ;}?>
        <?php if($row['LIB']=="1"){echo "PENDING";}?>
        <?php if($row['LIB']=="2"){echo "CLEARED";}?></td>
          <td><?php if($row['LIB']!=2){echo $mes['LIB'];} ?></td>
        </tr>
      </tbody>
    </table>
    </div>
    </div>

    <div class="panel panel-primary">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#DuesList" href="#collapse3">Hostel</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
      <table class="table">
    <thead>
      <tr>
        <th>Person of Interest</th>
        <th>Status</th>
        <th>Message</th>
      </tr>
    </thead>
    <tbody>
      <tr class="success">
        <td>Caretaker</td>

        <td><?php  if($row['CARETAKER']=="0"){?> <form action="rtop.php" method="POST"><input type="hidden" name="name" value="CARETAKER"><input type="submit" class="button" value="REQUEST"></form> <?php ;}?>
        <?php if($row['CARETAKER']=="1"){echo "PENDING";}?>
        <?php if($row['CARETAKER']=="2"){echo "CLEARED";}?></td>
        <td><?php if($row['CARETAKER']!=2){echo $mes['CARETAKER'];} ?></td>
      </tr>
      <tr class="success">
        <td>Warden</td>
        <td><?php if($row['CARETAKER']=="2"&&$row['WARDEN']=='0'){?> <form action="rtop.php" method="POST"><input type="hidden" name="name" value="WARDEN"><input type="submit" class="button" value="REQUEST"></form> <?php ;}?>
        <?php if($row['WARDEN']=="0"&&$row['CARETAKER']!="2"){echo "First clear DUES from Caretaker";}?>
        <?php if($row['WARDEN']=="1"){echo "PENDING";}?>
        <?php if($row['WARDEN']=="2"){echo "CLEARED";}?></td>
        <td><?php if($row['WARDEN']!=2){echo $mes['WARDEN'];} ?></td>
      </tr>
      
    </tbody>
  </table>
    </div>
    </div>

    <div class="panel panel-primary">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#DuesList" href="#collapse4">Gymkhana</a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <table class="table">
      <thead>
        <tr>
          <th>Person of Interest</th>
          <th>Status</th>
          <th>Message</th>
        </tr>
      </thead>
      <tbody>
        <tr class="success">
          <td>Gymkhana</td>
          <td><?php if($row['GYMKHANA']=="0"){?> <form action="rtop.php" method="POST"><input type="hidden" name="name" value="GYMKHANA"><input type="submit" class="button" value="REQUEST"></form> <?php ;}?>
        <?php if($row['GYMKHANA']=="1"){echo "PENDING";}?>
        <?php if($row['GYMKHANA']=="2"){echo "CLEARED";}?></td>
          <td><?php if($row['GYMKHANA']!=2){echo $mes['GYMKHANA'];} ?></td>
        </tr>
      </tbody>
    </table>
    </div>
    </div>

    <div class="panel panel-primary">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#DuesList" href="#collapse5">Computer Centre</a>
        </h4>
      </div>
      <div id="collapse5" class="panel-collapse collapse">
        <table class="table">
      <thead>
        <tr>
          <th>Person of Interest</th>
          <th>Status</th>
          <th>Message</th>
        </tr>
      </thead>
      <tbody>
        <tr class="success">
          <td>Online Dues for CC</td>
          <td><?php if($row['ONCC']=="0"){?> <form action="rtop.php" method="POST"><input type="hidden" name="name" value="ONCC"><input type="submit" class="button" value="REQUEST"></form> <?php ;}?>
        <?php if($row['ONCC']=="1"){echo "PENDING";}?>
        <?php if($row['ONCC']=="2"){echo "CLEARED";}?></td>
          <td><?php if($row['ONCC']!=2){echo $mes['ONCC'];} ?></td>
        </tr>
        <tr class="success">
          <td>CC Incharge</td>
          <td><?php if($row['INCC']=="0"&&$row['ONCC']=="2"){?> <form action="rtop.php" method="POST"><input type="hidden" name="name" value="INCC"><input type="submit" class="button" value="REQUEST"></form> <?php ;}?>
           <?php if($row['INCC']=="0"&&$row['ONCC']!="2"){echo "Clear Online CC Dues first";}?>   
        <?php if($row['INCC']=="1"){echo "PENDING";}?>
        <?php if($row['INCC']=="2"){echo "CLEARED";}?></td>
          <td><?php if($row['INCC']!=2){echo $mes['INCC'];} ?></td>
        </tr>
      </tbody>
    </table>
    </div>
    </div>

    <div class="panel panel-primary">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#DuesList" href="#collapse6">Workshop</a>
        </h4>
      </div>
      <div id="collapse6" class="panel-collapse collapse">
        <table class="table">
      <thead>
        <tr>=
          <th>Person of Interest</th>
          <th>Status</th>
          <th>Message</th>
        </tr>
      </thead>
      <tbody>
        <tr class="success">
          <td>Mechanical Workshop</td>
          <td><?php if($row['WORK']=="0"){?> <form action="rtop.php" method="POST"><input type="hidden" name="name" value="WORK"><input type="submit" class="button" value="REQUEST"></form> <?php ;}?>
        <?php if($row['WORK']=="1"){echo "PENDING";}?>
        <?php if($row['WORK']=="2"){echo "CLEARED";}?></td>
          <td><?php if($row['WORK']!=2){echo $mes['WORK'];} ?></td>
        </tr>
      </tbody>
    </table>
    </div>
    </div>

    <div class="panel panel-primary">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#DuesList" href="#collapse12">QIP Programme</a>
        </h4>
      </div>
      <div id="collapse12" class="panel-collapse collapse">
        <table class="table">
      <thead>
        <tr>
          <th>Person of Interest</th>
          <th>Status</th>
          <th>Message</th>
        </tr>
      </thead>
      <tbody>
        <tr class="success">
          <td>QIP Coordinator</td>
          <td><?php if($row['QIP']=="0"){?> <form action="rtop.php" method="POST"><input type="hidden" name="name" value="QIP"><input type="submit" class="button" value="REQUEST"></form> <?php ;}?>
        <?php if($row['QIP']=="1"){echo "PENDING";}?>
        <?php if($row['QIP']=="2"){echo "CLEARED";}?></td>
          <td><?php if($row['QIP']!=2){echo $mes['QIP'];} ?></td>
        </tr>
      </tbody>
    </table>
    </div>
    </div>

    <div class="panel panel-primary">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#DuesList" href="#collapse7">Student Affairs</a>
        </h4>
      </div>
      <div id="collapse7" class="panel-collapse collapse">
        <table class="table">
      <thead>
        <tr>
          <th>Person of Interest</th>
          <th>Status</th>
          <th>Message</th>
        </tr>
      </thead>
      <tbody>
       <tr class="info">
        <td>Asst. Registrar (Only for non-boarders)</td>
        <td><?php if($row['GYMKHANA']=="2"&&$row['WARDEN']=='2'&&$row['aREGISTRAR']=='0'){?> <form action="rtop.php" method="POST"><input type="hidden" name="name" value="aREGISTRAR"><input type="submit" class="button" value="REQUEST"></form> <?php ;}?>
        <?php if($row['aREGISTRAR']=="0"&&($row['GYMKHANA']!="2"||$row['WARDEN']!='2')){echo "FIRST CLEAR OTHER DUES";}?>
        <?php if($row['aREGISTRAR']=="1"){echo "PENDING";}?>
        <?php if($row['aREGISTRAR']=="2"){echo "CLEARED";}?></td>
        <td><?php if($row['aREGISTRAR']!=2){echo $mes['aREGISTRAR'];} ?></td>
      </tr>
      </tbody>
    </table>
    </div>
    </div>

    <div class="panel panel-primary">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#DuesList" href="#collapse8">HOD</a>
        </h4>
      </div>
      <div id="collapse8" class="panel-collapse collapse">
        <table class="table">
      <thead>
        <tr>
          <th>Person of Interest</th>
          <th>Status</th>
          <th>Message</th>
        </tr>
      </thead>
      <tbody>
        <tr class="success">
          <td>Head of Department</td>
          <td><?php if($row['HOD']=="0"&&$row['counter']>="82"){?> <form action="rtop.php" method="POST"><input type="hidden" name="name" value="HOD"><input type="submit" class="button" value="REQUEST"></form> <?php ;}?>
           <?php if($row['HOD']=="0"&&$row['counter']<"82"){echo "Clear OTHER Dues first";}?>   
        <?php if($row['HOD']=="1"){echo "PENDING";}?>
        <?php if($row['HOD']=="2"){echo "CLEARED";}?></td>
          <td><?php if($row['HOD']!=2){echo $mes['HOD'];} ?></td>
        </tr>
      </tbody>
    </table>
    </div>
    </div>

    <div class="panel panel-primary">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#DuesList" href="#collapse9">Accounts</a>
        </h4>
      </div>
      <div id="collapse9" class="panel-collapse collapse">
        <table class="table">
      <thead>
        <tr>
          <th>Person of Interest</th>
          <th>Status</th>
          <th>Message</th>
        </tr>
      </thead>
      <tbody>
        <tr class="success">
          <td>Finance</td>
          <td><?php if($row['FINANCE']=="0"&&$row['counter']>="84"){?> <form action="rtop.php" method="POST"><input type="hidden" name="name" value="FINANCE"><input type="submit" class="button" value="REQUEST"></form> <?php ;}?>
           <?php if($row['FINANCE']=="0"&&$row['counter']<"84"){echo "Clear OTHER Dues first";}?>   
        <?php if($row['FINANCE']=="1"){echo "PENDING";}?>
        <?php if($row['FINANCE']=="2"){echo "CLEARED";}?></td>
          <td><?php if($row['FINANCE']!=2){echo $mes['FINANCE'];} ?></td>
        </tr>
      </tbody>
    </table>
    </div>
    </div>

    <div class="panel panel-primary">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#DuesList" href="#collapse10">Academic Section</a>
        </h4>
      </div>
      <div id="collapse10" class="panel-collapse collapse">
      <table class="table">
    <thead>
      <tr>
        <th>Person of Interest</th>
        <th>Status</th>
        <th>Message</th>
      </tr>
    </thead>
    <tbody>
      <tr class="success">
        <td>Academic Registrar/Dy Registrar/Asst. Registrar</td>
        <td><?php if($row['ACADEMIC']=="0"&&$row['counter']>="86"){?> <form action="rtop.php" method="POST"><input type="hidden" name="name" value="ACADEMIC">
        <input type="submit" class="button" value="REQUEST"></form> <?php ;}?>
           <?php if($row['ACADEMIC']=="0"&&$row['counter']<"86"){echo "Clear OTHER Dues first";}?>   
        <?php if($row['ACADEMIC']=="1"){echo "PENDING";}?>
        <?php if($row['ACADEMIC']=="2"){echo "CLEARED";}?></td>
        <td><?php if($row['ACADEMIC']!=2){echo $mes['ACADEMIC'];} ?></td>
      </tr>
    </tbody>
  </table>
    </div>
    </div>
  </div>
</div>



</body>
</html>

