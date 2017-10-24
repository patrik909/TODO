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
            require 'parts/fetchall.php';
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
                
                <form class="what_todo" action="parts/form.php" method="post">
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
                            require 'parts/dones.php';
                            
                        }
                    ?>
                    
                </div>

                </div>
                
                <div class="right_col">
                   
                    <?php

                        foreach($todolist as $todos){
                            require 'parts/todos.php';
                        }

                    ?>

                </div>
            
            </main>
            
            <?php 
            
                require 'parts/footer.php';