<?php


    $message = urlencode("YOU HAVE COMPLETED A TODO!");

    header("Location: http://localhost:8888/uppgift2/?message=".$message);

    require 'fetchall.php';

        $statement = $todo->prepare("UPDATE TODO SET completed = '1' WHERE id = :id");

        $statement->execute(array(":id" => $_GET["id"]));
