<?php 
  require_once($_SERVER["DOCUMENT_ROOT"].'/config/Database.php');
  require_once($_SERVER["DOCUMENT_ROOT"].'/ajax/class.php');
  $processClass = new Process();
  session_start();
  if($_SESSION['role'] != 'mikroes_admin') {
    header("location:/../error-404.html");
  }
  if(isset($_POST['submit'])){

    $message = $_POST['message'];
    $gorusmeId = $_GET['chat_id'];
    $aliciId =  $_GET['gonderen_id'];
    $gonderenId = $_SESSION['userid'];
    
    $processClass->sqlInsert($db,"Mesajlar","gorusme_id,gonderen_id,alici_id,mesaj", "'$gorusmeId', '$gonderenId','$aliciId', '$message'");
    if ($processClass == true) {

        header("Refresh:0");

  
      } else {
      $showAlert = $processClass->errorAlert('Bir hata oluştu.');

      }

  }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
     <?php include($_SERVER["DOCUMENT_ROOT"] . "/partials/_header.php") ?>
	  <style>
.card-bordered {
    border: 1px solid #ebebeb;
}

.card {
    border: 0;
    border-radius: 0px;
    margin-bottom: 30px;
    -webkit-box-shadow: 0 2px 3px rgba(0,0,0,0.03);
    box-shadow: 0 2px 3px rgba(0,0,0,0.03);
    -webkit-transition: .5s;
    transition: .5s;
	
}

.padding {
    padding: 3rem !important
}



.card-header:first-child {
    border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0;
}


.card-header {
    display: -webkit-box;
    display: flex;
    -webkit-box-pack: justify;
    justify-content: space-between;
    -webkit-box-align: center;
    align-items: center;
    padding: 15px 20px;
    background-color: transparent;
    border-bottom: 1px solid rgba(77,82,89,0.07);
}

.card-header .card-title {
    padding: 0;
    border: none;
}

h4.card-title {
    font-size: 17px;
}

.card-header>*:last-child {
    margin-right: 0;
}

.card-header>* {
    margin-left: 8px;
    margin-right: 8px;
}

.btn-secondary {
    color: #4d5259 !important;
    background-color: #e4e7ea;
    border-color: #e4e7ea;
    color: #fff;
}

.btn-xs {
    font-size: 11px;
    padding: 2px 8px;
    line-height: 18px;
}
.btn-xs:hover{
    color:#fff !important;
}




.card-title {
    font-family: Roboto,sans-serif;
    font-weight: 300;
    line-height: 1.5;
    margin-bottom: 0;
    padding: 15px 20px;
    border-bottom: 1px solid rgba(77,82,89,0.07);
}


.ps-container {
    position: relative;
}

.ps-container {
    -ms-touch-action: auto;
    touch-action: auto;
    overflow: hidden!important;
    -ms-overflow-style: none;
}

.media-chat {
    padding-right: 64px;
    margin-bottom: 0;
}

.media {
    padding: 16px 12px;
    -webkit-transition: background-color .2s linear;
    transition: background-color .2s linear;
}

.media .avatar {
    flex-shrink: 0;
}

.avatar {
    position: relative;
    display: inline-block;
    width: 36px;
    height: 36px;
    line-height: 36px;
    text-align: center;
    border-radius: 100%;
    background-color: #f5f6f7;
    color: #8b95a5;
    text-transform: uppercase;
}

.media-chat .media-body {
    -webkit-box-flex: initial;
    flex: initial;
    display: table;
}

.media-body {
    min-width: 0;
}

.media-chat .media-body p {
    position: relative;
    padding: 6px 8px;
    margin: 4px 0;
    background-color: #f5f6f7;
    border-radius: 3px;
    font-weight: 100;
    color:#9b9b9b;
}

.media>* {
    margin: 0 8px;
}

.media-chat .media-body p.meta {
    background-color: transparent !important;
    padding: 0;
    opacity: .8;
}

.media-meta-day {
    -webkit-box-pack: justify;
    justify-content: space-between;
    -webkit-box-align: center;
    align-items: center;
    margin-bottom: 0;
    color: #8b95a5;
    opacity: .8;
    font-weight: 400;
}

.media {
    padding: 16px 12px;
    -webkit-transition: background-color .2s linear;
    transition: background-color .2s linear;
}

