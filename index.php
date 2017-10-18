<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TO DO</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
   
   <?php 
    
   require 'fetchall.php';
    
   ?>
   
   <main>
   
   <form action="form.php" method="post">
       
       <textarea rows="4" name="your_todo" placeholder="TO DO"></textarea>
       <textarea name="your_name" placeholder="NAME"></textarea>
       <input class="Skicka" type="submit">
       
   </form>
    
    <div class="form_wrapper">
    
    <div class="your_todos">
    
       <?php
        
    if(isset($_GET['message'])){
    echo $_GET['message'];
		}
        
        ?>
   
    <h2>YOUR TODOS</h2>
    
   <?php
   
        foreach($todolist as $todos){
            echo '<div class="todos">' . $todos["title"] . '    -    ' . $todos["createdBy"] . '<form action="check.php" method="get"><button type="submit" value="your_check">Check</button><button type="submit" value="your_delete">Delete</button></form>' . '<input type="hidden" value=' .$todos["id"] . 'name="acivitiyId">' . '</div>' . var_dump($todos["id"]);
        }
        
        
    ?>
        </div>
    
    <div class="your_dones">
    <h2>YOUR DONES</h2>
    
    <?php
       
        foreach($donelist as $dones){
            echo '<div class="dones">' . $dones["title"] . '    -    ' . $dones["createdBy"] . '      ----   SNYGGT JOBBAT!!' . '</div>' . '<br />';
        }
    
    
    
    
   ?>
   </div>
   </div>
    
    </main>
    
</body>
</html>