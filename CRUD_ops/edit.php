<?php
$servername="localhost";
$username="root";
$password="";
$database="cinemas";


$conn= new mysqli($servername,$username,$password,$database);
if($conn->connect_error){
    die("connection failed");
}

$id = $_GET['id'];
$title = $_GET['title'];
$rating = $_GET['rating'];
$desc = $_GET['description'];

$sql="UPDATE  movies SET  title='$title',desc=`$desc`, rating=$rating WHERE id=$id";

$result=$conn->query($sql);

    if($result===TRUE){
        header("Location: movies.php");
    }
    else{
        echo "cannot add";
    }

 $conn->close();

