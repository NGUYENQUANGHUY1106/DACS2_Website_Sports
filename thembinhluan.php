<?php
$idsp = $_POST['idsp'];
$tenKH = $_POST['ten'];
$ngayBL = $_POST['date'];
$noidung = $_POST['noidung'];
$imagePath = "";

// Kết nối cơ sở dữ liệu
$conn = mysqli_connect("localhost:3366", "root", "", "MYPHAM");

if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}

// Xử lý tải ảnh nếu có
if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
    $uploadDir = "uploads/"; // Thư mục lưu trữ ảnh
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $imageName = basename($_FILES['image']['name']);
    $targetFile = $uploadDir . time() . "_" . $imageName;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Kiểm tra loại file
    $allowedTypes = ["jpg", "jpeg", "png", "gif"];
    if (in_array($imageFileType, $allowedTypes)) {
        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
            $imagePath = $targetFile; // Đường dẫn ảnh đã tải lên
        }
    } else {
        echo "Chỉ cho phép định dạng JPG, JPEG, PNG, GIF.";
        exit;
    }
}

// Lưu thông tin vào cơ sở dữ liệu
$sql = "INSERT INTO binhluan (idsp, tenKH, noidung, ngayBL, hinhanh) VALUES ('$idsp', '$tenKH', '$noidung', '$ngayBL', '$imagePath')";
if (mysqli_query($conn, $sql)) {
    echo "Đánh giá đã được thêm thành công!";
} else {
    echo "Lỗi: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
