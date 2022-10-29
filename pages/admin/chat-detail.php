<?php 
  require_once($_SERVER["DOCUMENT_ROOT"].'/config/Database.php');
  require_once($_SERVER["DOCUMENT_ROOT"].'/ajax/class.php');
  $processClass = new Process();
?>

<!DOCTYPE html>
<html lang="tr">
  <head>
    <?php include($_SERVER["DOCUMENT_ROOT"] . "/partials/_header.php") ?>
    <style>
.page-header {
	background: #006A4E;
	margin: 0;
  padding: 20px 0 10px;
	color: #FFFFFF;
	position: fixed;
	width: 100%;
  z-index: 1
}
.main {
	height: 100vh;
	padding-top: 70px;
}

.chat-log {
	padding: 40px 0 114px;
	height: auto;
	overflow: auto;
}
.chat-log__item {
	background: #fafafa;
	padding: 10px;
	margin: 0 auto 20px;
	max-width: 80%;
	float: left;
	border-radius: 4px;
	box-shadow: 0 1px 2px rgba(0,0,0,.1);
	clear: both;
}

.chat-log__item.chat-log__item--own {
	float: right;
	background: #DCF8C6;
	text-align: right;
}

.chat-form {
	background: #DDDDDD;
	padding: 40px 0;
	position: fixed;
	bottom: 0;
	width: 100%;
}

.chat-log__author {
	margin: 0 auto .5em;
	font-size: 14px;
	font-weight: bold;
}
    </style>
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
                </span> Görüşme Detayı
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

                  <header class="page-header">
  <div class="container ">
    <h2>Felipe</h2>
  </div>
</header>
<div class="main">
  <div class="container ">
    <div class="chat-log">
        <?php 
        $id = $_GET['chat_id'];
        echo  $processClass->getChatDetail($db, $id); ?>
      <!-- DATA BURAYA-->
    </div>
  </div>
  <div class="chat-form">
    <div class="container ">
      <form class="form-horizontal">
        <div class="row">
          <div class="col-sm-10 col-xs-8">
            <input type="text" class="form-control" id="" placeholder="Mesajınızı buraya yazın..." />
          </div>
          <div class="col-sm-2 col-xs-4">
            <button type="submit" class="btn btn-success btn-block">Gönder</button>
          </div>
        </div>
      </form>
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
</body>
<?php include($_SERVER["DOCUMENT_ROOT"] . "/partials/_footer_script.html") ?>

 
</html>