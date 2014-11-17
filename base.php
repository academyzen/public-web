<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
  <meta charset="utf-8">
  <title>Metronic One Page</title>
  <?include('includes/meta.php');?>
  <link rel="shortcut icon" href="favicon.ico">

  <!-- Fonts START -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Pathway+Gothic+One|PT+Sans+Narrow:400+700|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
  <!-- Fonts END -->

  <!-- Global styles BEGIN -->
  <link href="../../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../../assets/global/plugins/slider-revolution-slider/rs-plugin/css/settings.css" rel="stylesheet">
  <!-- Global styles END -->

  <!-- Page level plugin styles BEGIN -->
  <link href="../../assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <!-- Page level plugin styles END -->

  <!-- Theme styles BEGIN -->
  <link href="../../assets/global/css/components.css" rel="stylesheet">
  <link href="../../assets/frontend/onepage/css/style.css" rel="stylesheet">
  <link href="../../assets/frontend/onepage/css/style-responsive.css" rel="stylesheet">
  <link href="../../assets/frontend/onepage/css/themes/red.css" rel="stylesheet" id="style-color">
  <link href="../../assets/frontend/onepage/css/custom.css" rel="stylesheet">

  <!-- Theme styles END -->
</head>
<!--DOC: menu-always-on-top class to the body element to set menu on top -->
<body>
  <?include('includes/header.php');?>

  <?include('includes/services.php');?>

  <?include('includes/pre-footer.php');?>
  <?include('includes/footer.php');?>
  <!--[if lt IE 9]>
    <script src="../../assets/global/plugins/respond.min.js"></script>
  <![endif]-->

  <!-- Load JavaScripts at the bottom, because it will reduce page load time -->
  <!-- Core plugins BEGIN (For ALL pages) -->
  <script src="../../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
  <script src="../../assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
  <script src="../../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <!-- Core plugins END (For ALL pages) -->

  <!-- BEGIN RevolutionSlider -->
  <script src="../../assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
  <script src="../../assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
  <script src="../../assets/frontend/onepage/scripts/revo-ini.js" type="text/javascript"></script>
  <!-- END RevolutionSlider -->

  <!-- Core plugins BEGIN (required only for current page) -->
  <script src="../../assets/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
  <script src="../../assets/global/plugins/jquery.easing.js"></script>
  <script src="../../assets/global/plugins/jquery.parallax.js"></script>
  <script src="../../assets/global/plugins/jquery.scrollTo.min.js"></script>
  <script src="../../assets/frontend/onepage/scripts/jquery.nav.js"></script>
  <!-- Core plugins END (required only for current page) -->

  <!-- Global js BEGIN -->
  <script src="../../assets/frontend/onepage/scripts/layout.js" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      Layout.init();
    });
  </script>
  <!-- Global js END -->
</body>
</html>