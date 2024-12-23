<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link href="./assets/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="/assets/css/add__product.css">
    <title>Thêm Sản Phẩm</title>
</head>
<body>
    <div class="form-container">
        <h2 class="form-title">Thêm Sản Phẩm</h2>
        <form action="themsanpham.php" method="POST">
            <div class="form-row">
                <!-- Cột 1: 14 trường -->
                <div class="form-col">
                    <div class="form-group">
                        <label for="title">Tên sản phẩm</label>
                        <input type="text" id="title" name="title" placeholder="Tên sản phẩm">
                    </div>
                    <div class="form-group">
                        <label for="urlImg">URL hình ảnh</label>
                        <input type="text" id="urlImg" name="urlImg" placeholder="URL hình ảnh">
                    </div>
                    <div class="form-group">
                        <label for="img_sub1">Hình phụ 1</label>
                        <input type="text" id="img_sub1" name="img_sub1" placeholder="Hình phụ 1">
                    </div>
                    <div class="form-group">
                        <label for="img_sub2">Hình phụ 2</label>
                        <input type="text" id="img_sub2" name="img_sub2" placeholder="Hình phụ 2">
                    </div>
                    <div class="form-group">
                        <label for="img_sub_product1">Hình phụ sản phẩm 1</label>
                        <input type="text" id="img_sub_product1" name="img_sub_product1" placeholder="Hình phụ sản phẩm 1">
                    </div>
                    <div class="form-group">
                        <label for="sub_product2">Hình phụ sản phẩm 2</label>
                        <input type="text" id="sub_product2" name="sub_product2" placeholder="Hình phụ sản phẩm 2">
                    </div>
                    <div class="form-group">
                        <label for="sub_product3">Hình phụ sản phẩm 3</label>
                        <input type="text" id="sub_product3" name="sub_product3" placeholder="Hình phụ sản phẩm 3">
                    </div>
                    <div class="form-group">
                        <label for="sub_product4">Hình phụ sản phẩm 4</label>
                        <input type="text" id="sub_product4" name="sub_product4" placeholder="Hình phụ sản phẩm 4">
                    </div>
                    <div class="form-group">
                        <label for="sub_product5">Hình phụ sản phẩm 5</label>
                        <input type="text" id="sub_product5" name="sub_product5" placeholder="Hình phụ sản phẩm 5">
                    </div>
                    <div class="form-group">
                        <label for="sub_product6">Hình phụ sản phẩm 6</label>
                        <input type="text" id="sub_product6" name="sub_product6" placeholder="Hình phụ sản phẩm 6">
                    </div>
                    <div class="form-group">
                        <label for="sub_product7">Hình phụ sản phẩm 7</label>
                        <input type="text" id="sub_product7" name="sub_product7" placeholder="Hình phụ sản phẩm 7">
                    </div>
                    <div class="form-group">
                        <label for="sub_product8">Hình phụ sản phẩm 8</label>
                        <input type="text" id="sub_product8" name="sub_product8" placeholder="Hình phụ sản phẩm 8">
                    </div>
                    <div class="form-group">
                        <label for="sub_product9">Hình phụ sản phẩm 9</label>
                        <input type="text" id="sub_product9" name="sub_product9" placeholder="Hình phụ sản phẩm 9">
                    </div>
                </div>

                <!-- Cột 2: 13 trường -->
                <div class="form-col">
                    <div class="form-group">
                        <label for="priceOld">Giá cũ</label>
                        <input type="text" id="priceOld" name="priceOld" placeholder="Giá cũ">
                    </div>
                    <div class="form-group">
                        <label for="priceNew">Giá mới</label>
                        <input type="text" id="priceNew" name="priceNew" placeholder="Giá mới">
                    </div>
                    <div class="form-group">
                        <label for="sold">Số lượng đã bán</label>
                        <input type="text" id="sold" name="sold" placeholder="Số lượng đã bán">
                    </div>
                    <div class="form-group">
                        <label for="brand">Thương hiệu</label>
                        <input type="text" id="brand" name="brand" placeholder="Thương hiệu">
                    </div>
                    <div class="form-group">
                        <label for="nation">Quốc gia</label>
                        <input type="text" id="nation" name="nation" placeholder="Quốc gia">
                    </div>
                    <div class="form-group">
                        <label for="evaluate">Đánh giá</label>
                        <input type="text" id="evaluate" name="evaluate" placeholder="Đánh giá">
                    </div>
                    <div class="form-group">
                        <label for="discount">Mã giảm giá</label>
                        <input type="text" id="discount" name="discount" placeholder="Mã giảm giá">
                    </div>
                    <div class="form-group">
                        <label for="size">Kích cỡ</label>
                        <input type="text" id="size" name="size" placeholder="Kích cỡ">
                    </div>
                    <div class="form-group">
                        <label for="size1">Kích cỡ 1</label>
                        <input type="text" id="size_1" name="size_1" placeholder="Kích cỡ 1">
                    </div>
                    <div class="form-group">
                        <label for="size2">Kích cỡ 2</label>
                        <input type="text" id="size_2" name="size_2" placeholder="Kích cỡ 2">
                    </div>
                    <div class="form-group">
                        <label for="size3">Kích cỡ 3</label>
                        <input type="text" id="size_3" name="size_3" placeholder="Kích cỡ 3">
                    </div>
                    <div class="form-group">
                        <label for="available">Sản phẩm có sẵn</label>
                        <input type="text" id="available" name="available" placeholder="Sản phẩm có sẵn">
                    </div>
                    <div class="form-group">
                        <label for="iddm">Phân loại</label>
                        <input type="text" id="iddm" name="iddm" placeholder="1234">
                    </div>
                </div>
            </div>
            <div class="form-submit">
                <button type="submit" name="submit">Lưu</button>
            </div>
        </form>
    </div>
