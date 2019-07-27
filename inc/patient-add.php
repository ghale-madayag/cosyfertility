<form method="post" id="form-patient-add" enctype="multipart/form-data">
<div class="row">
	<div class="col-md-6">
		
		<div class="box box-default">
			<div class="box-header with-border">
				<h3 class="box-title">
					Personal Information
				</h3>
				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
				</div>
			</div>
			<div class="box-body">
				<div class="row form-horizontal">
					<div class="col-xs-12">
						<div class="form-group">
							<label for="pat-num" class="col-sm-4 control-label">Patient Number: </label>
							<input type="hidden" name="pat-num" id="pat-num" class="form-control">
							<div class="col-sm-6">
								<h4 id="pat-num-h" class="text-green"></h4>
							</div>
						</div>
						<div class="form-group">
							<label for="lname" class="col-sm-4 control-label">Last Name:</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" id="lname" placeholder="" name="lname">
							</div>
						</div>
						
						<div class="form-group">
							<label for="fname" class="col-sm-4 control-label">First Name:</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" id="fname" placeholder="" name="fname">
							</div>
						</div>
						<div class="form-group">
							<label for="mname" class="col-sm-4 control-label">Middle Name:</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" id="mname" placeholder="" name="mname">
							</div>
						</div>
						<div class="form-group">
							<label for="bday" class="col-sm-4 control-label">Birthday: </label>
							<div class="col-sm-6">
								<div class="input-group date">
									<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</div>
									<input type="text" class="form-control pull-right" id="datepicker" name="bday" required>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="cstat" class="col-sm-4 control-label">Civil Status: </label>
							<div class="col-sm-6">
								<select class="form-control" name="cstat" id="cstat" required>
									<option disabled selected value="">Select Status</option>
									<option value="Significant other">Significant other</option>
									<option value="Married">Married</option>
									<option value="Single">Single</option>
									<option value="Widowed">Widowed</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="contact" class="col-sm-4 control-label">Contact No: </label>
							<div class="col-sm-6">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-phone"></i>
									</div>
									<input type="text" class="form-control" data-inputmask='"mask": "(63) 999-999-9999"' data-mask name="contact" id="contact" required>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="email" class="col-sm-4 control-label">Email: </label>
							<div class="col-sm-6">
								<input type="email" name="email" id="email" class="form-control" required>	
							</div>
						</div>
						<div class="form-group">
							<label for="fb" class="col-sm-4 control-label">FB Account: </label>
							<div class="col-sm-6">
								<input type="text" name="fb" id="fb" class="form-control" >	
							</div>
						</div>
						<div class="form-group">
							<label for="haddress" class="col-sm-4 control-label">Home Address: </label>
							<div class="col-sm-6">
								<textarea class="form-control" rows="3" id="haddress" name="haddress"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="occu" class="col-sm-4 control-label">Occupation: </label>
							<div class="col-sm-6">
								<input type="text" name="occu" id="occu" class="form-control" >	
							</div>
						</div>
						<div class="form-group">
							<label for="owaddress" class="col-sm-4 control-label">Office/Work Address: </label>
							<div class="col-sm-6">
								<textarea class="form-control" rows="3" id="owaddress" name="owaddress"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="assess" class="col-sm-4 control-label">Assesstment: </label>
							<div class="col-sm-6">
								<textarea class="form-control" rows="3" id="assess" name="assess"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="refby" class="col-sm-4 control-label">Referred by: </label>
							<div class="col-sm-6">
								<input type="text" name="refby" id="refby" class="form-control" >	
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-4 control-label">Long Term Plan: </label>
						</div>
						<div class="form-group">
							<div class="col-sm-4"></div>
							<div class="col-sm-3">
								<input type="checkbox" name="ltp1" id="ltp1">
								<label for="ltp1">
									COH + TI
								</label>
							</div>
							<div class="col-sm-3">
								<input type="checkbox" name="ltp2" id="ltp2">
								<label for="ltp2">
									COH + IUI
								</label>
							</div>
							<div class="col-sm-4"></div>
							<div class="col-sm-3">
								<input type="checkbox" name="ltp3" id="ltp3">
								<label for="ltp3">
									IVF
								</label>
							</div>
							<div class="col-sm-3">
								<input type="checkbox" name="ltp4" id="ltp4">
								<label for="ltp4">
									Surgery
								</label>
							</div>
							<div class="col-sm-4"></div>
							<div class="col-sm-3">
								<input type="checkbox" name="ltp5" id="ltp5">
								<label for="ltp5">
									CS
								</label>
							</div>
							<div class="col-sm-3">
								<input type="checkbox" name="ltp6" id="ltp6">
								<label for="ltp6">
									NSD
								</label>
							</div>
							<div class="col-sm-4"></div>
							<div class="col-sm-3">
								<input type="checkbox" name="ltp7" id="ltp7" >
								<label for="ltp7">
									HRT
								</label>
							</div>
							<div class="col-sm-3">
								<input type="checkbox" name="ltp8" id="ltp8">
								<label for="ltp8">
									Contraception
								</label>
							</div>
							<div class="col-sm-4"></div>
							<div class="col-sm-3">
								<input type="checkbox" name="ltp9" id="ltp9">
								<label for="ltp9">
									Medical
								</label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="box box-default">
			<div class="box-header with-border">
				<h3 class="box-title">First Visit</h3>
				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
				</div>
			</div>
			<div class="box-body">
				<div class="row form-horizontal">
					<div class="col-xs-12">
						<div class="form-group">
							<label for="fvdate" class="col-sm-4 control-label">Date: </label>
							<div class="col-sm-6">
								<div class="input-group date">
									<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</div>
									<input type="text" class="form-control pull-right" id="fvdate" name="fvdate" >
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="patBp" class="col-sm-4 control-label">Patient BP: </label>
							<div class="col-sm-6">
								<input type="text" name="patBp" id="patBp" class="form-control" >	
							</div>
						</div>
						<div class="form-group">
							<label for="patHt" class="col-sm-4 control-label">Patient HT: </label>
							<div class="col-sm-6">
								<input type="text" name="patHt" id="patHt" class="form-control" >	
							</div>
						</div>
						<div class="form-group">
							<label for="patWt" class="col-sm-4 control-label">Patient WT: </label>
							<div class="col-sm-6">
								<input type="text" name="patWt" id="patWt" class="form-control" >	
							</div>
						</div>
						<div class="form-group">
							<label for="patBmi" class="col-sm-4 control-label">Patient BMI: </label>
							<div class="col-sm-6">
								<input type="text" name="patBmi" id="patBmi" class="form-control" >	
							</div>
						</div>
						<br/><br/>
						<div class="form-group">
							<label for="parBp" class="col-sm-4 control-label">Partner BP: </label>
							<div class="col-sm-6">
								<input type="text" name="parBp" id="parBp" class="form-control" >	
							</div>
						</div>
						<div class="form-group">
							<label for="parHt" class="col-sm-4 control-label">Partner HT: </label>
							<div class="col-sm-6">
								<input type="text" name="parHt" id="parHt" class="form-control" >	
							</div>
						</div>
						<div class="form-group">
							<label for="parWt" class="col-sm-4 control-label">Partner WT: </label>
							<div class="col-sm-6">
								<input type="text" name="parWt" id="parWt" class="form-control" >	
							</div>
						</div>
						<div class="form-group">
							<label for="parBmi" class="col-sm-4 control-label">Partner BMI: </label>
							<div class="col-sm-6">
								<input type="text" name="parBmi" id="parBmi" class="form-control" >	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="box box-default">
			<div class="box-header with-border">
				<h3 class="box-title">Chief Complaint: 1° INFERTILITY</h3>
				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
				</div>
			</div>
			<div class="box-body">
				<div class="row form-horizontal">
					<div class="col-xs-12">
						<div class="form-group">
							<label for="comGAPL" class="col-sm-4 control-label"></label>
							<div class="col-sm-6">
								<input type="text" name="comGAPL" id="comGAPL" class="form-control" >	
							</div>
						</div>
						<div class="form-group">
							<label for="lmp" class="col-sm-4 control-label">LMP: </label>
							<div class="col-sm-6">
								<div class="input-group date">
									<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</div>
									<input type="text" class="form-control pull-right" id="lmp" name="lmp" >
								</div>
							</div>
						</div>
						<div class="form-group">
								<div class="col-sm-4"></div>
								<div class="col-sm-2">
									<label for="lmph">
										H:
									</label>
									<input type="checkbox" name="lmph" id="lmph">
								</div>
								<div class="col-sm-2">
									<label for="lmpn">
										N:
									</label>
									<input type="checkbox" name="lmpn" id="lmpn">
								</div>
								<div class="col-sm-4"></div>
								<div class="col-sm-2">
									<label for="lmpl">
										L:
									</label>
									<input type="checkbox" name="lmpl" id="lmpn">
								</div>
						</div>
						<div class="form-group">
							<label for="pmp" class="col-sm-4 control-label">PMP: </label>
							<div class="col-sm-6">
								<div class="input-group date">
									<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</div>
									<input type="text" class="form-control pull-right" id="pmp" name="pmp" >
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-4"></div>
							<div class="col-sm-2">
								<label for="pmph">
									H:
								</label>
								<input type="checkbox" name="pmph" id="pmph">
							</div>
							<div class="col-sm-2">
								<label for="pmpn">
									N:
								</label>
								<input type="checkbox" name="pmpn" id="pmpn">
							</div>
							<div class="col-sm-4"></div>
							<div class="col-sm-2">
								<label for="pmpl">
									L:
								</label>
								<input type="checkbox" name="pmpl" id="pmpl">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<div class="box box-default">
			<div class="box-header with-border">
				<h3 class="box-title">Charge</h3>
				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
				</div>
			</div>
			<div class="box-body">
				<div class="row form-horizontal">
					<div class="col-xs-12">
						<div class="form-group">
							<div class="col-sm-4"></div>
							<div class="col-sm-2">
								<input type="checkbox" name="ip7" id="ip7">
								<label for="ip7">
									IP7:
								</label>
							</div>
						</div>
						<div class="form-group">
							<label for="doc" class="col-sm-4 control-label">Day of Cycle: </label>
							<div class="col-sm-6">
								<input type="text" name="doc" id="doc" class="form-control" >	
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-4 control-label">Irregular: </label>
							<div class="col-sm-2">
								<label for="">
									Yes
								</label>
								<input type="radio" name="irreg" value="Yes">
							</div>
							<div class="col-sm-2">
								<label for="">
									No
								</label>
								<input type="radio" name="irreg"  value="No">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-4 control-label">Dysmenorrhea: </label>
							<div class="col-sm-2">
								<label for="">
									Yes
								</label>
								<input type="radio" name="dysmen"  value="Yes">
							</div>
							<div class="col-sm-2">
								<label for="">
									No
								</label>
								<input type="radio" name="dysmen"  value="No">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-4 control-label">Discharge: </label>
							<div class="col-sm-2">
								<label for="">
									Yes
								</label>
								<input type="radio" name="discha"  value="Yes">
							</div>
							<div class="col-sm-2">
								<label for="">
									No
								</label>
								<input type="radio" name="discha"  value="No">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-4 control-label">Past Medical History:</label>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-4 control-label">Diabetes: </label>
							<div class="col-sm-2">
								<label for="">
									Yes
								</label>
								<input type="radio" name="diabe"  value="Yes">
							</div>
							<div class="col-sm-2">
								<label for="">
									No
								</label>
								<input type="radio" name="diabe"  value="No">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-4 control-label">Asthma: </label>
							<div class="col-sm-2">
								<label for="">
									Yes
								</label>
								<input type="radio" name="asth"  value="Yes">
							</div>
							<div class="col-sm-2">
								<label for="">
									No
								</label>
								<input type="radio" name="asth"  value="No">
							</div>
						</div>
						<br/><br/>
						<div class="form-group">
							<label for="" class="col-sm-4 control-label">Smoking: </label>
							<div class="col-sm-2">
								<label for="">
									Yes
								</label>
								<input type="radio" name="smok"  value="Yes">
							</div>
							<div class="col-sm-2">
								<label for="">
									No
								</label>
								<input type="radio" name="smok"  value="No">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-4 control-label">Drinking: </label>
							<div class="col-sm-2">
								<label for="">
									Yes
								</label>
								<input type="radio" name="drink"  value="Yes">
							</div>
							<div class="col-sm-2">
								<label for="">
									No
								</label>
								<input type="radio" name="drink"  value="No">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-4 control-label">Contraceptive: </label>
							<div class="col-sm-2">
								<label for="">
									Yes
								</label>
								<input type="radio" name="contra"  value="Yes">
							</div>
							<div class="col-sm-2">
								<label for="">
									No
								</label>
								<input type="radio" name="contra"  value="No">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-4 control-label">HPV Vaccine: </label>
							<div class="col-sm-2">
								<label for="">
									Yes
								</label>
								<input type="radio" name="hpvv"  value="Yes">
							</div>
							<div class="col-sm-2">
								<label for="">
									No
								</label>
								<input type="radio" name="hpvv"  value="No">
							</div>
						</div>
						<div class="form-group">
							<label for="lps" class="col-sm-4 control-label">Last Pap Smear: </label>
							<div class="col-sm-6">
								<div class="input-group date">
									<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</div>
									<input type="text" class="form-control pull-right" id="lps" name="lps" >
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="box box-default">
			<div class="box-header with-border">
				<h3 class="box-title">Gyne Consults</h3>
				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
				</div>
			</div>
			<div class="box-body">
				<div class="row form-horizontal">
					<div class="col-xs-12">
						<div class="form-group">
							<label for="gcdate" class="col-sm-4 control-label">Date: </label>
							<div class="col-sm-6">
								<div class="input-group date">
									<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</div>
									<input type="text" class="form-control pull-right" id="gcdate" name="gcdate">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="doctor" class="col-sm-4 control-label">Doctor: </label>
							<div class="col-sm-6">
								<input type="text" name="doctor" id="doctor" class="form-control">	
							</div>
						</div>
						<div class="form-group">
							<label for="diag" class="col-sm-4 control-label">Diagnosis: </label>
							<div class="col-sm-6">
								<input type="text" name="diag" id="diag" class="form-control">	
							</div>
						</div>
						<div class="form-group">
							<label for="treat" class="col-sm-4 control-label">Treatment: </label>
							<div class="col-sm-6">
								<input type="text" name="treat" id="treat" class="form-control">	
							</div>
						</div>
						<div class="form-group">
							<label for="yrsMar" class="col-sm-4 control-label">YEARS MARRIED: </label>
							<div class="col-sm-6">
								<input type="text" name="yrsMar" id="yrsMar" class="form-control">	
							</div>
						</div>
						<div class="form-group">
							<label for="yrsCoh" class="col-sm-4 control-label">YEARS COHABITING: </label>
							<div class="col-sm-6">
								<input type="text" name="yrsCoh" id="yrsCoh" class="form-control">	
							</div>
						</div>
						<div class="form-group">
							<label for="yrsTry" class="col-sm-4 control-label">YEARS TRYING: </label>
							<div class="col-sm-6">
								<input type="text" name="yrsTry" id="yrsTry" class="form-control">	
							</div>
						</div>
						<div class="form-group">
							<label for="coiFre" class="col-sm-4 control-label">COITAL FREQUENCY: </label>
							<div class="col-sm-6">
								<input type="text" name="coiFre" id="coiFre" class="form-control" placeholder="(Times per week)">	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<div class="box box-default">
			<div class="box-header with-border">
				<h3 class="box-title">Partner Information</h3>
				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
				</div>
			</div>
			<div class="box-body">
				<div class="row form-horizontal">
					<div class="col-xs-12">
						<div class="form-group">
							<label for="parLname" class="col-sm-4 control-label">Last Name:</label>
							<div class="col-sm-6">
									<input type="text" class="form-control" id="parLname" placeholder="" name="parLname">
								</div>
							</div>
							
							<div class="form-group">
								<label for="parFname" class="col-sm-4 control-label">First Name:</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" id="parFname" placeholder="" name="parFname">
								</div>
							</div>
							<div class="form-group">
								<label for="parMname" class="col-sm-4 control-label">Middle Name:</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" id="parMname" placeholder="" name="parMname">
								</div>
							</div>
							<div class="form-group">
								<label for="parBday" class="col-sm-4 control-label">Birthday: </label>
								<div class="col-sm-6">
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input type="text" class="form-control pull-right" id="parBday" name="parBday" >
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="parOccu" class="col-sm-4 control-label">Occupation:</label>
								<div class="col-sm-6">
									<select class="form-control" name="parOccu" id="parOccu">
										<option disabled selected value="">Select Occupation</option>
										<option value="OFW">OFW</option>
										<option value="Non-OFW">Non-OFW</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="parOther" class="col-sm-4 control-label">Other Specify:</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" id="parOther" placeholder="" name="parOther">
								</div>
							</div>
							<div class="form-group">
								<label for="parNoChild" class="col-sm-4 control-label">No. of children by other women: </label>
								<div class="col-sm-6">
									<input type="text" class="form-control" id="parNoChild" placeholder="" name="parNoChild">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-4 control-label">Exposure: </label>
								<div class="col-sm-3">
									<label for="">
										Chemicals
									</label>
									<input type="checkbox" name="parChe">
								</div>
								<div class="col-sm-3">
									<label for="">
										Heat
									</label>
									<input type="checkbox" name="parHeat">
								</div>
								<div class="col-sm-3">
									<label for="">
										Radiation
									</label>
									<input type="checkbox" name="parRad">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-4 control-label">Diabetes: </label>
								<div class="col-sm-3">
									<label for="">
										Yes
									</label>
									<input type="radio" name="parExpo" value="Yes">
								</div>
								<div class="col-sm-3">
									<label for="">
										No
									</label>
									<input type="radio" name="parExpo" value="No">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-4 control-label">Asthma: </label>
								<div class="col-sm-3">
									<label for="">
										Yes
									</label>
									<input type="radio" name="parAst" value="Yes">
								</div>
								<div class="col-sm-3">
									<label for="">
										No
									</label>
									<input type="radio" name="parAst" value="No">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-4 control-label">Smoking: </label>
								<div class="col-sm-3">
									<label for="">
										Yes
									</label>
									<input type="radio" name="parSmo" value="Yes">
								</div>
								<div class="col-sm-3">
									<label for="">
										No
									</label>
									<input type="radio" name="parSmo" value="No">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-4 control-label">Drinking: </label>
								<div class="col-sm-3">
									<label for="">
										Yes
									</label>
									<input type="radio" name="parDri" value="Yes">
								</div>
								<div class="col-sm-3">
									<label for="">
										No
									</label>
									<input type="radio" name="parDri" value="No">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-4 control-label">Mumps: </label>
								<div class="col-sm-3">
									<label for="">
										Yes
									</label>
									<input type="radio" name="parMum" value="Yes">
								</div>
								<div class="col-sm-3">
									<label for="">
										No
									</label>
									<input type="radio" name="parMum" value="No">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-4 control-label">Varicocele: </label>
								<div class="col-sm-3">
									<label for="">
										Yes
									</label>
									<input type="radio" name="parVar" value="Yes">
								</div>
								<div class="col-sm-3">
									<label for="">
										No
									</label>
									<input type="radio" name="parVar" value="No">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-4 control-label">Erectile Dysfunction: </label>
								<div class="col-sm-3">
									<label for="">
										Yes
									</label>
									<input type="radio" name="parED" value="Yes">
								</div>
								<div class="col-sm-3">
									<label for="">
										No
									</label>
									<input type="radio" name="parED" value="No">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-4 control-label">Vasectomy: </label>
								<div class="col-sm-3">
									<label for="">
										Yes
									</label>
									<input type="radio" name="parVas" value="Yes">
								</div>
								<div class="col-sm-3">
									<label for="">
										No
									</label>
									<input type="radio" name="parVas" value="No">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-4 control-label">Taking Hormones?: </label>
								<div class="col-sm-3">
									<label for="">
										Yes
									</label>
									<input type="radio" name="parHor" value="Yes">
								</div>
								<div class="col-sm-3">
									<label for="">
										No
									</label>
									<input type="radio" name="parHor" value="No">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-4 control-label">Supplements?: </label>
								<div class="col-sm-3">
									<label for="">
										Yes
									</label>
									<input type="radio" name="parSup" value="Yes">
								</div>
								<div class="col-sm-3">
									<label for="">
										No
									</label>
									<input type="radio" name="parSup" value="No">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-4 control-label">Antibiotics?: </label>
								<div class="col-sm-3">
									<label for="">
										Yes
									</label>
									<input type="radio" name="parAnti" value="Yes">
								</div>
								<div class="col-sm-3">
									<label for="">
										No
									</label>
									<input type="radio" name="parAnti" value="No">
								</div>
							</div>
						</div>
				</div>
			</div>
			<!-- <div class="box-footer">
				<button type="submit" class="btn btn-success pull-right">Register</button>
			</div> -->
			<!-- </form> -->
		</div>
	</div>
