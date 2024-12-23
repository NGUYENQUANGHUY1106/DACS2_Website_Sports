<?php
session_start();

$conn = mysqli_connect("localhost:3366", "root", "", "mypham");
if (!$conn) {
    die("Kết nối cơ sở dữ liệu thất bại: " . mysqli_connect_error());
}

// Kiểm tra khách hàng đã đăng nhập
if (!isset($_SESSION['customer_id'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['place_order'])) {
    $customer_id = $_SESSION['customer_id']; // Lấy ID khách hàng từ session
    $customer_email = $_POST['email'];
    $customer_name = $_POST['name'];
    $customer_phone = $_POST['phone'];
    $customer_city = $_POST['city'];
    $customer_district = $_POST['district'];
    $customer_ward = $_POST['ward'];
    $customer_address = $_POST['address'];
    $payment_method = $_POST['payment_method'] ?? 'cash_on_delivery'; // Lấy phương thức thanh toán
    $shipping_fee = 40000; // Phí vận chuyển cố định

    // Lấy giỏ hàng từ session
    $cart_items = isset($_SESSION['cart'][$customer_id]) ? $_SESSION['cart'][$customer_id] : [];
    $total_amount = 0;
    $product_details = []; // Chuẩn bị dữ liệu JSON sản phẩm

    foreach ($cart_items as $product_id => $item) {
        $subtotal = $item['price'] * $item['quantity'];
        $total_amount += $subtotal;

        $product_details[] = [
            'product_id' => $product_id,
            'name' => $item['name'],
            'price' => $item['price'],
            'quantity' => $item['quantity'],
            'subtotal' => $subtotal,
        ];
    }

    // Chuyển danh sách sản phẩm thành JSON
    $product_details_json = json_encode($product_details, JSON_UNESCAPED_UNICODE);

    // Thêm đơn hàng vào bảng `orders`
    $query = "INSERT INTO orders (customer_id, customer_email, customer_name, customer_phone, customer_city, customer_district, customer_ward, customer_address, payment_method, total_amount, shipping_fee, product_details) 
              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "issssssssdds", $customer_id, $customer_email, $customer_name, $customer_phone, $customer_city, $customer_district, $customer_ward, $customer_address, $payment_method, $total_amount, $shipping_fee, $product_details_json);
    mysqli_stmt_execute($stmt);

    if (mysqli_stmt_affected_rows($stmt) > 0) {
        // Xoá giỏ hàng
        unset($_SESSION['cart'][$customer_id]);

        // Lấy mã đơn hàng
        $order_id = mysqli_insert_id($conn);

        // Chuyển hướng tới trang xác nhận
        header("Location: confirmation.php?order_id=$order_id");
        exit();
    } else {
        echo "Lỗi khi thêm đơn hàng: " . mysqli_error($conn);
    }
}
?>
