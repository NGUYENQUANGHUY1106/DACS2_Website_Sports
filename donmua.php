<?php
session_start();
$customer_id = $_COOKIE['customer_id'] ?? null;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuangHuy_Sports11</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.4.0-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .header-buttons {
            display: flex;
            gap: 10px;
            margin-bottom: 15px;
        }

        .header-buttons button {
            padding: 8px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .header-buttons button:hover {
            background-color: #45a049;
        }

        .table-container {
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 15px;
        }

        table th,
        table td {
            border: 1px solid #ddd;
            padding: 10px;
        }

        table th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tr:hover {
            background-color: #f1f1f1;
        }

        .action-buttons button {
            padding: 5px 10px;
            background-color: #2196F3;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .action-buttons button:hover {
            background-color: #0b7dda;
        }

        .checkbox {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>

    <div class="app">
        <header class="header">
            <div class="grid">
                <nav class="header__navbar">
                    <ul class="header__navbar-list">
                        <li class="header__navbar-item header__navbar-item--has-qr header__navbar-item-separate">
                            Vào cửa hàng trong ứng dụng TL-shop
                            <!-- QR code -->
                            <div class="header__qr">
                                <a href=""> <img src="/assets/img/qr_shop.jpg" alt="QR Code" class="header__qr-img"></a>

                            </div>
                        </li>
                        <li class="header__navbar-item">
                            <span class="header__navbar-item-title--no-pointer"> Kết Nối</span>
                            <a href="https://www.facebook.com/manh.luu.127648?mibextid=LQQJ4d
                             " class="header__navbar-icon-link">
                                <i class=" header__navbar-icon fa-brands fa-facebook"></i>
                            </a>

                            <a href="" class="header__navbar-icon-link">
                                <i class=" header__navbar-icon fa-brands fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="header__navbar-list">
                        <li class=" header__navbar-icon header__navbar-item header__navbar-item--has-notify">

                            <a href="" class="header__navbar-item-link">
                                <i class=" header__navbar-icon far fa-bell"></i>
                                Thông Báo
                            </a>
                            <!-- header-notify -->
                            <div class="header__notify">
                                <header class="header__notify-header">
                                    <h3>Thông Báo Mới Nhận</h3>
                                </header>
                                <ul class="header__notify-list">
                                    <li class="header__notify-item">
                                        <a href="" class="header__notify-link">
                                            <div style="display: flex; gap:  15px;" class="header__notify-info">
                                                <img style="width: 40px; object-fit: contain;" src="/assets/img/thongbao_anh1.jpg" alt="">
                                                <div>
                                                    <span class="header__notify-name">Nike Air Zoom Mercurial Superfly 9 Academy TF chỉ còn 1.200.000 vnd</span>
                                                    <span class="header__notify-descriotion">Chương trình khuyến mãi chỉ diễn ra từ ngày 20/12 cho đến 30-4</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notify-item">
                                        <a href="" class="header__notify-link">
                                            <div style="display: flex; gap:  15px;" class="header__notify-info">
                                                <img style="width: 40px; object-fit: contain;" src="/assets/img/thongbaoanh_2.avif" alt="">
                                                <div>
                                                    <span class="header__notify-name">SALE SỐC! 19% bộ áo quần thi đấu brunofernandes </span>
                                                    <span class="header__notify-descriotion"> giá chỉ còn 4.080.000vnd(giá gốc 5.100.000nvd)</span>
                                                </div>

                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notify-item">
                                        <a href="" class="header__notify-link">
                                            <div style="display: flex; gap:  15px;" class="header__notify-info">
                                                <img style="width: 40px; object-fit: contain;" src="/assets/img/thonganh_3.jpg" alt="">
                                                <div>
                                                    <span class="header__notify-name"> FC Baca chính thức ra mắt bóng thi đấu</span>
                                                    <span class="header__notify-descriotion">khuyến mãi chỉ còn 22%</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notify-item">
                                        <a href="" class="header__notify-link">
                                            <div style="display: flex; gap:  15px;" class="header__notify-info">
                                                <img style="width: 40px; object-fit: contain;" src="/assets/img/thongbao_anh4.webp" alt="">
                                                <div>
                                                    <span class="header__notify-name">Phụ kiện bảo vệ ống đồng thi đấu</span>
                                                    <span class="header__notify-descriotion">giá mở bán chỉ 1.260.000 </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <footer class="header__notify-footer ">
                                    <a href="" class="header__notify-footer-btn">Xem tất cả</a>
                                </footer>

                            </div>
                        </li>
                        <li class=" header__navbar-icon header__navbar-item">
                            <a href="" class="header__navbar-item-link">
                                <i class=" header__navbar-icon fa-solid fa-circle-question"></i>
                                Trợ Giúp
                            </a>
                        </li>

                        <div class="modal" id="modal_1">
                            <div class="modal__overlay" id="overlay"></div>
                            <div class="modal__body">
                                <!-- Register form -->
                                <form action="xulyRegister.php" method="POST" class="auth-form__register" id="register">
                                    <div class="auth-form__container">
                                        <div class="auth-form__header">
                                            <h3 class="auth-form__heading">Đăng ký</h3>
                                            <span class="auth-form__switch-btn" id="moveLogin">Đăng nhập</span>
                                        </div>
                                        <div class="auth-form__form">
                                            <div class="auth-form__group">
                                                <input type="text" name="createName" class="auth-form__input" placeholder="Nhập tên tài khoản của bạn">
                                            </div>
                                            <div class="auth-form__group">
                                                <input type="email" name="createEmail" class="auth-form__input" placeholder="Nhập email hoặc số điện thoại của bạn">
                                            </div>
                                            <div class="auth-form__group">
                                                <input type="password" name="createPass" class="auth-form__input" placeholder="Nhập mật khẩu của bạn">
                                            </div>
                                        </div>
                                        <div class="auth-form__aside">
                                            <p class="auth-form__policy-text">
                                                Bằng việc đăng ký. bạn đã đồng ý với TL-shop về
                                                <a href="" class="auth-form__text-link">Điều khoảng dịch vụ</a> &
                                                <a href="" class="auth-form__text-link">Chính sách bảo mật</a>
                                            </p>
                                        </div>
                                        <div class="auth-form__controls">
                                            <span class="btn btn--back" id="come-back__register">TRỞ LẠI </span>
                                            <button class="btn btn--primary" id="btn-register">ĐĂNG KÝ </button>
                                        </div>
                                    </div>
                                    <div class="auth-form__socials ">
                                        <a href="" class=" auth-form__socials--facebook btn btn--size-s btn--with-icon">
                                            <i class="auth-form__socials-icon fa-brands fa-square-facebook"></i>
                                            <span class="auth-form__socials-title">
                                                Kết nối với Facebook
                                            </span>
                                        </a>
                                        <a href="" class="auth-form__socials--google btn btn--size-s btn--with-icon">
                                            <i class="auth-form__socials-icon fa-brands fa-google"></i>
                                            <span class="auth-form__socials-title">
                                                Kết nối với Google
                                            </span>
                                        </a>
                                    </div>
                                </form>

                                <!-- Login form -->
                                <form action="xulylogin.php" method="POST" class="auth_form__login" id="login">
                                    <div class="auth-form__container">
                                        <div class="auth-form__header">
                                            <h3 class="auth-form__heading">Đăng nhập</h3>
                                            <span class="auth-form__switch-btn" id="moveRegister">Đăng ký</span>
                                        </div>
                                        <div class="auth-form__form">
                                            <div class="auth-form__group">
                                                <input type="email" name="inputuser" class="auth-form__input" placeholder="Nhập Email của bạn">
                                            </div>
                                            <div class="auth-form__group">
                                                <input type="password" name="inputpass" class="auth-form__input" placeholder="Nhập mật khẩu của bạn">
                                            </div>
                                        </div>
                                        <div class="auth-form__help">
                                            <a href="" class="auth-form__help-link auth-form__help-fogot ">Quên mật khẩu</a>
                                            <span class="auth-form__help-seperate"></span>
                                            <a href="" class="auth-form__help-link">Cần trợ giúp ?</a>
                                        </div>
                                        <div class="auth-form__controls">
                                            <span class="btn btn--back" id="come-back">TRỞ LẠI </span>

                                            <button class="btn btn--primary " id="btn-login">ĐĂNG NHẬP </button>


                                        </div>
                                    </div>
                                    <div class="auth-form__socials ">
                                        <a href="https://www.facebook.com/manh.luu.127648?mibextid=LQQJ4d
                                " class=" auth-form__socials--facebook btn btn--size-s btn--with-icon">
                                            <i class="auth-form__socials-icon fa-brands fa-square-facebook"></i>
                                            <span class="auth-form__socials-title">
                                                Kết nối với Facebook
                                            </span>
                                        </a>
                                        <a href="" class="auth-form__socials--google btn btn--size-s btn--with-icon">
                                            <i class="auth-form__socials-icon fa-brands fa-google"></i>
                                            <span class="auth-form__socials-title">
                                                Kết nối với Google
                                            </span>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <script src="./assets/javascript/login.js"></script>
                        <?php
                        if (!isset($_COOKIE['customer_id'])) {
                            echo  '<li class="header__navbar-item header__navbar-item-strong header__navbar-item-separate" id="Register">Đăng Ký</li>';
                            echo  ' <li class="header__navbar-item header__navbar-item-strong" id="Login" > Đăng Nhập </li>';
                        }
                        ?>


                        <li class="header__navbar-item header__navbar-user">

                            <?php
                            // Lấy giá trị của cookie 'customer_id'
                            if (isset($_COOKIE['customer_id'], $_COOKIE['customer_name'])) {
                                $customer_name = $_COOKIE['customer_name'];

                                echo '<img src="https://www.shutterstock.com/image-vector/default-avatar-profile-icon-social-260nw-1913928688.jpg" alt="" class="header__navbar-user-img ">';
                                echo '<span class="header__navbar-user-name">' . $customer_name . '</span>';
                            }
                            ?>

                            <ul class="header__navbar-user-menu">
                                <li class="header__navbar-user-item">
                                    <a href="">Tài khoản của tôi</a>
                                </li>
                                <li class="header__navbar-user-item">
                                    <a href="loginAdmin.html">Tài khoản Admin</a>
                                </li>
                                <li class="header__navbar-user-item">
                                    <a href="diachi.php">Địa chỉ của tôi</a>
                                </li>
                                <li class="header__navbar-user-item">
                                    <a href="donmua.php">Đơn mua</a>
                                </li>
                                <li class="header__navbar-user-item header__navbar-user-item--separate ">
                                    <a href="xulylogout.php?logout=true">Đăng xuất</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div class="header-with-search">
                    <div class="header__logo">
                        <a href="index.php" class="header__logo-link">


                            <img src="/assets/img/logo (2).png" alt="anhlogo" class="header__logo-img">

                        </a>
                    </div>
                    <form class="header__search" action="index.php" method="POST">
                        <div class="header__search-input-swap">
                            <input type="text" name="search_Keywords" class="header__search-input" autocomplete="off" placeholder="Tìm kiếm sản phẩm trong shop">
                            <!-- search history -->
                            <div class="header__search-history">
                                <h3 class="header__search-history-heading">Lịch sử tìm kiếm</h3>
                                <ul class="header__search-history-list">
                                    <li class="header__search-history-item">
                                        <a href="">
                                            Kem dưỡng da chính hãng
                                        </a>
                                    </li>
                                    <li class="header__search-history-item">
                                        <a href="">
                                            Son môi chính hãng
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <button name="btn_search" class="header__search-btn">
                            <i class=" header__search-btn-icon fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>


                    <!-- Giỏ hàng -->
                    <div class="header__cart">
                        <div class="header__cart-swap">
                            <i class="header__cart-icon fa-sharp fas fa-cart-shopping"></i>
                            <?php
                            // Lấy customer_id từ session (sau khi người dùng đăng nhập)
                            if (isset($_SESSION['customer_id'])) {
                                $customer_id = $_SESSION['customer_id'];

                                // Tính tổng số lượng sản phẩm
                                $total_items = 0;
                                if (isset($_SESSION['cart'][$customer_id]) && is_array($_SESSION['cart'][$customer_id])) {
                                    foreach ($_SESSION['cart'][$customer_id] as $item) {
                                        if (is_array($item) && isset($item['quantity'])) {
                                            $total_items += intval($item['quantity']);
                                        }
                                    }
                                }

                                // Kiểm tra giỏ hàng trống
                                if ($total_items == 0) {
                            ?>
                                    <span class="header__cart-swap-notice">0</span>
                                    <div class="header__cart-list header__cart-list-no-cart">
                                        <img src="./assets/img/no_cart.png" alt="no-cart-img" class="header__cart-list-no-cart-img">
                                        <span class="header__cart-list-no-cart-msg">Chưa có sản phẩm</span>
                                    </div>
                                <?php
                                } else {
                                ?>
                                    <span class="header__cart-swap-notice"><?php echo $total_items; ?></span>
                                    <div class="header__cart-list">
                                        <h4 class="header__cart-heading">Sản phẩm đã thêm</h4>
                                        <?php
                                        foreach ($_SESSION['cart'][$customer_id] as $product_id => $item) {
                                            if (is_array($item)) {
                                                // Check for required keys
                                                $product_name = isset($item['name']) ? $item['name'] : 'Sản phẩm không xác định';
                                                $product_img = isset($item['img']) ? $item['img'] : './assets/img/default.png';
                                                $product_price = isset($item['price']) ? str_replace('.', '', $item['price']) : 0;
                                                $product_quantity = isset($item['quantity']) ? intval($item['quantity']) : 0;
                                                $product_size = isset($item['size']) ? $item['size'] : 'Không rõ';
                                        ?>
                                                <a href="giohang.php" class="header__cart-list-item__link">
                                                    <ul class="header__cart-list-item">
                                                        <li class="header__cart-item" style="margin-top: 10px;">
                                                            <img src="<?php echo $product_img; ?>" alt="<?php echo $product_name; ?>" class="header__cart-img">
                                                            <div class="header__cart-item-info">
                                                                <div class="header__cart-item-head">
                                                                    <h5 class="header__cart-item-name"><?php echo $product_name; ?></h5>
                                                                    <div class="header__cart-item-price-wrap">
                                                                        <span class="header__cart-item-price">
                                                                            <?php
                                                                            $price = floatval($product_price);
                                                                            echo number_format($price, 0, ',', '.') . 'đ';
                                                                            ?>
                                                                        </span>
                                                                        <span class="header__cart-item-quantity">x<?php echo $product_quantity; ?></span>
                                                                    </div>
                                                                </div>
                                                                <div class="header__cart-item-body">
                                                                    <span class="header__cart-item-description">Phân loại hàng: Chính hãng</span>
                                                                    <a href="xoagiohang.php?productid=<?php echo $product_id; ?>" class="header__cart-item-remove">Xóa</a>
                                                                </div>
                                                                <span style="color: red; font-size: 14px;">Size: <?php echo $product_size; ?></span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </a>
                                        <?php
                                            }
                                        }
                                        ?>
                                        <a class="header__cart-view btn btn--primary" href="giohang.php">Xem giỏ hàng</a>
                                    </div>
                                <?php
                                }
                            } else {
                                // Nếu chưa đăng nhập, hiển thị giỏ hàng trống và yêu cầu đăng nhập
                                ?>
                                <span class="header__cart-swap-notice">0</span>
                                <div class="header__cart-list header__cart-list-no-cart">
                                    <img src="./assets/img/no_cart.png" alt="no-cart-img" class="header__cart-list-no-cart-img">
                                    <span class="header__cart-list-no-cart-msg">Vui lòng đăng nhập để xem giỏ hàng</span>
                                </div>
                            <?php } ?>
                        </div>
                    </div>



                </div>

        </header>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Mã Đơn Hàng</th>
                        <th> Tên Khách Hàng</th>
                        <th>Tên sản Phẩm</th>
                        <th>Hình Ảnh Sản Phẩm</th>
                        <th>Kích Thước</th>
                        <th>Số Lượng</th>
                        <th>Địa Chỉ Giao Hàng</th>
                        <th>Điện Thoại</th>
                        <th>Tổng Tiền</th>
                        <th>Ngày Đặt</th>
                        <th>Trạng Thái</th>
                    </tr>
                </thead>
                <tbody style="font-size: 12px; text-align: center;">
                    <?php
                    $conn = mysqli_connect("localhost:3366", "root", "", "MYPHAM");
                    if (!$conn) {
                        die("Kết nối thất bại: " . mysqli_connect_error());
                    }

                    if (!isset($_SESSION['customer_id'])) {
                        die("<p>Vui lòng đăng nhập để xem giỏ hàng.</p>");
                    }
                    $customer_id = $_SESSION['customer_id'];

                    // Truy vấn dữ liệu từ bảng CART
                    $sql = "SELECT * FROM orders WHERE customer_id = ?";
                    $stmt = mysqli_prepare($conn, $sql);
                    mysqli_stmt_bind_param($stmt, "i", $customer_id);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <td><?php echo htmlspecialchars($row['order_id']); ?></td>
                                <td><?php echo htmlspecialchars($row['full_name']); ?></td>
                                <td ><?php echo htmlspecialchars($row['product_name']); ?></td>
                                <td> <img src="<?php echo htmlspecialchars($row['product_image']); ?>" alt="Product Image" style="width: 90px; height: auto;">
                                </td>
                                <td><?php echo htmlspecialchars($row['product_size']); ?></td>
                                <td><?php echo htmlspecialchars($row['product_quantity']); ?></td>
                                <td> <?php echo htmlspecialchars($row['specific_address'] . ', ' . $row['ward'] . ', ' . $row['district'] . ', ' . $row['city']); ?>
                                </td>
                                <td><?php echo htmlspecialchars($row['phone']); ?></td>
                                <td><?php echo htmlspecialchars(number_format($row['total_price'], 0, ',', '.')); ?></td>
                                <td><?php echo htmlspecialchars($row['created_at']); ?></td>
                                <td style="color: #45a049; font-weight: bold;"><?php echo htmlspecialchars($row['status']); ?></td>

                            </tr>
                        <?php }
                    } else { ?>
                        <tr>
                            <td colspan="10">Không có đơn hàng nào trong giỏ hàng.</td>
                        </tr>
                    <?php }
                    mysqli_stmt_close($stmt);
                    mysqli_close($conn);
                    ?>
                </tbody>

            </table>
        </div>
    </div>
</body>

</html>