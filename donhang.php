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
	<title>QuangHuy_Sports11</title>
	<link href="./assets/css/app.css" rel="stylesheet">
	<link rel="stylesheet" href="/assets/css/test.css">
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
						Quản lý tài khoản
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="adminKH.php">
							<i class="align-middle" data-feather="user"></i> <span class="align-middle">Khách Hàng</span>
						</a>
					</li>

					<li class="sidebar-header">
						Quản lý sản phẩm
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="themsanpham.php">
							<i class="align-middle" data-feather="arrow-up-circle"></i> <span class="align-middle">Thêm sản Phẩm</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="danhsachsanpham.php">
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
			<nav style="background-color: #ccc;" class="navbar navbar-expand navbar-light navbar-bg">
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
							<img style=" object-fit: contain;" src="/assets/img/logo (2).png"
								class="avatar img-fluid rounded me-1" alt="avatar" /> <span class="text-dark"><?php echo $admin_name ?></span>
						</a>
						<?php

						?>
						<!-- tài khoản admin -->
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


					<td class="customer__table--item">Tên khách hàng</td>
					<td class="customer__table--item">Tên Sản Phẩm</td>
					<td class="customer__table--item">Hình Ảnh</td>
					<td class="customer__table--item">Kích Cỡ</td>
					<td class="customer__table--item">Số Lượng</td>
					<td class="customer__table--item">SĐT</td>
					<td class="customer__table--item">Địa chỉ Giao hàng</td>
					<td class="customer__table--item">Tổng tiền</td>
					<td class="customer__table--item">Ngày đặt</td>
					<td class="customer__table--item">Chức Năng</td>
					<td class="customer__table--item">Tùy Chọn</td>


					</tr>
					<?php
					$conn = mysqli_connect("localhost:3366", "root", "", "MYPHAM");
					$sql = "SELECT * FROM orders";
					$result = mysqli_query($conn, $sql);

					while ($row = mysqli_fetch_array($result)) {
						// Giải mã JSON trong trường product_details


						if (!empty($product_details)) {
							$first_item = $product_details[0];
						} else {
							$product_image = '';
						}
					?>
						<tr class="customer__table--body">

							<td class="customer__table--body-item"><?php echo $row['full_name']; ?></td>
							<td class="customer__table--body-item"><?php echo $row['product_name']; ?></td>
							<td class="customer__table--body-item">
								<img src="<?php echo $row['product_image']; ?>" alt="Product Image" style="width: 100px; height: auto;">
							</td>
							<td class="customer__table--body-item"><?php echo $row['product_size']; ?></td>
							<td class="customer__table--body-item"><?php echo $row['product_quantity']; ?></td>
							<td class="customer__table--body-item"><?php echo $row['phone']; ?></td>
							<td class="customer__table--body-item">
								<?php echo $row['specific_address'] . ', ' . $row['ward'] . ', ' . $row['district'] . ', ' . $row['city']; ?>
							</td>
							<td class="customer__table--body-item"><?php echo $row['total_price']; ?></td>
							<td class="customer__table--body-item"><?php echo $row['created_at']; ?></td>
							<td class="customer__table--body-item">
							<form action="delete_order.php" method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn xóa đơn hàng này không?');">
									<!-- Hidden input để truyền ID -->
									<input type="hidden" name="order_id" value="<?php echo $row['order_id']; ?>">
									<button style="margin-top: 15px;" class="button_delete_order" type="submit">
										<span class="button__text">Xóa</span>
										<span class="button__icon">
											<svg class="svg" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg">
												<path d="M112,112l20,320c.95,18.49,14.4,32,32,32H348c17.67,0,30.87-13.51,32-32l20-320" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></path>
												<line style="stroke:#fff;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px" x1="80" x2="432" y1="112" y2="112"></line>
												<path d="M192,112V72h0a23.93,23.93,0,0,1,24-24h80a23.93,23.93,0,0,1,24,24h0v40" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></path>
												<line style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" x1="256" x2="256" y1="176" y2="400"></line>
												<line style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" x1="184" x2="192" y1="176" y2="400"></line>
												<line style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" x1="328" x2="320" y1="176" y2="400"></line>
											</svg>
										</span>
									</button>
								</form>
							</td>
							<td style="text-align: center;" class="customer__table--body-item">
								<!-- Form lưu trạng thái -->
								<form action="update_status.php" method="POST">
									<!-- Select trạng thái -->
									<select style="max-width: 200px; width: 100%;" name="trangthai">
										<option value="Xác Nhận Đơn Hàng" <?php if ($row['status'] == "Xác Nhận Đơn Hàng") echo "selected"; ?>>Xác Nhận Đơn Hàng</option>
										<option value="Người Bán Đang Chuẩn Bị Đơn Hàng" <?php if ($row['status'] == "Người Bán Đang Chuẩn Bị Đơn Hàng") echo "selected"; ?>>Người Bán Đang Chuẩn Bị Đơn Hàng</option>
										<option value="Đơn Hàng Đã Được Gửi Đi" <?php if ($row['status'] == "Đơn Hàng Đã Được Gửi Đi") echo "selected"; ?>>Đơn Hàng Đã Được Gửi Đi</option>
										<option value="Đã Giao Hàng" <?php if ($row['status'] == "Đã Giao Hàng") echo "selected"; ?>>Đã Giao Hàng</option>
									</select>
									<!-- Hidden input để truyền ID -->
									<input type="hidden" name="order_id" value="<?php echo $row['order_id']; ?>">
									<!-- Nút lưu -->
									<button style="display: flex; align-items: center; margin-top: 10px;" class="bookmarkBtn" type="submit">
										<span class="IconContainer">
											<svg viewBox="0 0 384 512" height="0.9em" class="icon">
												<path
													d="M0 48V487.7C0 501.1 10.9 512 24.3 512c5 0 9.9-1.5 14-4.4L192 400 345.7 507.6c4.1 2.9 9 4.4 14 4.4c13.4 0 24.3-10.9 24.3-24.3V48c0-26.5-21.5-48-48-48H48C21.5 0 0 21.5 0 48z"></path>
											</svg>
										</span>
										<p class="text">Lưu</p>
									</button>
								</form>
								<!-- Form xóa đơn hàng -->
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