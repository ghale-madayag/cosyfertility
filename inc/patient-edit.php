<form method="post" id="form-patient-edit" enctype="multipart/form-data">
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
							<input type="hidden" name="pat-num-edit" id="pat-num" class="form-control">
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
									<input type="text" class="form-control pull-right" id="bday" name="bday" required>
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
							<div class="col-sm-4"></div>
							<div class="col-sm-3">
								<input type="checkbox" name="comg" id="comg">
								<label for="comg">
									G:
								</label>
							</div>
							<div class="col-sm-3">
								<input type="checkbox" name="comp" id="comp">
								<label for="p">
									P:
								</label>
							</div>
							<div class="col-sm-4"></div>
							<div class="col-sm-3">
								<input type="checkbox" name="coma" id="coma">
								<label for="coma">
									A:
								</label>
							</div>
							<div class="col-sm-3">
								<input type="checkbox" name="coml" id="coml">
								<label for="coml">
									L:
								</label>
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
									<input type="checkbox" name="lmpl" id="lmpl">
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
									<input type="checkbox" name="parChe" id="parChe">
								</div>
								<div class="col-sm-3">
									<label for="">
										Heat
									</label>
									<input type="checkbox" name="parHeat" id="parHeat">
								</div>
								<div class="col-sm-3">
									<label for="">
										Radiation
									</label>
									<input type="checkbox" name="parRad" id="parRad">
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
			<div class="box-footer">
				<button type="submit" class="btn btn-success pull-right">Update</button>
			</div>
			</form>
		</div>
	</div>
</div>


