<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1</title>
    <link rel="stylesheet" href="this.css">
</head>

<body>
    <header>
        <h2 class="logo">Use of Variable</h2>
    </header>

    <div class="sidebar">
        <a href="P1.php"><i class="fas fa-address-card"></i><span>&nbsp;&nbsp;Curriculum Vitae</span></a>
        <a href="P2.php"><i class="fa-solid fa-square-root-variable"></i><span>&nbsp;&nbsp;The Use of
                Variables</span></a>
        <a href="P3.php"><i class="fa-solid fa-list-ol"></i><span>&nbsp;&nbsp;Manipulating Numbers</span></a>


    </div>
    <div class="cart">
        <h1>Item ID and Attributes</h1>
        <table border="1" class="table">
            <tr>
                <th>Item ID</th>
                <th>Description</th>
                <th>Price</th>
                <th>Category</th>
            </tr>
            <?php

            $item_id_1 = 101;
            $item_id_2 = 102;
            $item_id_3 = 103;
            $item_id_4 = 104;
            $item_id_5 = 105;

            $item_price_1 = 350.99;
            $item_price_2 = 899.19;
            $item_price_3 = 2500.49;
            $item_price_4 = 150.99;
            $item_price_5 = 350.00;

            $item_description_1 = "Wireless Mouse";
            $item_description_2 = "Mechanical Keyboard";
            $item_description_3 = "HD Monitor";
            $item_description_4 = "USB-C Hub";
            $item_description_5 = "Laptop Stand";


            $item_category_1 = 'Electronics';
            $item_category_2 = 'Electronics';
            $item_category_3 = 'Electronics';
            $item_category_4 = 'Electronics';
            $item_category_5 = 'Electronics';

            // Displaying all values in table rows
            for ($i = 1; $i <= 5; $i++) {
                echo "<tr>
                    <td>{$GLOBALS['item_id_' . $i]}</td>
                    <td>{$GLOBALS['item_description_' . $i]}</td>
                    <td>₱{$GLOBALS['item_price_' . $i]}</td>
                    <td>{$GLOBALS['item_category_' . $i]}</td>
                  </tr>";
            }
            ?>
        </table>
    </div>
</body>

</html>