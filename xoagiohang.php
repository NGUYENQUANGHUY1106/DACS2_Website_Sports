<?php
session_start();
$product_id = $_GET['productid'];
$customer_id = $_SESSION['customer_id'];

// Kiểm tra nếu sản phẩm tồn tại trong giỏ hàng
if (isset($_SESSION['cart'][$customer_id][$product_id])) {
    unset($_SESSION['cart'][$customer_id][$product_id]); // Xóa sản phẩm khỏi giỏ hàng
}

// Quay lại giỏ hàng
header('Location: giohang.php');
exit;
?>
