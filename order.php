<?php
session_start();

// Kết nối cơ sở dữ liệu
$host = "localhost:3366";
$username = "root";
$password = "";
$database = "MYPHAM";

$conn = mysqli_connect($host, $username, $password, $database);

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối cơ sở dữ liệu thất bại: " . mysqli_connect_error());
}

// Kiểm tra nếu form được submit
if (isset($_POST['place_order'])) {
    // Lấy dữ liệu từ form
    $customer_id = $_SESSION['customer_id'] ?? 0; // Lấy ID khách hàng từ session nếu có
    $email = $_POST['email'];
    $full_name = $_POST['name'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $district = $_POST['district'];
    $ward = $_POST['ward'];
    $specific_address = $_POST['address'];
    $payment_type = isset($_POST['payment']) ? "Thanh Toán Khi Nhận Hàng" : "Thanh Toán Khi Nhận Hàng";

    // Kiểm tra khách hàng đã đăng nhập hay chưa
    if ($customer_id == 0) {
        echo "Vui lòng đăng nhập để đặt hàng.";
        exit;
    }

    // Lấy thông tin sản phẩm từ giỏ hàng
    $cart_items = [];
    $sql = "SELECT * FROM CART WHERE customer_id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $customer_id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    while ($row = mysqli_fetch_assoc($result)) {
        $cart_items[] = [
            'img' => $row['product_img'],
            'name' => $row['product_name'],
            'size' => $row['product_size'],
            'price' => (int)str_replace('.', '', $row['product_price']),
            'quantity' => $row['product_quantity']
        ];
    }

    // Nếu giỏ hàng trống, hiển thị thông báo và dừng xử lý
    if (empty($cart_items)) {
        echo "Giỏ hàng của bạn đang trống.";
        exit;
    }

    // Thêm từng sản phẩm vào bảng Orders
    $total = 0;
    $shipping_fee = 40000;
    foreach ($cart_items as $item) {
        $subtotal = $item['price'] * $item['quantity'];
        $total += $subtotal;

        $sql = "INSERT INTO Orders (
            customer_id, email, full_name, phone, city, district, ward, specific_address, 
            payment_type, product_image, product_name, product_size, product_quantity, total_price
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = mysqli_prepare($conn, $sql);
        $total_price = $subtotal + $shipping_fee;

        mysqli_stmt_bind_param(
            $stmt,
            "isssssssssssid",
            $customer_id,
            $email,
            $full_name,
            $phone,
            $city,
            $district,
            $ward,
            $specific_address,
            $payment_type,
            $item['img'],
            $item['name'],
            $item['size'],
            $item['quantity'],
            $total_price
        );

        mysqli_stmt_execute($stmt);
    }

    // Xóa sản phẩm khỏi bảng CART sau khi đặt hàng thành công
    $sql = "DELETE FROM CART WHERE customer_id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $customer_id);
    mysqli_stmt_execute($stmt);

    if (mysqli_affected_rows($conn) > 0) {
        $_SESSION['order_success'] = true; // Đánh dấu đơn hàng thành công
        $_SESSION['order_id'] = mysqli_insert_id($conn); 
        header("Location: confirmation.php");
        exit;
    } else {
        echo "Có lỗi xảy ra khi thêm đơn hàng hoặc xóa giỏ hàng.";
    }
}
?>
