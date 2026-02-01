<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
        
    <link rel="stylesheet" href="cart.css">
</head>

<body>

    <div class="cart_sidebar">
        <ul>
            <li><a href="home.html"> Add more items</a> </li>
            <li><a href="logout.php">Logout </a> </li>
        </ul>
    </div>

<div class="cart_main">
    
<h2>Your cart</h2>

<?php
    if(empty($_SESSION['cart'])):
?>
    <p>Cart is empty</p>

<?php 
    else: 
?>


<table border="1" cellpadding="10">

    <tr>
        <th>Item</th>
        <th>Price</th>
        <th>Qty</th>
        <th>Total</th>
    </tr>

    <?php 
        $grand = 0;
        foreach ($_SESSION['cart'] as $item):
        $total = $item['price']*$item['qty'];
        $grand += $total;
    ?>

    <tr>
        <td><?= $item['name'] ?></td>
        <td>LKR <?= $item['price'] ?></td>
        <td><?= $item['qty'] ?></td>
        <td>LKR <?= $total ?></td>
    </tr>

    <?php endforeach; ?>

    <tr>
        <td colspan="3"><b>Grand Total</b></td>
        <td><b>LKR <?= $grand ?></b></td>
    </tr>

</table>

<?php endif; ?>

</div>

<br>

<a href="reset_cart.php">Reset Cart</a>


    
</div>

</body>
</html>