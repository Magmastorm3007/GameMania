<?php
include("fetch.php");
?>
 

<html>
   
    <link href="../css/style.css" rel="stylesheet" type="text/css">  
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">  
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
              
              </ul>
             
            </div>
          </nav>
          <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Welcome to GameMania</h1>
    <p class="lead">Check out the reviews for the recent titles that have been reviewed this year</p>
  </div>
</div>
          <div class="container">
            <div class="row">
            <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
              <div class="col-4">
                <div class="card">
                    <img class="card-img" src="image/<?php echo $data['imgname'] ?>" height="240">
                    <div class="card-body align-items-center d-flex justify-content-center">
                      <h3>  <?php echo $data['name']??''; ?></h3>
                      </div>
                    <p class="card-text"><?php echo $data['description']??''; ?><br/> Check out the review</p>
                    <a href="#" class="btn btn-success">View Details</a>
              </div>
              </div>
              <?php
      $sn++;}} ?>
              
            
            </div>
          </div>
    </body>
</html>