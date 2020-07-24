<?php
require_once '../connect/connect.php';

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `products` WHERE `products`.`id` = '$id'");

header('location: /product.php');
