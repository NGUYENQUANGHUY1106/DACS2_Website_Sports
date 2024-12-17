<?php
session_start();
$customer_id = $_SESSION['customer_id'];

// Kiểm tra nếu sản phẩm tồn tại trong giỏ hàng
if (isset($_SESSION['cart'][$customer_id])) {
    unset($_SESSION['cart'][$customer_id]); // Xóa sản phẩm khỏi giỏ hàng
}

// Quay lại giỏ hàng
header('Location: giohang.php');
exit;
?>
