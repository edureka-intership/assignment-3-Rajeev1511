<?php
session_start();
//session_destroy();

$product_image = $_POST['subitemimage'];
$product_name = $_POST['subitemname'];
$product_quantity = $_POST['quantity'];
$product_price = $_POST['subitemprice'];




if (isset($_POST['addCart'])) {

    $check_product = array_column($_SESSION['cart'], 'productName');



    if (in_array($product_name, $check_product)) {
        echo "
<script>
alert ('product already added');
window.location.href = 'index.php';
</script>
";
    } else {

        $key = $_POST['subitemid'];
        $_SESSION['cart'][$key] = array(
            //'subitam' => $_POST['subitemid'],
            'productImage' => $product_image,
            'productName' => $product_name,
            'productQuantity' => $product_quantity,
            'productPrice' => $product_price
        );
        //   print_r($_SESSION['cart']);

        //var_dump($_SESSION['cart']);
        //exit;
        header("location : cartitems.php");
    }
}
if (isset($_POST['remove'])) {
    foreach ($_SESSION['cart'] as $key => $value) {
        if ($value['productName'] === $_POST['item']) {
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart'] = array_values($_SESSION['cart']);
            header('location : cartitems.php');
        }
    }
}
if (isset($_POST['update'])) {
    foreach ($_SESSION['cart'] as $key => $value) {
        if ($value['productName'] === $_POST['item']) {
            $_SESSION['cart'][$key] = array( //'productImage' => $product_image,
                'productName' => $product_name,
                'productQuantity' => $product_quantity,
                'productPrice' => $product_price
            );
            header('location : cartitems.php');
        }
    }
}
