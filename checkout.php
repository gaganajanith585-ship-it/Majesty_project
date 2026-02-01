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

<script>
function orderSuccess() 
    {
        alert("Order placed successfully! \n\nPress OK to go to the main site.");
        window.location.href = "home.html";
        return false;
    }
</script>

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

<main class="checkout-container">

    <!-- LEFT: Billing details -->


    <section class="checkout-left">

        <h2> Billing Details </h2>

        <form action="place_order.php" method="post" class="login-form">

            <label>Name</label>
            <input type="text" name="name" value="<?= $user['name']; ?>" required>

            <label>Email</label>
            <input type="email" name="email" value="<?= $user['email']; ?>" readonly>

            <label>Address</label>
            <input type="address" name="address" value="<?= $user['address']; ?>" readonly>

            <label>Mobile</label>
            <input type="text" name="mobile" value="<?= $user['mobile']; ?>" required>

            
        </form>

    </section>

    <!-- RIGHT: Payment -->
    <section class="checkout-right">
        <h2>Card Payment</h2>

        <form class="payment-form">

            <label>Card Holder Name</label>
            <input type="text" placeholder="John Doe" required>

            <label>Card Number</label>
            <input type="text" placeholder="1234 5678 9012 3456" required>

            <div class="card-row">
                <div class="card-field">
                    <label>Expire Date</label>
                    <input type="text" placeholder="MM/YY" required>
                </div>
        
                <div class="card-field">
                    <label>CVV</label>
                    <input type="password" placeholder="***" required>
                </div>
      
            </div>
        

            <button type="submit" class="pay-btn" onclick="return orderSuccess();">Place Order</button>
        </form>
    </section>

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