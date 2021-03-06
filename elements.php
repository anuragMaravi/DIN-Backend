<?php
$page = "elements.php";
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="robots" content="noindex, nofollow">

    <title>Elements | DIN</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
	<link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">
    <link href="css/plugins/chosen/bootstrap-chosen.css" rel="stylesheet">
    <link href="css/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
    <link href="css/plugins/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet">
    <link href="css/plugins/cropper/cropper.min.css" rel="stylesheet">
    <link href="css/plugins/switchery/switchery.css" rel="stylesheet">
    <link href="css/plugins/jasny/jasny-bootstrap.min.css" rel="stylesheet">
    <link href="css/plugins/nouslider/jquery.nouislider.css" rel="stylesheet">
    <link href="css/plugins/datapicker/datepicker3.css" rel="stylesheet">
    <link href="css/plugins/ionRangeSlider/ion.rangeSlider.css" rel="stylesheet">
    <link href="css/plugins/ionRangeSlider/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
    <link href="css/plugins/clockpicker/clockpicker.css" rel="stylesheet">
    <link href="css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">
    <link href="css/plugins/select2/select2.min.css" rel="stylesheet">
    <link href="css/plugins/touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet">
    <link href="css/plugins/dualListbox/bootstrap-duallistbox.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

    	<?php $act = "elements"; include "php/navbar.php"; ?>
       
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Elements</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Dashboard</a></li>
                        <li><a>Tab</a></li>
                        <li class="active"><strong>Elements</strong></li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
			<div class="wrapper wrapper-content animated fadeInRight">
				<div class="row">
					<div class="col-lg-2">
					</div>
					<div class="col-lg-8">
						<div class="ibox float-e-margins">
							<div class="ibox-title">
								<h5>Elements</h5>
								<div class="ibox-tools">
									<a class="collapse-link">
										<i class="fa fa-chevron-up"></i>
									</a>
								</div>
							</div>
							<div class="ibox-content">
								<form method="post" class="form-horizontal" action="" enctype="multipart/form-data">
									<div class="form-group"><label class="col-sm-2 control-label">Name</label>
										<div class="col-sm-10" style="margin-bottom:5px;">
											<input type="text" class="form-control" id="name" name="name" placeholder="Name of Centre" required/>
										</div>
									</div>
									<div class="form-group"><label class="col-sm-2 control-label">Category</label>
										<div class="col-sm-10">
											<select class="chosen-select form-control" tabindex="2">
												<option value="none">Select Category</option>
												<option value="">Cat 1</option>
												<option value="">Cat 2</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Time out</label>
										<div class="col-sm-10">
											<div class="input-group clockpicker" data-autoclose="true">
												<input type="text" class="form-control" value="09:30" >
												<span class="input-group-addon">
													<span class="fa fa-clock-o"></span>
												</span>
											</div>
										</div>
									</div>
									<div class="form-group" id="data_1">
										<label class="col-sm-2 control-label">Post Date</label>
										<div class="col-sm-10">
											<div class="input-group date">
												<input type="text" class="form-control" id="post" name="post_date" placeholder="Post Date" /> <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
											</div>
										</div>
									</div>
									<div class="form-group" id="data_5">
										<label class="col-sm-2 control-label">Dutation</label>
										<div class="col-sm-10">
											<div class="input-daterange input-group" id="datepicker">
												<input type="text" class="input-md form-control" name="start" value="05/14/2014"/>
												<span class="input-group-addon">to</span>
												<input type="text" class="input-md form-control" name="end" value="05/22/2014" />
											</div>
										</div>
									</div>
									<div class="row" style="margin-left:-15px;">
										<div class="col-sm-12">
											<div class="form-group">
												<label class="col-sm-2 control-label">Option</label>
												<div class="col-sm-3">
													<div class="i-checks"><label> <input type="radio" checked="" value="option2" name="a"> <i></i> 1 </label></div>
												</div>
												<div class="col-sm-3">
													<div class="i-checks"><label> <input type="radio" checked="" value="option2" name="a"> <i></i> 2 </label></div>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group" id="file_upload"><label class="col-sm-2 control-label">Upload File</label>
										<div class="col-sm-10">
											<div class="fileinput fileinput-new input-group" data-provides="fileinput">
												<div class="form-control" data-trigger="fileinput">
													<i class="glyphicon glyphicon-file fileinput-exists"></i> 
													<span class="fileinput-filename"></span>
												</div>
												<span class="input-group-addon btn btn-default btn-file">
													<span class="fileinput-new">Select file</span>
													<span class="fileinput-exists">Change</span>
													<input type="file" name="file" id="file" required >
												</span>
												<a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
											</div>
											<p id="error" style="position:absolute;color:#FF0000;margin-top:-7px"></p>
										</div>
									</div>
									<div class="form-group">
										<div class="text-center">
											<input type="submit" name="submit" id="save" class="btn btn-w-m btn-primary" value="Save" />
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
				<div class="col-md-2">
				</div>
                <div class="col-md-8">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Driver</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form method="get" class="form-horizontal">
                                <div class="form-group">
                                    <div class="pull-right" style="margin-right:16px;">
										<input type="button" class="btn btn-w-m btn-primary" value="Edit" />
									</div>
                                </div>
								<div class="form-group"><label class="col-sm-2 control-label">Name</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="name" name="name" placeholder="Driver Name" />
									</div>
                                </div>
								<div class="form-group"><label class="col-sm-2 control-label">Contact</label>
									<div class="col-sm-10">
										<input type="number" class="form-control" id="contact" name="contact" placeholder="Driver Contact" />
									</div>
                                </div>
								<div class="form-group"><label class="col-sm-2 control-label">Role</label>
									<div class="col-sm-10">
										<select class="chosen-select form-control" tabindex="2">
											<option value="none">Select Role</option>
											<option value="">R-1</option>
											<option value="">R-2</option>
										</select>
									</div>
                                </div>
								<div class="form-group"><label class="col-sm-2 control-label">Status</label>
									<div class="col-sm-10">
										<select class="chosen-select form-control" tabindex="2">
											<option value="none">Select Status</option>
											<option value="Active">Active</option>
											<option value="Inactive">Inactive</option>
										</select>
									</div>
                                </div>
								<div class="form-group">
                                    <div class="text-center">
										<input type="button" class="btn btn-w-m btn-primary" value="Update" />
									</div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
				</div>
				<div class="row">
				<div class="col-md-2">
				</div>
                <div class="col-md-8">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Add Route</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form method="get" class="form-horizontal">
                                <div class="form-group"><label class="col-sm-2 control-label">Name</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="name" name="name" placeholder="Route Name" />
									</div>
                                </div>
								<div class="form-group"><label class="col-sm-2 control-label">Source</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="source" name="source" placeholder="Source" />
									</div>
                                </div>
								<div class="form-group"><label class="col-sm-2 control-label">Destination</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="destination" name="destination" placeholder="Destination" />
									</div>
                                </div>
								<div class="form-group">
                                    <div class="text-center">
										<a data-toggle="modal" class="btn btn-primary" href="#modal-form">Add Stops</a>
									</div>
                                </div>
								<div id="modal-form" class="modal fade" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-12"><h3 class="m-t-none m-b">Allocate Teacher</h3>
                                                    <form role="form">
                                                        <div class="form-group"><label>Stop</label>
															<input type="text" class="form-control" id="stop" name="stop" placeholder="Stop Name" />
														</div>
														<div class="form-group"><label>Timing</label>
															<input type="text" class="form-control" id="timing" name="timing" placeholder="Timing" />
														</div>
														<div class="form-group">
															<div class="text-center">
																<input type="button" class="btn btn-w-m btn-danger" value="Cancel" />
																<input type="button" class="btn btn-w-m btn-primary" value="Add" />
															</div>
														</div>
                                                    </form>
                                                </div>
											</div>
										</div>
                                    </div>
                                </div>
								</div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
				<div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Attendance</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                    <div class="table-responsive">
						<table class="table table-striped table-bordered table-hover dataTables-example" >
							<thead>
								<tr>
									<th>Name</th>
									<th class="text-center">Month</th>
									<th class="text-center">Year</th>
									<th class="text-center">Total no. of classes</th>
									<th class="text-center">Class Attended</th>
								</tr>
							</thead>
							<tbody class="text-center">
								<tr class="gradeA">
									<td>Name 1</td>
									<td>
										<div class="form-group" id="data_1">
											<div class="input-group date">
												<input type="text" class="form-control" id="post" name="post_date" placeholder="Post Date" /> <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
											</div>
										</div>
									</td>
									<td>
										<div class="form-group" id="data_5">
											<div class="input-daterange input-group" id="datepicker">
												<input type="text" class="input-md form-control" name="start" value="05/14/2014"/>
												<span class="input-group-addon">to</span>
												<input type="text" class="input-md form-control" name="end" value="05/22/2014" />
											</div>
										</div>
									</td>
									<td>
										<div class="form-group">
											<div class="input-group clockpicker" data-autoclose="true">
												<input type="text" class="form-control" value="09:30" >
												<span class="input-group-addon">
													<span class="fa fa-clock-o"></span>
												</span>
												<input type="text" class="form-control" value="09:30" >
											</div>
										</div>
									</td>
									<td>
										<div class="form-group">
											<select class="chosen-select form-control" tabindex="2">
												<option value="none">Select Role</option>
												<option value="">R-1</option>
												<option value="">R-2</option>
											</select>
										</div>
									</td>
								</tr>
								<tr class="gradeA">
									<td>Name 2</td>
									<td><input type="text" class="form-control" id="" name="" placeholder="" /></td>
									<td><input type="text" class="form-control" id="" name="" placeholder="" /></td>
									<td><input type="text" class="form-control" id="" name="" placeholder="" /></td>
									<td><input type="text" class="form-control" id="" name="" placeholder="" /></td>
								</tr>
							</tbody>
						</table>
                    </div>
					<div class="form-group">
                        <div class="text-center">
							<input type="button" class="btn btn-w-m btn-primary" value="Save" />
						</div>
                    </div>
                    </div>
                </div>
            </div>
				</div>
				<div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>All Vehicle</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                    <div class="table-responsive">
						<table class="table table-striped table-bordered table-hover dataTables-example" >
							<thead>
								<tr>
									<th class="text-center">S.No.</th>
									<th>Vehicle Number</th>
									<th>Route ID</th>
									<th>Driver ID</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<tr class="gradeA">
									<td class="text-center">1.</td>
									<td>V-1</td>
									<td>R-1</td>
									<td>D-1</td>
									<td class="text-center"><a href="detail_vehicle.html"><input type="button" class="btn btn-w-m btn-primary" value="View Detail" /></a></td>
								</tr>
								<tr class="gradeA">
									<td class="text-center">2.</td>
									<td>V-2</td>
									<td>R-2</td>
									<td>D-2</td>
									<td class="text-center"><a href="detail_vehicle.html"><input type="button" class="btn btn-w-m btn-primary" value="View Detail" /></a></td>
								</tr>
							</tbody>
						</table>
                    </div>
                    </div>
                </div>
				</div>
				</div>
			</div>
			<div class="footer">
				<div class="pull-right">
					Developed by <strong><a href="https://www.bluebanyan.co.in" target="_blank">BlueBanyan</a></strong>
				</div>
				<div>
					Copyright<strong> DIN </strong> &copy; <script>document.write(new Date().getFullYear())</script>
				</div>
			</div>
		</div>
    </div>
	
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>
	<script src="js/plugins/dataTables/datatables.min.js"></script>
    <script src="js/plugins/datapicker/bootstrap-datepicker.js"></script>
    <script src="js/plugins/clockpicker/clockpicker.js"></script>
    <script src="js/plugins/iCheck/icheck.min.js"></script>
    <script src="js/plugins/jasny/jasny-bootstrap.min.js"></script>
    <script src="js/plugins/dropzone/dropzone.js"></script>
    <script src="js/plugins/codemirror/codemirror.js"></script>
    <script src="js/plugins/codemirror/mode/xml/xml.js"></script>
    <script src="js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

	<script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

        });

    </script>
	
	<script>
        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>

    <script>
        $(document).ready(function(){
            $('#data_1 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });
        });
    </script>

	<script>
        $(document).ready(function(){
            $('.clockpicker').clockpicker();
        });
    </script>
	
    <script>
        $(document).ready(function(){

            $('#data_1 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true,
				format:'dd-mm-yyyy'
            });
			
			$('#data_5 .input-daterange').datepicker({
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true
            });
			
        });
    </script>
	
</body>

</html>