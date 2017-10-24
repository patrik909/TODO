<?php

    $message = urlencode("YOU HAVE DELETED A TODO!");

    header("Location: http://localhost:8888/uppgift2/?message=".$message);

    require 'fetchall.php';

    $statement = $todo->prepare("DELETE FROM `TODO` WHERE `TODO`.`id` = :id");

    $statement->execute(array(":id" => $_GET["id"]));




