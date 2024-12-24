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
    <link rel="stylesheet" href="/assets/css/base.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/css/grid.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">
    <link rel="stylesheet" href="/assets/css/test.css">
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
        <div class="app__container">

            <!-- chi tiết sản phẩm -->

            <?php
            $conn = mysqli_connect("localhost:3366", "root", "", "MYPHAM");

            // Truy vấn dữ liệu sản phẩm
            $sql = "SELECT * , ((priceOld - priceNew) / priceOld * 100) AS priceDiscount FROM SANPHAM WHERE id =" . $_GET['idsp'];
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);

            // Lấy danh sách hình ảnh
            $images = [];
            if (!empty($row['urlImg'])) $images[] = $row['urlImg'];
            if (!empty($row['img_sub1'])) $images[] = $row['img_sub1'];
            if (!empty($row['img_sub2'])) $images[] = $row['img_sub2'];

            // Lấy danh sách kích thước
            $sizes = [];
            for ($i = 1; $i <= 6; $i++) {
                if (!empty($row["size_$i"])) {
                    $sizes[] = $row["size_$i"];
                }
            }
            $sub_img_product = [];
            if (!empty($row['img_sub_product1'])) $sub_img_product[] = $row['img_sub_product1'];
            if (!empty($row['img_sub_product2'])) $sub_img_product[] = $row['img_sub_product2'];
            if (!empty($row['img_sub_product3'])) $sub_img_product[] = $row['img_sub_product3'];
            if (!empty($row['img_sub_product4'])) $sub_img_product[] = $row['img_sub_product4'];
            if (!empty($row['img_sub_product5'])) $sub_img_product[] = $row['img_sub_product5'];
            if (!empty($row['img_sub_product6'])) $sub_img_product[] = $row['img_sub_product6'];
            if (!empty($row['img_sub_product7'])) $sub_img_product[] = $row['img_sub_product7'];
            if (!empty($row['img_sub_product8'])) $sub_img_product[] = $row['img_sub_product8'];
            if (!empty($row['img_sub_product9'])) $sub_img_product[] = $row['img_sub_product9'];
            ?>

            <div class="detail__body">
                <div class="detail__container" id="detail-id">
                    <div class="img-main-product">
                        <div class="detail__img" id="detail__img-id" style="background-image: url(<?php echo $images[0]; ?>);">
                        </div>
                        <div class="image_product">
                            <?php
                            foreach ($sub_img_product as $sub_img_products) {
                            ?>
                                <div>
                                    <img src="<?php echo  $sub_img_products; ?>" alt="" style="width: 70px; height: 70px;">
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                        <button id="prev-btn" class="nav-btn left-btn">◀</button>
                        <button id="next-btn" class="nav-btn right-btn">▶</button>
                    </div>
                    <div class="detail__content">
                        <h2 class="detail__name" id="detail__name-id">
                            <?php echo $row['title']; ?>
                        </h2>
                        <div class="detail__infor">
                            <div class="detail__infor-percentStar">
                                <span class="detail__infor-percent">5</span>
                                <div class="detail__infor-star">
                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                </div>
                            </div>
                            <div class="detail__infor-Evaluate">
                                <span class="detail__infor-Evaluate__number" id="detail__infor-Evaluate__number-id"><?php echo $row['evaluate']; ?></span>
                                <span class="detail__infor-Evaluate__letter">Đánh Giá</span>
                            </div>
                            <div class="detail__infor-sold">
                                <span class="detail__infor-sold__number" id="detail__infor-sold__number-id"><?php echo $row['sold']; ?></span>
                                <span class="detail__infor-sold__letter">Đã Bán</span>
                            </div>
                        </div>
                        <div class="detail__price">
                            <span class="detail__price-old" id="detail__price-old-id"><?php echo $row['priceOld'] . 'đ'; ?></span>
                            <span class="detail__price-curent" id="detail__price-curent-id"><?php echo $row['priceNew'] . 'đ'; ?></span>
                            <span class="detail__price-sale" id="detail__price-sale-id"><?php echo intval($row['priceDiscount']) . '% GIẢM'; ?></span>
                        </div>
                        <div class="detail__shopDiscounts">
                            <span class="detail__title">Mã Giảm của Shop</span>
                            <ul class="detail__shopDiscounts-list">
                                <li class="detail__shopDiscounts-item" id="detail__shopDiscounts-item-id"><?php echo 'Giảm ' . $row['discount'] . 'k'; ?></li>
                            </ul>
                        </div>
                        <div class="detail__deal">
                            <span class="detail__deal-title">Deal sốc</span>
                            <span class="detail__deal-item">Mua kèm Deal Sốc</span>
                        </div>

                        <!-- Danh sách hình ảnh phụ -->
                        <div class="detail__classify">
                            <span class="detail__classify-title">Hình Ảnh</span>
                            <ul class="detail__classify-list image-list">
                                <?php foreach ($images as $img) { ?>
                                    <li class="detail__classify-item" onclick="selectImage(this, '<?php echo $img; ?>')">
                                        <div class="detail__classify-item__content">
                                            <div class="detail__classify-item-img">
                                                <img style="width: 60px; height: 60px;" src="<?php echo $img; ?>" alt="">
                                            </div>
                                        </div>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>

                        <div class="detail__classify" id="detail__classify_size">
                            <span class="detail__classify-title">Kích Cỡ</span>
                            <ul class="detail__classify-list size-list" id="detail_classify_list_size">
                                <?php foreach ($sizes as $size) { ?>
                                    <li class="detail__classify-item size" onclick="selectSize(this, '<?php echo $size; ?>')">
                                        <span class="detail__classify-size"><?php echo $size; ?></span>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>


                        <!-- Số lượng -->
                        <div class="detail__quantity">
                            <span class="detail__quantity-title">Số Lượng Hàng Còn Trong Kho</span>
                            <div class="detail__quantity-container">
                                <div class="detail__quantity-content">
                                       <span style="text-wrap: nowrap;" class="detail__quantity-product"> <?php echo $row['available'] . ' sản phẩm có sẵn'; ?></span>
                                </div>
                            </div>
                        </div>

                        <form method="POST" action="add_to_cart.php">
                            <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
                            <input type="hidden" name="product_name" value="<?php echo $row['title']; ?>">
                            <input type="hidden" name="product_price" value="<?php echo $row['priceNew']; ?>">
                            <input type="hidden" name="product_size" value="<?php echo isset($size) ? $size : 'Không có size'; ?>">
                            <input type="hidden" name="product_img" value="<?php echo $images[0]; ?>">
                            <div style="text-align: center;" class="form_add_to_cart">
                            <button type="submit" name="add_to_cart" class="btn_add_to_cart" id="addToCartBtn">
    Thêm Vào Giỏ Hàng
</button>
<button type="submit" name="buy_now" class="button_buy_now" id="buyNowBtn">
    Mua Ngay 
</button>

                            </div>
                        </form>



                    </div>
                </div>
            </div>
            <?php

            ?>
        </div>

        <div class="evaluate-container">
            <?php
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            if (isset($_COOKIE['customer_id'])) {
                $customer_name = $_COOKIE['customer_name'];
            }
            ?>
            <div class="evaluate-form">
                <h1 class="evaluate-container__title">Đánh giá Sản phẩm</h1>
                <?php
                $conn = mysqli_connect("localhost:3366", "root", "", "MYPHAM");
                $sql = "SELECT * FROM binhluan WHERE idsp = " . $_GET['idsp'] . " ORDER BY ngayBL DESC";
                $kq = mysqli_query($conn, $sql);
                echo '<div id="dsbinhluan">';
                while ($row = mysqli_fetch_array($kq)) {
                ?>
                    <div class="comment-card">
                        <div class="comment-header">
                            <span class="comment-author"><?php echo $row["tenKH"]; ?></span>
                            <span class="comment-date"><?php echo $row["ngayBL"]; ?></span>
                        </div>
                        <div class="comment-content"><?php echo $row["noidung"]; ?></div>
                        <?php if (!empty($row["hinhanh"])) { ?>
                            <div class="comment-image">
                                <img style="width: 250px; object-fit: contain;" src="<?php echo $row["hinhanh"]; ?>" alt="Hình ảnh đánh giá">
                            </div>
                        <?php } ?>
                    </div>
                <?php
                }
                echo '</div>';
                ?>
                <?php if (isset($_COOKIE['customer_id'])) { ?>
                    <div class="evaluate-input">
                        <input type="hidden" id="idsp" name="idsp" value="<?php echo $_GET['idsp']; ?>">
                        <input type="hidden" id="ten" name="tenKH" value="<?php echo $customer_name; ?>">
                        <input type="hidden" id="date" name="ngayBL" value="<?php echo date("d-m-y H:i:s"); ?>">

                        <!-- Trường nhập đánh giá -->
                        <div class="brutalist-container">
                            <input
                                id="noidung"
                                name="noidung"
                                placeholder="Vui Lòng Nhập Đánh Giá Của Bạn"
                                class="brutalist-input smooth-type"
                                type="text">
                            <label class="brutalist-label">QuangHuy_Sports11</label>

                        </div>

                        <!-- Trường tải ảnh -->
                        <label style="margin-top: 35px;" for="image" class="upload-label">
                            Vui Lòng Chọn Hình Ảnh Nếu Có:
                            <div class="container">
                                <div class="folder">
                                    <div class="front-side">
                                        <div class="tip"></div>
                                        <div class="cover"></div>
                                    </div>
                                    <div class="back-side cover"></div>
                                </div>
                                <label class="custom-file-upload">
                                <input type="file" id="image" name="image" accept="image/*">
                                    Choose a file
                                </label>
                            </div>

                        </label>


                        <button id="gui">
                            <div class="svg-wrapper-1">
                                <div class="svg-wrapper">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24"
                                        width="20"
                                        height="20">
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path
                                            fill="currentColor"
                                            d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>
                                    </svg>
                                </div>
                            </div>
                            <span>Gửi</span>
                        </button>
                    </div>
                <?php } ?>
            </div>
        </div>

        <script>
            $("#gui").click(function() {
                $.ajax({
                        method: "post",
                        url: 'thembinhluan.php',
                        data: {
                            idsp: $('#idsp').val(),
                            ten: $('#ten').val(),
                            noidung: $('#noidung').val(),
                            date: $('#date').val()
                        }
                    })
                    .done(function(data) {
                        $('#dsbinhluan').append(
                            ' <div class="showComment">' +
                            '<div class="showComment__box">' +
                            '<span class="showComment__name">' + $('#ten').val() + '</span>' +
                            ' <span class="showComment__date">' + $('#date').val() + '</span>' +
                            '</div>' +
                            ' <div class="showComment__content">' + $('#noidung').val() + '</div>' +
                            '</div>'
                        );

                        $('#noidung').val('');
                    })
                    .fail(function(data) {});
            });
            $("#gui").click(function() {
                let formData = new FormData();
                formData.append("idsp", $('#idsp').val());
                formData.append("ten", $('#ten').val());
                formData.append("noidung", $('#noidung').val());
                formData.append("date", $('#date').val());
                formData.append("image", $('#image')[0].files[0]);

                $.ajax({
                        method: "POST",
                        url: 'thembinhluan.php',
                        data: formData,
                        processData: false,
                        contentType: false,
                    })
                    .done(function(data) {
                        alert("Đánh giá đã được gửi!");
                        location.reload(); // Tải lại trang để hiển thị đánh giá mới
                    })
                    .fail(function() {
                        alert("Đã xảy ra lỗi. Vui lòng thử lại!");
                    });
            });
        </script>


    </div>
    <script src="/assets/javascript/login.js"></script>
    <script>
        const imageUrls = <?php echo json_encode($sub_img_product); ?>;
    </script>
    <script src="/assets/javascript/chitietsanpham.js"></script>
</body>

</html>