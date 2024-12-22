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
    <title>TL-Shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <link rel="stylesheet" href="./assets/css/test.css">
    <link rel="stylesheet" href="./assets/css/thanhtoan.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.4.0-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
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
                                <a href="donMua.php">Đơn mua</a>
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
                                        Nike Air Zoom Mercurial Superfly 9 Academy TF
                                    </a>
                                </li>
                                <li class="header__search-history-item">
                                    <a href="">
                                        Puma
                                    </a>
                                </li>
                                <li class="header__search-history-item">
                                    <a href="">
                                        Áo
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <button style="height: auto; margin-right: 0; margin-bottom: 15px; height: 42px;" name="btn_search" class="header__search-btn">
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
                                                                <a href="xoagiohang.php?productid=<?php echo $product_id; ?>" class="header__cart-item-remove"> Xóa
                                                                </a>
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
    <div class="thanhtoan">
        <div class="container_checkout">
            <div class="checkout-form">
                <!-- Form Section -->
                <div class="form-section">
                    <h2>Thông tin mua hàng</h2>
                    <div class="form-group">
                        <label for="email">Email (tuỳ chọn)</label>
                        <input type="email" id="email" placeholder="nguyenquanghuy110605@gmail.com">
                    </div>
                    <div class="form-group">
                        <label for="name">Họ và tên</label>
                        <input type="text" id="name" placeholder="QuangHuy">
                    </div>
                    <div class="form-group">
                        <label for="phone">Số điện thoại</label>
                        <input type="text" id="phone" placeholder="0344413346">
                    </div>
                    <div class="form-group">
                        <label for="address">Địa chỉ (tuỳ chọn)</label>
                        <input type="text" id="address" placeholder="18 Lê Thiện Trị">
                    </div>
                    <div class="form-group">
                        <label for="city">Tỉnh Thành</label>
                        <input type="text" id="city" placeholder="Đà Nẵng">
                    </div>

                    <div class="form-group">
                        <label for="district">Quận Huyện </label>
                        <input type="text" id="district" placeholder="Ngũ Hành Sơn">
                    </div>

                    <div class="form-group">
                        <label for="ward">Phường Xã</label>
                        <input type="text" id="ward" placeholder="Hòa Quý">
                    </div>

                    <div class="form-group">
                        <label for="deliver-different-address">Vui Lòng Nhập Địa Chỉ Cụ Thể</label>
                        <textarea id="note" rows="3"></textarea>
                    </div>
                </div>

                <!-- Shipping and Payment Section -->
                <div class="shipping-payment-section">
                    <div class="section">
                        <h2>Vận chuyển</h2>
                        <label><input type="radio" name="shipping" checked> Giao hàng tận nơi (40.000đ)</label> <br>
                    </div>

                    <div class="section">
                        <h2>Thanh toán</h2>
                        <label>
                            <input type="radio" id="bankTransferOption" name="payment">
                            Thanh Toán Qua Tài Khoản Ngân Hàng
                        </label>
                        <br>
                        <div id="qrCode">
                            <p>Quét mã QR để chuyển khoản:</p>
                            <img style="width: 150px;" src="/assets/img/qr_ck.jpg" alt="QR Code">
                        </div>
                        <div id="uploadSection">
                            <p>Tải ảnh minh chứng chuyển khoản:</p>
                            <input type="file" id="proofImage" accept="image/*">
                            <img id="previewImage" alt="Ảnh minh chứng" style="margin-top: 10px; max-width: 150px; width: 100%; object-fit: contain; height: auto;">
                        </div>
                        <br>
                        <label>
                            <input type="radio" name="payment">
                            Thanh Toán Khi Nhận Hàng
                        </label>
                    </div>
                </div>
                <?php

                $host = "localhost:3366";
                $username = "root";
                $password = "";
                $database = "MYPHAM";

                // Kết nối cơ sở dữ liệu
                $conn = mysqli_connect($host, $username, $password, $database);

                // Kiểm tra kết nối
                if (!$conn) {
                    die("Kết nối cơ sở dữ liệu thất bại: " . mysqli_connect_error());
                }
                $cart_items = []; // Biến lưu danh sách sản phẩm trong giỏ hàng
                if (isset($_SESSION['customer_id'])) {
                    $customer_id = $_SESSION['customer_id'];

                    // Truy vấn giỏ hàng từ cơ sở dữ liệu
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
                }
                ?>

                <div class="order-summary">
                    <div style="display: flex; justify-content: space-between;">
                        <div style="display: flex; gap: 10px;">
                            <h3>Đơn hàng</h3>
                            <h3>(<?php echo count($cart_items); ?> sản phẩm)</h3>
                        </div>
                        <div style="display: flex; align-items: center; gap: 45px; margin-right: 5px;">
                            <h3>Size</h3>
                            <h3>Số Lượng</h3>
                            <h3>Tổng</h3>
                        </div>
                    </div>
                    <?php
                    $total = 0; // Biến lưu tổng giá trị giỏ hàng
                    foreach ($cart_items as $item):
                        $subtotal = $item['price'] * $item['quantity'];
                        $total += $subtotal;
                        $shipping_fee = 40000; // Phí vận chuyển
                        $total_with_shipping = $total + $shipping_fee; // Tổng tiền bao gồm phí vận chuyển

                    ?>
                        <div class="summary-item" style="display: flex; gap: 10px;">
                            <span style="display: flex; gap: 4px;" class="name_product">
                                <img style="max-width: 70px; display: block; max-height: 70px; height: 50%; width: 100%; object-fit: contain;"
                                    src="<?php echo htmlspecialchars($item['img']); ?>" alt="">
                                <span style="max-width:200px; width: 100%;"><?php echo htmlspecialchars($item['name']); ?></span>
                                <span> <?php echo htmlspecialchars($item['size']); ?></span>
                                <span style="margin-left: 55px;"> <?php echo htmlspecialchars($item['quantity']); ?></span>
                            </span>
                            <span class="price_product">
                                <?php echo number_format($subtotal, 0, ',', '.'); ?> đ
                            </span>
                        </div>
                    <?php endforeach; ?>
                    <div class="summary-item total">
                        <span style="font-size: 15px;">Tổng cộng</span>
                        <span class="total"><?php echo number_format($total, 0, ',', '.'); ?> đ</span>
                    </div>
                    <div class="summary-item total">
                        <span style="font-size: 12px;">Phí Vận Chuyển</span>
                        <span style="color: green;">40.000 đ</span>
                    </div>
                    <hr style="height: 2px; background-color: red; width: 100%;">
                    <div class="summary-item total">
                        <span style="font-size: 15px; font-weight: bold;">Tổng tiền (bao gồm phí vận chuyển)</span>
                        <span class="total"><?php echo number_format($total_with_shipping, 0, ',', '.'); ?> đ</span>
                    </div>
                    <div style="display: flex; justify-content: center;">
                        <a href="">
                        <button class="btn-shine" onclick="return validateForm()">
                            <span>Mua Ngay</span>
                        </button>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="/assets/javascript/thanhtoan.js"></script>
</body>

</html>