<?php 

  require_once($_SERVER["DOCUMENT_ROOT"].'/config/Database.php');
  require_once($_SERVER["DOCUMENT_ROOT"].'/ajax/class.php');
  $processClass = new Process();
   // logout
   if(isset($_POST['but_logout'])){
    session_destroy();
    $days = 30;
    setcookie ("rememberme","", time() - ($days *  24 * 60 * 60 * 1000) );
    header('Location: /login.php');
}
?>

<!DOCTYPE html>
<html lang="tr">
  <head>
    <?php include($_SERVER["DOCUMENT_ROOT"] . "/partials/_header.php") ?>
  </head>
  <body>
      <!-- partial:partials/_navbar.html -->
      <?php include($_SERVER["DOCUMENT_ROOT"] . "/partials/_navbar.php") ?>

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="/assets/images/faces/face1.jpg" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">Email Adresi</span>
                  <span class="text-secondary text-small">Firma Adı</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <?php include($_SERVER["DOCUMENT_ROOT"] . "/partials/_customer_menu.html") ?>
          </ul>
        </nav>
        
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> CRM Müşteri Paneli
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                  </li>
                </ul>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                    <img src="/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Web Bitimine Kalan Gün Sayısı  </h4>
                    <h2 class="mb-5">NULL</h2>
                    <button type="button" class="btn btn-gradient-light btn-rounded btn-fw">Teklif Al </button>
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body">
                    <img src="/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Berqnet Lisans Kalan Süre </h4>
                    <h2 class="mb-5">NULL</h2>
                    <button type="button" class="btn btn-gradient-light btn-rounded btn-fw">Teklif Al </button>
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                  <div class="card-body">
                    <img src="/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Antivirüs Lisans Kalan Süre </h4>
                    <h2 class="mb-5">NULL</h2>
                    <button type="button" class="btn btn-gradient-light btn-rounded btn-fw">Teklif Al </button>
                  </div>
                </div>
              </div>
            </div>
           
             
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Destek Talepleriniz </h4>
                    
                    <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th> Talep Eden </th>
                          <th> Talep Açıklaması </th>
                          <th> Talep Tarihi </th>
                          <th> Talep Durumu </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php echo $processClass->getCustomerAllServiceRequests($db, $_SESSION['email']); ?>
                      </tbody>
                    </table> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
             
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <?php include($_SERVER["DOCUMENT_ROOT"] . "/partials/_footer.html") ?>

          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/assets/js/off-canvas.js"></script>
    <script src="/assets/js/hoverable-collapse.js"></script>
    <script src="/assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="/assets/js/dashboard.js"></script>
    <script src="/assets/js/todolist.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>