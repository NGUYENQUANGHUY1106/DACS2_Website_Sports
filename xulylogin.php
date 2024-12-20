<?php
session_start();
ob_start();

$conn = mysqli_connect("localhost:3366", "root", "", "MYPHAM");
if (!$conn) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['inputuser'];
    $password = $_POST['inputpass'];

    // Bảo mật trước SQL Injection sử dụng Prepared Statements
    $sql = "SELECT id ,tenKH FROM users WHERE email = ? AND pass = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'ss', $user, $password);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    // Kiểm tra xem có kết quả trả về từ truy vấn hay không
    if (mysqli_stmt_num_rows($stmt) > 0) {
        mysqli_stmt_bind_result($stmt, $customer_id, $customer_name);
        mysqli_stmt_fetch($stmt);

        // Lưu thông tin khách hàng vào session
        $_SESSION['customer_id'] = $customer_id;
        $_SESSION['customer_name'] = $customer_name;

        // Lưu thông tin khách hàng vào cookie (nếu cần)
        setcookie('customer_id', $customer_id, time() + 3600 * 24, '/');
        setcookie('customer_name', $customer_name, time() + 3600 * 24, '/');

        // Chuyển hướng về trang trước đó hoặc trang chính
        header('Location: ' . ($_SERVER['HTTP_REFERER'] ?? 'index.php'));
        exit();
    } else {
        // Nếu đăng nhập không thành công
        header('Location: error.html');
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}

ob_end_flush();
?>
