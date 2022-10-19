<?php
    
include($_SERVER["DOCUMENT_ROOT"] . "/config/Database.php");

$User = $_POST['email'];
$Pass = $_POST['password'];
 
// Formdan aldığımız bilgileri veri tabanında sorguluyoruz.
$CheckUser = $db->query("SELECT * FROM Users WHERE email='{$User}' and password = '{$Pass}' ")->fetch(PDO::FETCH_ASSOC);
 
if ( $CheckUser ) {
 
// Eğer kullanıcı var ise standart session başlatma işlemlerini uygulayın, ardından beni hatırla işlemlerini yapalım.
 
if ( isset($_POST['remember-me']) ) {
 
$UserID = $CheckUser['id']; // Kullanıcının id'si.
$delete = $db->exec("DELETE FROM Cookie WHERE user_id = '$UserID' "); // Önceki anahtarları siliyoruz.
 
$NewToken = bin2hex(openssl_random_pseudo_bytes(32)); // Rastgele kod üretiyoruz.
 
// Ürettiğimiz kodu kullanıcı id'si ve tarayıcı bilgisi ile birlikte veritabanımıza kaydediyoruz.
$Insert2 = $db->prepare("INSERT INTO Cookie SET
        user_id = :bir,
        remember_token = :iki,
        expired_time = :uc,
        user_browser = :dort");
      $insert = $Insert2->execute(array(
        "bir" => $UserID,
        "iki" => $NewToken,
        "uc" => time()+604800,
        'dort' => md5($_SERVER['HTTP_USER_AGENT'])
         
      ));
 
// Kullanıcının tarayıcısına bu kodu çerez olarak kaydediyoruz.
setcookie("RMB", $NewToken, time() + 604801,'/');
 
}
 
} 
?>


<!DOCTYPE html>
<html lang="tr">
  <head>
  <?php include($_SERVER["DOCUMENT_ROOT"] . "/partials/_header.html") ?>
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <img src="/assets/images/logo.png">
                </div>
                <h4>Merhaba, CRM Sistemine hoş geldiniz</h4>
                <h6 class="font-weight-light">Devam etmek için oturum açın.</h6>
                <form class="pt-3">
                  <div class="form-group">
                    <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email Adresi">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Şifre">
                  </div>
                  <div class="mt-3">
                    <button name="submit" type = "submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">GİRİŞ YAP</button>
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input" name="remember-me"> Oturumumu açık tut </label>
                    </div>
                    <a href="#" class="auth-link text-black">Şifremi Unuttum?</a>
                  </div>
                  <div class="mb-2">
                   
                  </div>
                  <!-- <div class="text-center mt-4 font-weight-light"> Don't have an account? <a href="register.html" class="text-primary">Create</a>
--> </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <!-- endinject -->
  </body>
</html>