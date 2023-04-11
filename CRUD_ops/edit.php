<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
     $id=$_GET['id'];
     $title=$_GET['title'];
     $rating=$_GET['rating'];
     $remarks=$_GET['description'];

     $sql="update movies SET id=$id , title='$title', `desc`='$remarks', rating=$rating where id=$id;";
    $res= $conn->query($sql);

    if($res===TRUE){
        echo "Updated Sucessfully";
        header("Location:movies.php");
    }

    }

 $conn->close();
 ?>
</body>
</html>