<?php
session_start(); // Bắt đầu session

// Kết nối database
$conn = mysqli_connect("localhost:3366", "root", "", "MYPHAM");
if (!$conn) {
    die("Kết nối cơ sở dữ liệu thất bại: " . mysqli_connect_error());
}

$customer_id = 1; // Giả sử người dùng đã đăng nhập
if (isset($_GET['productid'])) {
    $product_id = $_GET['productid'];

    // Xóa sản phẩm trong session
    if (isset($_SESSION['cart'][$customer_id][$product_id])) {
        unset($_SESSION['cart'][$customer_id][$product_id]);
    }

    // Xóa sản phẩm trong database
    $delete_query = "DELETE FROM CART WHERE customer_id = '$customer_id' AND product_id = '$product_id'";
    mysqli_query($conn, $delete_query);
}

// Quay lại trang giỏ hàng
header("Location: index.php");
exit();
?>
