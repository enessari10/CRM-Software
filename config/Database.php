<?php
   define('DB_SERVER', '212.58.20.68:3306');
   define('DB_USERNAME', 'mk_crmsoftware');
   define('DB_PASSWORD', 'F*1f5vh06');
   define('DB_DATABASE', 'CRMSoftware');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}  
?>
