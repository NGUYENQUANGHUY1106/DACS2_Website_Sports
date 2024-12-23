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

	<title>QuangHuy Sports11</title>

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
						<a class="sidebar-link"  href="themsanpham.php">
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
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
				  <i class=" sidebar-toggle--icon hamburger align-self-center"></i>
				</a>
					<div class="navbar-collapse collapse">
						 <div class="navbar-nav navbar-align">
                            <?php
							if(isset($_COOKIE['admin_id'] , $_COOKIE['admin_name'])){
								$admin_name = $_COOKIE['admin_name'];
							}
							?>
								<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
								<img src="/assets/img/logo (2).png" 
								class="avatar img-fluid rounded me-1" alt="avatar" /> <span class="text-dark"><?php echo $admin_name?></span>
								</a>
                             <?php

							 ?>
								<!-- tài khoảng admin -->
								<div class="dropdown-menu dropdown-menu-end">
									<a class="dropdown-item" href="RegisterAdmin.html"><i class="align-middle me-1" data-feather="user"></i> Đăng Ký</a>
									<a class="dropdown-item" href="admin.php"><i class="align-middle me-1" data-feather="pie-chart"></i> phân tích</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="xulylogoutAdmin.php">
										<i  class="align-middle" data-feather="power"></i>
										Log out
									</a>
								</div>
						 </div>
					</div>
			</nav>

            <main class="content">
				<div class="container-fluid p-0">
					<h1 class="h3 mb-3 pro-warehouse__title"> Kho Sản Phẩm</h1>
					<div class="row">
						<div class="col-xl-8 col-xxl-5 d-flex">
							<div class="w-100">
								<div class="row">
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Tổng Khách Hàng</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="users"></i>
														</div>
													</div>
												</div>
												<?php
													// Kết nối cơ sở dữ liệu
													$conn = mysqli_connect("localhost:3366", "root", "", "mypham");
													if (!$conn) {
														die("Kết nối cơ sở dữ liệu thất bại: " . mysqli_connect_error());
													}

													// Truy vấn tổng số khách hàng
													$query = "SELECT COUNT(*) AS total_customers FROM users";
													$result = mysqli_query($conn, $query);

													$total_customers = 0;
													if ($result) {
														$row = mysqli_fetch_assoc($result);
														$total_customers = $row['total_customers'];
													}

													// Đóng kết nối cơ sở dữ liệu
													mysqli_close($conn);
													
													// Hiển thị số lượng đã bán
													echo "<div class='stat-card'>";
													echo "<h3>Khách Hàng</h3>";
													echo "<h1>$total_customers</h1>";
													echo "</div>";

													?>
												<div class="mb-0">
													<span class="text-muted">Tổng số khách hàng được quản lý</span>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Tổng Đơn </h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="truck"></i>
														</div>
													</div>
												</div>
												<?php
													// Kết nối cơ sở dữ liệu
													$conn = mysqli_connect("localhost:3366", "root", "", "mypham");
													if (!$conn) {
														die("Kết nối cơ sở dữ liệu thất bại: " . mysqli_connect_error());
													}

													// Lấy thời gian đầu và cuối của tháng hiện tại
													$current_month_start = date('Y-m-01 00:00:00'); // Ngày đầu tháng
													$current_month_end = date('Y-m-t 23:59:59');   // Ngày cuối tháng

													// Truy vấn số lượng sản phẩm đã bán trong tháng
													$query = "SELECT product_quantity FROM orders WHERE created_at BETWEEN ? AND ?";
													$stmt = mysqli_prepare($conn, $query);
													mysqli_stmt_bind_param($stmt, "ss", $current_month_start, $current_month_end);
													mysqli_stmt_execute($stmt);
													$result = mysqli_stmt_get_result($stmt);

													$total_sold = 0;
													while ($row = mysqli_fetch_assoc($result)) {
														// Thêm trực tiếp product_quantity vào tổng
														$total_sold += $row['product_quantity'];
													}

													// Hiển thị số lượng đã bán
													echo "<div class='stat-card'>";
													echo "<h3>Đơn đặt hàng</h3>";
													echo "<h1 >$total_sold</h1>";
													echo "</div>";

													mysqli_close($conn);
													?>

												<div class="mb-0">
													<span class="text-muted">Tổng số sản phẩm đã được đặt</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Tổng Sản Phẩm</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="database"></i>
														</div>
													</div>
												</div>
												<?php
													// Kết nối cơ sở dữ liệu
													$conn = mysqli_connect("localhost:3366", "root", "", "mypham");
													if (!$conn) {
														die("Kết nối cơ sở dữ liệu thất bại: " . mysqli_connect_error());
													}
													
													$query = "SELECT COUNT(*) AS total_products FROM sanpham";
													$result = mysqli_query($conn, $query);
													
													$total_products = 0; // Biến để lưu tổng số sản phẩm
													if ($result) {
														$row = mysqli_fetch_assoc($result);
														$total_products = $row['total_products']; // Lấy giá trị từ cột `total_products`
													}
													

													// Hiển thị số lượng đã bán
													echo "<div class='stat-card'>";
													echo "<h3>Tổng Sản Phẩm</h3>";
													echo "<h1 >$total_products</h1>";
													echo "</div>";

													mysqli_close($conn);
													?>
												<div class="mb-0">
													<span class="text-muted">Tổng số sản phẩm được quản lý</span>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Sắp Hết Hàng</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="alert-circle"></i>
														</div>
													</div>
												</div>
												<?php
													// Kết nối cơ sở dữ liệu
													$conn = mysqli_connect("localhost:3366", "root", "", "mypham");
													if (!$conn) {
														die("Kết nối cơ sở dữ liệu thất bại: " . mysqli_connect_error());
													}
													
													// Truy vấn để đếm số sản phẩm có available < 250
													$query = "SELECT COUNT(*) AS low_stock_products FROM sanpham WHERE available < 250";
													$result = mysqli_query($conn, $query);
													
													$low_stock_products = 0; // Biến để lưu số lượng sản phẩm sắp hết
													if ($result) {
														$row = mysqli_fetch_assoc($result);
														$low_stock_products = $row['low_stock_products']; // Lấy giá trị từ cột `low_stock_products`
													}
													

													// Hiển thị số lượng đã bán
													echo "<div class='stat-card'>";
													echo "<h3>Sắp Hết Hàng</h3>";
													echo "<h1 >$low_stock_products</h1>";
													echo "</div>";

													mysqli_close($conn);
													?>
												<div class="mb-0">
													<span class="text-muted">Tổng số hàng sắp hết cần nhập thêm</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
		         </div>
             </main>
            
		</div>
	</div>

	<script src="./assets/javascript/app.js"></script>

</body>
</html>