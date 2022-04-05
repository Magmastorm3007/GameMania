<?php
$servername="localhost";
$username="root";
$password="";
$database_name="db";
$conn=mysqli_connect($servername,$username,$password,$database_name);


$title=$_POST['title'];
$delete="DELETE FROM details where name='$title' ";
//$delete="DELETE details,review_table from details inner join review_table on  review_table.review_id =details.name where details.name='$title' ";
if(mysqli_query($conn,$delete)){
  
   header("location: admin.php");
}

/*if(mysqli_query($conn,$insert)){
    header("location: admin.php");
}*/


?>