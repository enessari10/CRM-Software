<!DOCTYPE html>
<html lang="tr">
  <head>
    <?php include($_SERVER["DOCUMENT_ROOT"] . "/partials/_header.html") ?>
  </head>
  <body>
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar d  efault-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html"><img src="/assets/images/logo.png" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="/assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
            </form>
          </div>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="/assets/images/faces/face1.jpg" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">İsim Soyisim</p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-cached me-2 text-success"></i> Activity Log </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-logout me-2 text-primary"></i> Çıkış  </a>
              </div>
            </li>
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-email-outline"></i>
                <span class="count-symbol bg-warning"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <h6 class="p-3 mb-0">Mesajlarınız</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="/assets/images/faces/face4.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Bir Mesajınız Var</h6>
                    <p class="text-gray mb-0"> 1 Dakika Önce </p>
                  </div>  
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="/assets/images/faces/face2.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Bir Mesajınız Var </h6>
                    <p class="text-gray mb-0"> 15 Dakika Önce </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="/assets/images/faces/face3.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Bir Mesajınız Var</h6>
                    <p class="text-gray mb-0"> 20 Dakika Önce </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">4 Yeni Mesajınız Var</h6>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                <i class="mdi mdi-bell-outline"></i>
                <span class="count-symbol bg-danger"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <h6 class="p-3 mb-0">Bildirimler</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="mdi mdi-calendar"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Rapor Kaydınız</h6>
                    <p class="text-gray ellipsis mb-0"> Yeni bir rapor kaydınız var  </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                      <i class="mdi mdi-settings"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                    <p class="text-gray ellipsis mb-0"> Update dashboard </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                      <i class="mdi mdi-link-variant"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                    <p class="text-gray ellipsis mb-0"> New admin wow! </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">Tüm Bildirimleriniz</h6>
              </div>
            </li>
            <li class="nav-item nav-logout d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi-power"></i>
              </a>
            </li>
            <li class="nav-item nav-settings d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi-format-line-spacing"></i>
              </a>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
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
                  <a href=""><i class="mdi mdi-home"></i></a>
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
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Hizmet Talepleri</h4>
            <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> Talep Eden </th>
                          <th> Talep Açıklaması </th>
                          <th> Talep Tarihi </th>
                          <th> Talep Durumu </th>
                          <th> İşlem </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td> Test Kullanıcısı </td>
                          <td> Deneme </td>
                          <td> 10.10.2022 </td>
                          <td> <label class="badge badge-danger">Pending</label> </td>
                          <td> <div class="btn-group">
                              <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">İşlem Seç</button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item">Durum değiştir</a>
                                <a class="dropdown-item">Sil</a>
                              </div>
                            </div> </td>
                        </tr>
                        <tr>
                          <td> Test Kullanıcısı </td>
                          <td> Deneme </td>
                          <td> 10.10.2022 </td>
                          <td> <label class="badge badge-danger">Pending</label> </td>
                          <td> <div class="btn-group">
                              <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">İşlem Seç</button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item">Durum değiştir</a>
                                <a class="dropdown-item">Sil</a>
                              </div>
                            </div> </td>
                        </tr>
                        <tr>
                          <td> Test Kullanıcısı </td>
                          <td> Deneme </td>
                          <td> 10.10.2022 </td>
                          <td> <label class="badge badge-danger">Pending</label> </td>
                          <td> <div class="btn-group">
                              <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">İşlem Seç</button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item">Durum değiştir</a>
                                <a class="dropdown-item">Sil</a>
                              </div>
                            </div> </td>
                        </tr>
                        <tr>
                          <td> Test Kullanıcısı </td>
                          <td> Deneme </td>
                          <td> 10.10.2022 </td>
                          <td> <label class="badge badge-danger">Pending</label> </td>
                          <td> <div class="btn-group">
                              <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">İşlem Seç</button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item">Durum değiştir</a>
                                <a class="dropdown-item">Sil</a>
                              </div>
                            </div> </td>
                        </tr>
                        <tr>
                          <td> Test Kullanıcısı </td>
                          <td> Deneme </td>
                          <td> 10.10.2022 </td>
                          <td> <label class="badge badge-danger">Pending</label> </td>
                          <td> <div class="btn-group">
                              <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">İşlem Seç</button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item">Durum değiştir</a>
                                <a class="dropdown-item">Sil</a>
                              </div>
                            </div> </td>
                        </tr>
                        <tr>
                          <td> Test Kullanıcısı </td>
                          <td> Deneme </td>
                          <td> 10.10.2022 </td>
                          <td> <label class="badge badge-danger">Pending</label> </td>
                          <td> <div class="btn-group">
                              <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">İşlem Seç</button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item">Durum değiştir</a>
                                <a class="dropdown-item">Sil</a>
                              </div>
                            </div> </td>
                        </tr>
                      </tbody>
                    </table>
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