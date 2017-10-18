<?php

$message = urlencode("YOU HAVE A NEW TODO");
		header("Location: http://localhost:8888/uppgift2/?message=".$message);

require 'fetchall.php';

$statement = $todo->prepare(
        "INSERT INTO TODO (title, completed, createdBy) VALUES (:todo, 0, :name)"
    );

 $statement->execute(array(
        ":todo" => $_POST["your_todo"],
        ":name" => $_POST["your_name"]
    ));