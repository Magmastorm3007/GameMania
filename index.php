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
                <li class="nav-item">
                  <a class="pg" href="./login.php">Login</a>
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
              $servername="localhost";
              $username="root";
              $password="";
              $database_name="db";
              $conn=mysqli_connect($servername,$username,$password,$database_name);
                $per_page_record = 6;  // Number of entries to show in a page.   
                // Look for a GET variable page if not found default is 1.        
                if (isset($_GET["page"])) {    
                    $page  = $_GET["page"];    
                }    
                else {    
                  $page=1;    
                }    
            
                $start_from = ($page-1) * $per_page_record;     
            
                $query = "SELECT * FROM details LIMIT $start_from, $per_page_record";     
                $rs_result = mysqli_query ($conn, $query);    
      if(is_array($fetchData)){      
      $sn=1;
      while ($data = mysqli_fetch_array($rs_result)){
    ?>
              <div class="col-4">
                <div class="card">
                    <img class="card-img" src="image/<?php echo $data['imgname'] ?>" height="240">
                    <div class="card-body align-items-center d-flex justify-content-center">
                      <h3>  <?php echo $data['name']??''; ?></h3>
                      </div>
                    <p class="card-text"> Check out the reviews from our users</p>
                    <a href="/WebTechProject/details.php?id=<?php  echo $data['id']?>" class="btn btn-success">View Details</a>
              </div>
              </div>
              <?php
      $sn++;}} ?>
              
            
            </div>
          </div>
          <div class="container d-flex align-items-center justify-content-center">
          <div class="pagination" >    
      <?php  
        $query = "SELECT count(*) FROM details";     
        $rs_result = mysqli_query($conn, $query);     
        $row = mysqli_fetch_row($rs_result);     
        $total_records = $row[0];     
          
    echo "</br>";     
        // Number of pages required.   
        $total_pages = ceil($total_records / $per_page_record);     
        $pagLink = "";       
      
        if($page>=2){   
            echo "<a href='index.php?page=".($page-1)."'>  Prev </a>";   
        }       
                   
        for ($i=1; $i<=$total_pages; $i++) {   
          if ($i == $page) {   
              $pagLink .= "<a class = 'active' href='index.php?page="  
                                                .$i."'>".$i." </a>";   
          }               
          else  {   
              $pagLink .= "<a href='index.php?page=".$i."'>   
                                                ".$i." </a>";     
          }   
        };     
        echo $pagLink;   
  
        if($page<$total_pages){   
            echo "<a href='index.php?page=".($page+1)."'>  Next </a>";   
        }   
  
      ?>    
      </div>  
  
    
    </div>   
  </div>  
      </div> 
      
      <div class="inline">   
      <input id="page" type="number" min="1" max="<?php echo $total_pages?>"   
      placeholder="<?php echo $page."/".$total_pages; ?>" required>   
      <button onClick="go2Page();">Go</button>   
     </div>   
  <script>   
    function go2Page()   
    {   
        var page = document.getElementById("page").value;   
        page = ((page><?php echo $total_pages; ?>)?<?php echo $total_pages; ?>:((page<1)?1:page));   
        window.location.href = 'index1.php?page='+page;   
    }   
  </script>  
    </body>
</html>
<style>   
    table {  
        border-collapse: collapse;  
    }  
        .inline{   
            display: inline-block;   
            float: right;   
            margin: 20px 0px;   
        }   
         
        input, button{   
            height: 34px;   
        }   
  
    .pagination {   
        display: inline-block;   
    }   
    .pagination a {   
        font-weight:bold;   
        font-size:18px;   
        color: black;   
        float: left;   
        padding: 8px 16px;   
        text-decoration: none;   
        border:1px solid black;   
    }   
    .pagination a.active {   
            background-color: pink;   
    }   
    .pagination a:hover:not(.active) {   
        background-color: skyblue;   
    }   
        </style>   