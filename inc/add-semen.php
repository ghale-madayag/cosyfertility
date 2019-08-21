<div class="row">
	<form method="post" id="form-semen-add" enctype="multipart/form-data">
	<div class="col-md-8">
		<div class="box box-default">
			<div class="box-header with-border">
				<h3 class="box-title">Information</h3>
			</div>
			<div class="box-body" style="padding:20px;">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
							<label for="patname">Patient Name: </label>
							<select id="patname" class="form-control select2" style="width:100%;;" name="patname" placeholder="Search..." required></select>	
                        </div>
                    </div>
                </div>
				<div class="row">
					<div class="col-xs-6">
						<div class="form-group">
							<label for="sadate">Date of Collection: </label>
							<div class="input-group date">
								<div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								</div>
								<input type="text" class="form-control pull-right" id="sadate" name="sadate">
							</div>
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group">
							<label for="moc">Method of Collection:</label>
							<input type="text" class="form-control" id="moc" placeholder="" name="moc">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<div class="form-group">
							<label for="abs">Abstinence:</label>
							<input type="text" class="form-control" id="abs" placeholder="" name="abs">
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group">
							<label for="toc">Time of collection:</label>
							<input type="time" class="form-control" id="toc" placeholder="" name="toc">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<div class="form-group">
							<label for="toa">Time of Assessment:</label>
							<input type="time" class="form-control" id="toa" placeholder="" name="toa">
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group">
							<label for="liqtim">Liquefaction time:</label>
							<input type="text" class="form-control" id="liqtim" placeholder="" name="liqtim">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<div class="form-group">
							<label for="color">Color:</label>
							<input type="text" class="form-control" id="color" placeholder="" name="color">
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group">
							<label for="volume">Volume:</label>
							<input type="text" class="form-control" id="volume" placeholder="" name="volume">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<div class="form-group">
							<label for="viscosity">Viscosity:</label>
							<input type="text" class="form-control" id="viscosity" placeholder="" name="viscosity">
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group">
							<label for="ph">pH:</label>
							<input type="text" class="form-control" id="ph" placeholder="" name="ph">
						</div>
					</div>
				</div>
				<br/>
				<br/>
				<div class="row">
					<div class="col-xs-12">
						<div class="form-group">
							<label for="" style="font-style:italic;">Classification:</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<div class="form-group">
							<label for="clf1">Sperm concentration (Mill. per mL):</label>
							<input type="text" class="form-control" id="clf1" placeholder="Normal Range" name="clf1">
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group">
							<label for="clf2"><span class="clfres">-</span></label>
							<input type="text" class="form-control" id="clf2" placeholder="Result" name="clf2">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<div class="form-group">
							<label for="clf3">Total sperm number (Mill. per ejaculate):</label>
							<input type="text" class="form-control" id="clf3" placeholder="Normal Range" name="clf3">
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group">
							<label for="clf4"><span class="clfres">-</span></label>
							<input type="text" class="form-control" id="clf4" placeholder="Result" name="clf4">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<div class="form-group">
							<label for="clf5">Progressive motility (PR, %):</label>
							<input type="text" class="form-control" id="clf5" placeholder="Normal Range" name="clf5">
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group">
							<label for="clf6"><span class="clfres">-</span></label>
							<input type="text" class="form-control" id="clf6" placeholder="Result" name="clf6">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<div class="form-group">
							<label for="clf7">Non-progressive motility (NP, %):</label>
							<input type="text" class="form-control" id="clf7" placeholder="Normal Range" name="clf7">
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group">
							<label for="clf8"><span class="clfres">-</span></label>
							<input type="text" class="form-control" id="clf8" placeholder="Result" name="clf8">
						</div>
					</div>
				</div>
				<br/>
				<br/>
				<div class="row">
					<div class="col-xs-12">
						<div class="form-group">
							<label for="" style="font-style:italic;">Sperm morphology:</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<div class="form-group">
							<label for="clf9">Normal forms (%):</label>
							<input type="text" class="form-control" id="clf9" placeholder="Normal Range" name="clf9">
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group">
							<label for="clf10"><span class="clfres">-</span></label>
							<input type="text" class="form-control" id="clf10" placeholder="Result" name="clf10">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<div class="form-group">
							<label for="clf11">Head defect (%):</label>
							<input type="text" class="form-control" id="clf11" placeholder="Normal Range" name="clf11">
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group">
							<label for="clf12"><span class="clfres">-</span></label>
							<input type="text" class="form-control" id="clf12" placeholder="Result" name="clf12">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<div class="form-group">
							<label for="clf13">Midpiece defect (%):</label>
							<input type="text" class="form-control" id="clf13" placeholder="Normal Range" name="clf13">
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group">
							<label for="clf14"><span class="clfres">-</span></label>
							<input type="text" class="form-control" id="clf14" placeholder="Result" name="clf14">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<div class="form-group">
							<label for="clf15">Tail defect (%):</label>
							<input type="text" class="form-control" id="clf15" placeholder="Normal Range" name="clf15">
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group">
							<label for="clf16"><span class="clfres">-</span></label>
							<input type="text" class="form-control" id="clf16" placeholder="Result" name="clf16">
						</div>
					</div>
				</div>
				<br/>
				<br/>
				<div class="row">
					<div class="col-xs-6">
						<div class="form-group">
							<label for="clf17">Vitality (Live spermatozoa, %):</label>
							<input type="text" class="form-control" id="clf17" placeholder="Normal Range" name="clf17">
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group">
							<label for="clf18"><span class="clfres">-</span></label>
							<input type="text" class="form-control" id="clf18" placeholder="Result" name="clf18">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<div class="form-group">
							<label for="clf19">Round cells (Mill. per mL):</label>
							<input type="text" class="form-control" id="clf19" placeholder="Normal Range" name="clf19">
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group">
							<label for="clf20"><span class="clfres">-</span></label>
							<input type="text" class="form-control" id="clf20" placeholder="Result" name="clf20">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<div class="form-group">
							<label for="clf21">Immature germ cell (Mill per mL):</label>
							<input type="text" class="form-control" id="clf21" placeholder="Normal Range" name="clf21">
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group">
							<label for="clf22"><span class="clfres">-</span></label>
							<input type="text" class="form-control" id="clf22" placeholder="Result" name="clf22">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<div class="form-group">
							<label for="clf23">Agglutination:</label>
							<input type="text" class="form-control" id="clf23" placeholder="Normal Range" name="clf23">
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group">
							<label for="clf24"><span class="clfres">-</span></label>
							<input type="text" class="form-control" id="clf24" placeholder="Result" name="clf24">
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer" style="padding:20px;">
				<button type="submit" name="regnew" class="btn btn-success pull-right">Register Report</button>
			</div>
		</div>
	</div>
	</form>

<?php require_once('inc/rec-usr.php')?>
</div>