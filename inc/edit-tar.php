<div class="row">
	<form method="post" id="form-tar-edit" enctype="multipart/form-data">
	<div class="col-md-8">
		<div class="box box-default">
			<div class="box-header with-border">
				<h3 class="box-title">Information</h3>
			</div>
			<div class="box-body" style="padding:20px;">
				<div class="row">
					<div class="col-xs-6">
						<div class="form-group">
							<label for="pat_fullname">Patient Name: </label>
							<input type="hidden" id="tarid" name="tarid">
                            <input type="text" class="form-control" id="pat_fullname" name="pat_fullname" disabled>
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group">
							<label for="urdate">Date: </label>
							<div class="input-group date">
								<div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								</div>
								<input type="text" class="form-control pull-right" id="urdate" name="urdate" required>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="form-group">
							<label for="uterus">Biometry:</label>
						</div>
					</div>
				</div>
				<div class="row form-horizontal">
					<div class="col-xs-12">
						<div class="form-group">
							<label for="tar_num" class="col-sm-3 control-label">Number :</label>

							<div class="col-sm-3">
								<input type="text" class="form-control" id="tar_num" placeholder="" name="tar_num">
							</div>
						</div>
						<div class="form-group">
							<label for="tar_pres" class="col-sm-3 control-label">Presentation :</label>

							<div class="col-sm-3">
								<input type="text" class="form-control" id="tar_pres" placeholder="" name="tar_pres">
							</div>
						</div>
						<div class="form-group">
							<label for="tar_bip_dia" class="col-sm-3 control-label">Biparietal Diameter :</label>

							<div class="col-sm-3">
								<input type="text" class="form-control" id="tar_bip_dia" placeholder="" name="tar_bip_dia">
							</div>
						</div>
						<div class="form-group">
							<label for="tar_occ_dia" class="col-sm-3 control-label">Occipitofrontal Diameter :</label>

							<div class="col-sm-3">
								<input type="text" class="form-control" id="tar_occ_dia" placeholder="" name="tar_occ_dia">
							</div>
						</div>
						<div class="form-group">
							<label for="tar_cep_ind" class="col-sm-3 control-label">Cephalic Index :</label>

							<div class="col-sm-3">
								<input type="text" class="form-control" id="tar_cep_ind" placeholder="" name="tar_cep_ind">
							</div>
						</div>
						<div class="form-group">
							<label for="tar_fem_len" class="col-sm-3 control-label">Femoral Length :</label>

							<div class="col-sm-3">
								<input type="text" class="form-control" id="tar_fem_len" placeholder="" name="tar_fem_len">
							</div>
						</div>
						<div class="form-group">
							<label for="tar_abd_cir" class="col-sm-3 control-label">Abdominal Circumference :</label>

							<div class="col-sm-3">
								<input type="text" class="form-control" id="tar_abd_cir" placeholder="" name="tar_abd_cir">
							</div>
						</div>
						<div class="form-group">
							<label for="tar_est_fet_wei" class="col-sm-3 control-label">Estimated Fetal Weight :</label>

							<div class="col-sm-3">
								<input type="text" class="form-control" id="tar_est_fet_wei" placeholder="" name="tar_est_fet_wei">
							</div>
						</div>
						<div class="form-group">
							<label for="tar_pla" class="col-sm-3 control-label">Placenta :</label>

							<div class="col-sm-3">
								<input type="text" class="form-control" id="tar_pla" placeholder="" name="tar_pla">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="form-group">
							<label for="uterus">Biophysical Profile:</label>
						</div>
					</div>
				</div>
				<div class="row form-horizontal">
					<div class="col-xs-12">
						<div class="form-group">
							<label for="tar_tone" class="col-sm-3 control-label">Tone :</label>

							<div class="col-sm-3">
								<input type="text" class="form-control" id="tar_tone" placeholder="" name="tar_tone">
							</div>
						</div>
						<div class="form-group">
							<label for="tar_move" class="col-sm-3 control-label">Movement :</label>

							<div class="col-sm-3">
								<input type="text" class="form-control" id="tar_move" placeholder="" name="tar_move">
							</div>
						</div>
						<div class="form-group">
							<label for="tar_brea" class="col-sm-3 control-label">Breathing :</label>

							<div class="col-sm-3">
								<input type="text" class="form-control" id="tar_brea" placeholder="" name="tar_brea">
							</div>
						</div>
						<div class="form-group">
							<label for="tar_amn_flu_ind" class="col-sm-3 control-label">Amniotic Fluid Index :</label>

							<div class="col-sm-3">
								<input type="text" class="form-control" id="tar_amn_flu_ind" placeholder="" name="tar_amn_flu_ind">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="form-group">
							<label for="tar_impre">Impression: </label>
							<textarea class="form-control" rows="3" id="tar_impre" name="tar_impre" name="tar_impre"></textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer" style="padding:20px;">
				<button type="submit" name="regnew" class="btn btn-success pull-right">Update Report</button>
			</div>
		</div>
	</div>
	</form>

<?php require_once('inc/rec-usr.php')?>
</div>