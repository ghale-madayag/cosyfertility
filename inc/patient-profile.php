<div class="row">

  <div class="col-md-4">

    <div class="box box-solid">

      <div class="box-header with-border">

        <h3 class="box-title">Patient No: <strong><span class="pat-num text-green"></span></strong></h3>

      </div>

      <!-- /.box-header -->

      <div class="box-body">

        <dl class="dl-horizontal">

          <dt>Name:</dt>

          <dd id="dd-name"></dd>

          <dt>Birthday:</dt>

          <dd id="dd-bday"></dd>

          <dt>Age:</dt>

          <dd id="dd-age"></dd>

          <dt>Email Address:</dt>

          <dd id="dd-email"></dd>

          <dt>FB:</dt>

          <dd id="dd-fb"></dd>

          <dt>Occupation:</dt>

          <dd id="dd-occu"></dd>

          <dt>Social Status:</dt>

          <dd id="dd-socstat"></dd>

          <dt>Contact No:</dt>

          <dd id="dd-contact"></dd>

          <dt>Address in the Phil.:</dt>

          <dd id="dd-addphil"></dd>

          <dt>Office/Work Address:</dt>

          <dd id="dd-offwor"></dd>

          <dt>Weight:</dt>

          <dd id="dd-wei"></dd>

          <dt>Height:</dt>

          <dd id="dd-hei"></dd>

          <dt>Body Mask Index:</dt>

          <dd id="dd-bmi"></dd>

          <dt>Blodd Pressure (Sys/Dia):</dt>

          <dd id="dd-bp"></dd>

          <dt>Assesstment:</dt>

          <dd id="dd-asse"></dd>

          <dt>Referred by:</dt>

          <dd id="dd-refby"></dd>

        </dl>

      </div>

      <!-- /.box-body -->

    </div>

    <!-- /.box -->

  </div>

  <!-- Menstrual data-->

  <div class="col-md-8">
      <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
          <li class="active">
            <a href="#partners" data-toggle="tab" aria-expanded="true">Partner Information</a>
          </li>
          <li>
            <a href="#siemen" data-toggle="tab" aria-expanded="false">Siemen Analysis</a>
          </li>
          <li>
            <a href="#mat" data-toggle="tab" aria-expanded="false">Utrasound Report</a>
          </li>
          <li>
            <a href="#trans" data-toggle="tab" aria-expanded="false">Embryology Report</a>
          </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="partners">
            <!-- first tab-->
              <ul class="products-list product-list-in-box" id="partners-list">
              <!-- /.item -->
              <dl class="dl-horizontal">
                <dt>Name:</dt>
                <dd id="par-name"></dd>
                <dt>Birthday:</dt>
                <dd id="parbday"></dd>
                <dt>Age:</dt>
                <dd id="parAge"></dd>
                <dt>Occupation:</dt>
                <dd id="parOccu"></dd>
                <dt>Other Specify:</dt>
                <dd id="parOther"></dd>
                <dt># of children by other women:</dt>
                <dd id="parNoc"></dd>
                <dt>Expose to Chemical:</dt>
                <dd id="expo1"></dd>
                <dt>Expose to Heat:</dt>
                <dd id="expo2"></dd>
                <dt>Expose to Radiation:</dt>
                <dd id="expo3"></dd>
                <dt>Diabetes:</dt>
                <dd id="expo4"></dd>
                <dt>Asthma:</dt>
                <dd id="expo5"></dd>
                <dt>Smoking:</dt>
                <dd id="expo6"></dd>
                <dt>Drinking:</dt>
                <dd id="expo7"></dd>
                <dt>Mumps:</dt>
                <dd id="expo8"></dd>
                <dt>Varicocele:</dt>
                <dd id="expo9"></dd>
                <dt>Erectile Dysfunction:</dt>
                <dd id="expo10"></dd>
                <dt>Vasectomy:</dt>
                <dd id="expo11"></dd>
                <dt>Taking Hormones?:</dt>
                <dd id="expo12"></dd>
                <dt>Supplements?:</dt>
                <dd id="expo13"></dd>
                <dt>Antibiotics?:</dt>
                <dd id="expo14"></dd>
                <dt>Weight:</dt>
                <dd id="par-wei"></dd>
                <dt>Height:</dt>
                <dd id="par-hei"></dd>
                <dt>Body Mask Index:</dt>
                <dd id="par-bmi"></dd>
                <dt>Blodd Pressure (Sys/Dia):</dt>
                <dd id="par-bp"></dd>
              </dl>
              </ul>
            </div>
          <div class="tab-pane" id="siemen">
            <!-- second tab-->
            <ul class="products-list product-list-in-box" id="siemen-list">
            <!-- /.item -->
              <dl class="dl-horizontal">
                  <dt>Color:</dt>
                  <dd id="color"></dd>
                  <dt>Volume:</dt>
                  <dd id="volume"></dd>
                  <dt>pH:</dt>
                  <dd id="ph"></dd>
                  <dt>Viscosity:</dt>
                  <dd id="viscosity"></dd>
                  <dt>Liquefaction time:</dt>
                  <dd id="liquetime"></dd>
                  <dt>Motility:</dt>
                  <dd id="motility"></dd>
                  <dt>Grading:</dt>
                  <dd id="grading"></dd>
                  <dt>Morphology:</dt>
                  <dd id="morphology"></dd>
                  <dt>Sperm Count:</dt>
                  <dd id="spercnt"></dd>
                  <dt>Pus Cell:</dt>
                  <dd id="puscell"></dd>
                  <dt>Red Cell:</dt>
                  <dd id="redcell"></dd>
                  <dt>Bacteria:</dt>
                  <dd id="bacteria"></dd>
                  <dt>Days Abstained:</dt>
                  <dd id="daysabs"></dd>
                  <dt>WSS:</dt>
                  <dd id="wss"></dd>
              </dl>
            </ul>
          </div>
          <div class="tab-pane" id="mat">
            <!-- first tab-->
              <ul class="products-list product-list-in-box" id="ultra-list">
              <!-- /.item -->
              </ul>
          </div>
          <div class="tab-pane" id="trans">
            <!-- second tab-->
            <ul class="products-list product-list-in-box" id="embro-list">
            <!-- /.item -->
            </ul>
          </div>
        </div>
      </div>
  </div>
  <!-- ./col -->
</div>
<?php
  require_once('inc/patient-history.php');
?>



