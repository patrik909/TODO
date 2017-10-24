<?php     

    require 'database.php';


    $statement = $todo->prepare(
        "SELECT * FROM `TODO` WHERE completed = 0 ORDER BY id DESC"
    );

    $statement->execute();

    $todolist = $statement->fetchAll(PDO::FETCH_ASSOC);


    $statement = $todo->prepare(
        "SELECT * FROM `TODO` WHERE completed = 1 ORDER BY id DESC"
    );

    $statement->execute();

    $donelist = $statement->fetchAll(PDO::FETCH_ASSOC);