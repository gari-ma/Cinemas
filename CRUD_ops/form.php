<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
    

<form action="create.php" class="">

 <label for="title"> Title </label>
 <input type="text" name=title placeholder="Enter the title" required>

 <label for="title"> Rating </label>
 <input type="number" name=rating placeholder="" max="5" min="1" required>

 <label for="title"> Description </label>
 <textarea name="description"> </textarea>
 <button  class=""type="submit"> Submit</button>
</form>
</body>
</html>