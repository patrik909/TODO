<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TO DO</title>
</head>
<body>
   
   <?php 
    
   require 'fetchall.php';
    
   ?>
   
   <form action="form.php" method="post">
       
       <input type="text" name="your_todo">
       <input type="text" name="your_name">
       <input type="submit">
       
   </form>
    
   <?php
   
        foreach($todolist as $todos){
            echo $todos["title"] . '    -    ' . $todos["createdBy"] . '    ' . '<form action="form.php" method="post">
        <button type="submit" value="check">Check</button>
        <button type="submit" value="delete">Delete</button>
    </form>' . '<br />';
        }
    
    
   ?>
    
    
</body>
</html>