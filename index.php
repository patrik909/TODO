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
   
   <header>
       <div class="banner"></div>
       <div class="info">
          <heading>
           <h2>Create new TODO</h2>
           </heading>
       </div>
   </header>
   
   <main>
   
   <form class="what_todo" action="form.php" method="post">
       
       <textarea name="your_todo" placeholder="TO DO"></textarea>
       <div class="what_todo_lower">
       <input type="text" name="your_name" placeholder="NAME">
           <button class="Skicka" type="submit">SUBMIT</button>
       </div>
       
   </form>
    
    <div class="form_wrapper">
    
    <div class="your_todos">
    
       
   
    <h2>YOUR TODOS</h2>
    
   <?php
   
        foreach($todolist as $todos){
            echo '<div class="todos">' . $todos["title"] . '    -    ' . $todos["createdBy"] . '<form action="check.php" method="get"><button type="submit" value="your_check">Check</button><button type="submit" value="your_delete">Delete</button></form>' . '<input type="hidden" value="' . $todos["id"] . '"' . ' name="id">' . '</div>' . var_dump($todos["id"]);
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