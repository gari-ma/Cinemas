<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Create Page</title>
</head>
<body>
<?php
$servername="localhost";
$username="root";
$password="";
$database="cinemas";


$conn= new mysqli($servername,$username,$password,$database);
if($conn->connect_error){
    die("connection failed");
}
 else{
     $title=$_GET['title'];
     $rating=$_GET['rating'];
     $desc=$_GET['description'];

     $sql="INSERT INTO movies (id,title,`desc`,rating) VALUES (null,'$title', '$desc', $rating)";
    $res= $conn->query($sql);

    if($res===TRUE){
        echo "Added Sucessfully";
        header("Location:movies.php");
    }

    }

 $conn->close();
 ?>

 </body>
 
</html>