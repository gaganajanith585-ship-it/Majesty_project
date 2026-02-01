<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Majesty | Cart</title>
        
    <link rel="stylesheet" href="cart.css">
</head>

<body>

  <!--navigation bar-->
    <header class="navbar">
        <a href="home.html"><img src="img/majesty(1).png" alt="logo" width="120" height="40"></a>
    </header>

    <div class="page_layout">
     
    <div class="cart_sidebar">
        <ul>
            <li><a href="home.html#shop_now"> Add more items</a> </li>
            <li><a href="logout.php">Logout </a> </li>
            <li><a href="reset_cart.php">Reset Cart</a></li>
            <li class="checkout_btn"><a href="reset_cart.php">CHECK OUT</a></li>
        </ul>
    </div>

<div class="cart_main">


<?php
    if(empty($_SESSION['cart'])):
?>
    <center>
    <h1>Cart is empty !!!</h1>
    <br><br><br><br><br>
    <a href="home.html#shop_now"><button class="shop-btn">Shop Now</button></a>
    </center>
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
        <td align="right">LKR  <?= $item['price'] ?></td>
        <td align="center"><?= $item['qty'] ?></td>
        <td align="right">LKR  <?= $total ?></td>
    </tr>

    <?php endforeach; ?>

    <tr>
        <td colspan="3" align="center"><b>Grand Total</b></td>
        <td align="right"><b>LKR  <?= $grand ?></b></td>
    </tr>

</table>

<?php endif; ?>

</div>

</div>


    
</div>

  <!-- Footer -->

    <footer class="footer">
        <div class="footer-column">
            <!--slogun-->
            <p class="slogun">match your vibe, your grind, your identity.
                <br><br>Wear your power.
                <br>Wear MAJESTY.
            </p>

            <!--social media links-->
            <img src="img/insta.png" alt="instergram" height="30px" width="30px">
            <img src="img/fb.png" alt="facebook" height="30px" width="30px">
            <img src="img/x.png" alt="x" height="30px" width="30px">
        </div>

        <div class="footer-column">
            <ul>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="refund_policy.html">Refund Policy</a></li>
            </ul>
            <br>
            <pre>&copy; 2026 | Majesty | All Rights Reserved |</pre>
        </div>
    </footer>   
</body>
</html>