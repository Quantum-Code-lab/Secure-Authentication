 <?php

 require_once 'action/connect_db.php';

?> 

<!DOCTYPE html>
<html>
<head>
  <title>Inventory user dashboard</title>

  <!-- 1) bootstrups css-->
  <link rel="stylesheet" type="text/css" href="assets/Bootstrap/css/bootstrap.min.css">

  <!-- 2) bootstrups theme-->
  <link rel="stylesheet" type="text/css" href="assets/Bootstrap/css/bootstrap-theme.min.css">

  <!-- 3) font-awasome-->
  <link rel="stylesheet" type="text/css" href="assets/font-awasome/css/all.css">

  <!-- 4) custom css-->
  <link rel="stylesheet" type="text/css" href="custom/css/user.css">

  <!-- 5) dtata table -->
  <link rel="stylesheet" type="text/css" href="assets/plugins/datatables/datatables.min.css">
  <!-- 6) file inpute -->
  <link rel="stylesheet" type="text/css" href="assets/plugins/fileinput/css/fileinput.min.css">
  
  <!-- 7) jquery-->
  <script type="text/javascript" src="assets/jquery/jquery.min.js"></script>

  <!-- 8) jquery-ui css + js -->

  <link rel="stylesheet" type="text/css" href="assets/jquery-ui/jquery-ui.css">
  <!-- <script type="text/javascript" src="assets/jquery_ui/jquery-ui.min.js"> </script> -->
   <script type="text/javascript" src="assets/jquery_ui/jquery-ui.js"></script> 

  <!-- 9) bootstrups js -->
  <script type="text/javascript" src="assets/Bootstrap/js/bootstrap.min.js"></script>

</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <div class="dropdown pull pull-right ">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
          <i class="glyphicon glyphicon-user"></i>&nbsp; Login Options &nbsp;<span class="caret"></span>
        </button>
        <ul class="dropdown-menu pull pull-right" aria-labelledby="dropdownMenu1">
          <li><a href="Users/start.php">User</a></li>
          <li><a href="admin_panel.php">Admin</a></li>
        </ul>
      </div>

    </div><!-- /.navbar-collapse -->
    <div class="mainbody" style="width: 100%; background-color: #5b768d;height: 400px;">
      

    </div>
  </div><!-- /.container-fluid -->
</nav>
</body>
</html>