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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<style>
		.carousel-inner {
			height: 400px;
		}
	</style>




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
				<div class="sidebar-nav">
					<div>
						<div class="sidebar-header">
							Main Menu
						</div>

						<div class="sidebar-item active">
							<a class="sidebar-link" href="../Online_Food_order/Admin/adminlogin.php">
								<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
							</a>
						</div>
					</div>
					<div class="sidebar-item">
						<div class="sidebar-menu">
							<div class="accordion" id="accordionExample">

								<?php
								$query = "select itemid,itemname from itemsdetails";
								$datas = $conn->query($query);

								foreach ($datas as $var) {
									$itemid = $var['itemid'];
								?>
									<div class="card bg-dark text-white">
										<div class="card-header" id="headingOne">
											<h2 class="mb-0">
												<button class="btn btn-link text-white" type="button" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
													<?php echo $var['itemname']; ?>
												</button>
												<a class="btn btn-primary float-right text-white">
													<?php
													$query = "SELECT COUNT(subitemid) as cnt FROM subitemdetails WHERE itemid=" . $var['itemid'];
													$datas = $conn->query($query);

													foreach ($datas as $var) {
														echo $count = $var['cnt'];
													}
													?>
												</a></button>
											</h2>
										</div>


										<div id="collapseOne1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
											<?php
											$query2 = "SELECT * FROM `subitemdetails` WHERE itemid =" . $itemid;
											$datas2 = $conn->query($query2);

											foreach ($datas2 as $var2) {
											?>

												<div class="card-body">
													<ul class="submenu">
														<li><a class="text-white" href="#">

																<span class="align-middle"><?php echo $var2['subitemname']; ?></span>
																<span class="align-right btn btn-sm btn-success"><?php echo $var2['subitemprice']; ?>/-</span></a>
														</li>

													</ul>
												</div>
											<?php } ?>
										</div>

									</div>
								<?php } ?>

							</div>





						</div>

					</div>
				</div>
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light bg-primary text-white">
				<a class="sidebar-toggle js-sidebar-toggle">
					<i class="hamburger align-self-center"></i>
				</a>

				<div class="navbar-collapse collapse">
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
									<a href="cartitems.php" class="btn btn-outline-success">
										<i class="bi bi-cart align-right text-white"></i>
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
									<div class="position-relative">
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

			<main class="content">
				<div class="container-fluid" style="overflow: visible;">


					<div id="demo" class="carousel slide" data-ride="carousel">

						<!-- Indicators -->
						<ul class="carousel-indicators">
							<li data-target="#demo" data-slide-to="0" class="active"></li>
							<li data-target="#demo" data-slide-to="1"></li>
							<li data-target="#demo" data-slide-to="2"></li>
						</ul>

						<!-- The slideshow -->
						<div class="carousel-inner">
							<div class="carousel-item active">
								<?php
								$query1 = "SELECT * FROM `restobanner`";
								$datas1 = $conn->query($query1);
								foreach ($datas1 as $var1) {
								?>
									<img src="./Admin/bannerimage11/<?php echo $var1['bannerimage1'] ?>" class="img-fluid" alt="Responsive image" style="width: 100%;">
								<?php } ?>

							</div>
							<div class="carousel-item">
								<?php
								$query2 = "SELECT * FROM `restobanner`";
								$datas2 = $conn->query($query2);
								foreach ($datas2 as $var2) {
								?>
									<img src="./Admin/bannerimage11/<?php echo $var2['bannerimage2'] ?>" class="img-fluid" alt="Responsive image" style="width: 100%;">
								<?php } ?>
							</div>
							<div class="carousel-item">
								<?php
								$query3 = "SELECT * FROM `restobanner`";
								$datas3 = $conn->query($query3);
								foreach ($datas3 as $var3) {
								?>
									<img src="./Admin/bannerimage11/<?php echo $var3['bannerimage3'] ?>" class="img-fluid" alt="Responsive image" style="width: 100%;">
								<?php } ?>
							</div>
						</div>

						<!-- Left and right controls -->
						<a class="carousel-control-prev" href="#demo" data-slide="prev">
							<span class="carousel-control-prev-icon"></span>
						</a>
						<a class="carousel-control-next" href="#demo" data-slide="next">
							<span class="carousel-control-next-icon"></span>
						</a>
					</div>
				</div>
			</main>
			<div id="accordion">
				<?php
				$query4 = "select itemid,itemname from itemsdetails";
				$datas4 = $conn->query($query4);

				foreach ($datas4 as $var4) {
					$itemid = $var4['itemid'];
				?>
					<div class="card">
						<div class="card-header bg-warning">
							<h6 class="float-left"><?php echo $var4['itemname']; ?></h6> <a class="btn btn-primary float-right text-white" data-bs-toggle="collapse" href="#collapseOne">+</a></button>
						</div>
						<div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
							<?php
							$query5 = "SELECT * FROM `subitemdetails` WHERE itemid =" . $itemid;
							$datas5 = $conn->query($query5);

							foreach ($datas5 as $var5) {
							?>
								<div class="card-body">

									<div class="card rounded-3 mb-4">
										<div class="card-body p-4">
											<form method='POST' action='insertcart.php'>
												<div class="row d-flex justify-content-between align-items-center">
													<div class="col-md-1 col-lg-1 col-xl-1">
														<img src="./Admin/userimage/<?php echo $var5['subitemimage']; ?>" height="50px" width="50px">
														<input type="hidden" name="subitemimage" value="<?php echo $var5['subitemimage']; ?>">
													</div>
													<div class="col-md-3 col-lg-3 col-xl-3">
														<p class="lead fw-normal mb-2">Appetizer</p>
														<p><span class="text-muted"><?php echo $var5['subitemname']; ?></span></p>
														<input type="hidden" name="subitemname" value="<?php echo $var5['subitemname']; ?>">
													</div>
													<div class="col-md-3 col-lg-3 col-xl-2 d-flex text-white">
													

													<input type="number" name="quantity" value="1" maxlength="10" placeholder="quantity" class="btn btn-info text-white w-100">

													
												</div>
													<div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
														<h5 class="mb-0">$<?php echo $var5['subitemprice']; ?></h5>
														<input type="hidden" name="subitemprice" value="<?php echo $var5['subitemprice']; ?>">

														<input type="hidden" name="subitemid" value="<?php echo $var5['subitemid']; ?>">
													</div>
													<div class="col-md-1 col-lg-1 col-xl-1 text-end">
														<input type="submit" name="addCart" class="btn btn-info text-white w-100 text-center" value="+Cart">
														<!--<a href="#!" class="text-white"><span class="align-right btn btn-sm btn-success"><i class="bi bi-folder-plus"></i></span></a>-->
													</div>
												</div>
											</form>
										</div>
									</div>

								</div>
							<?php } ?>
						</div>
					</div>
				<?php } ?>
			</div>


		</div>

	</div>




	<script src="js/app.js"></script>
	</div>
</body>

</html>