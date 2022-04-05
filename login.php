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
                <li class="nav-item">
                  <a class="pg" href="./login.php">Login</a>
                </li>
              
              </ul>
             
            </div>
          </nav>
          <div class="pt-5">  
  <h1 class="text-center"> Login </h1>  
<div class="container">  
                <div class="row">  
                    <div class="col-md-5 mx-auto">  
                        <div class="card card-body">  
                      <form  action="login.php" method="post" >  

                   <div class="form-group required">  
              <lSabel for="username"> Username</lSabel>  
             <input type="text" class="form-control text-lowercase" id="username" required="" name="username" value="">  
               </div>                      
       <div class="form-group required">  
    <label class="d-flex flex-row align-items-center" for="password"> Password</label> 

<input type="password" class="form-control" required="" id="password" name="password" value="">  
       </div>  
    
         <div class="form-group pt-1 text-center">  
      <button class="btn btn-primary btn-block" type="submit" name="save"> Log In </button>  
                  </div>  
               </form>  
            
                        </div>  
                    </div>  
                </div>  
            </div>  
</div>  
</body>  
</html>

<?php
$servername="localhost";
$username="root";
$password="";
$database_name="db";
$conn=mysqli_connect($servername,$username,$password,$database_name);
session_start();
if(isset($_POST['save'])){
    $username=$_POST['username'];
    $pass=$_POST['password'];
    $sql = "SELECT id FROM admin WHERE username = '$username' and password = '$pass'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  
    
    $count = mysqli_num_rows($result);
    
    // If result matched $myusername and $mypassword, table row must be 1 row
      
    if($count == 1) {
       $_SESSION['username'] = $username;
       
       header("location: admin.php");
    }else {
       $error = "Your Login Name or Password is invalid";
    }
}
?>