.media-meta-day::before {
    margin-right: 16px;
}

.media-meta-day::before, .media-meta-day::after {
    content: '';
    -webkit-box-flex: 1;
    flex: 1 1;
    border-top: 1px solid #ebebeb;
}

.media-meta-day::after {
    content: '';
    -webkit-box-flex: 1;
    flex: 1 1;
    border-top: 1px solid #ebebeb;
}

.media-meta-day::after {
    margin-left: 16px;
}

.media-chat.media-chat-reverse {
    padding-right: 12px;
    padding-left: 64px;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: reverse;
    flex-direction: row-reverse;
}

.media-chat {
    padding-right: 64px;
    margin-bottom: 0;
}

.media {
    padding: 16px 12px;
    -webkit-transition: background-color .2s linear;
    transition: background-color .2s linear;
}

.media-chat.media-chat-reverse .media-body p {
    float: right;
    clear: right;
    background-color: #48b0f7;
    color: #fff;
}

.media-chat .media-body p {
    position: relative;
    padding: 6px 8px;
    margin: 4px 0;
    background-color: #f5f6f7;
    border-radius: 3px;
}


.border-light {
    border-color: #f1f2f3 !important;
}

.bt-1 {
    border-top: 1px solid #ebebeb !important;
}

.publisher {
    position: relative;
    display: -webkit-box;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    padding: 12px 20px;
    background-color: #f9fafb;
}

.publisher>*:first-child {
    margin-left: 0;
}

.publisher>* {
    margin: 0 8px;
}

.publisher-input {
    -webkit-box-flex: 1;
    flex-grow: 1;
    border: none;
    outline: none !important;
    background-color: transparent;
}

button, input, optgroup, select, textarea {
    font-family: Roboto,sans-serif;
    font-weight: 300;
}

.publisher-btn {
    background-color: transparent;
    border: none;
    color: #8b95a5;
    font-size: 16px;
    cursor: pointer;
    overflow: -moz-hidden-unscrollable;
    -webkit-transition: .2s linear;
    transition: .2s linear;
}

.file-group {
    position: relative;
    overflow: hidden;
} 

.publisher-btn {
    background-color: transparent;
    border: none;
    color: #cac7c7;
    font-size: 16px;
    cursor: pointer;
    overflow: -moz-hidden-unscrollable;
    -webkit-transition: .2s linear;
    transition: .2s linear;
} 

.file-group input[type="file"] {
    position: absolute;
    opacity: 0;
    z-index: -1; 
    width: 20px;
}

.text-info {
    color: #48b0f7 !important;
}
		  </style>


  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <?php include($_SERVER["DOCUMENT_ROOT"] . "/partials/_navbar.php") ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="../../assets/images/faces/face1.jpg" alt="profile">
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
			<?php 
                    if(isset($showAlert)) { 
                      }?>
          <div class="content-wrapper">
			  
            <div class="card card-bordered">
              <div class="card-header">
                <h4 class="card-title"><strong>Görüşme Detayı -</strong></h4>
              </div>


              <div class="ps-container ps-theme-default ps-active-y" id="chat-content" style="overflow-y: scroll !important; height:400px !important;">
                
              <?php 
              $id = $_GET['chat_id'];
			  $g_id = $_GET['gonderen_id'];
			  $a_id = $_GET['alici_id'];
		      echo $processClass->getUserChatDetailWithId($db, $id, $g_id);
              echo $processClass->getAdminChatDetailWithId($db, $id, $a_id);
              ?> 

              <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 0px; right: 2px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 2px;"></div></div></div>

              <div class="publisher bt-1 border-light">
                <img class="avatar avatar-xs" src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="...">
                <form action="" method="POST">
                <input class="publisher-input" type="text" name="message" id="message" placeholder="Mesajınızı yazın...">
                <button class="publisher-btn" name="submit" id="submit" type="submit" data-abc="true"><i class="mdi mdi-send"></i></button>
                </form>

              </div>

             </div>

          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
		<?php include($_SERVER["DOCUMENT_ROOT"] . "/partials/_footer.html") ?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <?php include($_SERVER["DOCUMENT_ROOT"] . "/partials/_footer_script.html") ?>
  </body>
</html>