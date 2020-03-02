
<?php

    ob_start();
    session_start();
    if(!isset($_SESSION['users_id'])) header("location: home.html");
    include "assets/includes/db.php";

?>

<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.12.2, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.12.2, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/mbr-1920x1826.png" type="image/x-icon">
  <meta name="description" content="Web Builder Description">
  
  <title>Dashboard</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&subset=cyrillic,latin,greek,vietnamese">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/facebook-plugin/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  <section class="mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--sticky mbr-navbar--auto-collapse" id="menu-7" data-rv-view="160">
    <div class="mbr-navbar__section mbr-section">
        <div class="mbr-section__container container">
            <div class="mbr-navbar__container">
                <div class="mbr-navbar__column mbr-navbar__column--s mbr-navbar__brand">
                    <span class="mbr-navbar__brand-link mbr-brand mbr-brand--inline">
                        <span class="mbr-brand__logo"><a href="https://itstitan.com"><img src="assets/images/mbr-1920x1826.png" class="mbr-navbar__brand-img mbr-brand__img" alt="Mobirise"></a></span>
                        <span class="mbr-brand__name"><a class="mbr-brand__name text-white" href="https://mobirise.com">IT Support<br>PT.Titan Sarana Niaga</a></span>
                    </span>
                </div>
                <div class="mbr-navbar__hamburger mbr-hamburger"><span class="mbr-hamburger__line"></span></div>
                <div class="mbr-navbar__column mbr-navbar__menu">
                    <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">
                        <div class="mbr-navbar__column">
                            <ul class="mbr-navbar__items mbr-navbar__items--right float-left mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active mbr-buttons--only-links"><li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="https://mobirise.com">HOME</a></li><li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="https://mobirise.com">TICKET</a></li><li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="https://mobirise.com">CONTACT</a></li></ul>                            
                            
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="engine"><a href="https://mobirise.info/r">bootstrap template</a></section><section class="mbr-section mbr-section--relative mbr-section--fixed-size mbr-after-navbar" id="form1-8" data-rv-view="173" style="background-color: rgb(41, 105, 176);">
    
    <div class="mbr-section__container mbr-section__container--std-padding container" style="padding-top: 93px; padding-bottom: 93px;">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2" data-form-type="formoid">
                        <div class="mbr-header mbr-header--center mbr-header--std-padding">
                            <h2 class="mbr-header__text">CONTACT FORM</h2>
                        </div>
                        <div data-form-alert="true">
                            <div class="hide" data-form-alert-success="true">Thanks for filling out form!</div>
                        </div>
                        <form action="https://mobirise.com/" method="post" data-form-title="CONTACT FORM">
                            <input type="hidden" value="wayIboPhUBfZPlSkhg3V5wT4DxyvbuZynsKukE9/dzhPADjHyQbWMc9PlmCwJkwQPLUkvhqLVgQLSQyD7IY97egrazZXNbMEgMElu7BYOWIUFTJTy2t4VNVq6D4Gc4He" data-form-email="true">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" required="" placeholder="Name*" data-form-field="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" required="" placeholder="Email*" data-form-field="Email">
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" name="phone" placeholder="Phone" data-form-field="Phone">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="7" placeholder="Message" data-form-field="Message"></textarea>
                            </div>
                            <div class="mbr-buttons mbr-buttons--right"><button type="submit" class="mbr-buttons__btn btn btn-lg btn-danger">CONTACT US</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5"></script>
  <script src="https://apis.google.com/js/plusone.js"></script>
  <script src="assets/facebook-plugin/facebook-script.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <!--[if lte IE 9]>
    <script src="assets/jquery-placeholder/jquery.placeholder.min.js"></script>
  <![endif]-->
  <script src="assets/mobirise/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  
  
</body>
</html>
