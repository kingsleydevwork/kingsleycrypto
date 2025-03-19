<?php  include('../../server/connection.php')  ?>
<?php  include('../../server/auth/admin/index.php')  ?>
<!DOCTYPE html>
<html lang="en">

  
<!-- Mirrored from www.bootstrapget.com/demos/templatemonster/unity-bootstrap-admin-dashboard/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Mar 2025 18:41:27 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin Templates - Dashboard Templates - Unify Admin Template</title>

    <!-- Meta -->
    <meta name="description" content="Marketplace for Bootstrap Admin Dashboards" />
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="canonical" href="https://www.bootstrap.gallery/">
    <meta property="og:url" content="https://www.bootstrap.gallery/">
    <meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
    <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:type" content="Website">
    <meta property="og:site_name" content="Bootstrap Gallery">
    <link rel="shortcut icon" href="../assets/images/favicon.svg" />

    <!-- *************
			************ CSS Files *************
		************* -->
    <link rel="stylesheet" href="../assets/fonts/bootstrap/bootstrap-icons.css" />
    <link rel="stylesheet" href="../assets/css/main.min.css" />

    <!-- *************
			************ Vendor Css Files *************
		************ -->

    <!-- Scrollbar CSS -->
    <link rel="stylesheet" href="../assets/vendor/overlay-scroll/OverlayScrollbars.min.css" />
  </head>

  <body>
    <!-- Page wrapper start -->
    <div class="page-wrapper">

      <!-- App header starts -->
      <div class="app-header d-flex align-items-center">

        <!-- Toggle buttons start -->
        <div class="d-flex col">
          <button class="toggle-sidebar" id="toggle-sidebar">
            <i class="bi bi-list lh-1 text-white"></i>
          </button>
          <button class="pin-sidebar" id="pin-sidebar">
            <i class="bi bi-list lh-1 text-white"></i>
          </button>
        </div>
        <!-- Toggle buttons end -->

        <!-- App brand starts -->
        <div class="app-brand py-2 col">
          <a href="index.php">
            <img src="../assets/images/logo.svg" class="logo" alt="Bootstrap Gallery" />
          </a>
        </div>
        <!-- App brand ends -->

        <!-- App header actions start -->
        <div class="header-actions col">
          <div class="d-lg-flex d-none align-items-center gap-2">
            <div class="dropdown">
              <a class="dropdown-toggle header-action-icon" href="#!" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="bi bi-grid fs-5 lh-1 text-white"></i>
              </a>
            </div>
            <div class="dropdown">
              <a class="dropdown-toggle header-action-icon" href="#!" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="bi bi-exclamation-triangle fs-5 lh-1 text-white"></i>
                <span class="count-label">7</span>
              </a>
            </div>
            <div class="dropdown">
              <a class="dropdown-toggle header-action-icon" href="#!" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="bi bi-bell fs-5 lh-1 text-white"></i>
              </a>

            </div>
            <div class="dropdown">
              <a class="dropdown-toggle header-action-icon" href="#!" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="bi bi-envelope-open fs-5 lh-1 text-white"></i>
              </a>

            </div>
          </div>
          <div class="dropdown ms-3">
            <a id="userSettings" class="dropdown-toggle d-flex py-2 align-items-center text-decoration-none" href="#!"
              role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="../assets/images/user2.png" class="rounded-2 img-3x" alt="Bootstrap Gallery" />
              <div class="ms-2 text-truncate d-lg-block d-none text-white">
                <span class="d-flex opacity-50 small">Admin</span>
                <span><?php   echo $username ?></span>
              </div>
            </a>

          </div>
        </div>
        <!-- App header actions end -->
      </div>

      <!-- App header ends -->

      <!-- Main container start -->
      <div class="main-container">

        <!-- Sidebar wrapper start -->
        <nav id="sidebar" class="sidebar-wrapper">

          <!-- Sidebar profile starts -->
          <div class="sidebar-profile">
            <img src="../assets/images/user3.png" class="profile-user mb-3" alt="Admin Dashboard" />
            <div class="text-center">
              <h6 class="profile-name m-0 text-nowrap text-truncate">
                <?php echo $username   ?> 
              </h6>
            </div>
            <div class="d-flex align-items-center mt-lg-3 gap-2">
              <a href="" class="icon-box md grd-success-light rounded-2">
                <i class="bi bi-calendar2-check fs-5 text-success"></i>
              </a>
              <a href="" class="icon-box md grd-info-light rounded-2">
                <i class="bi bi-stickies fs-5 text-info"></i>
              </a>
              <a href="" class="icon-box md grd-danger-light rounded-2">
                <i class="bi bi-whatsapp fs-5 text-danger"></i>
              </a>
            </div>
          </div>
          <!-- Sidebar profile ends -->
          <?php  include("../includes/side.php") ;  ?>
          <!-- Sidebar menu ends -->

        </nav>
        <!-- Sidebar wrapper end -->

        <!-- App container starts -->
        <div class="app-container">

          <!-- App hero header starts -->
          <div class="app-hero-header mb-4">

            <!-- Breadcrumb and Stats start -->
            <div class="d-flex align-items-center mb-3">

              <!-- Breadcrumb start -->
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <i class="bi bi-house lh-1"></i>
                  <a href="index.html" class="text-decoration-none">Home</a>
                </li>
                <li class="breadcrumb-item" aria-current="page">Dashboard</li>
              </ol>
              <!-- Breadcrumb end -->

              <!-- Sales stats start -->
              <div class="ms-auto d-lg-flex d-none flex-row">
                <div class="d-flex flex-row gap-1">
                  <button class="btn btn-sm btn-dark">Today</button>
                  <button class="btn btn-sm btn-dark btn-transparent">
                    7 Days
                  </button>
                  <button class="btn btn-sm btn-dark btn-transparent">
                    15 Days
                  </button>
                  <button class="btn btn-sm btn-dark btn-transparent">
                    30 Days
                  </button>
                  <button class="btn btn-sm btn-dark btn-transparent">
                    90 Days
                  </button>
                </div>
              </div>
              <!-- Sales stats end -->
            </div>
            <!-- Breadcrumb and stats end -->

            <!-- Row start -->
            <?php   include("../includes/nav.php");  ?>
            <!-- Row end -->
          </div>
          <!-- App Hero header ends -->
          <!-- App body starts -->
          <div class="app-body">
            <!-- Row start -->
            <div class="row gx-3">
              <div class="col-xl-8 col-sm-12 col-12">
                <div class="card mb-3">
                  <div class="card-body height-230">
                    <div class="row align-items-end">
                      <div class="col-sm-8">
                        <h3 class="mb-4">Congratulations <?php echo $username  ?> 🎉</h3>
                        <p style="color:green">
                          protecting you is always our priority 
              
                        </p>
                        <div class="mt-4 d-flex flex-wrap gap-3">
                          <div class="d-flex align-items-center">
                            <div class="icon-box lg grd-info-light rounded-5 me-3">
                              <i class="bi bi-bag text-info fs-3"></i>
                            </div>
                            <div class="m-0">
                              <h3 class="m-0 fw-semibold">0</h3>
                              <p class="m-0 text-secondary">Approved Login</p>
                            </div>
                          </div>
                          <div class="d-flex align-items-center">
                            <div class="icon-box lg grd-danger-light rounded-5 me-3">
                              <i class="bi bi-bag text-danger fs-3"></i>
                            </div>
                            <div class="m-0">
                              <h3 class="m-0 fw-semibold">0</h3>
                              <p class="m-0 text-secondary">Failed Login </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <img src="../assets/images/sales.svg" class="congrats-img" alt="Bootstrap Gallery" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-12 col-12">
                <div class="card mb-3 grd-primary">
                  <div class="card-body bg-hexagon height-230">
                    <h5 class="card-title text-white"></h5>
                    <div id="sales"></div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card-body">
                    <div class="table-responsive">
                      <table class="table m-0">
                        <thead>
                          <tr>
                            <th>IP</th>
                            <th>LOCATION</th>
                            <th>TIME</th>
                            <th>STATUS</th>
                            <th>ACTION</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="grd-primary-light">
                            <td>#00001</td>
                            <td><a href="#" class="text-red">Alia</a></td>
                            <td>Willams</td>
                            <td>+143-148-60985</td>
                            <td>info@example.com</td>
                          </tr>
                          <tr class="grd-secondary-light">
                            <td>#00002</td>
                            <td><a href="#" class="text-red">Nathan</a></td>
                            <td>James</td>
                            <td>+278-119-88790</td>
                            <td>info@example.com</td>
                          </tr>
                          <tr class="grd-info-light">
                            <td>#00003</td>
                            <td><a href="#" class="text-red">Kelly</a></td>
                            <td>Thomas</td>
                            <td>+125-117-88763</td>
                            <td>info@example.com</td>
                          </tr>

                        </tbody>
                      </table>
                    </div>
                  </div>

          </div>
          <!-- App body ends -->

          <!-- App footer start -->
          <div class="app-footer">
            <span>© Bootstrap Gallery 2024</span>
          </div>
          <!-- App footer end -->

        </div>
        <!-- App container ends -->

      </div>
      <!-- Main container end -->

    </div>
    <!-- Page wrapper end -->

    <!-- *************
			************ JavaScript Files *************
		************* -->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <!-- *************
			************ Vendor Js Files *************
		************* -->

    <!-- Overlay Scroll JS -->
    <script src="../assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
    <script src="../assets/vendor/overlay-scroll/custom-scrollbar.js"></script>

    <!-- Apex Charts -->
    <script src="../assets/vendor/apex/apexcharts.min.js"></script>
    <script src="../assets/vendor/apex/custom/dash1/sales.js"></script>
    <script src="../assets/vendor/apex/custom/dash1/revenue.js"></script>
    <script src="../assets/vendor/apex/custom/dash1/source.js"></script>

    <!-- Vector Maps -->
    <script src="../assets/vendor/jvectormap/jquery-jvectormap-2.0.5.min.js"></script>
    <script src="../assets/vendor/jvectormap/gdp-data.js"></script>
    <script src="../assets/vendor/jvectormap/continents-mill.js"></script>
    <script src="../assets/vendor/jvectormap/custom/world-map-markers3.js"></script>

    <!-- Custom JS files -->
    <script src="../assets/js/custom.js"></script>
  </body>


<!-- Mirrored from www.bootstrapget.com/demos/templatemonster/unity-bootstrap-admin-dashboard/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Mar 2025 18:42:38 GMT -->
</html>