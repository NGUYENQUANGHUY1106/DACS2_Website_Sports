<?php
session_start(); // Bắt đầu session

// Kết nối với cơ sở dữ liệu
$conn = mysqli_connect("localhost:3366", "root", "", "MYPHAM");
if (!$conn) {
    die("Kết nối cơ sở dữ liệu thất bại: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_size = $_POST['product_size'];
    $product_img = $_POST['product_img'];
    $customer_id = 1; // Giả sử lấy từ session của người dùng đăng nhập

    // Kiểm tra nếu chưa có giỏ hàng trong session
    if (!isset($_SESSION['cart'][$customer_id])) {
        $_SESSION['cart'][$customer_id] = [];
    }

    // Kiểm tra nếu sản phẩm đã có trong giỏ, nếu có tăng số lượng
    if (isset($_SESSION['cart'][$customer_id][$product_id])) {
        $_SESSION['cart'][$customer_id][$product_id]['quantity'] += 1;
    } else {
        $_SESSION['cart'][$customer_id][$product_id] = [
            'name' => $product_name,
            'price' => $product_price,
            'size' => $product_size,
            'img' => $product_img,
            'quantity' => 1
        ];
    }

    // Cập nhật giỏ hàng trong cơ sở dữ liệu (nếu cần)
    $check_query = "SELECT * FROM CART WHERE product_id = '$product_id' AND customer_id = '$customer_id'";
    $result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($result) > 0) {
        // Nếu sản phẩm đã có, tăng số lượng
        $update_query = "UPDATE CART SET product_quantity = product_quantity + 1 WHERE product_id = '$product_id' AND customer_id = '$customer_id'";
        mysqli_query($conn, $update_query);
    } else {
        // Nếu sản phẩm chưa có, thêm mới
        $insert_query = "INSERT INTO CART (customer_id, product_id, product_name, product_price, product_size, product_quantity, product_img) 
                         VALUES ('$customer_id', '$product_id', '$product_name', '$product_price', '$product_size', 1, '$product_img')";
        mysqli_query($conn, $insert_query);
    }

    // Chuyển hướng lại trang hoặc cập nhật giỏ hàng ngay
    header("Location: index.php");
    exit();
}
?>
