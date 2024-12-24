<?php
// Bắt đầu session
session_start();

// Kết nối cơ sở dữ liệu
$conn = mysqli_connect("localhost:3366", "root", "", "MYPHAM");

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}

// Lấy ID sản phẩm từ URL
$id = isset($_GET['id']) ? intval($_GET['id']) : null;

if (!$id) {
    die("ID sản phẩm không hợp lệ. Hãy đảm bảo truyền đúng ID trên URL, ví dụ: ?id=1");
}

// Lấy thông tin sản phẩm từ cơ sở dữ liệu
$sql = "SELECT * FROM SANPHAM WHERE id = $id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $product = mysqli_fetch_assoc($result);
} else {
    die("Không tìm thấy sản phẩm với ID: $id");
}

// Xử lý cập nhật sản phẩm khi người dùng gửi form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $priceOld = $_POST['priceOld'];
    $priceNew = $_POST['priceNew'];
    $size = $_POST['size'];
    $urlImg = $_POST['urlImg'];
    $img_sub1 = $_POST['img_sub1'];
    $img_sub2 = $_POST['img_sub2'];
    $img_sub_product1 = $_POST['img_sub_product1'];
    $img_sub_product2 = $_POST['img_sub_product2'];
    $img_sub_product3 = $_POST['img_sub_product3'];
    $img_sub_product4 = $_POST['img_sub_product4'];
    $img_sub_product5 = $_POST['img_sub_product5'];
    $img_sub_product6 = $_POST['img_sub_product6'];
    $img_sub_product7 = $_POST['img_sub_product7'];
    $img_sub_product8 = $_POST['img_sub_product8'];
    $img_sub_product9 = $_POST['img_sub_product9'];
    $size = $_POST['size'];
    $size1 = $_POST['size1'];
    $size2 = $_POST['size2'];
    $size3 = $_POST['size3'];
    $size4 = $_POST['size4'];




    // Truy vấn cập nhật sản phẩm
    $update_sql = "UPDATE SANPHAM SET 
        title = '$title',
        priceOld = '$priceOld',
        priceNew = '$priceNew',
        urlImg = '$urlImg',
        img_sub1 = '$img_sub1',
        img_sub2 = '$img_sub2',
        img_sub_product1 = '$img_sub_product1',
        img_sub_product2 = '$img_sub_product2',
        img_sub_product3 = '$img_sub_product3',
        img_sub_product4 = '$img_sub_product4',
        img_sub_product5 = '$img_sub_product5',
        img_sub_product6 = '$img_sub_product6',
        img_sub_product7 = '$img_sub_product7',
        img_sub_product8 = '$img_sub_product8',
        img_sub_product9 = '$img_sub_product9',
        size = '$size',
        size_1 = '$size1',
        size_2 = '$size2',
        size_3 = '$size3',
        size_4 = '$size4'


        WHERE id = $id";

    if (mysqli_query($conn, $update_sql)) {
        echo "Cập nhật sản phẩm thành công!";
        header("Location: danhsachsanpham.php");
        exit();
    } else {
        echo "Lỗi cập nhật: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa sản phẩm</title>
    <link rel="stylesheet" href="./assets/css/main.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            color: #333;
            font-size: 15px;
        }

        h1 {
            text-align: center;
            color: #4CAF50;
            margin-top: 20px;
        }

        form {
            max-width: 1200px;
            margin: 20px auto;
            padding: 35px;
            background: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            display: grid;
            gap: 40px;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        }

        label {
            font-weight: bold;
            font-size: 16px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .alert {
            color: white;
            background-color: #f44336;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Sửa Sản Phẩm</h1>
    <form method="POST">
        <div>

            <label for="title">Tên sản phẩm:</label>
            <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($product['title']); ?>" required><br>
        </div>

        <div>
            <label for="priceOld">Giá cũ:</label>
            <input type="text" id="priceOld" name="priceOld" value="<?php echo htmlspecialchars($product['priceOld']); ?>" required><br>
        </div>

        <div>
            <label for="priceNew">Giá mới:</label>
            <input type="text" id="priceNew" name="priceNew" value="<?php echo htmlspecialchars($product['priceNew']); ?>" required><br>
        </div>


        <div>
            <label for="urlImg">Hình ảnh chính 1:</label>
            <input type="text" id="urlImg" name="urlImg" value="<?php echo htmlspecialchars($product['urlImg']); ?>" required><br>
        </div>

        <div>
            <label for="img_sub1">Hình ảnh Chính 2:</label>
            <input type="text" id="img_sub1" name="img_sub1" value="<?php echo htmlspecialchars($product['img_sub1']); ?>"><br>
        </div>

        <div>
            <label for="img_sub2">Hình ảnh Chính 3:</label>
            <input type="text" id="img_sub2" name="img_sub2" value="<?php echo htmlspecialchars($product['img_sub2']); ?>"><br>

        </div>

        <div>
            <label for="img_sub_product1">Ảnh phụ 1:</label>
            <input type="text" id="img_sub_product1" name="img_sub_product1" value="<?php echo htmlspecialchars($product['img_sub_product1']); ?>"><br>
        </div>

        <div>
            <label for="img_sub_product2">Ảnh phụ 2:</label>
            <input type="text" id="img_sub_product2" name="img_sub_product2" value="<?php echo htmlspecialchars($product['img_sub_product2']); ?>"><br>
        </div>

        <div>
            <label for="img_sub_product1">Ảnh phụ 3:</label>
            <input type="text" id="img_sub_product3" name="img_sub_product3" value="<?php echo htmlspecialchars($product['img_sub_product3']); ?>"><br>
        </div>

        <div>
            <label for="img_sub_product2">Ảnh phụ 4:</label>
            <input type="text" id="img_sub_product4" name="img_sub_product4" value="<?php echo htmlspecialchars($product['img_sub_product4']); ?>"><br>
        </div>

        <div>
            <label for="img_sub_product1">Ảnh phụ 5:</label>
            <input type="text" id="img_sub_product5" name="img_sub_product5" value="<?php echo htmlspecialchars($product['img_sub_product5']); ?>"><br>
        </div>

        <div>
            <label for="img_sub_product2">Ảnh phụ 6:</label>
            <input type="text" id="img_sub_product6" name="img_sub_product6" value="<?php echo htmlspecialchars($product['img_sub_product6']); ?>"><br>
        </div>

        <div>
            <label for="img_sub_product1">Ảnh phụ 7:</label>
            <input type="text" id="img_sub_product7" name="img_sub_product7" value="<?php echo htmlspecialchars($product['img_sub_product7']); ?>"><br>
        </div>

        <div>

            <label for="img_sub_product2">Ảnh phụ 8:</label>
            <input type="text" id="img_sub_product8" name="img_sub_product8" value="<?php echo htmlspecialchars($product['img_sub_product8']); ?>"><br>
        </div>

        <div>
            <label for="img_sub_product1">Ảnh phụ 9:</label>
            <input type="text" id="img_sub_product9" name="img_sub_product9" value="<?php echo htmlspecialchars($product['img_sub_product9']); ?>"><br>

        </div>

        <div>
            <label for="size">Size 1:</label>
            <input type="text" id="size" name="size" value="<?php echo htmlspecialchars($product['size']); ?>" required><br>
        </div>

        <div>
            <label for="size">Size 2:</label>
            <input type="text" id="size1" name="size1" value="<?php echo htmlspecialchars($product['size_1']); ?>" required><br>
        </div>

        <div>
            <label for="size">Size 3:</label>
            <input type="text" id="size2" name="size2" value="<?php echo htmlspecialchars($product['size_2']); ?>" required><br>
        </div>

        <div>
            <label for="size">Size 4:</label>
            <input type="text" id="size3" name="size3" value="<?php echo htmlspecialchars($product['size_3']); ?>" required><br>
        </div>

        <div>
            <label for="size">Size 5:</label>
            <input type="text" id="size4" name="size4" value="<?php echo htmlspecialchars($product['size_4']); ?>" required><br>
        </div>
        <button type="submit">Cập nhật</button>
    </form>
</body>

</html>