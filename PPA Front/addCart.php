<?php
    session_start();

    $name = $_POST['equipmentName'];
    $price = $_POST['equipmentPrice'];
    $quantity = $_POST['Quantity'];

    $product = array($name,$price,$quantity);

    $_SESSION[$name] = $product;

    header("location:viewcart.php?true=created");
?>