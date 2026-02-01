<?php
session_start();
unset($_SESSION['cart']);
echo 
    "<script>
        alert('Cart cleared successfully!');
        window.location.href = 'cart.logic.php';
    </script>";