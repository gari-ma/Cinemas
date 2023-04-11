<?php
$servername="localhost";
$username="root";
$password="";
$database="cinemas";


$conn= new mysqli($servername,$username,$password,$database);
if($conn->connect_error){
    die("connection failed");
}
 
$title = $_GET['title'];
$rating = $_GET['rating'];
$desc = $_GET['description'];

$sql="INSERT INTO movies (id, title, `desc`, rating) VALUES(NULL, '$title', '$desc',$rating)";

$result=$conn->query($sql);

    if($result===TRUE){
        header("Location: movies.php");
    }
    else{
        echo "cannot add";
    }

 $conn->close();

