<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $conn = mysqli_connect("localhost:3366", "root", "", "MYPHAM");
    if (!$conn) {
        die("Kết nối thất bại: " . mysqli_connect_error());
    }

    $data = json_decode(file_get_contents('php://input'), true);
    $product_id = $data['product_id'];
    $action = $data['action'];
    $customer_id = 1; // Hoặc lấy từ session đăng nhập

    // Lấy sản phẩm từ database
    $sql = "SELECT * FROM CART WHERE customer_id = ? AND product_id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ii", $customer_id, $product_id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        $quantity = $row['product_quantity'];
        $price = (int)str_replace('.', '', $row['product_price']);

        // Tăng hoặc giảm số lượng
        if ($action === 'increase') {
            $quantity++;
        } elseif ($action === 'decrease' && $quantity > 1) {
            $quantity--;
        }

        // Cập nhật lại giỏ hàng
        $update_sql = "UPDATE CART SET product_quantity = ? WHERE customer_id = ? AND product_id = ?";
        $update_stmt = mysqli_prepare($conn, $update_sql);
        mysqli_stmt_bind_param($update_stmt, "iii", $quantity, $customer_id, $product_id);
        mysqli_stmt_execute($update_stmt);

        // Tính toán tổng tiền mới
        $subtotal = $price * $quantity;
        $total_sql = "SELECT SUM(product_quantity * REPLACE(product_price, '.', '')) AS total FROM CART WHERE customer_id = ?";
        $total_stmt = mysqli_prepare($conn, $total_sql);
        mysqli_stmt_bind_param($total_stmt, "i", $customer_id);
        mysqli_stmt_execute($total_stmt);
        $total_result = mysqli_stmt_get_result($total_stmt);
        $total = mysqli_fetch_assoc($total_result)['total'];

        echo json_encode([
            'success' => true,
            'quantity' => $quantity,
            'subtotal' => $subtotal,
            'total' => $total,
        ]);
    } else {
        echo json_encode(['success' => false]);
    }

    mysqli_close($conn);
}
