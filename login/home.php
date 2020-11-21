<?php
session_start();
if (isset($_SESSION["username"])) {
  $username = $_SESSION["username"];
  
} else {
  // since the username is not set in session, the user is not-logged-in
  // he is trying to access this page unauthorized
  // so let's clear all session variables and redirect him to index
  
  $url = "./index.php";
  header("Location: $url");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>The Business Digital Solutions Admin DashBoard</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/tbds.jpeg" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="../index.php"><img src="images/tbds.jpeg" class="mr-2" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="../index.php"><img src="images/tbds.jpeg" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <button class='btn btn-link'> <i class="ti-search"></i></button>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">

          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="ti-shopping-cart mx-0"></i>
              
              <?php if (isset($_SESSION["cart_item"])) {
                $total_quantity = 0;
                $total_price = 0;

                foreach ($_SESSION["cart_item"] as $item) {
                  $total_quantity += $item["quantity"];
                }
                echo '<strong class=" text text-success ">'.$total_quantity.'</strong>';
              } else {
                echo '<strong class="text text-danger">0</strong>';
              }
              ?> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Cart Items</p>
              <?php if (isset($_SESSION["cart_item"])) {
                $total_quantity = 0;
                $total_price = 0;

                foreach ($_SESSION["cart_item"] as $item) {
                  $total_quantity += $item["quantity"];
                  $total_price += $item["price_per_month"];

                  echo '
                                  <a class="dropdown-item">
                                    <div class="item-thumbnail">
                                      <div class="item-icon bg-success">
                                        <i class="ti-shopping-cart mx-0"></i>
                                      </div>
                                    </div>
                                    <div class="item-content">
                                      <p class="font-weight-light small-text mb-0 text-muted">
                                        '.$item["product_name"].'
                                      </p>
                                      <p class="font-weight-light small-text mb-0 text-muted">
                                        R'.$item["price_per_month"].'
                                      </p>
                                    </div>
                                  </a>';
                }
                
                echo '
                <a class="dropdown-item">
                  <div class="item-thumbnail">
                    <div class="item-icon bg-success">
                      <i class="ti-wallet mx-0"></i>
                    </div>
                  </div>
                  <div class="item-content">
                    <p class="font-weight-normal small-text mb-0 text-muted">
                      Total Price R'.$total_price.'
                    </p>
                    
                  </div>
                  <a href="checkout.php" class="btn btn-warning btn-icon-text btn-rounded btn-sm btn-block">Check-Out</a>
                    
                </a>';
              } else {
                echo '0';
              }
              ?>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <i class="ti-user">
                <?php echo $username; ?></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a href="logout.php" class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="ti-view-list"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="logout.php">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">Sign Out</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="ti-palette menu-icon"></i>
              <span class="menu-title">Update Profile</span>
              <i class="menu-arrow"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/forms/basic_elements.html">
              <i class="ti-layout-list-post menu-icon"></i>
              <span class="menu-title">Banking Details</span>
              <i class="menu-arrow"></i>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
              <i class="ti-view-list-alt menu-icon"></i>
              <span class="menu-title">Tickets</span>
              <i class="menu-arrow"></i>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="documentation/documentation.html">
              <i class="ti-write menu-icon"></i>
              <span class="menu-title">Invoices</span>
              <i class="menu-arrow"></i>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="pages/charts/chartjs.html">
              <i class="ti-pie-chart menu-icon"></i>
              <span class="menu-title">FAQs</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h4 class="font-weight-bold mb-0">Customer Dashboard</h4>
                </div>
                <div>
                  <button type="button" class="btn btn-primary btn-icon-text btn-rounded">
                    <i class="ti-clipboard btn-icon-prepend"></i>Open New Ticket
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Outstanding Balance</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">34040</h3>
                    <i class="ti-calendar icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                  </div>
                  <p class="mb-0 mt-2 text-danger">0.12% <span class="text-black ml-1"><small>(30 days)</small></span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Hosting</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">47033</h3>
                    <i class="ti-server icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                  </div>
                  <p class="mb-0 mt-2 text-danger">0.47% <span class="text-black ml-1"><small>(30 days)</small></span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Domains</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">40016</h3>
                    <i class="ti-cloud icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                  </div>
                  <p class="mb-0 mt-2 text-success">64.00%<span class="text-black ml-1"><small>(30 days)</small></span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left"><small>SL Certificates</small></p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">61344</h3>
                    <i class="ti-lock icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                  </div>
                  <p class="mb-0 mt-2 text-success">23.00%<span class="text-black ml-1"><small>(30 days)</small></span>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title"><i class="ti-view-list-alt menu-icon text-danger"></i>
                    Open Tickets</p>
                  <div class="mr-5 mt-3">
                    <p class="text-muted">Total Tickets Open</p>
                    <h3 class="text text-primary">187</h3>
                  </div>
                  <div id="sales-legend" class="chartjs-legend mt-4 mb-2"></div>
                  <canvas id="sales-chart"></canvas>
                </div>
                <div class="card border-right-0 border-left-0 border-bottom-0">
                  <div class="d-flex justify-content-center justify-content-md-end">
                    <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                      <button class="btn btn-lg btn-outline-light dropdown-toggle rounded-0 border-top-0 border-bottom-0" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Today
                      </button>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                        <a class="dropdown-item" href="#">January - March</a>
                        <a class="dropdown-item" href="#">March - June</a>
                        <a class="dropdown-item" href="#">June - August</a>
                        <a class="dropdown-item" href="#">August - November</a>
                      </div>
                    </div>
                    <button class="btn btn-lg btn-outline-light text-primary rounded-0 border-0 d-none d-md-block" type="button"> View all </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card border-bottom-0">
                <div class="card-body pb-0">
                  <p class="card-title"><i class="ti-view-list-alt menu-icon text-success"></i>
                    Closed Tickets</p>
                  <div class="d-flex flex-wrap mb-5">
                    <div class="mr-5 mt-2">
                      <p class="text-muted">Total Tickets Closed</p>
                      <h3 class="text text-success">362</h3>
                    </div>
                  </div>
                </div>
                <canvas id="order-chart" class="w-100"></canvas>
                <div class="card border-right-0 border-left-0 border-bottom-0">
                  <div class="d-flex justify-content-center justify-content-md-end">
                    <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                      <button class="btn btn-lg btn-outline-light dropdown-toggle rounded-0 border-top-0 border-bottom-0" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Today
                      </button>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                        <a class="dropdown-item" href="#">January - March</a>
                        <a class="dropdown-item" href="#">March - June</a>
                        <a class="dropdown-item" href="#">June - August</a>
                        <a class="dropdown-item" href="#">August - November</a>
                      </div>
                    </div>
                    <button class="btn btn-lg btn-outline-light text-primary rounded-0 border-0 d-none d-md-block" type="button"> View all </button>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <p class="card-title mb-0">Orders </p>
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Date</th>
                            <th>Product</th>
                            <th>Sale</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Jacob</td>
                            <td>Photoshop</td>
                            <td class="text-danger"> 28.76% <i class="ti-arrow-down"></i></td>
                            <td><label class="badge badge-danger">Pending</label></td>
                          </tr>
                          <tr>
                            <td>Messsy</td>
                            <td>Flash</td>
                            <td class="text-danger"> 21.06% <i class="ti-arrow-down"></i></td>
                            <td><label class="badge badge-warning">In progress</label></td>
                          </tr>
                          <tr>
                            <td>John</td>
                            <td>Premier</td>
                            <td class="text-danger"> 35.00% <i class="ti-arrow-down"></i></td>
                            <td><label class="badge badge-info">Fixed</label></td>
                          </tr>
                          <tr>
                            <td>Peter</td>
                            <td>After effects</td>
                            <td class="text-success"> 82.00% <i class="ti-arrow-up"></i></td>
                            <td><label class="badge badge-success">Completed</label></td>
                          </tr>
                          <tr>
                            <td>Dave</td>
                            <td>53275535</td>
                            <td class="text-success"> 98.05% <i class="ti-arrow-up"></i></td>
                            <td><label class="badge badge-warning">In progress</label></td>
                          </tr>
                          <tr>
                            <td>Messsy</td>
                            <td>Flash</td>
                            <td class="text-danger"> 21.06% <i class="ti-arrow-down"></i></td>
                            <td><label class="badge badge-info">Fixed</label></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-5 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Open New Ticket</h4>

                    <div class="add-items d-flex mb-0 mt-4">
                      <input type="text" class="form-control todo-list-input " placeholder="Add new task">
                    </div>


                    <div class="add-items d-flex mb-0 mt-4">
                      <input type="text" class="form-control todo-list-input " placeholder="Add new task">
                    </div>

                    <div class="add-items d-flex mb-0 mt-4">
                      <textarea class="form-control" placeholder="Add new task"></textarea>
                    </div>
                    <div class="add-items d-flex mb-0 mt-4">
                      <button class="add btn btn-icon text-primary todo-list-add-btn bg-transparent btn-xl"><i class="ti-location-arrow"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card position-relative">
                  <div class="card-body">
                    <p class="card-title">Detailed Reports</p>
                    <div class="row">
                      <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-center">
                        <div class="ml-xl-4">
                          <h1>33500</h1>
                          <h3 class="font-weight-light mb-xl-4">Sales</h3>
                          <p class="text-muted mb-2 mb-xl-0">The total number of sessions within the date range. It is
                            the
                            period time a user is actively engaged with your website, page or app, etc</p>
                        </div>
                      </div>
                      <div class="col-md-12 col-xl-9">
                        <div class="row">
                          <div class="col-md-6 mt-3 col-xl-5">
                            <canvas id="north-america-chart"></canvas>
                            <div id="north-america-legend"></div>
                          </div>
                          <div class="col-md-6 col-xl-7">
                            <div class="table-responsive mb-3 mb-md-0">
                              <table class="table table-borderless report-table">
                                <tr>
                                  <td class="text-muted">Illinois</td>
                                  <td class="w-100 px-0">
                                    <div class="progress progress-md mx-4">
                                      <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                  </td>
                                  <td>
                                    <h5 class="font-weight-bold mb-0">524</h5>
                                  </td>
                                </tr>
                                <tr>
                                  <td class="text-muted">Washington</td>
                                  <td class="w-100 px-0">
                                    <div class="progress progress-md mx-4">
                                      <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                  </td>
                                  <td>
                                    <h5 class="font-weight-bold mb-0">722</h5>
                                  </td>
                                </tr>
                                <tr>
                                  <td class="text-muted">Mississippi</td>
                                  <td class="w-100 px-0">
                                    <div class="progress progress-md mx-4">
                                      <div class="progress-bar bg-primary" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                  </td>
                                  <td>
                                    <h5 class="font-weight-bold mb-0">173</h5>
                                  </td>
                                </tr>
                                <tr>
                                  <td class="text-muted">California</td>
                                  <td class="w-100 px-0">
                                    <div class="progress progress-md mx-4">
                                      <div class="progress-bar bg-primary" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                  </td>
                                  <td>
                                    <h5 class="font-weight-bold mb-0">945</h5>
                                  </td>
                                </tr>
                                <tr>
                                  <td class="text-muted">Maryland</td>
                                  <td class="w-100 px-0">
                                    <div class="progress progress-md mx-4">
                                      <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                  </td>
                                  <td>
                                    <h5 class="font-weight-bold mb-0">553</h5>
                                  </td>
                                </tr>
                                <tr>
                                  <td class="text-muted">Alaska</td>
                                  <td class="w-100 px-0">
                                    <div class="progress progress-md mx-4">
                                      <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                  </td>
                                  <td>
                                    <h5 class="font-weight-bold mb-0">912</h5>
                                  </td>
                                </tr>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 <a href="https://www.thebusinessdigitalsolutions.co.za/" target="_blank">The Business Digital Solutions</a>. All rights reserved.</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <script src="js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <!-- End custom js for this page-->
</body>

</html>