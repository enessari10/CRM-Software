
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CRM</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/assets/vendors/css/vendor.bundle.base.css">
    <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/config/Database.php");
    
    // Check user login or not
    if(!isset($_SESSION['email'])){
        session_start();
    } else {
    header('Location: /login.php');
    }
    
    // logout
    if(isset($_POST['but_logout'])){
        session_destroy();
    
        // Remove cookie variables
        $days = 30;
        setcookie ("rememberme","", time() - ($days *  24 * 60 * 60 * 1000) );
    
        header('Location: /login.php');
    }
    ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico" />