</body>
</html>
               
<?php
// Kết nối đến cơ sở dữ liệu
$servername = "localhost:3366"; // Tên máy chủ
$username = "root";        // Tên tài khoản (mặc định là "root")
$password = "";            // Mật khẩu (để trống nếu sử dụng XAMPP)
$dbname = "MYPHAM"; // Tên cơ sở dữ liệu

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Kiểm tra nếu form được submit
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Lấy dữ liệu từ form
    $title = $_POST['title'] ?? '';
    $urlImg = $_POST['urlImg'] ?? '';
    $img_sub1 = $_POST['img_sub1'] ?? '';
    $img_sub2 = $_POST['img_sub2'] ?? '';
    $img_sub_product1 = $_POST['img_sub_product1'] ?? '';
    $img_sub_product2 = $_POST['sub_product2'] ?? '';
    $img_sub_product3 = $_POST['sub_product3'] ?? '';
    $img_sub_product4 = $_POST['sub_product4'] ?? '';
    $img_sub_product5 = $_POST['sub_product5'] ?? '';
    $img_sub_product6 = $_POST['sub_product6'] ?? '';
    $img_sub_product7 = $_POST['sub_product7'] ?? '';
    $img_sub_product8 = $_POST['sub_product8'] ?? '';
    $img_sub_product9 = $_POST['sub_product9'] ?? '';
    $priceOld = $_POST['priceOld'] ?? '';
    $priceNew = $_POST['priceNew'] ?? '';
    $sold = $_POST['sold'] ?? '';
    $brand = $_POST['brand'] ?? '';
    $nation = $_POST['nation'] ?? '';
    $evaluate = $_POST['evaluate'] ?? '';
    $discount = $_POST['discount'] ?? '';
    $size = $_POST['size'] ?? '';
    $size_1 = $_POST['size_1'] ?? '';
    $size_2 = $_POST['size_2'] ?? '';
    $size_3 = $_POST['size_3'] ?? '';
    $available = $_POST['available'] ?? '';
    $iddm = $_POST['iddm'] ?? '';

    // Kiểm tra dữ liệu bắt buộc
    if (empty($title) || empty($priceNew)) {
        echo "Vui lòng nhập đủ các thông tin bắt buộc.";
    } else {
        // Thêm sản phẩm vào cơ sở dữ liệu
        $sql = "INSERT INTO sanpham (title, urlImg, img_sub1, img_sub2, img_sub_product1, img_sub_product2, img_sub_product3, img_sub_product4, img_sub_product5, img_sub_product6, img_sub_product7, img_sub_product8, img_sub_product9, priceOld, priceNew, sold, brand, nation, evaluate, discount, size, size_1, size_2, size_3, available, iddm)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";


        $stmt = $conn->prepare($sql);
        $stmt->bind_param(
            "ssssssssssssssssssssssssss",
            $title, $urlImg, $img_sub1, $img_sub2, $img_sub_product1, $img_sub_product2, $img_sub_product3, $img_sub_product4,
            $img_sub_product5, $img_sub_product6, $img_sub_product7, $img_sub_product8, $img_sub_product9, $priceOld, $priceNew,
            $sold, $brand, $nation, $evaluate, $discount, $size, $size_1, $size_2, $size_3, $available, $iddm
        );
        

        if ($stmt->execute()) {
            echo "<script>
                alert('Thêm sản phẩm thành công!');
                window.location.href = 'danhsachsanpham.php';
            </script>";
        } else {
            echo "<script>
                alert('Thêm sản phẩm thất bại: " . $stmt->error . "');
            </script>";
        }

        $stmt->close();
    }
}

$conn->close();
?>
