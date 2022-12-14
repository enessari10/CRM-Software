<?php 

  require_once($_SERVER["DOCUMENT_ROOT"].'/config/Database.php');
  require_once($_SERVER["DOCUMENT_ROOT"].'/ajax/class.php');

  $processClass = new Process();
  session_start();

  
 
  if($_SESSION['role'] != 'customer') {
    header("location:/../error-404.html");

    
  }

  if(isset($_POST['but_submit'])){

    $userEmail =  $_SESSION['email']; 
    $date = $_POST['tarih'];
    $desc = $_POST['aciklama']; 
    $companyId = $processClass->getCompanyIdWithEmail($db, $userEmail);
    $state = 'Bekliyor';
    
    $processClass->sqlInsert($db,"Talepler","talep_eden, talep_eden_firma_id, talep_aciklamasi, talep_tarihi, talep_durum","'$userEmail', '$companyId', '$desc', '$date', '$state'");
    
    if ($processClass == true) {

      $showAlert = $processClass->successAlert('Talebiniz başarıyla oluşturuldu.');

    } else {

      $showAlert = $processClass->errorAlert('Talebiniz oluşturulamadı.');

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
            <?php include($_SERVER["DOCUMENT_ROOT"] . "/partials/_customer_menu.html") ?>
          </ul>
        </nav>
        
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                <a href="home.php" style="color:white;"><i class="mdi mdi-home"></i></a>
                </span> Talep Oluşturma Formu
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                  </li>
                </ul>
              </nav>
            </div>

            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <?php 
                    if(isset($showAlert)) { 
                      
                      echo $showAlert; 
                      echo $userEmail;
     echo $date;
    echo $desc;
    echo $company_id;
                      }?>
                    <form class="forms-sample" action="" method="POST"> 
                      <div class="form-group">
                        <label for="exampleInputName1">Firma Adı </label>
                        <input type="text" class="form-control"  name="email" placeholder="Firma Adı " disabled value="<?php echo  $_SESSION['email']; ?> ">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Servis İstediğiniz Tarih</label>
                        <input type="date" class="form-control"  name="tarih" placeholder="Servis İstediğiniz Tarih " required>
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Talep Açıklaması</label>
                        <textarea class="form-control"name="aciklama" rows="4" required></textarea>
                      </div>
                      <button type="submit" name="but_submit" id="but_submit" class="btn btn-gradient-primary me-2">Oluştur</button>
                    </form>
                  </div>
                </div>
              </div>

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