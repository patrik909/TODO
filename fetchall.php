<?php     

    require 'database.php';


    $statement = $todo->prepare(
        "SELECT * FROM TODO ORDER BY id DESC"
    );

    $statement->execute();



    $todolist = $statement->fetchAll(PDO::FETCH_ASSOC);