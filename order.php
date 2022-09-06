<?php
include 'connectionstring.php';
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

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>Online food ordering system</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">



</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
					<div class="row">
						<div class="col-3"><img src="img/icons/icon-48x48.png" alt=""></div>
						<div class="col-9">
							<span class="align-middle">Foods Day</span> <br>
							<span style="font-size: 10px;color: white;">Online food ordering system</span>
						</div>
					</div>
				</a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Main Menu
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" href="index.html">
							<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-profile.html">
							<i class="align-middle" data-feather="book"></i> <span class="align-middle">Appetizer</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-sign-in.html">
							<i class="align-middle" data-feather="book"></i> <span class="align-middle">Veg Soup</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-sign-up.html">
							<i class="align-middle" data-feather="book"></i> <span class="align-middle">Chicken
								Soup</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-blank.html">
							<i class="align-middle" data-feather="book"></i> <span class="align-middle">Chinese
								Starterveg</span>
						</a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-blank.html">
							<i class="align-middle" data-feather="book"></i> <span class="align-middle">Chinese
								Starternon-veg</span>
						</a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-blank.html">
							<i class="align-middle" data-feather="book"></i> <span class="align-middle">Demo</span>
						</a>
					</li>

				</ul>


			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light bg-primary text-white">
				<a class="sidebar-toggle js-sidebar-toggle">
					<i class="hamburger align-self-center"></i>
				</a>

				<div class="navbar-collapse collapse text-white">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
								<?php
									$count = 0;
									if (isset($_SESSION['cart'])) {
										$count = count($_SESSION['cart']);
									}
									?>
									<!--<a href="cartitems.php" class="btn btn-outline-success">-->
									<i class="bi bi-cart align-middle text-white"></i>
									<span class="indicator"><?php echo $count; ?></span></a>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
									New Notifications
								</div>

								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all notifications</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
								<div class="position-relative text-white">
									<i class="align-middle" data-feather="message-square"></i>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
								<div class="dropdown-menu-header">
									<div class="position-relative ">
										New Messages
									</div>
								</div>

								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all messages</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
								<i class="align-middle" data-feather="settings"></i>
							</a>
							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
								<img src="img/avatars/avatar1.png" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-white">Hi,Guest</span>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>


			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<button type="button" class="btn btn-success" data-method="move" data-option="-10" data-second-option="0" title="Move Left">
						<span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="cropper.move(-10, 0)">
							<a href="cartitems.php">
								<i class="bi bi-arrow-left-circle text-white"></i></a>
						</span>
					</button>
				</div>
				<input type="text" class="form-control" placeholder="BACK TO MY ORDERS CART" aria-label="Username" aria-describedby="basic-addon1" style="border: 1px red solid; font-style: italic; background-color:purple">
			</div>
			<form action="insertorder.php" method="post">
			
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text" id="basic-addon1"><i class="bi bi-hammer"></i></span>
					</div>
					<?php
					$sql = "SELECT MAX(orderid) as maxid FROM `orderdetails`";
					foreach ($conn->query($sql) as $var) {
						$orderno = $var['maxid'];
					}
					?>
					<input type="text" name="" class="form-control" value="<?php echo $orderno + 1 ?>" aria-label="Username" aria-describedby="basic-addon1" readonly>
				</div>
				<div class="input-group lg-3">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="bi bi-currency-rupee"></i></span>
					</div>

					<?php
					$total = 0;
					if (isset($_SESSION['cart'])) {
						foreach ($_SESSION['cart'] as $key => $value) {
							$total += $value['productPrice'] * $value['productQuantity'];
						}  ?>
						<input type="text" class="form-control" name="totalprice" aria-label="Username" aria-describedby="basic-addon1" value="$<?php echo number_format($total) ?>">
						<input type="hidden" name="subitemprice" value="<?php echo $value['productPrice']; ?>">
					<?php	}   ?>

					<div class="input-group-append">
						<span class="input-group-text float-right">INR</span>
					</div>
				</div><br>
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
					</div>
					<input type="text" class="form-control" name="customername" placeholder="Enter name">
				</div>
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope"></i></span>
					</div>
					<input type="text" class="form-control" placeholder="Enter email" name="customeremail">
				</div>
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text" id="basic-addon1"><i class="bi bi-phone"></i></span>
					</div>
					<input type="text" class="form-control" placeholder="Enter mobile no" name="customermobile">
				</div>
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<label class="input-group-text" for="inputGroupSelect01"><i class="bi bi-geo-alt"></i></label>
					</div>
					<select class="custom-select" id="inputGroupSelect01" name="customerarea">
						<option>-Select-</option>
						<option value="Bhubaneswar" selected>Bhubaneswar</option>
						<option value="puri">puri</option>
						<option value="Jajpur">Jajpur</option>
					</select>
				</div>
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text" id="basic-addon1"><i class="bi bi-folder-plus"></i></span>
					</div>
					<input type="text" class="form-control" placeholder="Delivery address" name="customeraddress">
				</div>
				<!--<div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="inputGroupSelect01"><i class="bi bi-compass"></i></label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01" name="">
                      <option>-select-</option>
                      <option value="Sahid nagar" selected>Sahid nagar</option>
                      <option value="Jaydev vihar">Jaydev vihar</option>
                      <option value="Barmunda">Barmunda</option>
                    </select>
                  </div>-->
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text" id="basic-addon1"><i class="bi bi-geo"></i></span>
					</div>
					<input type="text" class="form-control" placeholder="Landmark" name="landmark" aria-label="Username" aria-describedby="basic-addon1">
				</div>
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text" id="basic-addon1"><i class="bi bi-calendar-date">orderdate</i></span>
					</div>
					<input type="date" class="form-control" name="orderdate" aria-label="Username" aria-describedby="basic-addon1">
				</div>
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text" id="basic-addon1"><i class="bi bi-clock">ordertime</i></span>
					</div>
					<input type="time" class="form-control" name="ordertime" aria-label="Username" aria-describedby="basic-addon1">
				</div>
				<div class="form-check-inline">
                  <input type="checkbox" name="status" value="Active"> IsActive
                </div>
				<div class="input-group mb-3">
					<button type="submit" class="btn btn-secondary btn-lg btn-block">submit</button>
				</div>

			</form>



		</div>




	</div>

	<script src="js/app.js"></script>

</body>

</html>