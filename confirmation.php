<?php
if (isset($_GET['order_id'])) {
    $order_id = $_GET['order_id'];
    echo "<div class='container'>";
    echo "<h1>Đặt hàng thành công!</h1>";
    echo "<p>Mã đơn hàng của bạn: <strong>#$order_id</strong></p>";
    echo "<p>Chúng tôi sẽ liên hệ với bạn để xác nhận và giao hàng sớm nhất.</p>";
    echo "<a href='index.php' class='btn'>Tiếp tục mua sắm</a>"; // Thêm nút ngay tại đây
    echo "</div>";
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông Báo Đặt Hàng</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 50px auto;
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            position: relative;
        }
        h1 {
            color: #28a745;
            font-size: 2.5em;
            font-weight: bold;
        }
        p {
            font-size: 1.2em;
            line-height: 1.6;
            margin-top: 20px;
        }
        strong {
            color: #007bff;
            font-size: 1.3em;
        }
        .btn {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            font-size: 1.1em;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 30px;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .background {
            background: url('https://www.example.com/sport-background.jpg') no-repeat center center/cover;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }
    </style>
</head>
<body>
    <div class="background"></div>
</body>
</html>
