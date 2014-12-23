<!DOCTYPE html>
 <!--[if lt IE 7]>
    <html class="lt-ie9 lt-ie8 lt-ie7" lang="en">
  <![endif]-->

  <!--[if IE 7]>
    <html class="lt-ie9 lt-ie8" lang="en">
  <![endif]-->

  <!--[if IE 8]>
    <html class="lt-ie9" lang="en">
  <![endif]-->

  <!--[if gt IE 8]>
    <!-->
    <html lang="en">
    <!--
  <![endif]-->

<head>
    <meta charset="utf-8">
    <title>MitCoe</title>
    <meta charset="utf-8">
    <meta name="author" content="Melvin Philips">
    <meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport">
    <meta name="keywords" content="Attendance Management">
    <script src="lib/js/others/html5-trunk.js"></script>
    <link href="icomoon/style.css" rel="stylesheet">
    <link href="lib/css/select/select.min.css" rel="stylesheet">
    <!--[if lte IE 7]>
    <script src="css/icomoon-font/lte-ie7.js"></script>
    <![endif]-->

    <!-- bootstrap css -->
    <link href="lib/css/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- custom css -->
  <!--  <link href="lib/css/bootstrap-responsive.min.css" rel="stylesheet">
  <link href="admin/css/app.css" rel="stylesheet" /> -->
	
</head>
<body ng-app="mitcoe">

    {{flash}}
		<div  ui-view></div>
    


    <!-- Scripts -->

      
      <script src="lib/js/jquery/jquery.min.js"></script>
      <script src="lib/js/jquery/jquery-ui-1.8.23.custom.min.js"></script>
      <script>jQuery.noConflict();</script>
      <script src="lib/js/bootstrap/bootstrap.min.js"></script>
      <!-- custom Js -->
      <script src="lib/js/custom/custom.js"></script>
      <!--Angular -->
      <script src="lib/js/angular/angular.min.js"></script>
      <script src="lib/js/angular/angular-resource.min.js"></script>
      <script src="lib/js/angular/angular-route.min.js"></script>
      <script src="lib/js/angular/angular-sanitize.min.js"></script>
      <script src="lib/js/angular/angular-ui-router.min.js"></script>
      <script src="lib/js/angular/angular-file-upload.min.js"></script>
      <script src="lib/js/select/select.min.js"></script>

      <!-- UnderScore-->
      <script type="text/javascript" src="lib/js/underscore/underscore.js"></script>
      <!--App.JS-->:
      <script src="js/app.js"></script>
      <!--Controllers-->
      <script src="js/controllers/LoginController.js"></script>
      <script src="js/controllers/HomeController.js"></script>
      <!--Service-->
      <script src="js/services/AuthenticationService.js"></script>
      <script src="js/services/FlashService.js"></script>
      <script src="js/services/SessionService.js"></script>

      
  
      <!--Others-->
      <script>
          angular.module("mitcoe").constant("CSRF_TOKEN", '<?php echo csrf_token(); ?>');
        	</script>
</body>
</html>
