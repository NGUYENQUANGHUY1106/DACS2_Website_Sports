<?php
// Kết nối cơ sở dữ liệu
require 'config.php'; // Đảm bảo file config.php chứa thông tin kết nối CSDL

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ghi log kiểm tra dữ liệu POST nhận được
    error_log("AJAX request nhận: " . print_r($_POST, true)); 

    // Lấy dữ liệu từ AJAX
    $product_id = isset($_POST['productid']) ? intval($_POST['productid']) : 0;
    $quantity = isset($_POST['quantity']) ? intval($_POST['quantity']) : 0;
    $customer_id = 1; // ID khách hàng cố định (hoặc lấy từ session nếu có)

    // Kiểm tra dữ liệu hợp lệ
    if ($product_id > 0 && $quantity > 0) {
        // Cập nhật số lượng sản phẩm trong giỏ hàng
        $query = "UPDATE cart SET product_quantity = ? WHERE product_id = ? AND customer_id = ?";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "iii", $quantity, $product_id, $customer_id);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            // Tính lại tổng tiền giỏ hàng
            $totalQuery = "SELECT SUM(product_quantity * product_price) AS total FROM cart WHERE customer_id = ?";
            $stmtTotal = mysqli_prepare($conn, $totalQuery);
            mysqli_stmt_bind_param($stmtTotal, "i", $customer_id);
            mysqli_stmt_execute($stmtTotal);
            $totalResult = mysqli_stmt_get_result($stmtTotal);
            $totalRow = mysqli_fetch_assoc($totalResult);
            $total = $totalRow['total'] ?? 0;

            // Phản hồi thành công
            echo json_encode([
                'status' => 'success',
                'message' => 'Cập nhật thành công',
                'total' => $total
            ]);
        } else {
            // Phản hồi lỗi nếu cập nhật thất bại
            echo json_encode([
                'status' => 'error',
                'message' => 'Không thể cập nhật sản phẩm trong giỏ hàng'
            ]);
        }
    } else {
        // Phản hồi lỗi nếu dữ liệu không hợp lệ
        echo json_encode([
            'status' => 'error',
            'message' => 'Dữ liệu không hợp lệ'
        ]);
    }
} else {
    // Phản hồi lỗi nếu không phải yêu cầu POST
    echo json_encode([
        'status' => 'error',
        'message' => 'Phương thức yêu cầu không hợp lệ'
    ]);
}
?>
