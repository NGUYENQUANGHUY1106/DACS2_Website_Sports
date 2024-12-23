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
	<title>QuangHuy Sports 11</title>
	<style>
	</style>

	<link href="/assets/css/app.css" rel="stylesheet">
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
						Quảng lý sản phẩm
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
			<nav style="background-color: black;" class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
					<i class="hamburger align-self-center"></i>
				</a>
				<div class="navbar-collapse collapse">
					<div class="navbar-nav navbar-align">
						<?php
						if (isset($_COOKIE['admin_id'], $_COOKIE['admin_name'])) {
							$admin_name = $_COOKIE['admin_name'];
						}
						?>
						<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
							<img style="width: 50px; height: 50px;" class="" src="/assets/img/logo (2).png"
								class="avatar img-fluid rounded me-1" alt="avatar" /> <span class="text-white"><?php echo $admin_name ?></span>
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

			<main class="content">
				<div class="container-fluid p-0">
					<h1 class="h3 mb-3"> Phân Tích & Thống Kê </h1>
					<div class="row">
						<div class="col-xl-6 col-xxl-5 d-flex">
							<div class="w-100">
								<div class="row">
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<div class="row">
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
													$query = "SELECT product_details FROM orders WHERE created_at BETWEEN ? AND ?";
													$stmt = mysqli_prepare($conn, $query);
													mysqli_stmt_bind_param($stmt, "ss", $current_month_start, $current_month_end);
													mysqli_stmt_execute($stmt);
													$result = mysqli_stmt_get_result($stmt);

													$total_sold = 0;
													while ($row = mysqli_fetch_assoc($result)) {
														$product_details = json_decode($row['product_details'], true);
														foreach ($product_details as $product) {
															$total_sold += $product['quantity']; // Cộng số lượng từng sản phẩm
														}
													}

													// Hiển thị số lượng đã bán
													echo "<div class='stat-card'>";
													echo "<h3>Đã bán</h3>";
													echo "<p>$total_sold</p>";
													echo "</div> ";

													mysqli_close($conn);
													?>

												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="row">
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
													?>

													<!DOCTYPE html>
													<html lang="vi">

													<head>
														<meta charset="UTF-8">
														<meta name="viewport" content="width=device-width, initial-scale=1.0">
														<title>Thống kê khách hàng</title>
														<style>
															body {
																font-family: Arial, sans-serif;
																background-color: #f8f9fa;
																margin: 0;
																padding: 0;
															}

															.row {
																display: flex;
																align-items: center;
																justify-content: center;
																margin-top: 50px;
															}

															.stat-card {
																width: 250px;
																padding: 20px;
																border: 1px solid #ddd;
																border-radius: 8px;
																text-align: center;
																box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
																background-color: #fff;
															}

															.stat-card h3 {
																margin: 0;
																font-size: 18px;
																color: #555;
															}

															.stat-card p {
																margin: 10px 0;
																font-size: 32px;
																font-weight: bold;
																color: #333;
															}

															.stat-card .stat {
																margin-top: 10px;
																color: #007bff;
															}

															.stat-card .stat i {
																font-size: 40px;
															}
														</style>
													</head>

													<body>
														<div style="margin-top: 0;" class="row">
															<div class="stat-card">
																<h3>Khách hàng</h3>
																<p><?php echo $total_customers; ?></p>

															</div>
														</div>

														<!-- Feather Icons -->
														<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
														<script>
															feather.replace();
														</script>
													</body>

													</html>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<?php
										// Kết nối cơ sở dữ liệu
										$conn = mysqli_connect("localhost:3366", "root", "", "mypham");
										if (!$conn) {
											die("Kết nối cơ sở dữ liệu thất bại: " . mysqli_connect_error());
										}

										// Truy vấn tổng thu nhập từ tất cả sản phẩm trong bảng `orders`
										$query = "SELECT SUM(total_amount) AS total_income FROM orders";
										$result = mysqli_query($conn, $query);

										// Kiểm tra và lấy dữ liệu
										$total_income = 0;
										if ($result) {
											$row = mysqli_fetch_assoc($result);
											$total_income = $row['total_income'] ?? 0; // Nếu NULL thì gán 0
										} else {
											die("Truy vấn thất bại: " . mysqli_error($conn));
										}

										// Nhân tổng số tiền với 1.000.000 (giả định mỗi đơn vị trong cột là 1.000.000 VNĐ)
										$total_income_vnd = $total_income * 1000000;

										// Định dạng số tiền theo Việt Nam Đồng (VNĐ)
										$formatted_income = number_format($total_income_vnd, 0, ',', '.') . " ₫";

										// Đóng kết nối cơ sở dữ liệu
										mysqli_close($conn);
										?>

										<!DOCTYPE html>
										<html lang="vi">

										<head>
											<meta charset="UTF-8">
											<meta name="viewport" content="width=device-width, initial-scale=1.0">
											<title>Tổng thu nhập</title>
											<style>
												.card {
													border: 1px solid #ddd;
													border-radius: 8px;
													box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
													background-color: #fff;
													padding: 20px;
													width: 300px;
													margin: 20px auto;
													text-align: center;
												}

												.card-title {
													font-size: 18px;
													color: #555;
													margin: 0;
												}

												.stat {
													font-size: 40px;
													color: #007bff;
													margin-top: 10px;
												}

												.mt-1 {
													margin-top: 10px;
												}

												.mb-3 {
													margin-bottom: 15px;
												}

												.text-primary {
													color: #007bff;
												}

												.text-muted {
													color: #6c757d;
												}
											</style>
										</head>

										<body>
											<div class="card">
												<div class="card-body">
													<div class="row">
														<div class="col mt-0">
															<h5 class="card-title">Tổng thu nhập</h5>
														</div>
													</div>
													<h1 class="mt-1 mb-3"><?php echo $formatted_income; ?></h1>
												</div>
											</div>

											<!-- Feather Icons -->
											<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
											<script>
												feather.replace();
											</script>
										</body>

										</html>




										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
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
													$query = "SELECT product_details FROM orders WHERE created_at BETWEEN ? AND ?";
													$stmt = mysqli_prepare($conn, $query);
													mysqli_stmt_bind_param($stmt, "ss", $current_month_start, $current_month_end);
													mysqli_stmt_execute($stmt);
													$result = mysqli_stmt_get_result($stmt);

													$total_sold = 0;
													while ($row = mysqli_fetch_assoc($result)) {
														$product_details = json_decode($row['product_details'], true);
														foreach ($product_details as $product) {
															$total_sold += $product['quantity']; // Cộng số lượng từng sản phẩm
														}
													}

													// Hiển thị số lượng đã bán
													echo "<div class='stat-card'>";
													echo "<h3>Đã bán</h3>";
													echo "<p>$total_sold</p>";
													echo "</div> ";

													mysqli_close($conn);
													?>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
														</div>
													</div>
												</div>
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-6 col-xxl-7">
							<div class="card flex-fill w-100">
								<div class="card-header">

									<h5 class="card-title mb-0">Chuyển động gần đây</h5>
								</div>
								<div class="card-body py-3">
									<div class="chart chart-sm">
										<canvas id="chartjs-dashboard-line"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-12 col-md-6 col-xxl-3 d-flex order-2 order-xxl-3">
							<div class="card flex-fill w-100">
								<div class="card-header">

									<h5 class="card-title mb-0">Sử dụng trình duyệt</h5>
								</div>
								<div class="card-body d-flex">
									<div class="align-self-center w-100">
										<div class="py-3">
											<div class="chart chart-xs">
												<canvas id="chartjs-dashboard-pie"></canvas>
											</div>
										</div>

										<table class="table mb-0">
											<tbody>
												<tr>
													<td>Chrome</td>
													<td class="text-end">4306</td>
												</tr>
												<tr>
													<td>Firefox</td>
													<td class="text-end">3801</td>
												</tr>
												<tr>
													<td>IE</td>
													<td class="text-end">1689</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
							<div class="card flex-fill w-100">
								<div class="card-header">

									<h5 class="card-title mb-0">Địa điểm Thực tế</h5>
								</div>
								<div class="card-body px-4">
									<div id="world_map" style="height:350px;"></div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-xxl-3 d-flex order-1 order-xxl-1">
							<div class="card flex-fill">
								<div class="card-header">

									<h5 class="card-title mb-0">Lịch</h5>
								</div>
								<div class="card-body d-flex">
									<div class="align-self-center w-100">
										<div class="chart">
											<div id="datetimepicker-dashboard"></div>
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

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
			var gradient = ctx.createLinearGradient(0, 0, 0, 225);
			gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
			gradient.addColorStop(1, "rgba(215, 227, 244, 0)");
			// Line chart
			new Chart(document.getElementById("chartjs-dashboard-line"), {
				type: "line",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "Sales ($)",
						fill: true,
						backgroundColor: gradient,
						borderColor: window.theme.primary,
						data: [
							2115,
							1562,
							1584,
							1892,
							1587,
							1923,
							2566,
							2448,
							2805,
							3438,
							2917,
							3327
						]
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					tooltips: {
						intersect: false
					},
					hover: {
						intersect: true
					},
					plugins: {
						filler: {
							propagate: false
						}
					},
					scales: {
						xAxes: [{
							reverse: true,
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}],
						yAxes: [{
							ticks: {
								stepSize: 1000
							},
							display: true,
							borderDash: [3, 3],
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}]
					}
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Pie chart
			new Chart(document.getElementById("chartjs-dashboard-pie"), {
				type: "pie",
				data: {
					labels: ["Chrome", "Firefox", "IE"],
					datasets: [{
						data: [4306, 3801, 1689],
						backgroundColor: [
							window.theme.primary,
							window.theme.warning,
							window.theme.danger
						],
						borderWidth: 5
					}]
				},
				options: {
					responsive: !window.MSInputMethodContext,
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					cutoutPercentage: 75
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Bar chart
			new Chart(document.getElementById("chartjs-dashboard-bar"), {
				type: "bar",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "This year",
						backgroundColor: window.theme.primary,
						borderColor: window.theme.primary,
						hoverBackgroundColor: window.theme.primary,
						hoverBorderColor: window.theme.primary,
						data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
						barPercentage: .75,
						categoryPercentage: .5
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					scales: {
						yAxes: [{
							gridLines: {
								display: false
							},
							stacked: false,
							ticks: {
								stepSize: 20
							}
						}],
						xAxes: [{
							stacked: false,
							gridLines: {
								color: "transparent"
							}
						}]
					}
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var markers = [{
					coords: [31.230391, 121.473701],
					name: "Shanghai"
				},
				{
					coords: [28.704060, 77.102493],
					name: "Delhi"
				},
				{
					coords: [6.524379, 3.379206],
					name: "Lagos"
				},
				{
					coords: [35.689487, 139.691711],
					name: "Tokyo"
				},
				{
					coords: [23.129110, 113.264381],
					name: "Guangzhou"
				},
				{
					coords: [40.7127837, -74.0059413],
					name: "New York"
				},
				{
					coords: [34.052235, -118.243683],
					name: "Los Angeles"
				},
				{
					coords: [41.878113, -87.629799],
					name: "Chicago"
				},
				{
					coords: [51.507351, -0.127758],
					name: "London"
				},
				{
					coords: [40.416775, -3.703790],
					name: "Madrid "
				}
			];
			var map = new jsVectorMap({
				map: "world",
				selector: "#world_map",
				zoomButtons: true,
				markers: markers,
				markerStyle: {
					initial: {
						r: 9,
						strokeWidth: 7,
						stokeOpacity: .4,
						fill: window.theme.primary
					},
					hover: {
						fill: window.theme.primary,
						stroke: window.theme.primary
					}
				},
				zoomOnScroll: false
			});
			window.addEventListener("resize", () => {
				map.updateSize();
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
			var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
			document.getElementById("datetimepicker-dashboard").flatpickr({
				inline: true,
				prevArrow: "<span title=\"Previous month\">&laquo;</span>",
				nextArrow: "<span title=\"Next month\">&raquo;</span>",
				defaultDate: defaultDate
			});
		});
	</script>

</body>

</html>