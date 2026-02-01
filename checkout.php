<?php
session_start();
include "db.php";

if(!isset($_SESSION['user_id']))
    {
        header("location: login.logic.php");
        exit();
    }

    $user_id = $_SESSION['user_id'];

    $sql = "SELECT name, email, address, mobile FROM users WHERE id = '$user_id'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);
    
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Majesty | Checkout</title>

    <link rel="stylesheet" href="checkout.css">
</head>
<body>

<!--navigation bar-->
    <header class="navbar">
        <a href="home.html"><img src="img/majesty(1).png" alt="logo" width="120" height="40"></a>
    </header>


<main class="content">

    <h1><center> Billing Details </center></h1>

<form action="place_order.php" method="post" class="login-form">

    <label>Name</label>
    <input type="text" name="name" value="<?= $user['name']; ?>" required>

    <label>Email</label>
    <input type="email" name="email" value="<?= $user['email']; ?>" readonly>

    <label>Address</label>
    <input type="address" name="address" value="<?= $user['address']; ?>" readonly>

    <label>Mobile</label>
    <input type="text" name="mobile" value="<?= $user['mobile']; ?>" required>

    <button type="submit">Place Order</button>
</form>

</main>

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