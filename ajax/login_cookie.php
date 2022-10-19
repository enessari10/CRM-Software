<?php
    
<?php include($_SERVER["DOCUMENT_ROOT"] . "/config/Database.php") ?>

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