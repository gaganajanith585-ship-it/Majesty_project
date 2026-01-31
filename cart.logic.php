<?php
session_start();
?>

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
        <td>$<?= $item['price'] ?></td>
        <td><?= $item['qty'] ?></td>
        <td>$<?= $total ?></td>
    </tr>

    <?php endforeach; ?>

    <tr>
        <td colspan="3"><b>Grand Total</b></td>
        <td><b>$<?= $grand ?></b></td>
    </tr>

</table>

<?php endif; ?>

<br>

<a href="home.html"> Add more items</a>