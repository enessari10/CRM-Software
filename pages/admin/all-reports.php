<!DOCTYPE html>
<html lang="tr">
  <head>
    <?php include($_SERVER["DOCUMENT_ROOT"] . "/partials/_header.php") ?>
<link rel="stylesheet" type="text/css" href="/assets/css/datatables.min.css"/>
 
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

             <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Talep Eden</th>
                    <th>Talep Tarihi</th>
                    <th>Servis Tarihi</th>
                    <th>Personel</th>
                    <th>İşlem</th>
                </tr>
            </thead>

            <tbody>
              <?php
                  $sql = "SELECT * FROM `Raporlar` ORDER BY servis_tarihi DESC";
                  if ($result = $db->query($sql)) {
                    while ($row = $result->fetch_assoc()) {
                        ?>
				
                        <tr>
		<?php 
		$field1name = $row["talep_eden"];
        $tarih1 = date_create($row["talep_tarihi"]);
        $talep_tarihi = date_format($tarih1, 'd-m-Y');
        $field2name = $talep_tarihi;
        $personel = $row["personel"];
        $tarih2 = date_create($row["servis_tarihi"]);
        $servis_tarihi = date_format($tarih2, 'd-m-Y H:i');
        $field3name = $servis_tarihi;
        $id = $row["id"];  
		?>
							<td><?php echo $field1name; ?></td>
							<td><?php echo $field2name; ?></td>
              				<td><?php echo $field3name; ?></td>
							<td><?php echo $personel; ?></td> 
							<td> <div class="btn-group">
                              <button type="button" class="btn btn-gradient-primary btn-sm" data-bs-toggle="dropdown">İşlem Seç</button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item">Detayı görüntüle</a>
                              </div>
						</td>

								<?php } } ?>
                        </tr>
            
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
</body>
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
   
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/af-2.4.0/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/date-1.1.2/r-2.3.0/sc-2.0.7/datatables.min.js"></script>  
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": [ "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      "oLanguage": {
                  "sUrl" : "https://cdn.datatables.net/plug-ins/a5734b29083/i18n/Turkish.json"
                },
    });
  });
</script>
 
</html>