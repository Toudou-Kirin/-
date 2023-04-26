<?php

require_once 'config/conect.php';



// CRUD

// C - Create
// R - Read +
// U - Update
// D - Delete

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
        color: #000102;
    }

    th {
        background: #8bc2f1;
    }

    td {
        background: #2bf32d;
    }
</style>
<body>
    <table>
        <tr>
            <th>Номер</th>
            <th>Название</th>
            <th>Описание</th>
            <th>Цена</th>
        </tr>

        <?php
            $products = mysqli_query($connect, "SELECT * FROM `products`");
            $products = mysqli_fetch_all($products);
            foreach ($products as $product) {
                ?>

                <tr>
                    <td><?= $product[0] ?></td>
                    <td><?= $product[1] ?></td>
                    <td><?= $product[3] ?></td>
                    <td><?= $product[2] ?>руб</td>
                    <td><a href="update.php?id=<?= $product[0] ?>">Изменить</a> </td>
                    <td><a style="color: red; " href="vender/delete.php?id=<?= $product[0] ?>">Удалить</a> </td>
                </tr>

                <?php

            }
        ?>
    </table>
    <h3>Добавить новый продукт</h3>
    <form action="vender/create.php" method="post">
        <p>Название</p>
        <input type="text" name="title">
        <p>Описание</p>
        <textarea name="description"> </textarea>
        <p>Цена</p>
        <input type="number" name="price"> <br> <br>
        <button type="submit">Добавить новый продукт</button>
    </form>
</body>
</html>
