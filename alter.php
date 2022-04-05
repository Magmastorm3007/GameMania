<?php
$servername="localhost";
$username="root";
$password="";
$database_name="db";
$conn=mysqli_connect($servername,$username,$password,$database_name);

$imagename=$_FILES["myimage"]["name"]; 
$title=$_POST['title'];
$year=$_POST['year'];
$desc=$_POST['description'];


//Get the content of the image and then add slashes to it 
$imagetmp=addslashes (file_get_contents($_FILES['myimage']['tmp_name']));
$target = "image/".basename($imagename);
$insert="UPDATE details set  imgname ='$imagename',year ='$year', description='$desc' WHERE name='$title' ";
if(mysqli_query($conn,$insert)){
    header("location: admin.php");
}
if (move_uploaded_file($_FILES['myimage']['tmp_name'], $target)) {
    $msg = "Image uploaded successfully";
}else{
    $msg = "Failed to upload image";
}
//$insert="UPDATE details (imgname,year,description) VALUES('$imagename','$year','$desc') WHERE name='$title' ";
?>

