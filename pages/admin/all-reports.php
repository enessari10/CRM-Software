<!DOCTYPE html>
<html lang="tr">
  <head>
    <?php include($_SERVER["DOCUMENT_ROOT"] . "/partials/_header.php") ?>
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.css" />
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid-theme.min.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js"></script>
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
                </span> Oluşturulmuş Raporlar
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
            <!-- <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> Talep Eden </th>
                          <th> Talep Tarihi </th>
                          <th> Servis Tarihi </th>
                          <th> Personel </th>
                          <th> İşlem </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td> Test Kullanıcısı </td>
                          <td> 10.10.2022 </td>
                          <td> 10.10.2022 </td>
                          <td> Enes </td>
                          <td> 
                          <div class="btn-group">
                              <button type="button" class="btn btn-gradient-primary btn-sm" data-bs-toggle="dropdown">İşlem Seç</button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item">Detay gör</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td> Test Kullanıcısı </td>
                          <td> 10.10.2022 </td>
                          <td> 10.10.2022 </td>
                          <td> Enes </td>
                          <td> 
                          <div class="btn-group">
                              <button type="button" class="btn btn-gradient-primary btn-sm" data-bs-toggle="dropdown">İşlem Seç</button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item">Detay gör</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td> Test Kullanıcısı </td>
                          <td> 10.10.2022 </td>
                          <td> 10.10.2022 </td>
                          <td> Enes </td>
                          <td> 
                          <div class="btn-group">
                              <button type="button" class="btn btn-gradient-primary btn-sm" data-bs-toggle="dropdown">İşlem Seç</button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item">Detay gör</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td> Test Kullanıcısı </td>
                          <td> 10.10.2022 </td>
                          <td> 10.10.2022 </td>
                          <td> Enes </td>
                          <td> 
                          <div class="btn-group">
                              <button type="button" class="btn btn-gradient-primary btn-sm" data-bs-toggle="dropdown">İşlem Seç</button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item">Detay gör</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td> Test Kullanıcısı </td>
                          <td> 10.10.2022 </td>
                          <td> 10.10.2022 </td>
                          <td> Enes </td>
                          <td> 
                          <div class="btn-group">
                              <button type="button" class="btn btn-gradient-primary btn-sm" data-bs-toggle="dropdown">İşlem Seç</button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item">Detay gör</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td> Test Kullanıcısı </td>
                          <td> 10.10.2022 </td>
                          <td> 10.10.2022 </td>
                          <td> Enes </td>
                          <td> 
                          <div class="btn-group">
                              <button type="button" class="btn btn-gradient-primary btn-sm" data-bs-toggle="dropdown">İşlem Seç</button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item">Detay gör</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table> -->
                    <div id="jsGrid"></div>

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
    <script>
    var clients = [
        { "Name": "Otto Clay", "Age": 25, "Country": 1, "Address": "Ap #897-1459 Quam Avenue", "Married": false },
        { "Name": "Connor Johnston", "Age": 45, "Country": 2, "Address": "Ap #370-4647 Dis Av.", "Married": true },
        { "Name": "Lacey Hess", "Age": 29, "Country": 3, "Address": "Ap #365-8835 Integer St.", "Married": false },
        { "Name": "Timothy Henson", "Age": 56, "Country": 1, "Address": "911-5143 Luctus Ave", "Married": true },
        { "Name": "Ramona Benton", "Age": 32, "Country": 3, "Address": "Ap #614-689 Vehicula Street", "Married": false }
    ];
 
    var countries = [
        { Name: "", Id: 0 },
        { Name: "United States", Id: 1 },
        { Name: "Canada", Id: 2 },
        { Name: "United Kingdom", Id: 3 }
    ];
 
    $("#jsGrid").jsGrid({
        width: "100%",
        height: "400px",
 
        inserting: true,
        editing: true,
        sorting: true,
        paging: true,
 
        data: clients,
 
        fields: [
            { name: "Name", type: "text", width: 150, validate: "required" },
            { name: "Age", type: "number", width: 50 },
            { name: "Address", type: "text", width: 200 },
            { name: "Country", type: "select", items: countries, valueField: "Id", textField: "Name" },
            { name: "Married", type: "checkbox", title: "Is Married", sorting: false },
            { type: "control" }
        ]
    });
</script>
  </body>
</html>