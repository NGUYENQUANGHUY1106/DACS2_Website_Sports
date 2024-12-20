<?php
session_start(); // Bắt đầu session

if (isset($_COOKIE['customer_id'])) {
    // Hủy cookie 'customer_id' và 'customer_name'
    setcookie('customer_id', '', time() - 3600, '/');
    setcookie('customer_name', '', time() - 3600, '/');
}


// Điều hướng về trang đăng nhập hoặc trang chính
header("Location: index.php");
exit();

?>

