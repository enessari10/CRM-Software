<?php 
  require_once($_SERVER["DOCUMENT_ROOT"].'/config/Database.php');
  require_once($_SERVER["DOCUMENT_ROOT"].'/ajax/class.php');
  $processClass = new Process();
  session_start();
  if($_SESSION['role'] != 'mikroes_admin') {
    header("location:/../error-404.html");
  }
  if(isset($_POST['but_submit'])){

    $companyId = filter_input(INPUT_POST, 'companyId', FILTER_SANITIZE_STRING);
    $serviceState = $_POST['serviceState'];
    $date = $_POST['date'];
    $personel = $_POST['personel'];
    $desc = $_POST['desc'];
    $companyName = $processClass->getCompanyNameWithId($db, $companyId);

    $processClass->sqlInsert($db,"Users","company_id, email, password, role", "'$companyId', '$userEmail','$userPass','$userRole'");
    if ($processClass == true) {

      $showAlert = $processClass->successAlert('Kullanıcı başarıyla eklendi.');

    } else {

      $showAlert = $processClass->errorAlert('Kullanıcı eklenemedi bir hata oluştu.');

    }
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
            <?php include($_SERVER["DOCUMENT_ROOT"] . "/partials/_admin_menu.html") ?>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <a href="" style="color:white;"><i class="mdi mdi-home"></i></a>
                </span> Manuel Servis Raporu Oluşturma
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                  </li>
                </ul>
              </nav>
            </div>
            <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <?php 
                    if(isset($showAlert)) { 
                      echo $showAlert; 
                      }?>
                    <h4 class="card-title"></h4>
                    <form class="forms-sample">
                    <div class="form-group">
                    <label for="exampleFormControlSelect2">Firma Adı</label>
                      <select class="form-control form-control-lg" name="companyId">
						          <?php echo $processClass->getCompanies($db);?>
                      </select>
                    </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Talep Durumu</label>
                        <input type="text" class="form-control" name="serviceState" placeholder="Talep Durumu" value="Rapor oluşturuldu." disabled>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Servis Zamanı</label>
                        <input type="date" class="form-control" name="date" placeholder="Servis Zamanı">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Personel Bilgisi</label>
                        <input type="text" class="form-control" name="personel" placeholder="Personel Bilgisi">
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Rapor Açıklaması</label>
                        <textarea class="form-control" name="desc" rows="4" placeholder="Rapor açıklama"></textarea>
                      </div>
                      <button type="submit" class="btn btn-gradient-primary me-2">Rapor Oluştur</button>
                    </form>
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