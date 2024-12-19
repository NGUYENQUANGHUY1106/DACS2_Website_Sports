<?php
session_start(); // Bắt đầu session

// Kết nối database
$conn = mysqli_connect("localhost:3366", "root", "", "MYPHAM");
if (!$conn) {
    die("Kết nối cơ sở dữ liệu thất bại: " . mysqli_connect_error());
}

// Kiểm tra xem người dùng đã đăng nhập chưa
if (!isset($_SESSION['customer_id'])) {
    die("Bạn cần đăng nhập để thực hiện thao tác này."); // Kiểm tra session khách hàng
}
$customer_id = $_SESSION['customer_id']; // Lấy ID khách hàng từ session

// Kiểm tra tham số product_id từ URL
if (isset($_GET['productid'])) {
    $product_id = mysqli_real_escape_string($conn, $_GET['productid']); // Bảo vệ dữ liệu

    // Xóa sản phẩm trong session
    if (isset($_SESSION['cart'][$customer_id][$product_id])) {
        unset($_SESSION['cart'][$customer_id][$product_id]); // Xóa khỏi session
    }

    // Xóa sản phẩm trong cơ sở dữ liệu
    $delete_query = "DELETE FROM CART WHERE customer_id = '$customer_id' AND product_id = '$product_id'";
    if (mysqli_query($conn, $delete_query)) {
        // Nếu xóa thành công
        echo "Sản phẩm đã được xóa khỏi cơ sở dữ liệu.";
    } else {
        // Nếu có lỗi xảy ra
        echo "Lỗi khi xóa sản phẩm: " . mysqli_error($conn);
    }
} else {
    die("Không tìm thấy sản phẩm cần xóa."); // Kiểm tra nếu không có product_id
}

// Quay lại trang giỏ hàng hoặc trang chính
header("Location: index.php");
exit();
?>
