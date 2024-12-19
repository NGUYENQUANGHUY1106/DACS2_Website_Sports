<?php
$servername = "localhost:3366";    // Tên server (thường là localhost trên XAMPP)
$username = "root";           // Tên người dùng (mặc định trên XAMPP là root)
$password = "";               // Mật khẩu (mặc định trên XAMPP là rỗng)
$database = "MYPHAM";   // Thay "ten_database" bằng tên database bạn đang sử dụng

// Tạo kết nối
$conn = mysqli_connect($servername, $username, $password, $database);

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}
?>
