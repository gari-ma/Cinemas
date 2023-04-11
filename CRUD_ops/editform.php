<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script>   -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
    

<form action="create.php" class="">
<input type="number" value="<?php echo $_GET['id'];?>" hidden>

 <label for="title"> Title </label>
 <input type="text" name="title" value="<?php echo $_GET['title'];?>" placeholder="Enter the title" required>

 <label for="rating"> Rating </label>
 <input type="number" name="rating" value="<?php echo $_GET['rating'];?>" placeholder="" max="5" min="1" required>

 <label for="description"> Description </label>
 <textarea name="description"> <?php echo $_GET['desc'];?> </textarea>


 <button  class="" type="submit"> Edit</button>
</form>
</body>
</html>