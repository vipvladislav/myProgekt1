<?php
require_once '../connect/connect.php';

$id = $_POST['id'];
$body = $_POST['body'];
mysqli_query($connect, "INSERT INTO `comments` (`id`, `product_id`, `body`) VALUES (NULL, '$id', '$body')");

header('location: /look_product.php?id=' . $id);
