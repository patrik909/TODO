<?php

    $message = urlencode("YOU MADE A NEW TODO!");

    $message_wrong = urlencode("YOU HAVE FILL TODO & NAME!");

    require 'fetchall.php';

    if(!empty($_POST["your_todo"] && $_POST["your_name"])){

        header("Location: http://localhost:8888/uppgift2/?message=".$message);

        $statement = $todo->prepare(
            "INSERT INTO TODO (title, completed, createdBy) VALUES (:todo, 0, :name)"
        );

        $statement->execute(array(
            ":todo" => $_POST["your_todo"],
            ":name" => $_POST["your_name"]
        ));

    } else {

        header("Location: http://localhost:8888/uppgift2/?message=".$message_wrong);

    }
