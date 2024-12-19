<?php
header('Content-Type: application/json');
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    if (!isset($data['product_id'], $data['action'])) {
        echo json_encode(['status' => 'error', 'message' => 'Thiếu tham số']);
        exit;
    }

    $product_id = filter_var($data['product_id'], FILTER_VALIDATE_INT);
    if ($product_id === false) {
        echo json_encode(['status' => 'error', 'message' => 'ID sản phẩm không hợp lệ']);
        exit;
    }
    $action = $data['action'];

    $conn = new mysqli("localhost:3366", "root", "", "MYPHAM");
    if ($conn->connect_error) {
        echo json_encode(['status' => 'error', 'message' => 'Lỗi kết nối database: ' . $conn->connect_error]);
        exit;
    }

    if (!isset($_SESSION['customer_id'])) {
        echo json_encode(['status' => 'error', 'message' => 'Chưa đăng nhập']);
        exit;
    }
    $customer_id = $_SESSION['customer_id'];

    $sql = "SELECT product_quantity, product_price FROM CART WHERE product_id = ? AND customer_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $product_id, $customer_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $quantity = $row['product_quantity'];
        $price = $row['product_price'];

        if ($action === 'increase') {
            $quantity++;
        } elseif ($action === 'decrease' && $quantity > 1) {
            $quantity--;
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Không thể giảm số lượng xuống dưới 1']);
            exit;
        }

        $update_sql = "UPDATE CART SET product_quantity = ? WHERE product_id = ? AND customer_id = ?";
        $update_stmt = $conn->prepare($update_sql);
        $update_stmt->bind_param("iii", $quantity, $product_id, $customer_id);
        if (!$update_stmt->execute()) {
            echo json_encode(['status' => 'error', 'message' => 'Lỗi khi cập nhật số lượng']);
            exit;
        }

        $subtotal = $quantity * $price;

        $total_sql = "SELECT SUM(product_quantity * product_price) AS total FROM CART WHERE customer_id = ?";
        $total_stmt = $conn->prepare($total_sql);
        $total_stmt->bind_param("i", $customer_id);
        $total_stmt->execute();
        $total_result = $total_stmt->get_result();
        $total_row = $total_result->fetch_assoc();
        $total = $total_row['total'];

        echo json_encode([
            'status' => 'success',
            'quantity' => $quantity,
            'subtotal' => number_format($subtotal, 0, ',', '.'),
            'total' => number_format($total, 0, ',', '.')
        ]);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Sản phẩm không tồn tại']);
    }

    $conn->close();
}
?>