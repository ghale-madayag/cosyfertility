<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Print Trans-Abdominal Ultrasound | Co-Sy Fertility Clinic</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="bower_components/select2/dist/css/select2.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
        <img src="img/logo.png" width="60"/>
          <small class="pull-right">Date: <span id="tar_indate"></span></small>
        </h2>
        <center>
            <h4>TRAS-ABDOMINAL ULTRASOUND REPORT</h4>
        </center>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
   
    <div class="row invoice-info">
    
      <div class="col-sm-4 invoice-col">
        <address>
          <strong><span id="patname" style="font-size:18px;"></span></strong><br>
          Age: <span id="age"></span><br>
          Requested By: Dra. Eileen Co-Sy
        </address>
      </div>
    <div class="col-sm-4 invoice-col">
    </div>
    <div class="col-sm-4 invoice-col">
        <strong class="pull-right" style="font-size:18px;">Patient #: <span id="patnum"></span></strong><br>
    </div>
      <!-- /.col -->
    </div>
    <div class="table-responsive">
        <table class="table">
        <tr>
            <th style="width:30%">Number :</th>
            <td id="tar_num"></td>
        </tr>
        <tr>
            <th>Presentation :</th>
            <td id="tar_pres"></td>
        </tr>
        <tr>
            <th>Biparietal Diameter :</th>
            <td id="tar_bip_dia"></td>
        </tr>
        <tr>
            <th>Occipitofrontal Diameter :</th>
            <td id="tar_occ_dia"></td>
        </tr>
        <tr>
            <th>Cephalic Index :</th>
            <td id="tar_cep_ind"></td>
        </tr>
        <tr>
            <th>Femoral Length :</th>
            <td id="tar_fem_len"></td>
        </tr>
        <tr>
            <th>Abdominal Circumference :</th>
            <td id="tar_abd_cir"></td>
        </tr>
        <tr>
            <th>Estimated Fetal Weigth :</th>
            <td id="tar_est_fet_wei"></td>
        </tr>
        <tr>
            <th>Placenta :</th>
            <td id="tar_pla"></td>
        </tr>
        </table>
    <p><strong>Biophysical Profile :</strong></p>
    <table class="table">
        <tr>
            <th style="width:30%">Tone :</th>
            <td id="tar_tone"></td>
        </tr>
        <tr>
            <th>Movement :</th>
            <td id="tar_move"></td>
        </tr>
        <tr>
            <th>Breathing :</th>
            <td id="tar_brea"></td>
        </tr>
        <tr>
            <th>Amniotic Fluid Index :</th>
            <td id="tar_amn_flu_ind"></td>
        </tr>
    </table>
    <p><strong>Impression : </strong></p>
    <p id="tar_impre"></p>
    </div>
    <!-- /.row -->
    <!-- /.row -->
  </section>
  <!-- /.content -->
  <div class="footer">
        <div class="col-xs-4 pull-right">
            <h4 style="line-height: 0;">EILEEN CO-SY, MD, FPOGS</h4>
            <span>OB-GYN SONOLOGIST</span>
        </div>
    </div>
</div>
<!-- ./wrapper -->
</body>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="js/aes.js"></script>
<script src="js/function.js"></script>
<script type="text/javascript" src="js/tar-print-func.js"></script>
</html>
