<?php
include 'connectionstring.php';
// session_destroy();
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
      <nav class="navbar navbar-expand navbar-light bg-primary">
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
                <div class="position-relative">
                  <i class="align-middle text-white" data-feather="message-square"></i>
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
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <button type="button" class="btn btn-success" data-method="move" data-option="-10" data-second-option="0" title="Move Left">
            <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="cropper.move(-10, 0)">
              <a href="index.php">
                <i class="bi bi-arrow-left-circle text-white"></i></a>
            </span>
          </button>
        </div>
        <input type="text" class="form-control text-white" placeholder="Add More Foods Items" aria-label="Username" aria-describedby="basic-addon1" style="border: 1px red solid; font-style: italic; background-color:purple">
      </div>
      <section class="h-100" style="background-color: #eee;">
        <div class="container text-center py-5">
          <div class="text-center mb-4">
            <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>
          </div>
          <?php
              $ptotal = 0;
              $total = 0;
              //$i = 0;
              //echo '<pre>';
              //var_dump($_SESSION['cart']);
              if (isset($_SESSION['cart'])) {
                foreach ($_SESSION['cart'] as $key => $value) {
                  $ptotal = $value['productPrice'] * $value['productQuantity'];
                  $total += $value['productPrice'] * $value['productQuantity'];
                  //$i = $key + 1;

                  //  var_dump($value);
              ?>
          <div class="card rounded-3 mb-4">


            <div class="container">
            

                  <form action="insertcart.php" method="POST">
                    <div class="row justify-content-md-center py-5">

                      <div class="col-md-2 col-lg-2 col-xl-2">
                        <img src="./Admin/userimage/<?php echo $value['productImage']; ?>" height="50px" width="50px">
                        
                      </div>
                      <div class="col col-lg-3">
                        <p class="lead fw-normal mb-2">Appetizer</p>
                        <p><span class="text-muted"><?php echo $value['productName']; ?></span></p>
                        <input type="hidden" name="subitemname" value="<?php echo $value['productName']; ?>">
                      </div>
                      <div class="col col-lg-2">
                        <input type="number" name="quantity" value="<?= $value['productQuantity'] ?>" class="btn btn-info text-white w-100">
                      </div>
                      <div class="col col-lg-2">
                        <h5 class="mb-0">$<?php echo number_format($ptotal) ?></h5>
                        <input type="hidden" name="subitemprice" value="<?php echo $value['productPrice']; ?>">
                      </div>
                      <div class="col col-lg-2">

                        <h3>$<?php echo number_format($total) ?></h3>

                      </div>
                    </div>
                    <div class="row justify-content-md-center mb-2">
                      <div class="col">
                        <button name='update' class="btn-warning">update</button>
                      </div>
                      <div class="col">
                        <button name='remove' class="btn-danger">delete</button>
                      </div>
                      <div class="col">
                        <input type="hidden" name="item" value="<?php echo $value['productName']; ?>">
                      </div>
                    </div>

                  </form>

            </div>
         

          </div>

          <?php } ?>
         <?php } ?>





        </div>


      </section>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <button type="button" class="btn btn-success" data-method="move" data-option="10" data-second-option="0" title="Move Right">
            <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="cropper.move(10, 0)">
              <a href="order.php">
                <i class="bi bi-arrow-right-circle text-white"></i></a>
            </span>
          </button>
        </div>
        <input type="text" class="form-control text-white" placeholder="PROCESSED TO MY ORDER" aria-label="Username" aria-describedby="basic-addon1" style="border: 1px red solid; font-style: italic; background-color:purple">
      </div>

    </div>




  </div>

  <script src="js/app.js"></script>

</body>

</html>