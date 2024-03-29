<?php
  require_once('data/session.php');
  confirm_logged_in();
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>All Trans-Abdominal Report | Co-Sy Fertility Clinic</title>
  <!-- Tell the browser to be responsive to screen width -->
  <?php require_once('inc/header.php');?>
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <?php require_once("inc/logo.php");?>

    <!-- Header Navbar -->
   <?php require_once('inc/nav.php');?>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <?php require_once('inc/sidepanel.php');?>

      <!-- search form (Optional) -->
      <?php require_once('inc/formsearch.php');?>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <?php require_once('inc/sidebarmenu.php');?>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        All Trans-Abdominal Utrasound Report
        <small>Page</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="./"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">All Report</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <!-- Information box -->
      <div class="row">
        <div class="col-xs-12">
           <div class="box box-default">
              <div class="box-body">
                <?php require_once('inc/tar-all.php');?>
              </div>
            </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">

    <!-- Default to the left -->
   <?php require_once('inc/footer.php');?>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="bower_components/jquery-toast-plugin-master/dist/jquery.toast.min.js"></script>
<script src="bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<!-- daterangepicker -->
<!--encryptio-->
<script src="js/aes.js"></script>
<script src="js/toast-func.js"></script>
<script src="js/function.js"></script>
<script src="js/tar.js"></script>
<script>
  getAllUsr();
  loadProfile(<?php echo $_SESSION['user_id'];?>);
  $(function () {

    //Enable iCheck plugin for checkboxes
    //iCheck for checkbox and radio inputs
    
    //Enable check and uncheck all functionality
    $(".checkbox-toggle").click(function () {
      var clicks = $(this).data('clicks');
      if (clicks) {
        //Uncheck all checkboxes
        $(".usr-all input[type='checkbox']").iCheck("uncheck");
        $(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
      } else {
        //Check all checkboxes
        $(".usr-all input[type='checkbox']").iCheck("check");
        $(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
      }
      $(this).data("clicks", !clicks);
    });

  });
</script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>