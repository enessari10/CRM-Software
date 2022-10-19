
<?php
include($_SERVER["DOCUMENT_ROOT"] . "/config/Database.php");


// Check if $_SESSION or $_COOKIE already set
if( isset($_SESSION['userid']) ){
   header('Location: /pages/admin/home.php');
   exit;
}else if( isset($_COOKIE['rememberme']  )){
    
    // Decrypt cookie variable value
    $userid = decryptCookie($_COOKIE['rememberme']);
    
    $sql_query = "select * from Users where user_id='".$userid."'";
    $result = mysqli_query($db,$sql_query);
    $row = mysqli_fetch_array($result);
    $count=mysqli_num_rows($result);

    if( $count > 0 ){
        $_SESSION['userid'] = $userid; 
       header('Location: /pages/admin/home.php');
       exit;
    }
}


// Encrypt cookie
function encryptCookie( $value ) {

   $key = hex2bin(openssl_random_pseudo_bytes(4));

   $cipher = "aes-256-cbc";
   $ivlen = openssl_cipher_iv_length($cipher);
   $iv = openssl_random_pseudo_bytes($ivlen);

   $ciphertext = openssl_encrypt($value, $cipher, $key, 0, $iv);

   return( base64_encode($ciphertext . '::' . $iv. '::' .$key) );
}

// Decrypt cookie
function decryptCookie( $ciphertext ) {

   $cipher = "aes-256-cbc";

   list($encrypted_data, $iv,$key) = explode('::', base64_decode($ciphertext));
   return openssl_decrypt($encrypted_data, $cipher, $key, 0, $iv);

}


// On submit
if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($db,$_POST['email']);
    $password = mysqli_real_escape_string($db,$_POST['password']);
    
    if ($uname != "" && $password != ""){

        $sql_query = "select * from Users where email='".$uname."' and password='".$password."'";
        $result = mysqli_query($db,$sql_query);
        $row = mysqli_fetch_array($result);
		    $count=mysqli_num_rows($result);
		
        if($count > 0){
             $userid = $row['user_id'];
            if( isset($_POST['rememberme']) ){

                // Set cookie variables
                $days = 30;
                $value = encryptCookie($userid);
                setcookie ("rememberme",$value,time()+ ($days *  24 * 60 * 60 * 1000));
            }
            
            $_SESSION['userid'] = $userid; 
            header('Location: /pages/admin/home.php');
            exit;
        }else{
            echo "Invalid username and password";
        }

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
                <form class="pt-3" method="post" action="">
                  <div class="form-group">
                    <input type="email" class="form-control form-control-lg" name="email" placeholder="Email Adresi">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" name="password" placeholder="Şifre">                  </div>
                  <div class="mt-3">
                  <input type="submit" value="GİRİŞ YAP" name="but_submit" id="but_submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" />
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" name="rememberme"  checked> Oturumumu açık tut </label>
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