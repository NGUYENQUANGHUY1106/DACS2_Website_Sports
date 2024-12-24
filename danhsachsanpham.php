<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />
	<link rel="stylesheet" href="./assets/css/main.css">
	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>QuangHuySports</title>

	<link href="./assets/css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<!-- sidebar admin -->
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
					<span class="align-middle">ADMIN-SHOP</span>
				</a>
				<ul class="sidebar-nav">

					<li class="sidebar-item active">
						<a class="sidebar-link" href="admin.php">
							<i class="align-middle" data-feather="home"></i> <span class="align-middle">Trang chủ</span>
						</a>
					</li>
					<li class="sidebar-header">
						Quản lý tài khoảng
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="adminKH.php">
							<i class="align-middle" data-feather="user"></i> <span class="align-middle">Khách Hàng</span>
						</a>
					</li>

					<li class="sidebar-header">
						Quảng lý sản phẩm
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="themsanpham.php">
							<i class="align-middle" data-feather="arrow-up-circle"></i> <span class="align-middle">Thêm sản Phẩm</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="#">
							<i class="align-middle" data-feather="list"></i> <span class="align-middle">Danh sách sản phẩm</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="khosanpham.php">
							<i class="align-middle" data-feather="database"></i> <span class="align-middle">Kho sản phẩm</span>
						</a>
					</li>


					<li class="sidebar-header">
						Quản lý đơn hàng
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="donhang.php">
							<i class="align-middle" data-feather="shopping-cart"></i> <span class="align-middle">Đơn hàng</span>
						</a>
					</li>


				</ul>


			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
					<i class=" sidebar-toggle--icon hamburger align-self-center"></i>
				</a>
				<div class="navbar-collapse collapse">
					<div class="navbar-nav navbar-align">
						<?php
						if (isset($_COOKIE['admin_id'], $_COOKIE['admin_name'])) {
							$admin_name = $_COOKIE['admin_name'];
						}
						?>
						<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
							<img src="/assets/img/logo (2).png"
								class="avatar img-fluid rounded me-1" alt="avatar" /> <span class="text-dark"><?php echo $admin_name ?></span>
						</a>
						<?php

						?>
						<!-- tài khoảng admin -->
						<div class="dropdown-menu dropdown-menu-end">
							<a class="dropdown-item" href="RegisterAdmin.html"><i class="align-middle me-1" data-feather="user"></i> Đăng Ký</a>
							<a class="dropdown-item" href="admin.php"><i class="align-middle me-1" data-feather="pie-chart"></i> phân tích</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="xulylogoutAdmin.php">
								<i class="align-middle" data-feather="power"></i>
								Log out
							</a>
						</div>
					</div>
				</div>
			</nav>

			<div class="customer__container">
				<h1 class="customer__title">Quản lý sản phẩm của shop </h1>
				<table align="center" border="1px" cellspacing="0px" class="customer__table">

					<tr class="customer__table--navbar">
						<td class="customer__table--item">Tên Sản Phẩm</td>
						<td class="customer__table--item">Hình Ảnh1</td>
						<td class="customer__table--item">Hình Ảnh2</td>
						<td class="customer__table--item">Hình Ảnh3</td>
						<td class="customer__table--item">Ảnh Phụ 1</td>
						<td class="customer__table--item">Ảnh Phụ 2</td>
						<td class="customer__table--item">Ảnh Phụ 3</td>
						<td class="customer__table--item">Ảnh Phụ 4</td>
						<td class="customer__table--item">Ảnh Phụ 5</td>
						<td class="customer__table--item">Ảnh Phụ 6</td>
						<td class="customer__table--item">Ảnh Phụ 7</td>
						<td class="customer__table--item">Ảnh Phụ 8</td>
						<td class="customer__table--item">Ảnh Phụ 9</td>
						<td class="customer__table--item">Giá Cũ</td>
						<td class="customer__table--item">Giá Mới</td>
						<td class="customer__table--item">Size</td>
						<td class="customer__table--item">Size1</td>
						<td class="customer__table--item">Size2</td>
						<td class="customer__table--item">Size3</td>
						<td class="customer__table--item">Size4</td>

						<td class="customer__table--item">Hành Động</td>

					</tr>
					<?php
					$conn = mysqli_connect("localhost:3366", "root", "", "MYPHAM");
					$sql = " SELECT * FROM  SANPHAM ";
					$result = mysqli_query($conn, $sql);
					while ($row = mysqli_fetch_array($result)) {
					?>
						<tr class="customer__table--body">
							<td class="customer__table--body-item"><?php echo $row['title'] ?></td>
							<td class=" customer__table--body-item">
								<div class="customer__table--body-item__img" style="background-image: 
                            url(<?php echo $row['urlImg'] ?>);"></div>
							</td>
							<td class=" customer__table--body-item">
								<div class="customer__table--body-item__img" style="background-image: 
                            url(<?php echo $row['img_sub1'] ?>);"></div>
							</td>
							<td class=" customer__table--body-item">
								<div class="customer__table--body-item__img" style="background-image: 
                            url(<?php echo $row['img_sub2'] ?>);"></div>
							</td>
							<td class=" customer__table--body-item">
								<div class="customer__table--body-item__img" style="background-image: 
                            url(<?php echo $row['img_sub_product1'] ?>);"></div>
							</td>
							<td class=" customer__table--body-item">
								<div class="customer__table--body-item__img" style="background-image: 
                            url(<?php echo $row['img_sub_product2'] ?>);"></div>
							</td>
							<td class=" customer__table--body-item">
								<div class="customer__table--body-item__img" style="background-image: 
                            url(<?php echo $row['img_sub_product3'] ?>);"></div>
							</td>
							<td class=" customer__table--body-item">
								<div class="customer__table--body-item__img" style="background-image: 
                            url(<?php echo $row['img_sub_product4'] ?>);"></div>
							</td>
							<td class=" customer__table--body-item">
								<div class="customer__table--body-item__img" style="background-image: 
                            url(<?php echo $row['img_sub_product5'] ?>);"></div>
							</td>
							<td class=" customer__table--body-item">
								<div class="customer__table--body-item__img" style="background-image: 
                            url(<?php echo $row['img_sub_product6'] ?>);"></div>
							</td>
							<td class=" customer__table--body-item">
								<div class="customer__table--body-item__img" style="background-image: 
                            url(<?php echo $row['img_sub_product7'] ?>);"></div>
							</td>
							<td class=" customer__table--body-item">
								<div class="customer__table--body-item__img" style="background-image: 
                            url(<?php echo $row['img_sub_product8'] ?>);"></div>
							</td>
							<td class=" customer__table--body-item">
								<div class="customer__table--body-item__img" style="background-image: 
                            url(<?php echo $row['img_sub_product9'] ?>);"></div>
							</td>

							<td class="customer__table--body-item"><?php echo $row['priceOld'] ?></td>
							<td class="customer__table--body-item"><?php echo $row['priceNew'] ?></td>

							<td class="customer__table--body-item"><?php echo $row['size'] ?></td>
							<td class="customer__table--body-item"><?php echo $row['size_1'] ?></td>
							<td class="customer__table--body-item"><?php echo $row['size_2'] ?></td>
							<td class="customer__table--body-item"><?php echo $row['size_3'] ?></td>
							<td class="customer__table--body-item"><?php echo $row['size_4'] ?></td>

							<td class="customer__table--body-item">
								<!-- <a  href="themsanpham.php" class="customer__table--body-btn-cre" >Thêm</a> -->
								<a href="suasanpham.php?id=<?php echo $row['id']; ?>" class="customer__table--body-btn-upd">Sửa</a>
								<a href="Xoasanpham.php?id=<?php echo $row['id']; ?>" class="customer__table--body-btn-del">Xóa</a>

							</td>
						</tr>
					<?php
					}
					?>
				</table>
			</div>
		</div>
	</div>

	<script src="./assets/javascript/app.js"></script>

</body>

</html>