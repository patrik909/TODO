<?php

$message = urlencode("REMOVED");

header("Location: http://localhost:8888/uppgift2/?message=".$message);

require 'fetchall.php';


    
    $statement = $pdo–>prepare("DELETE FROM todos WHERE id = :id");

    $statement->execute(array(":id" => $_POST["id"]));




