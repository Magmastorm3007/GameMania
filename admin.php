<html>
<link href="../css/style.css" rel="stylesheet" type="text/css">  
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">  
    <link href="./css/login.css" rel="stylesheet" type="text/css">  
   
    <body>
        <nav class="navbar navbar-expand-lg navbar-light ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
              <span class="title"><b>GameMania</b></span>
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                  <a class="pg" href="#">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="pg" href="#">About us</a>
                  </li>
                <li class="nav-item">
                  <a class="pg" href="#">Contact Us</a>
                </li>
               
              <li>
            
        <a class="pg"><form method="post"><button input type="submit"  class="btn btn-link" id="bt" name="button1">Sign Out</button></form></a>

</li>

              </ul>
             
            </div>
          </nav>
          <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Welcome Admin</h1>
    <p class="lead">You may proceed to do any one of the operations on the database</p>


    <a href="./form.php"><button type="button" class="btn btn-success">Insert</button></a><br>
<p class="lead">You may add new entries into the database</p>
<a href="./update.php"><button type="button" class="btn btn-success">Update</button></a><br>
<p class="lead">You may update an entry in the database</p>
<a href="./delete.php"><button type="button" class="btn btn-success">Delete</button></a><br>
<p class="lead">You may delete an entry from the database</p>
</div>  
</body>
</html>
<style>
#bt{
    all: unset;
  cursor: pointer;
}
form{
    all:unset;
}
    </style>
<?php 
session_start();
$servername="localhost";
$username="root";
$password="";
$database_name="db";
$conn=mysqli_connect($servername,$username,$password,$database_name);



$user_check = $_SESSION['username'];
   
$ses_sql = mysqli_query($conn,"select username from admin where username = '$user_check' ");

$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$login_session = $row['username'];

if(!isset($_SESSION['username'])){
   header("location:login.php");
   die();
}

if(isset($_POST['button1'])) {
    session_destroy();
    header("location:login.php");
}
?>