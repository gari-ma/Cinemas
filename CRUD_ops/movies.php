<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Movies</title>
    <script src="https://cdn.tailwindcss.com"></script>  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body>
        <div class="add ">
            <a href="addform.php"> Add New</a>
        </div>
<?php
$servername="localhost";
$username="root";
$password="";
$database="cinemas";

$conn= new mysqli($servername,$username,$password,$database);
if($conn->connect_error){
    die("connection failed");
}
 $sql = "SELECT * FROM movies";
 
 $result=$conn->query($sql);

 if($result->num_rows>0){

   while( $row= $result->fetch_assoc()){
    ?>
    
       
        <div class="body bg-cyan-100 m-10 flex flex-col text-center">

            <div class="attach flex  font-extrabold bg-sky-600 text-white border-2 border-sky-600 rounded-full">

                <div class="title m-2 w-full ">
                    <?php echo $row['id'];?>
                    <?php echo $row['title'];?>
                    <div class="edit flex justify-end">
                      <a href="editform.php?id=<?php echo $row['id'];?>&rating=<?php echo $row['rating'];?>&title=<?php echo $row['title'];?>&desc=<?php echo $row['desc'];?>"> 
                      <i class="fa fa-edit "></i>
                      </a>
                      <a href="delete.php?id=<?php echo $row['id']?>">
                        <i class="fa fa-trash"></i>
                     </a>

                       
                    </div>
                 </div>
            </div>

            <div class="desc  border-2 border-white rounded m-2">
            <?php echo $row['desc'];?>
            </div>

            <div class="rate">

            
<?php 
if($row["rating"] == "4") {
        ?>
        
        <div class="flex justify-center items-center gap-2 p-2 bg-white rounded-md shadow-lg">

  <span class="text-yellow-500 text-2xl">&#9733;</span>
  <span class="text-yellow-500 text-2xl">&#9733;</span>
  <span class="text-yellow-500 text-2xl">&#9733;</span>
  <span class="text-yellow-500 text-2xl">&#9733;</span>
  <span class="text-grey-200 text-2xl">&#9733;</span>
</div>

        
        <?php
} else {
?>
        <div class="flex justify-center items-center gap-2 p-2 bg-white rounded-md shadow-lg">

<span class="text-yellow-500 text-2xl">&#9733;</span>
<span class="text-yellow-500 text-2xl">&#9733;</span>
<span class="text-yellow-500 text-2xl">&#9733;</span>
<span class="text-yellow-500 text-2xl">&#9733;</span>
<span class="text-yellow-400 text-2xl">&#9733;</span>
</div>

<?php

}

?>

            </div>
            </div>
            
            
        </div>
        
  
        <?php
 }
}
 else{
    echo "no not added any datas";
}
 $conn->close();
?>

</body>
    </html>