<?php
// Kết nối cơ sở dữ liệu
$conn = mysqli_connect("localhost:3366", "root", "", "MYPHAM");

if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}

// Nhận order_id từ form
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['order_id'])) {
    $order_id = intval($_POST['order_id']); // Ép kiểu để tránh lỗi bảo mật

    // Thực hiện truy vấn xóa
    $sql = "DELETE FROM orders WHERE order_id = $order_id";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
                alert('Xóa đơn hàng thành công!');
                window.location.href = 'donhang.php';
              </script>";
    } else {
        echo "<script>
                alert('Xóa đơn hàng thất bại. Vui lòng thử lại!');
                window.location.href = 'donhang.php';
              </script>";
    }
}

// Đóng kết nối
mysqli_close($conn);
?>
