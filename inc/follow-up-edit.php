<div class="row">
    <div class="col-md-6">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">
                    Labs
                </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form id="form-plan-edit" enctype="multipart/form-data" method="post">
                    <div class="col-xs-12 no-padding form-horizontal">
                        <div class="form-group">
							<label for="patid" class="col-sm-3 control-label">Patient Name: </label>
                            <input type="hidden" id="planid" name="planid">
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="pat_fullname" name="pat_fullname" disabled>
                            </div>
                        </div>
                        <div class="form-group">
							<label for="" class="col-sm-2 control-label">LABS: </label>
                            <label for="" class="col-sm-5 control-label">RESULT: </label>
						</div>
						<div class="form-group">
							<div class="col-sm-1"></div>
							<div class="col-xs-5">
								<input type="checkbox" name="lab1" id="lab1">
								<label for="lab1">
                                SHSG
								</label>
							</div>
                            <div class="col-sm-6">
                                <input type="text" name="res1" id="res1" class="form-control">
                            </div>
						</div>
                        <div class="form-group">
							<div class="col-sm-1"></div>
							<div class="col-sm-5">
								<input type="checkbox" name="lab2" id="lab2"> 
								<label for="lab2">
                                HSG
								</label>
							</div>
                            <div class="col-sm-6">
                                <input type="text" name="res2" id="res2" class="form-control">
                            </div>
						</div>
                        <div class="form-group">
							<div class="col-sm-1"></div>
							<div class="col-sm-5">
								<input type="checkbox" name="lab3" id="lab3">
								<label for="lab3">
                                NST
								</label>
							</div>
                            <div class="col-xs-6">
                                <input type="text" name="res3" id="res3" class="form-control">
                            </div>
						</div>
                        <div class="form-group">
							<div class="col-sm-1"></div>
							<div class="col-sm-5">
								<input type="checkbox" name="lab4" id="lab4">
								<label for="lab4">
                                IE
								</label>
							</div>
                            <div class="col-xs-6">
                                <input type="text" name="res4" id="res4" class="form-control">
                            </div>
						</div>
                        <div class="form-group">
							<div class="col-sm-1"></div>
							<div class="col-sm-5">
								<input type="checkbox" name="lab5" id="lab5">
								<label for="lab5">
                                TVS
								</label>
							</div>
                            <div class="col-xs-6">
                                <input type="text" name="res5" id="res5" class="form-control">
                            </div>
						</div>
                        <div class="form-group">
							<div class="col-sm-1"></div>
							<div class="col-sm-5">
								<input type="checkbox" name="lab6" id="lab6">
								<label for="lab6">
                                FM
								</label>
							</div>
                            <div class="col-xs-6">
                                <input type="text" name="res6" id="res6" class="form-control">
                            </div>
						</div>
                        <div class="form-group">
							<div class="col-sm-1"></div>
							<div class="col-sm-5">
								<input type="checkbox" name="lab7" id="lab7">
								<label for="lab7">
                                TAS
								</label>
							</div>
                            <div class="col-xs-6">
                                <input type="text" name="res7" id="res7" class="form-control">
                            </div>
						</div>
                        <div class="form-group">
							<div class="col-sm-1"></div>
							<div class="col-sm-5">
								<input type="checkbox" name="lab8" id="lab8">
								<label for="lab8">
                                P/S
								</label>
							</div>
                            <div class="col-xs-6">
                                <input type="text" name="res8" id="res8" class="form-control">
                            </div>
						</div>
                        <div class="form-group">
							<div class="col-sm-1"></div>
							<div class="col-sm-5">
								<input type="checkbox" name="lab9" id="lab9">
								<label for="lab9">
                                BE
								</label>
							</div>
                            <div class="col-xs-6">
                                <input type="text" name="res9" id="res9" class="form-control">
                            </div>
						</div>
                        <div class="form-group">
							<div class="col-sm-1"></div>
							<div class="col-sm-5">
								<input type="checkbox" name="lab10" id="lab10">
								<label for="lab10">
                                Removal of Suture
								</label>
							</div>
                            <div class="col-xs-6">
                                <input type="text" name="res10" id="res10" class="form-control">
                            </div>
						</div>
                        <div class="form-group">
							<div class="col-sm-1"></div>
							<div class="col-sm-5">
								<input type="checkbox" name="lab11" id="lab11">
								<label for="lab11">
                                Others
								</label>
							</div>
						</div>
                        <div class="form-group">
							<div class="col-sm-1"></div>
							<div class="col-sm-5">
								<label for="res11">
                                Specify
								</label>
							</div>
                            <div class="col-xs-6">
                                <input type="text" name="res11" id="res11" class="form-control">
                            </div>
						</div>
                    </div>
                    
                    <!-- /.box-body -->
            </div>
            <div class="box-footer">
                <button type="submit" name="regnew" class="btn btn-success pull-right">Submit</button>
            </div>
            </form>
        </div>
    <!-- /.box -->
    </div>
</div>