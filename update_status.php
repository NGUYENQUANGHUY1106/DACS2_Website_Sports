<?php
$conn = mysqli_connect("localhost:3366", "root", "", "MYPHAM");
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}
$order_id = $_POST['order_id'];
$status = $_POST['trangthai'];

if (!empty($order_id) && !empty($status)) {
    $sql = "UPDATE orders SET status = ? WHERE order_id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "si", $status, $order_id);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: admin.php"); // Quay lại trang quản lý
    } else {
        echo "Lỗi cập nhật trạng thái: " . mysqli_error($conn);
    }
    mysqli_stmt_close($stmt);
} else {
    echo "Dữ liệu không hợp lệ!";
}
mysqli_close($conn);
?>
