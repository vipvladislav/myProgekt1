<?php
require_once '../connect/connect.php';

$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];

mysqli_query($connect, "UPDATE `products` SET `title` = '$title', `price` = '$price', `description` = '$description' WHERE `products`.`id` = '$id'");

header('location: /product.php');