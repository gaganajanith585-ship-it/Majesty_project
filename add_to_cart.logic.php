<?php
session_start();

$id = $_POST['product_id'];
$name = $_POST['product_name'];
$price = $_POST['price'];

if(!isset($_SESSION['cart']))
    {
        $_SESSION['cart'] = [];
    }

if(isset($_SESSION['cart'][$id]))
    {
        $_SESSION['cart'][$id]['qty'] += 1;
    }

else
    {
        $_SESSION['cart'][$id] =
            [
                'name' => $name,
                'price' => $price,
                'qty' => 1
            ];
    }
?>

<script>
    if(confirm("Item added to cart ! \n\nView cart ?"))
        {
            window.location.href = "cart.logic.php";
        }

    else
        {
            window.location.href = "home.php"   
        }
</script>