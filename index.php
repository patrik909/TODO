<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TODO</title>
    <link rel="stylesheet" href="style.css">
            <script src="https://use.fontawesome.com/67b80e2b65.js"></script>

</head>
<body>
   
   <?php 
       require 'fetchall.php';
   ?>
   
   <div class="wrapper">
   
   <header>
       <div class="info">
          <heading>
           <h2>CREATE NEW TODO</h2>
           </heading>
           <heading>
           <h2>YOUR TODOS</h2>
           </heading>
       </div>
   </header>
   
      <?php
       
       if(isset($_GET['message'])){
            echo '<h3>' . $_GET['message'] . '</h3>';
        }
       
       ?>
   
   <main>

   
   <div class="left_col">
   
   
   <form class="what_todo" action="form.php" method="post">
       
       <textarea name="your_todo" placeholder="WHAT TO DO"></textarea>
       <div class="what_todo_lower">
       <input class="name" type="text" name="your_name" placeholder="NAME">
           <button class="skicka" type="submit">SUBMIT</button>
       </div>
       
   </form>
   

    
    <div class="your_dones">
    <h3>YOUR DONES</h3>
    
    <?php
       
        foreach($donelist as $dones){
            echo '<div class="dones">' . '<div class="upper_todo">' . '<p class="topic">' . $dones["createdBy"] . ' is done with:' .'</p>' . '<form action="delete.php" method="get"><button class="buttons" type="submit" value="your_delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button><input type="hidden" value="' . $dones["id"] . '" name="id"></form>' . '</div>' . '<div class="content">' . $dones["title"] . '</div>' . '</div>' . '<div class="underline">' . '</div>';
        }
    
    
    
    
   ?>
   </div>
   
   </div>
    
    <div class="right_col">
    

    
   <?php
   
        foreach($todolist as $todos){
            
                
            echo '<div class="todos">' . '<div class="upper_todo">' . '<p class="topic">' . 'TODO for ' . $todos["createdBy"] . '</p>' . '<div class="check"><form action="check.php" method="get"><button class="buttons" type="submit" value="your_check"><i class="fa fa-check" aria-hidden="true"></i></button><input type="hidden" value="' . $todos["id"] . '" name="id"></form><form action="delete.php" method="get"><button class="buttons" type="submit" value="your_delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button></div>' . '</div>' . '<div class="content">' . $todos["title"] . '</div>' . '<input type="hidden" value="' . $todos["id"] . '" name="id"></form>' . '</div>' . '<div class="underline">' . '</div>';
        }
        
        
    ?>
    

   </div>
    
    </main>
    
    </div>
    
</body>
</html>