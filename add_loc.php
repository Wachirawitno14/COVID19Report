<?php
include("includes/db.php");

if(isset($_POST['push'])){
    $location = $_POST['location'];
    $address = $_POST['address'];
    
    $data = [
        'location' => $location,
        'address' => $address
    ];
    $ref = "Place/";
    $pushData = $database->getReference($ref)->push($data);
    header("Location:location.php");
}
else{
    $location = $_POST['location'];
    $address = $_POST['address'];
    
    $data = [
        'location' => $location,
        'address' => $address
    ];
    $ref = "Place/";
    $pushData = $database->getReference($ref)->set($data);
}

?>