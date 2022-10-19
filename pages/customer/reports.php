<!DOCTYPE html>
<html lang="tr">
  <head>
    <?php include($_SERVER["DOCUMENT_ROOT"] . "/partials/_header.html") ?>
  </head>
  <body>
      <!-- partial:partials/_navbar.html -->
      <?php include($_SERVER["DOCUMENT_ROOT"] . "/partials/_navbar.html") ?>

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
                </span> Destek Talepleriniz
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                  </li>
                </ul>
              </nav>
            </div>


            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    </p>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> ID </th>
                          <th> Talep Eden   </th>
                          <th> Talep Açıklaması  </th>
                          <th> Talep Tarihi  </th>
                          <th> Talep Durumu </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td> 1 </td>
                          <td> Test Mikroes </td>
                          <td>
                           
                          </td>
                          <td> 18.06.2022 </td>
                          <td><label class="badge badge-danger">REDDEDİLDİ</label> </td>
                        </tr>
                        <tr>
                          <td> 2 </td>
                          <td> Test Mikroes </td>
                          <td>
                                 </td>
                          <td> 18.06.2022 </td>
                          <td> <label class="badge badge-warning">İNCELENİYOR</label> </td>
                        </tr>
                        <tr>
                          <td> 3 </td>
                          <td> Test Mikroes </td>
                          <td>
                            
                          </td>
                          <td>18.06.2022 </td>
                          <td> <label class="badge badge-info">PROGRAMA ALINDI </label> </td>
                        </tr>
                        <tr>
                          <td> 4 </td>
                          <td> Test Mikroes </td>
                          <td>
                            
                          </td>
                          <td>18.06.2022 </td>
                          <td> <label class="badge badge-success">RAPOR OLUŞTURULDU</label></td>
                        </tr>
                        <tr>
                          <td> 5 </td>
                          <td> Test Mikroes </td>
                          <td>
                           
                          </td>
                          <td>18.06.2022 </td>
                          <td> <label class="badge badge-warning">İNCELENİYOR</label> </td>
                        </tr>
                        <tr>
                          <td> 6 </td>
                          <td> Test Mikroes </td>
                          <td>
                          </td>
                          <td> 18.06.2022 </td>
                          <td> <label class="badge badge-success">RAPOR OLUŞTURULDU </label></td>
                        </tr>
                        <tr>
                          <td> 7 </td>
                          <td> Test Mikroes </td>
                          <td>
                          </td>
                          <td>18.06.2022 </td>
                          <td> <label class="badge badge-info">İNCELENİYOR</label> </td>
                        </tr>
                      </tbody>
                    </table>
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