<div class="col-md-6">
<!-- <form method="post" id="form-usr-add" enctype="multipart/form-data"> -->
		<div class="box box-default">
			<div class="box-header with-border">
				<h3 class="box-title">Ultra Sound Report</h3>
				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
				</div>
			</div>
			<div class="box-body" style="padding:20px;">
				<div class="row">
					<!-- <div class="col-xs-6">
						<div class="form-group">
							<label for="patname">Patient Name: </label>
							<select id="patname" class="form-control select2" style="width:100%;;" name="patname" placeholder="Search..." required></select>	
						</div>
					</div> -->
					<div class="col-xs-6">
						<div class="form-group">
							<label for="urdate">Date: </label>
							<div class="input-group date">
								<div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								</div>
								<input type="text" class="form-control pull-right" id="urdate" name="urdate">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<div class="form-group">
							<label for="pus">Pelvic Ultrasound:</label>
							<select class="form-control" name="pus" id="pus">
								<option disabled selected value="-1">Select Ultrasound</option>
			                    <option value="Transvaginal">Transvaginal</option>
			                    <option value="Transabdominal">Transabdominal</option>
			                    <option value="Transrectal">Transrectal</option>
			                </select>
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group">
							<label for="uterus">Uterus:</label>
							<select class="form-control" name="uterus" id="uterus">
								<option disabled selected value="-1">Select Uterus</option>
			                    <option value="Antevered">Antevered</option>
			                    <option value="Retroverted">Retroverted</option>
			                    <option value="Midline">Midline</option>
			                </select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<label for="size1">Size: </label>
						<div class="form-group">
							<div class="col-xs-3 no-padding">
								<input type="text" name="size1" id="size1" class="form-control"  placeholder="cms">
							</div>
							<div class="col-xs-1">
								<p><div class="fa fa-close"></div></p>
							</div>
							<div class="col-xs-3 no-padding">
								<input type="text" name="size2" id="size2" class="form-control"  placeholder="cms">
							</div>
							<div class="col-xs-1">
								<p><div class="fa fa-close"></div></p>
							</div>
							<div class="col-xs-3 no-padding">
								<input type="text" name="size3" id="size3" class="form-control"  placeholder="cms">
							</div>
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group">
							<label for="contour">Contour:</label>
							<select class="form-control" name="contour" id="contour">
								<option disabled selected value="-1">Select Contour</option>
			                    <option value="Smooth">Smooth</option>
			                    <option value="Irregular">Irregular</option>
			                </select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<div class="form-group">
							<label for="echopattern">Echopattern:</label>
							<select class="form-control" name="echopattern" id="echopattern">
								<option disabled selected value="-1">Select Echopattern</option>
			                    <option value="Homogenous">Homogenous</option>
			                    <option value="Heterogenous">Heterogenous</option>
			                </select>
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group">
							<label for="echorem">Echopattern Remarks: </label>
							<textarea class="form-control" rows="3" id="echorem" name="echorem"></textarea>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<label>Endometrium: </label>
						<div class="form-group">
							<div class="col-xs-4 no-padding">
								<input type="text" name="endometrium" id="endometrium" class="form-control"  placeholder="cms. Thick">
							</div>
							<div class="col-xs-8">
								<select class="form-control" name="endometrium_sel" id="endometrium_sel">
									<option disabled selected value="-1">Select</option>
				                    <option value="linear">Linear</option>
				                    <option value="trilaminar">Trilaminar</option>
				                    <option value="hyperechoic">Hyperechoic</option>
				                    <option value="heterogenous">Heterogenous</option>
				                    <option value="thickened">Thickened</option>
			                	</select>
							</div>
						</div>
					</div>
					<div class="col-xs-6">
						<label>Cervix:</label>
						<div class="form-group">
							<div class="col-xs-2 no-padding">
								<input type="text" name="cer1" id="cer1" class="form-control"  placeholder="cms">
							</div>
							<div class="col-xs-1">
								<p><div class="fa fa-close"></div></p>
							</div>
							<div class="col-xs-2 no-padding">
								<input type="text" name="cer2" id="cer2" class="form-control"  placeholder="cms">
							</div>
							<div class="col-xs-6">
								<label>
									<input type="checkbox" name="urm" id="urm" class="flat-red">
									&nbsp; Unremarkable
								</label>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="form-group">
							<label>Endometrium Remarks:</label>
							<textarea  class="form-control" row="3" id="endorem" name="endorem"></textarea>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<label>Right Ovary:</label>
						<div class="form-group">
							<div class="col-xs-3 no-padding">
								<input type="text" name="ro1" id="ro1" class="form-control"  placeholder="cms">
							</div>
							<div class="col-xs-1">
								<p><div class="fa fa-close"></div></p>
							</div>
							<div class="col-xs-3 no-padding">
								<input type="text" name="ro2" id="ro2" class="form-control"  placeholder="cms">
							</div>
							<div class="col-xs-1">
								<p><div class="fa fa-close"></div></p>
							</div>
							<div class="col-xs-3 no-padding">
								<input type="text" name="ro3" id="ro3" class="form-control"  placeholder="cms">
							</div>
						</div>
					</div>
					<div class="col-xs-6">
						<label>Left Ovary:</label>
						<div class="form-group">
							<div class="col-xs-3 no-padding">
								<input type="text" name="lo1" id="lo1" class="form-control"  placeholder="cms">
							</div>
							<div class="col-xs-1">
								<p><div class="fa fa-close"></div></p>
							</div>
							<div class="col-xs-3 no-padding">
								<input type="text" name="lo2" id="lo2" class="form-control"  placeholder="cms">
							</div>
							<div class="col-xs-1">
								<p><div class="fa fa-close"></div></p>
							</div>
							<div class="col-xs-3 no-padding">
								<input type="text" name="lo3" id="lo3" class="form-control"  placeholder="cms">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<div class="form-group">
							<label>Right Ovary Remarks:</label>
							<textarea  class="form-control" row="3" id="rigrem" name="rigrem"></textarea>
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group">
							<label>Left Ovary Remarks:</label>
							<textarea  class="form-control" row="3" id="lefrem" name="lefrem"></textarea>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<div class="form-group">
							<label for="cdsf">CUL-DE-SAC-FLUID:</label>
							<select class="form-control" name="cdsf" id="cdsf">
								<option disabled selected value="-1">Select CUL-DE-SAC-FLUID</option>
			                    <option value="None">None</option>
			                    <option value="Minimal">Minimal</option>
								<option value="Ascites">Ascites</option>
			                </select>
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group">
							<label for="opm">Other Pelvic Mass:</label>
							<select class="form-control" name="opm" id="opm">
								<option disabled selected value="-1">Select Pelvic Mass</option>
			                    <option value="Absent">Absent</option>
			                    <option value="Present">Present, Specifically</option>
			                </select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="form-group">
							<label for="impre">Impression: </label>
							<textarea class="form-control" rows="3" id="impre" name="impre"></textarea>
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="box-footer" style="padding:20px;">
				<button type="submit" class="btn btn-success pull-right">Register Patient</button>
			</div> -->
		</div>

	</div>
