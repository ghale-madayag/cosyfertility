
<section class="invoice">
    <div class="row no-print">
        <div class="col-xs-12">
            <button type="button" class="btn btn-success pull-right" style="margin-right: 5px;" id="printBtn">
                <i class="fa fa-print"></i> Print Record
            </button>
        </div>
    </div>
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
    <p><strong>Biometry : </strong></p>
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
        <div class="footer">
            <div class="col-xs-4 pull-right">
                <h4 style="line-height: 0;">EILEEN CO-SY, MD, FPOGS</h4>
                <span>OB-GYN SONOLOGIST</span>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <!-- /.row -->
      <!-- /.content -->
  </section>
