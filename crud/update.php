<?php

    require_once 'config/conect.php';

    $product_id = $_GET['id'];
    $product = mysqli_query($connect, "SELECT * FROM `products` WHERE `id` = '$product_id'");
    $product = mysqli_fetch_assoc($product);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Изменить продукт</title>
</head>
<body>
    <h3>Изменить продукт</h3>
    <form action="vender/update.php" method="post">
        <input type="hidden" name="id" value="<?= $product['id'] ?>">
        <p>Название</p>
        <input type="text" name="title" value="<?= $product['title'] ?>">
        <p>Описание</p>
        <textarea name="description" ><?= $product['title'] ?></textarea>
        <p>Цена</p>
        <input type="number" name="price" value="<?= $product['price'] ?>"> <br> <br>
        <button type="submit">Изменить продукт</button>
    </form>
</body>
</html>

