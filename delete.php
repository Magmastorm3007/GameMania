<?php 

$servername="localhost";
$username="root";
$password="";
$database_name="db";
$conn=mysqli_connect($servername,$username,$password,$database_name);

session_start();

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
<?php
include("fetch.php");
?>
<html lang = "en">  
   <head>  
      <meta charset = "utf-8">  
      <meta name = "viewport" content = "width = device-width, initial-scale = 1, shrink-to-fit = no">  
      <link href="../css/style.css" rel="stylesheet" type="text/css">  
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">  
    <link href="./css/login.css" rel="stylesheet" type="text/css">  
    
   </head>  
   <body>  
    <nav class="navbar navbar-expand-lg navbar-light ">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <span class="title"><b>GameMania</b></span>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
                  <a class="pg" href="./index.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="pg" href="./Aboutus.html">About us</a>
                  </li>
                <li class="nav-item">
                  <a class="pg" href="./ContactUs.html">Contact Us</a>
                </li>
          <li>
            
            <a class="pg"><form method="post"><button input type="submit"  class="btn btn-link" id="bt" name="button1">Sign Out</button></form></a>
    
    </li>
        </ul>
       
      </div>
    </nav>
    <section class="vh-100" style="background-color: #e7e9ec;">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-xl-9">
    
            <h1 class="text-black mb-4">Update the game entry</h1>
    
            <div class="card" style="border-radius: 15px;">
              <div class="card-body">
    
                <div class="row align-items-center pt-4 pb-3">
                  <div class="col-md-3 ps-5">
                    <form method="POST" action="remove.php" enctype="multipart/form-data">
                      
                    
    
                    <h6 class="mb-0">Title to be deleted</h6>
    
                  </div>
                  
                  <div class="col-md-9 pe-5">
    
                    <input type="text" class="form-control form-control-lg" name="title" placeholder="Game Title" />
    
                  </div>
                </div>
    
                <h6 class="mb-0">Are you Sure you want to proceed?</h6>
    
                <hr class="mx-n3">
    
                <div class="px-5 py-4">
                  <button type="submit" class="btn btn-primary btn-lg">Delete</button>
                </div>
              </form>
              </div>
            </div>
    
          </div>
        </div>
      </div>
    </section>
  
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


</script>