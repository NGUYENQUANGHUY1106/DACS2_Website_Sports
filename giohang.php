<?php
session_start();

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
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.4.0-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
                                <a href=""> <img src="./assets/img/img-QR.png" alt="QR Code" class="header__qr-img"></a>
                                <div class="header__qr-apps">
                                    <a class="header__qr-link" href=""> <img src="./assets/img/img-ggplay.png" alt="Google play" class="header__qr-download-img"></a>
                                    <a class="header__qr-link" href=""> <img src="./assets/img/ing-appstore.png" alt="App store" class="header__qr-download-img"></a>
                                </div>
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
                                            <div class="header__notify-info">
                                                <span class="header__notify-name">Ohui giảm giá cực sốc toàn bộ mỹ phẩm chỉ còn 599.000 vnd</span>
                                                <span class="header__notify-descriotion">Chương trình khuyến mãi chỉ diễn ra từ ngày 20-4 cho đến 30-4</span>

                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notify-item">
                                        <a href="" class="header__notify-link">
                                            <div class="header__notify-info">
                                                <span class="header__notify-name">SALE SỐC! 70% bộ dưỡng Ohui The First tái tạo trẻ hóa da </span>
                                                <span class="header__notify-descriotion"> giá chỉ còn 375.000vnd(giá gốc 1.250.000nvd)</span>

                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notify-item">
                                        <a href="" class="header__notify-link">
                                            <div class="header__notify-info">
                                                <span class="header__notify-name"> Ohui chính thức ra mặt mộ dưỡng da</span>
                                                <span class="header__notify-descriotion">khuyến mãi chỉ còn 50%</span>

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
                                if (isset($_SESSION['cart'][$customer_id])) {
                                    foreach ($_SESSION['cart'][$customer_id] as $item) {
                                        $total_items += $item['quantity'];
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
                                        ?>
                                            <a href="giohang.php" class="header__cart-list-item__link">
                                                <ul class="header__cart-list-item">
                                                    <li class="header__cart-item" style="margin-top: 10px;">
                                                        <img src="<?php echo $item['img']; ?>" alt="<?php echo $item['name']; ?>" class="header__cart-img">
                                                        <div class="header__cart-item-info">
                                                            <div class="header__cart-item-head">
                                                                <h5 class="header__cart-item-name"><?php echo $item['name']; ?></h5>
                                                                <div class="header__cart-item-price-wrap">
                                                                    <span class="header__cart-item-price">
                                                                        <?php
                                                                        $price = str_replace('.', '', $item['price']);
                                                                        $price = floatval($price);
                                                                        echo number_format($price, 0, ',', '.') . 'đ';
                                                                        ?>
                                                                    </span>
                                                                    <span class="header__cart-item-quantity">x<?php echo $item['quantity']; ?></span>
                                                                </div>
                                                            </div>
                                                            <div class="header__cart-item-body">
                                                                <span class="header__cart-item-description">Phân loại hàng: Chính hãng</span>
                                                                <a href="xoagiohang.php?productid=<?php echo $product_id; ?>" class="header__cart-item-remove">Xóa</a>
                                                            </div>
                                                            <span style="color: red; font-size: 14px;">Size: <?php echo $item['size']; ?></span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </a>
                                        <?php } ?>
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
        <div class="app__container">
            <?php
            $conn = mysqli_connect("localhost:3366", "root", "", "MYPHAM");
            if (!$conn) {
                die("Kết nối thất bại: " . mysqli_connect_error());
            }

            if (!isset($_SESSION['customer_id'])) {
                die("<p>Vui lòng đăng nhập để xem giỏ hàng.</p>");
            }
            $customer_id = $_SESSION['customer_id'];

            $total = 0;

            $sql = "SELECT * FROM CART WHERE customer_id = ?";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "i", $customer_id);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if (mysqli_num_rows($result) > 0) {
            ?>

                <div class="cart__container-navbar">
                    <div class="cart__navbar">
                        <div class="cart__navbar-product">
                            <div class="cart__navbar-product__name">Sản Phẩm</div>
                        </div>
                        <ul class="cart__navbar-productDetails__list">
                            <li>Kích Thước</li>
                            <li>Số Lượng</li>
                            <li>Tổng Tiền</li>
                            <li>Tùy Chọn</li>
                        </ul>
                    </div>
                </div>

                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <?php
                    $product_id = $row['product_id'];
                    $product_price = (int)str_replace('.', '', $row['product_price']);
                    $product_quantity = $row['product_quantity'] ?? 1;
                    $subtotal = $product_price * $product_quantity;
                    $total += $subtotal;
                    ?>
                    <div class="cart__container-form">
                        <div class="cart__form">
                            <div class="cart__form-product">
                                <div class="cart__form-product__img"
                                    style="background-image: url('<?php echo htmlspecialchars($row['product_img']); ?>');">
                                </div>
                                <span class="cart__form-product__name"><?php echo htmlspecialchars($row['product_name']); ?></span>
                            </div>
                            <div class="cart__form-productDetails">
                                <span><?php echo htmlspecialchars($row['product_size']); ?></span>

                                <div class="quantity-container">
                                    <button class="quantity-btn minus" data-product-id="<?php echo $product_id; ?>">-</button>
                                    <input type="text" id="quantity-<?php echo $product_id; ?>" value="<?php echo $product_quantity; ?>" readonly>
                                    <button class="quantity-btn plus" data-product-id="<?php echo $product_id; ?>">+</button>
                                </div>

                                <span id="subtotal-<?php echo $product_id; ?>">
                                    <?php echo number_format($subtotal, 0, ',', '.'); ?> đ
                                </span>

                                <a class="delete_cart" href="xoagiohang.php?productid=<?php echo $product_id; ?>">Xóa</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>

                <div class="cart__container-totalPrice">
                    <span>Tổng thanh toán :</span>
                    <span id="cart-total"><?php echo number_format($total, 0, ',', '.'); ?> đ</span>
                </div>

            <?php } else {
                echo "<p>Giỏ hàng của bạn đang trống.</p>";
            }

            mysqli_close($conn);
            ?>
        </div>

    </div>
    <footer class="footer">
        <div class="grid">
            <div class="row">
                <div class="col l-3 m-6 c-12">
                    <div class="footer-content">
                        <div class="">
                            <h3 class="footer-heading">CHĂM SÓC KHÁCH HÀNG</h3>
                            <ul class="footer-list">
                                <li class="footer-item">
                                    <a href="" class="footer-item__link">
                                        Trung tâm trợ giúp
                                    </a>
                                </li>
                                <li class="footer-item">
                                    <a href="" class="footer-item__link">
                                        TL-SHOP Mall
                                    </a>
                                </li>
                                <li class="footer-item">
                                    <a href="" class="footer-item__link">
                                        Hướng dẫn mua hàng
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col l-3 m-6 c-12">
                    <div class="footer-content">
                        <div class="">
                            <h3 class="footer-heading">VỀ TL-SHOP</h3>
                            <ul class="footer-list">
                                <li class="footer-item">
                                    <a href="" class="footer-item__link">
                                        Giới thiệu về TL-shop
                                    </a>
                                </li>
                                <li class="footer-item">
                                    <a href="" class="footer-item__link">
                                        Tuyển dụng
                                    </a>
                                </li>
                                <li class="footer-item">
                                    <a href="" class="footer-item__link">
                                        điều khoản TL-shop
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col l-3 m-6 c-12">
                    <div class="footer-content">
                        <div class="">
                            <h3 class="footer-heading">DANH MỤC</h3>
                            <ul class="footer-list">
                                <li class="footer-item">
                                    <a href="" class="footer-item__link">
                                       Giày Bóng Đá
                                    </a>
                                </li>
                                <li class="footer-item">
                                    <a href="" class="footer-item__link">
                                       Áo Quần Thể Thao
                                    </a>
                                </li>
                                <li class="footer-item">
                                    <a href="" class="footer-item__link">
                                        Bóng Đá
                                    </a>
                                </li>
                                <li class="footer-item">
                                    <a href="" class="footer-item__link">
                                        Phụ Kiện Bóng Đá
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col l-3 m-6 c-12">
                    <div class="footer-content">
                        <div class="">
                            <h3 class="footer-heading">THEO DÕI TL-SHOP</h3>
                            <ul class="footer-list">
                                <li class="footer-item">
                                    <a href="" class="footer-item__link">
                                        <i class="footer-item__link-icon fa-brands fa-facebook"></i>
                                        Facebook
                                    </a>
                                </li>
                                <li class="footer-item">
                                    <a href="" class="footer-item__link">
                                        <i class="footer-item__link-icon fa-brands fa-instagram"></i>
                                        fa-instagram
                                    </a>
                                </li>
                                <li class="footer-item">
                                    <a href="" class="footer-item__link">
                                        <i class=" footer-item__link-icon fa-brands fa-linkedin"></i>
                                        Linkedln
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- <div class="col l-3 m-6 c-12">
            <h3 class="footer-heading">VÀO TL-SHOP TRÊN ỨNG DỤNG</h3>
            <div class="footer-dowload">
                <img src="/assets/img/img-QR.png" alt="img qr" class="footer-dowload-qr">
                <div class="footer-dowload-apps">
                    <img src="/assets/img/img-ggplay.png" alt=" google chplay" class="footer-dowload-apps-img">
                  <img src="/assets/img/ing-appstore.png" alt="app store" class="footer-dowload-apps-img">
                </div>
            </div>
        </div> -->
            </div>
        </div>
        <div class="footer__bottom">
            <div class="grid">
                <div class="foooter-info">
                    <ul class="footer-infor-list">
                        <li class="footer-infor-item">
                            <a href="" class="footer-infor-item__link">
                                CHÍNH SÁCH BẢO MẬT
                            </a>
                        </li>
                        <li class="footer-infor-item">
                            <a href="" class="footer-infor-item__link">
                                QUY CHẾ HOẠT ĐỘNG
                            </a>
                        </li>
                        <li class="footer-infor-item">
                            <a href="" class="footer-infor-item__link">
                                CHÍNH SÁCH VẬN CHUYỂN
                            </a>
                        </li>
                        <li class="footer-infor-item">
                            <a href="" class="footer-infor-item__link">
                                CHÍNH SÁCH TRẢ HÀNG VÀ HOÀNG TIỀN
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="footer-infor__logo">
                    <img src="data:image/png;base64,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" alt="" class="foooter-info-img">
                    <span class="footer-infor__logo-text">Công ty TNHH TL-shop</span>
                </div>
                <div class="footer-infor__Address">
                    <span class="footer-infor__Address-item">
                        Địa chỉ: Tứ chánh , phong sơn , phong điền , thừa thiên Huế
                    </span>
                    <span class="footer-infor__Address-item">
                        Số điện thoại: 0355506752
                    </span>
                    <span class="footer-infor__Address-item">
                        &reg;2023-Bản quyền thuộc về công ty TL-shop
                    </span>
                </div>

            </div>
        </div>
    </footer>
    <script src="/assets/javascript/update_cart.js"></script>
    <script src="/assets/javascript/giohang.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const quantityButtons = document.querySelectorAll('.quantity-btn');

            quantityButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const action = this.classList.contains('plus') ? 'plus' : 'minus';
                    const productId = this.getAttribute('data-product-id');
                    updateQuantity(action, productId);
                });
            });
        });

        function updateQuantity(action, productId) {
            const quantityInput = document.getElementById(`quantity-${productId}`);
            const subtotalElement = document.getElementById(`subtotal-${productId}`);
            const totalElement = document.getElementById("cart-total");

            let currentQuantity = parseInt(quantityInput.value);
            const unitPrice = parseInt(subtotalElement.innerText.replace(/\D/g, '')) / currentQuantity;

            if (action === "plus") {
                currentQuantity++;
            } else if (action === "minus" && currentQuantity > 1) {
                currentQuantity--;
            }

            quantityInput.value = currentQuantity;
            const newSubtotal = currentQuantity * unitPrice;
            subtotalElement.innerText = newSubtotal.toLocaleString('vi-VN') + " đ";

            updateCartTotal();

            updateCartOnServer(productId, currentQuantity);
        }

        function updateCartTotal() {
            const subtotalElements = document.querySelectorAll('[id^="subtotal-"]');
            let total = 0;

            subtotalElements.forEach(subtotalElement => {
                const subtotal = parseFloat(subtotalElement.innerText.replace(/[^0-9]/g, ''));
                if (!isNaN(subtotal)) total += subtotal;
            });

            const totalElement = document.getElementById("cart-total");
            totalElement.innerText = total.toLocaleString('vi-VN') + " đ";
        }

        async function updateCartOnServer(productId, quantity) {
            try {
                const response = await fetch("update_cart.php", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                    },
                    body: JSON.stringify({
                        product_id: productId,
                        action: quantity > 1 ? 'increase' : 'decrease'
                    }),
                });

                const result = await response.json();
                if (result.status === "success") {
                    // Cập nhật tổng thanh toán
                    updateCartTotal();
                } else {
                    alert("Lỗi: " + result.message);
                }
            } catch (error) {

            }
        }
    </script>
</body>

</html>