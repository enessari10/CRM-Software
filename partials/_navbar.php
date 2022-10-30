<?php
// logout
    if(isset($_POST['but_logout'])){
        session_destroy();
        // Remove cookie variables
        $days = 30;
        setcookie ("rememberme","", time() - ($days *  24 * 60 * 60 * 1000) );
        header('Location: /login.php');
    }
    ?>
<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="home.php"><img src="assets/images/logo.png" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="home.php"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          
          <ul class="navbar-nav navbar-nav-right">
            
            <li class="nav-item nav-logout d-none d-lg-block">
            <button class="nav-link"type="button" name="but_logout">
            <i class="mdi mdi-power"></i>
            </button>
             
            </li>
            
          </ul>
          
        </div>
      </nav>