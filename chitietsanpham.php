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
           " class="header__navbar-icon-link" >
            <i class=" header__navbar-icon fa-brands fa-facebook"></i>
           </a>
          
           <a href="" class="header__navbar-icon-link" >
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
                          <img src="data:image/jpeg;base64,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" alt="Ảnh mỹ phẩm Ohui chính hãng" class="header__notify-img">
                          <div class="header__notify-info">
                            <span class="header__notify-name">Ohui giảm giá cực sốc toàn bộ mỹ phẩm chỉ còn 599.000 vnd</span>
                            <span class="header__notify-descriotion">Chương trình khuyến mãi chỉ diễn ra từ ngày 20-4 cho đến 30-4</span>

                          </div>
                        </a>
                    </li>
                    <li class="header__notify-item">
                        <a href="" class="header__notify-link">
                          <img src="https://cdn.vuahanghieu.com/unsafe/0x0/left/top/smart/filters:quality(90)/https://cdn.vuahanghieu.com/unsafe/823x0/left/top/smart/filters:quality(90)/https://admin.vuahanghieu.com/upload/news/2020/07/bo-my-pham-ohui-gia-bao-nhieu-top-10-set-ohui-ban-chay-nhat-tren-thi-truong-14072020151956.jpg" alt="Ảnh mỹ phẩm Ohui chính hãng" class="header__notify-img">
                          <div class="header__notify-info">
                            <span class="header__notify-name">SALE SỐC! 70% bộ dưỡng Ohui The First tái tạo trẻ hóa da </span>
                            <span class="header__notify-descriotion"> giá chỉ còn 375.000vnd(giá gốc 1.250.000nvd)</span>

                          </div>
                        </a>
                    </li>
                    <li class="header__notify-item">
                        <a href="" class="header__notify-link">
                          <img src="https://i0.wp.com/shopmyphamohuiwhoo.com/images/shopmyphamohuiwhoocom/2019/03/%E1%BA%A3nh-1-8.png" alt="Ảnh mỹ phẩm Ohui chính hãng" class="header__notify-img">
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
        
        <div class="modal" id="modal_1" >
            <div class="modal__overlay" id="overlay"></div>
                <div class="modal__body"> 
                    <!-- Register form -->
                    <form  action="xulyRegister.php"  method="POST" class="auth-form__register" id="register" >
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
                                <input type="email"name="createEmail" class="auth-form__input" placeholder="Nhập email hoặc số điện thoại của bạn">
                            </div>
                            <div class="auth-form__group">
                                <input type="password"name="createPass" class="auth-form__input" placeholder="Nhập mật khẩu của bạn">
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
        if(!isset($_COOKIE['customer_id'])){
          echo  '<li class="header__navbar-item header__navbar-item-strong header__navbar-item-separate" id="Register">Đăng Ký</li>';
           echo  ' <li class="header__navbar-item header__navbar-item-strong" id="Login" > Đăng Nhập </li>';
        }
        ?>
       

       <li class="header__navbar-item header__navbar-user">
       
            <?php
              // Lấy giá trị của cookie 'customer_id'
               if(isset($_COOKIE['customer_id'] , $_COOKIE['customer_name'])) {
                 $customer_name = $_COOKIE['customer_name'];
            
                 echo '<img src="https://www.shutterstock.com/image-vector/default-avatar-profile-icon-social-260nw-1913928688.jpg" alt="" class="header__navbar-user-img ">';
                 echo '<span class="header__navbar-user-name">' . $customer_name.'</span>';
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
                <a href="" class="header__logo-link">
                </svg> 
               <img src="/assets/img/logo (2).png" alt="anhlogo" class="header__logo-img">

            </a>
            </div>
        <form class="header__search" action="index.php" method="POST">
            <div class="header__search-input-swap">
                <input type="text" name="search_Keywords" class="header__search-input" autocomplete="off" placeholder="Tìm kiếm sản phẩm trong shop">
                <!-- search history -->
                <div class="header__search-history">
                    <h3 class="header__search-history-heading" >Lịch sử tìm kiếm</h3>
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
            <!-- <div class="header__search-select">
                <span class="header__search-select-lable">Trong Shop</span>
                <i class=" header__search-select-icon fa-solid fa-chevron-down"></i>
            <ul class="header__search-option">
                <li class="header__search-option-item header__search-option-item--active">
                    <span>Trong shop</span>
                    <i class="fa-solid fa-check"></i>
                </li>
                <li class="header__search-option-item ">
                    <span>Ngoài shop</span>
                    <i class="fa-solid fa-check"></i>
                </li>
            </ul>
            </div> -->
            <button name="btn_search" class="header__search-btn">
                <i class=" header__search-btn-icon fa-solid fa-magnifying-glass"></i>
            </button>
        </form>
   

        <!-- Giỏ hàng -->
        <div class="header__cart">   
                    <div  class="header__cart-swap">               
                        <i class=" header__cart-icon fa-sharp fas fa-cart-shopping"></i>
                                <?php
                                    $ok=1;
                                    if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])){                 
                                    foreach($_SESSION['cart'] as $k=>$v){ // $k là id khách hàng ,$v id sản phẩm của khách hàng đó
                                    if(!empty($v)){
                                    $ok=2;
                                    }
                                    }
                                    }
                                    if ($ok != 2){        
                                    ?>
                                <span class="header__cart-swap-notice">0</span>
                                    <!-- no cart : header__cart-list-no-cart  (them header__cart-list-no-cart
                                        vao header__cart-list de chuyen ve no cart )-->
                                    <div class="header__cart-list header__cart-list-no-cart  ">
                                        <img src="/assets/img/no_cart.png" alt="no-cart-img" class=" header__cart-list-no-cart-img">
                                        <span class="header__cart-list-no-cart-msg">
                                            Chưa có sản phẩm
                                        </span>
                                    </div>
                                    <?php         
                                    }else{
                                        $items = $_SESSION['cart'][$customer_id] ?? [];
                                    ?>
                                        <span class="header__cart-swap-notice"><?php echo count($items)?></span>
                                        <div class="header__cart-list ">    
                                                <h4 class="header__cart-heading">Sản phẩm đã thêm</h4>
                                    <?php
                                    $item = [];
                                    foreach($_SESSION['cart'][$customer_id] ?? [] as $product_id =>$value){
                                        $item[]= $product_id; // chứa các id sản phẩm
                                    }
                                    if (!empty($item)) { 
                                        $str= implode(",",$item); // chuyển mảng thành chuỗi
                                        $conn = mysqli_connect("localhost","root","","MYPHAM");
                                        $sql = " SELECT * FROM  SANPHAM WHERE id IN ($str)";
                                        $result = mysqli_query($conn,$sql);
                                        while($row = mysqli_fetch_array($result)){
                                    ?>        
                                    <a href="giohang.php" class="header__cart-list-item__link">                 
                                        <ul class="header__cart-list-item">                           
                                            <li class="header__cart-item">
                                                <img src="<?php echo $row['urlImg']?>" alt="" class="header__cart-img">
                                                <div class="header__cart-item-info">
                                                            <div class="header__cart-item-head">
                                                                <h5 class="header__cart-item-name"><?php echo $row['title']?></h5>
                                                                <div class="header__cart-item-price-wrap">
                                                                    <span class="header__cart-item-price"><?php echo $row['priceNew'].'đ'?></span>
                                                                    <!-- <span class="header__cart-item-multiply">x</span>
                                                                    <span class="header__cart-item-qnt">2</span> -->
                                                                </div>
                                                            </div>
                                                            <div class="header__cart-item-body">
                                                                <span class="header__cart-item-description">
                                                                    Phân loại hàng: chính hãng
                                                                </span>
                                                                <!-- <span class="header__cart-item-remove">Xóa</span> -->
                                                        <a href="xoagiohang.php?productid=<?php echo $row['id']?>"  class="header__cart-item-remove">Xóa</a>

                                                            </div>
                                                </div>  
                                            </li>                                        
                                        </ul>
                                        </a>  
                                        <?php
                                            }
                                        }
                                        ?>  
                                        <a class=" header__cart-view btn btn--primary" href="giohang.php">Xem giỏ hàng</a>
                                 </div>  
                            <?php
                            
                            }
                            ?>   
                                
                    </div>
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
                                    <li class="detail__classify-item" onclick="selectSize(this, '<?php echo $size; ?>')">
                                        <span class="detail__classify-size"><?php echo $size; ?></span>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>


                        <!-- Số lượng -->
                        <div class="detail__quantity">
                            <span class="detail__quantity-title">Số Lượng</span>
                            <div class="detail__quantity-container">
                                <div class="detail__quantity-content">
                                    <button class="detail__quantity-content__minus" onclick="decreaseQuantity()"><i class="fa-solid fa-minus detail__quantity-content__minus-icon"></i></button>
                                    <span class="detail__quantity-content__show" id="quantity-id">1</span>
                                    <button class="detail__quantity-content__add" onclick="increaseQuantity()"><i class="fa-solid fa-plus"></i></button>
                                </div>
                            </div>
                            <span class="detail__quantity-product"> <?php echo $row['available'] . ' sản phẩm có sẵn'; ?></span>
                        </div>

                        <form method="POST" action="add_to_cart.php">
                            <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
                            <input type="hidden" name="product_name" value="<?php echo $row['title']; ?>">
                            <input type="hidden" name="product_price" value="<?php echo $row['priceNew']; ?>">
                            <input type="hidden" name="product_img" value="<?php echo $images; ?>">
                            <input type="hidden" name="product_size" value="<?php echo $size; ?>">
                            <div class="form_add_to_cart">
                                <button type="submit" name="add_to_cart" class="detail__select-addCart">
                                    <i class="fa-solid fa-cart-shopping"></i> Thêm Vào Giỏ Hàng
                                </button>
                                <a href="muangay.php?item=<?php echo $row['id']; ?>" name="buyNow" class="detail__select-buy">Mua Ngay</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <?php

            ?>
        </div>

        <div class="evaluateContainer">
            <?php
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            if (isset($_COOKIE['customer_id'])) {
                $customer_name = $_COOKIE['customer_name'];
            }
            ?>
            <div class="evaluateForm">
                <h1 class="evaluatecontainer__title">Đánh giá Sản phẩm</h1>
                <?php
                $conn = mysqli_connect("localhost:3366", "root", "", "MYPHAM");
                $sql = "SELECT * FROM binhluan WHERE idsp = " . $_GET['idsp'] . " ORDER BY ngayBL DESC";
                $kq = mysqli_query($conn, $sql);
                echo '<div id="dsbinhluan">';
                while ($row = mysqli_fetch_array($kq)) {
                ?>
                    <div class="showComment">
                        <div class="showComment__box">
                            <span class="showComment__name"><?php echo $row["tenKH"] ?></span>
                            <span class="showComment__date"><?php echo $row["ngayBL"] ?></span>
                        </div>
                        <div class="showComment__content"><?php echo $row["noidung"] ?></div>
                    </div>
                <?php
                }
                echo '</div>';
                ?>
                <?php
                if (isset($_COOKIE['customer_id'])) {
                ?>
                    <div class="evaluateContent">
                        <input type="hidden" id="idsp" name="idsp" value="<?php echo $_GET['idsp']; ?>">
                        <input type="hidden" id="ten" name="tenKH" value="<?php echo  $customer_name ?>">
                        <input type="hidden" id="date" name="ngayBL" value="<?php echo date("d-m-y H:i:s"); ?>">
                        <input type="text" class="evaluateBox" id="noidung" placeholder="Đánh giá sản phẩm"></input>
                        <button class="evaluateEnter" id="gui"><i class="fa-regular fa-paper-plane"></i></button>
                    </div>
                <?php
                }
                ?>
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
        </script>
        <!-- <form class="modal__added-cart" id="added-cart-id" >
            <div class="modal__added-cart-body"> 
              <div class="Show__added-cart">
              <i class=" Show__added-cart__icon fa-solid fa-circle-check"></i>
                <span class="Show__added-cart__msg">Sản phẩm đã được thêm vào giỏ hàng</span>
              </div>
            </div>
    </form> -->


    </div>
    <script src="/assets/javascript/login.js"></script>
    <script>
        const imageUrls = <?php echo json_encode($sub_img_product); ?>;
    </script>
    <script src="/assets/javascript/chitietsanpham.js"></script>
</body>

</html>