<?php
$servername="localhost";
$username="root";
$password="";
$database="cinemas";

$id=$_GET['id'];
echo $id;

$conn= new mysqli($servername,$username,$password,$database);
if($conn->connect_error){
    die("connection failed");
}
 
$sql="DELETE FROM movies WHERE id=$id";
 $result=$conn->query($sql);

    if($result===TRUE){
        echo "deleted succesfully";
        header("Location: movies.php");
    }
    else{
        echo "cannot delete";
    }

 $conn->close();

