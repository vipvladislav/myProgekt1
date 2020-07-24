<?php
require_once 'connect/connect.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Products</title>
</head>
<style>
    th, td {
        padding: 10px;
    }
    th {
        background-color: grey;
        color: white;
    }
    td {
        background-color: antiquewhite;
    }
</style>
<body>
<table>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Price</th>
    </tr>

    <?php
    $products = mysqli_query($connect, "SELECT * FROM `products`");
    $products = mysqli_fetch_all($products);
    //    var_dump($products);
    //    print_r($products);
    foreach ($products as $product) {
        ?>
        <tr>
            <td><?= $product[0] ?></td>
            <td><?= $product[1] ?></td>
            <td><?= $product[3] ?></td>
            <td><?= $product[2] ?></td>
            <td><a href="look_product.php?id=<?= $product[0] ?>">View</a></td>
            <td><a href="update.php?id=<?= $product[0] ?>">Update</a> </td>
            <td><a style="color: red" href="product/delete.php?id=<?= $product[0] ?>"">Delete</a> </td>
        </tr>
    <?php
    }
    ?>

</table>
<h3>Add new product</h3>
<form action="product/create.php" method="post">
    <p>Title</p>
    <input type="text" name="title">
    <p>Description</p>
    <textarea name="description"></textarea>
    <p>Price</p>
    <input type="number" name="price"> <br> <br>
    <button type="submit">Add new product</button>

</form>

</body>
</html>
