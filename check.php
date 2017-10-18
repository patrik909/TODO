<?php

$message = urlencode("REMOVED");
header("Location: http://localhost:8888/uppgift2/?message=".$message);

require 'fetchall.php';


    
    $statement = $todo->prepare(
        "DELETE FROM `TODO` WHERE `TODO`.`id` = (:check)"
    );

    $statement->execute(array(
        ":check" => $_GET["acivitiyId"]
    ));