</div>
<div class="row">
	<div class="col-md-6">
			<div class="box box-default">
				<div class="box-header with-border">
					<h3 class="box-title">Trans-Abdominal Report</h3>
					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					</div>
				</div>
				<div class="box-body" style="padding:20px;">
					<div class="row">
						<!-- <div class="col-xs-6">
							<div class="form-group">
								<label for="patname">Patient Name: </label>
								<select id="patname" class="form-control select2" style="width:100%;;" name="patname" placeholder="Search..." required></select>	
							</div>
						</div> -->
						<div class="col-xs-6">
							<div class="form-group">
								<label for="tardate">Date: </label>
								<div class="input-group date">
									<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</div>
									<input type="text" class="form-control pull-right" id="tardate" name="tardate">
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

								<div class="col-sm-6">
									<input type="text" class="form-control" id="tar_num" placeholder="" name="tar_num">
								</div>
							</div>
							<div class="form-group">
								<label for="tar_pres" class="col-sm-3 control-label">Presentation :</label>

								<div class="col-sm-6">
									<input type="text" class="form-control" id="tar_pres" placeholder="" name="tar_pres">
								</div>
							</div>
							<div class="form-group">
								<label for="tar_bip_dia" class="col-sm-3 control-label">Biparietal Diameter :</label>

								<div class="col-sm-6">
									<input type="text" class="form-control" id="tar_bip_dia" placeholder="" name="tar_bip_dia">
								</div>
							</div>
							<div class="form-group">
								<label for="tar_occ_dia" class="col-sm-3 control-label">Occipitofrontal Diameter :</label>

								<div class="col-sm-6">
									<input type="text" class="form-control" id="tar_occ_dia" placeholder="" name="tar_occ_dia">
								</div>
							</div>
							<div class="form-group">
								<label for="tar_cep_ind" class="col-sm-3 control-label">Cephalic Index :</label>

								<div class="col-sm-6">
									<input type="text" class="form-control" id="tar_cep_ind" placeholder="" name="tar_cep_ind">
								</div>
							</div>
							<div class="form-group">
								<label for="tar_fem_len" class="col-sm-3 control-label">Femoral Length :</label>

								<div class="col-sm-6">
									<input type="text" class="form-control" id="tar_fem_len" placeholder="" name="tar_fem_len">
								</div>
							</div>
							<div class="form-group">
								<label for="tar_abd_cir" class="col-sm-3 control-label">Abdominal Circumference :</label>

								<div class="col-sm-6">
									<input type="text" class="form-control" id="tar_abd_cir" placeholder="" name="tar_abd_cir">
								</div>
							</div>
							<div class="form-group">
								<label for="tar_est_fet_wei" class="col-sm-3 control-label">Estimated Fetal Weight :</label>

								<div class="col-sm-6">
									<input type="text" class="form-control" id="tar_est_fet_wei" placeholder="" name="tar_est_fet_wei">
								</div>
							</div>
							<div class="form-group">
								<label for="tar_pla" class="col-sm-3 control-label">Placenta :</label>

								<div class="col-sm-6">
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

								<div class="col-sm-6">
									<input type="text" class="form-control" id="tar_tone" placeholder="" name="tar_tone">
								</div>
							</div>
							<div class="form-group">
								<label for="tar_move" class="col-sm-3 control-label">Movement :</label>

								<div class="col-sm-6">
									<input type="text" class="form-control" id="tar_move" placeholder="" name="tar_move">
								</div>
							</div>
							<div class="form-group">
								<label for="tar_brea" class="col-sm-3 control-label">Breathing :</label>

								<div class="col-sm-6">
									<input type="text" class="form-control" id="tar_brea" placeholder="" name="tar_brea">
								</div>
							</div>
							<div class="form-group">
								<label for="tar_amn_flu_ind" class="col-sm-3 control-label">Amniotic Fluid Index :</label>

								<div class="col-sm-6">
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
					<button type="submit" class="btn btn-success pull-right">Register Patient</button>
				</div>
			</div>
		</div>
	<div class="col-md-6">
		<div class="box box-default">
			<div class="box-header with-border">
				<h3 class="box-title">Embyology Report</h3>
				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
				</div>
			</div>
			<div class="box-body" style="padding:20px;">
				<div class="row">
					<!-- <div class="col-xs-6">
						<div class="form-group">
							<label for="patname">Patient Name: </label>
							<select id="patname" class="form-control select2" style="width:100%;;" name="patname" placeholder="Search..." required></select>	
						</div>
					</div> -->
					<div class="col-xs-6">
						<div class="form-group">
							<label for="esdate">Date: </label>
							<div class="input-group date">
								<div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								</div>
								<input type="text" class="form-control pull-right" id="esdate" name="esdate">
							</div>
						</div>
					</div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
						<div class="form-group">
							<label for="cycle">Cycle No: </label>
							<input type="text" name="cycle" id="cycle" class="form-control">
						</div>
                    </div>
                    <div class="col-xs-6">
						<div class="form-group">
							<label for="opudate">OPU Date: </label>
							<div class="input-group date">
								<div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								</div>
								<input type="text" class="form-control pull-right" id="opudate" name="opudate">
							</div>
						</div>
					</div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <label for="tnec">Total No. of Egg Collected: </label>
                        <div class="form-group">
                            <div class="col-xs-4 no-padding">
                                <input type="text" name="tnec" id="tnec" class="form-control">
                            </div>
                            <div class="col-xs-4 no-padding">
                                <input type="text" name="rt" id="rt" class="form-control"  placeholder="Rt:">
                            </div>
                            <div class="col-xs-4 no-padding">
                                <input type="text" name="lt" id="lt" class="form-control"  placeholder="Lt:">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <label for="tnef1">Total No. of Empty Follicle: </label>
                        <div class="form-group">
                            <div class="col-xs-6 no-padding">
                                <input type="text" name="tnef1" id="tnef1" class="form-control">
                            </div>
                            <div class="col-xs-6 no-padding">
                                <input type="text" name="tnef2" id="tnef2" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <label for="tnez1">Total No. of Empty Zona: </label>
                        <div class="form-group">
                            <div class="col-xs-6 no-padding">
                                <input type="text" name="tnez1" id="tnez1" class="form-control">
                            </div>
                            <div class="col-xs-6 no-padding">
                                <input type="text" name="tnez2" id="tnez2" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <label for="pi">Total No. of Immature Egg: </label>
                        <div class="form-group">
                            <div class="col-xs-6 no-padding">
                                <input type="text" name="pi" id="pi" class="form-control"  placeholder="PI">
                            </div>
                            <div class="col-xs-6 no-padding">
                                <input type="text" name="mi" id="mi" class="form-control"  placeholder="MI">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="tnme">Total No. of Mature Egg: </label>
                            <input type="text" name="tnme" id="tnme" class="form-control"  placeholder="MII">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <label for="tnae1">Total No. of Atretic Egg: </label>
                        <div class="form-group">
                            <div class="col-xs-6 no-padding">
                                <input type="text" name="tnae1" id="tnae1" class="form-control">
                            </div>
                            <div class="col-xs-6 no-padding">
                                <input type="text" name="tnae2" id="tnae2" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="tnpe">Total No. of Pathenogenic Egg: </label>
                            <input type="text" name="tnpe" id="tnpe" class="form-control">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <label for="tneafi1">Total No. of Egg available for Injection: </label>
                        <div class="form-group">
                            <div class="col-xs-4 no-padding">
                                <input type="text" name="tneafi1" id="tneafi1" class="form-control">
                            </div>
                            <div class="col-xs-4 no-padding">
                                <input type="text" name="tneafi2" id="tneafi2" class="form-control" placeholder="insemination">
                            </div>
                            <div class="col-xs-4 no-padding">
                                <input type="text" name="tneafi3" id="tneafi3" class="form-control" placeholder="insemination">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <label for="tnefer1">Total No. of Egg Fertilized: </label>
                        <div class="form-group">
                            <div class="col-xs-4 no-padding">
                                <input type="text" name="tnefer1" id="tnefer1" class="form-control">
                            </div>
                            <div class="col-xs-4 no-padding">
                                <input type="text" name="tnefer2" id="tnefer2" class="form-control" placeholder="ICSI">
                            </div>
                            <div class="col-xs-4 no-padding">
                                <input type="text" name="tnefer3" id="tnefer3" class="form-control" placeholder="IVF">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="tnecle">Total No. of Egg Cleaved: </label>
                            <input type="text" name="tnecle" id="tnecle" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="tnetran">Total No. of Embryo(s) Transferred: </label>
                            <input type="text" name="tnetran" id="tnetran" class="form-control">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="getran">Grade of Embryo(s) Transferred: </label>
                            <input type="text" name="getran" id="getran" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="tned">Total No. of Embryo(s)  Discarded: </label>
                            <input type="text" name="tned" id="tned" class="form-control">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="tnefro">Total No. of Embryo(s)  Frozen: </label>
                            <input type="text" name="tnefro" id="tnefro" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <label for="density">Husband's Semen Analysis on OPU Day: </label>
                        <div class="form-group">
                            <div class="col-xs-4 no-padding">
                                <input type="text" name="density" id="density" class="form-control" placeholder="Density">
                            </div>
                            <div class="col-xs-4 no-padding">
                                <input type="text" name="motility" id="motility" class="form-control" placeholder="Motility">
                            </div>
                            <div class="col-xs-4 no-padding">
                                <input type="text" name="morphology" id="morphology" class="form-control" placeholder="Morphology">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="embryologist">Embryologist: </label>
                            <input type="text" name="embryologist" id="embryologist" class="form-control">
                        </div>
                    </div>
                </div>
			</div>
			<!-- <div class="box-footer" style="padding:20px;">
				<button type="submit" name="regnew" class="btn btn-success pull-right">Register Report</button>
			</div> -->
		</div>
	</div>
		</form>
</div>

