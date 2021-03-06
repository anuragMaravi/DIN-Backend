<?php
$page = "view-centre.php";
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="robots" content="noindex, nofollow">

    <title>Centre | DIN</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
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

    	<?php $act = "master"; $act2="view"; include "php/navbar.php"; ?>
       
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Centre</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Dashboard</a></li>
                        <li><a>Master</a></li>
                        <li><a>View</a></li>
                        <li><a href="view-centre.php">All Centre</a></li>
                        <li class="active"><strong>Centre</strong></li>
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
								<h5>Centre</h5>
								<div class="ibox-tools">
									<a class="collapse-link">
										<i class="fa fa-chevron-up"></i>
									</a>
								</div>
							</div>
							<div class="ibox-content">
								<form method="post" class="form-horizontal" action="" enctype="multipart/form-data">
									<div class="form-group">
										<div class="pull-right" style="margin-right:16px;">
											<input type="button" class="btn btn-sm btn-danger" id="delete-centre" value="Delete Centre" />
										</div>
									</div>
									<div class="form-group"><label class="col-sm-2 control-label">Name</label>
										<div class="col-sm-10" style="margin-bottom:5px;">
											<input type="text" class="form-control" id="name" name="name" placeholder="Name of Centre" required/>
										</div>
									</div>
									<div class="form-group" id="file_upload"><label class="col-sm-2 control-label">Upload Logo</label>
										<div class="col-sm-10">
											<div class="fileinput fileinput-new input-group" data-provides="fileinput">
												<div class="form-control" data-trigger="fileinput">
													<i class="glyphicon glyphicon-file fileinput-exists"></i> 
													<span class="fileinput-filename"></span>
												</div>
												<span class="input-group-addon btn btn-default btn-file">
													<span class="fileinput-new">Browse logo</span>
													<span class="fileinput-exists">Change</span>
													<input type="file" name="file" id="file" required >
												</span>
												<a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
											</div>
										</div>
									</div>
									<div class="form-group"><label class="col-sm-2 control-label">Category</label>
										<div class="col-sm-10">
											<select id = "category" class="chosen-select form-control" tabindex="2">
												<option value="none">Select Category</option>
												<option value="Gym">Gym</option>
												<option value="Music">Music</option>
												<option value="Dance">Dance</option>
											</select>
										</div>
									</div>
									<div class="form-group"><label class="col-sm-2 control-label">Description</label>
										<div class="col-sm-10" style="margin-bottom:5px;">
											<textarea rows="3" class="form-control" id="description" name="description" cols="50" placeholder="Description of centre"></textarea>
										</div>
									</div>
									<div class="form-group"><label class="col-sm-2 control-label">Phone</label>
										<div class="col-sm-10" style="margin-bottom:5px;">
											<input type="number" class="form-control" id="phone" name="phone" placeholder="Phone Number" required/>
										</div>
									</div>
									<div class="form-group"><label class="col-sm-2 control-label">Address</label>
										<div class="col-sm-10" style="margin-bottom:5px;">
											<textarea rows="3" class="form-control" id="address" name="address" cols="50" placeholder="Address"></textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="text-center">
											<input type="submit" name="submit" id="update" class="btn btn-w-m btn-primary" value="Update" />
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-2">
					</div>
					<div class="col-lg-8">
						<div class="ibox float-e-margins">
							<div class="ibox-title">
								<h5>Daily Session</h5>
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
												<th class="text-center">S.N.</th>
												<th class="text-center">Session Name</th>
												<th class="text-center">Category</th>
												<th class="text-center">Slots</th>
												<th class="text-center">Detail</th>
												<th class="text-center">Action</th>
											</tr>
										</thead>
										<tbody class="text-center">
											<tr class="gradeA">
												<td>01</td>
												<td>Session 1</td>
												<td>Category 1</td>
												<td><a data-toggle="modal" class="btn btn-xs btn-default" href="#slots-list">All Slots</a></td>
												<td><a data-toggle="modal" class="btn btn-xs btn-default" href="#session-detail">Session Detail</a></td>
												<td>
													<button type="submit" name="submit" id="edit" class="btn btn-xs btn-default" value="" title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
												</td>
											</tr>
										</tbody>
									</table>
									<div id="slots-list" class="modal fade" aria-hidden="true">
										<div class="modal-dialog" style="width:80%;">
											<div class="modal-content">
												<div class="modal-body">
													<div class="row">
														<div class="col-sm-12">
															<h3 class="m-t-none m-b">All Slots</h3>
															<div class="pull-right" style="margin-top:-30px;">
																<input type="submit" name="submit" id="detail" class="btn btn-sm btn-warning" value="Close" />
															</div>
															<br>
															<br>
															<div class="table-responsive">
																<table class="table table-striped table-bordered table-hover dataTables-example" >
																	<thead>
																		<tr>
																			<th class="text-center">S.N.</th>
																			<th class="text-center">Slot Name</th>
																			<th class="text-center">Category</th>
																			<th class="text-center">Duration</th>
																			<th class="text-center">Fee (Rs.)</th>
																			<th class="text-center">Action</th>
																		</tr>
																	</thead>
																	<tbody class="text-center">
																		<tr class="gradeA">
																			<td class="text-center" style="padding-top:14px;">
																				01
																			</td>
																			<td>
																				<input type="text" class="form-control" id="" name="" placeholder="" />
																			</td>
																			<td>
																				<div class="form-group">
																					<select class="chosen-select form-control" tabindex="2">
																						<option value="none">Category</option>
																						<option value="">Cat 1</option>
																						<option value="">Cat 2</option>
																					</select>
																				</div>
																			</td>
																			<td>
																				<input type="text" class="form-control" id="" name="" placeholder="09:00AM to 12:00PM" />
																			</td>
																			<td>
																				<input type="number" class="form-control" id="" name="" placeholder="500" />
																			</td>
																			<td style="padding-top:14px;">
																				<button type="submit" name="submit" id="edit" class="btn btn-xs btn-default" value="" title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
																				<button type="submit" name="submit" id="cancel" class="btn btn-xs btn-default" value="" title="Cancel"><i class="fa fa-times" aria-hidden="true"></i></button>
																				<button type="submit" name="submit" id="save" class="btn btn-xs btn-default" value="" title="Save"><i class="fa fa-check" aria-hidden="true"></i></button>
																				<button type="submit" name="submit" id="delete" class="btn btn-xs btn-default" value="" title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
																			</td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div id="session-detail" class="modal fade" aria-hidden="true">
										<div class="modal-dialog" style="width:50%;">
											<div class="modal-content">
												<div class="modal-body">
													<div class="row">
														<div class="col-sm-12">
															<h3 class="m-t-none m-b">Session</h3>
															<form method="post" class="form-horizontal" action="" enctype="multipart/form-data">
																<div class="form-group">
																	<div class="pull-right" style="margin-right:16px;">
																		<input type="button" class="btn btn-sm btn-primary" value="Edit" />
																		<input type="button" class="btn btn-sm btn-warning" value="Close" />
																	</div>
																</div>
																<div class="form-group"><label class="col-sm-2 control-label">Name</label>
																	<div class="col-sm-10" style="margin-bottom:5px;">
																		<input type="text" class="form-control" id="name" name="name" placeholder="Name of Session" required/>
																	</div>
																</div>
																<div class="form-group"><label class="col-sm-2 control-label">Centre</label>
																	<div class="col-sm-10">
																		<select class="chosen-select form-control" tabindex="2">
																			<option value="none">Select Centre</option>
																			<option value="">Abc</option>
																			<option value="">Def</option>
																			<option value="">Ghi</option>
																		</select>
																	</div>
																</div>
																<div class="form-group"><label class="col-sm-2 control-label">Category</label>
																	<div class="col-sm-10">
																		<select class="chosen-select form-control" tabindex="2">
																			<option value="none">Select Category</option>
																			<option value="">Gym</option>
																			<option value="">Music</option>
																			<option value="">Dance</option>
																		</select>
																	</div>
																</div>
																<div class="form-group"><label class="col-sm-2 control-label">Base Rate (Rs.)</label>
																	<div class="col-sm-10" style="margin-bottom:5px;">
																		<input type="number" class="form-control" id="base-rate" name="base-rate" placeholder="Base Rate (Rs.)" required/>
																	</div>
																</div>
																<div class="form-group"><label class="col-sm-2 control-label">Current Rate (Rs.)</label>
																	<div class="col-sm-10" style="margin-bottom:5px;">
																		<input type="number" class="form-control" id="current-rate" name="current-rate" placeholder="Current Rate (Rs.)" required/>
																	</div>
																</div>
																<div class="form-group"><label class="col-sm-2 control-label">Duration</label>
																	<div class="col-sm-10" style="margin-bottom:5px;">
																		<input type="text" class="form-control" id="duration" name="duration" placeholder="3 Hours 30 Min." required/>
																	</div>
																</div>
																<div class="form-group">
																	<label class="col-sm-2 control-label">Start time</label>
																	<div class="col-sm-10">
																		<div class="input-group clockpicker" data-autoclose="true">
																			<input type="text" class="form-control" value="09:30" >
																			<span class="input-group-addon">
																				<span class="fa fa-clock-o"></span>
																			</span>
																		</div>
																	</div>
																</div>
																<div class="form-group">
																	<label class="col-sm-2 control-label">End time</label>
																	<div class="col-sm-10">
																		<div class="input-group clockpicker" data-autoclose="true">
																			<input type="text" class="form-control" value="09:30" >
																			<span class="input-group-addon">
																				<span class="fa fa-clock-o"></span>
																			</span>
																		</div>
																	</div>	
																</div>
																<div class="form-group"><label class="col-sm-2 control-label">Min. no. of Person</label>
																	<div class="col-sm-10" style="margin-bottom:5px;">
																		<input type="number" class="form-control" id="mnp" name="mnp" placeholder="Min. no. of Person" required/>
																	</div>
																</div>
																<div class="form-group"><label class="col-sm-2 control-label">Description</label>
																	<div class="col-sm-10" style="margin-bottom:5px;">
																		<textarea rows="3" class="form-control" id="description" name="description" cols="50" placeholder="Description of session"></textarea>
																	</div>
																</div>
																<div class="form-group">
																	<div class="text-center">
																		<input type="submit" name="submit" id="update" class="btn btn-w-m btn-primary" value="Update" />
																	</div>
																</div>
															</form>
														</div>
													</div>
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
					<div class="col-lg-2">
					</div>
					<div class="col-lg-8">
						<div class="ibox float-e-margins">
							<div class="ibox-title">
								<h5>Membership</h5>
								<div class="ibox-tools">
									<a class="collapse-link">
										<i class="fa fa-chevron-up"></i>
									</a>
								</div>
							</div>
							<div class="ibox-content">
								<div class="table-responsive">
									<table class="table table-striped table-bordered table-hover dataTables-example2" >
										<thead>
											<tr>
												<th class="text-center">S.N.</th>
												<th class="text-center">Membership Name</th>
												<th class="text-center">Category</th>
												<th class="text-center">Duration</th>
												<th class="text-center">Detail</th>
												<th class="text-center">Action</th>
											</tr>
										</thead>
										<tbody class="text-center">
											<tr class="gradeA">
												<td>01</td>
												<td>Membership 1</td>
												<td>Category 1</td>
												<td>10/10/2017 to 10/12/2017</td>
												<td><a data-toggle="modal" class="btn btn-xs btn-default" href="#mem-detail">Mem. Detail</a></td>
												<td>
													<button type="submit" name="submit" id="edit" class="btn btn-xs btn-default" value="" title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
												</td>
											</tr>
										</tbody>
									</table>
									<div id="mem-detail" class="modal fade" aria-hidden="true">
										<div class="modal-dialog" style="width:50%;">
											<div class="modal-content">
												<div class="modal-body">
													<div class="row">
														<div class="col-sm-12">
															<h3 class="m-t-none m-b">Membership</h3>
															<form method="post" class="form-horizontal" action="" enctype="multipart/form-data">
																<div class="form-group">
																	<div class="pull-right" style="margin-right:16px;">
																		<input type="button" class="btn btn-sm btn-primary" value="Edit" />
																		<input type="button" class="btn btn-sm btn-warning" value="Close" />
																	</div>
																</div>
																<div class="form-group"><label class="col-sm-2 control-label">Name</label>
																	<div class="col-sm-10" style="margin-bottom:5px;">
																		<input type="text" class="form-control" id="name" name="name" placeholder="Name of Membership" required/>
																	</div>
																</div>
																<div class="form-group"><label class="col-sm-2 control-label">Centre</label>
																	<div class="col-sm-10">
																		<select class="chosen-select form-control" tabindex="2">
																			<option value="none">Select Centre</option>
																			<option value="">Abc</option>
																			<option value="">Def</option>
																			<option value="">Ghi</option>
																		</select>
																	</div>
																</div>
																<div class="form-group"><label class="col-sm-2 control-label">Category</label>
																	<div class="col-sm-10">
																		<select class="chosen-select form-control" tabindex="2">
																			<option value="none">Select Category</option>
																			<option value="">Gym</option>
																			<option value="">Music</option>
																			<option value="">Dance</option>
																		</select>
																	</div>
																</div>
																<!--
																<div class="form-group"><label class="col-sm-2 control-label">Category</label>
																	<div class="col-sm-10" style="margin-bottom:5px;">
																		<input type="text" class="form-control" id="category" name="category" placeholder="Name of Category" required/>
																	</div>
																</div>
																-->
																<div class="form-group"><label class="col-sm-2 control-label">Base Rate (Rs.)</label>
																	<div class="col-sm-10" style="margin-bottom:5px;">
																		<input type="number" class="form-control" id="base-rate" name="base-rate" placeholder="Base Rate (Rs.)" required/>
																	</div>
																</div>
																<div class="form-group"><label class="col-sm-2 control-label">Current Rate (Rs.)</label>
																	<div class="col-sm-10" style="margin-bottom:5px;">
																		<input type="number" class="form-control" id="current-rate" name="current-rate" placeholder="Current Rate (Rs.)" required/>
																	</div>
																</div>
																<div class="form-group"><label class="col-sm-2 control-label">Duration</label>
																	<div class="col-sm-10" style="margin-bottom:5px;">
																		<input type="text" class="form-control" id="duration" name="duration" placeholder="60 Days" required/>
																	</div>
																</div>
																<div class="form-group" id="data_1">
																	<label class="col-sm-2 control-label">Start Date</label>
																	<div class="col-sm-10">
																		<div class="input-group date">
																			<input type="text" class="form-control" id="post" name="start-date" placeholder="Start Date" /> <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
																		</div>
																	</div>
																</div>
																<div class="form-group" id="data_1">
																	<label class="col-sm-2 control-label">End Date</label>
																	<div class="col-sm-10">
																		<div class="input-group date">
																			<input type="text" class="form-control" id="post" name="end-date" placeholder="End Date" /> <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
																		</div>
																	</div>
																</div>
																<div class="form-group"><label class="col-sm-2 control-label">Min. no. of Person</label>
																	<div class="col-sm-10" style="margin-bottom:5px;">
																		<input type="number" class="form-control" id="mnp" name="mnp" placeholder="Min. no. of Person" required/>
																	</div>
																</div>
																<div class="form-group"><label class="col-sm-2 control-label">Description</label>
																	<div class="col-sm-10" style="margin-bottom:5px;">
																		<textarea rows="3" class="form-control" id="description" name="description" cols="50" placeholder="Description of session"></textarea>
																	</div>
																</div>
																<div class="form-group">
																	<div class="text-center">
																		<input type="submit" name="submit" id="update" class="btn btn-w-m btn-primary" value="Update" />
																	</div>
																</div>
															</form>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
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
    var slot_box = '<a data-toggle="modal" class="btn btn-xs btn-default" href="#slots-list">All Slots</a>';
    var slot_detail = '<a data-toggle="modal" class="btn btn-xs btn-default" href="#session-detail">Session Detail</a>';
    var btn_delete = '<button type="submit" name="submit" id="edit" class="btn btn-xs btn-default" value="" title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button>';

    var centre_id = sessionStorage.getItem("sent");
        	var sessions = [];
        	var session_list = [];

    $.ajax({
            type:"GET",
            url:"http://128.199.190.92/api/dingyms/"+centre_id,
            success: function(result){

            $("#name").val(result.name);
        	$("#description").val(result.description);
        	$("#category").val(result.category);
        	$("#phone").val(result.number);
        	$("#address").val(result.address);

        	// data for Session Table
        	var i;
        	for(i in result.daily_sessions){
                    sessions = [i+1, result.daily_sessions[i].session_name,result.daily_sessions[i].session_category, slot_box, slot_detail, btn_delete];
                session_list.push(sessions);
            }

                
                $(document).ready(function(){
                var table = $('.dataTables-example').DataTable({
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
                ],
                data: session_list

            	});

            // $('.dataTables-example tbody').on( 'click', 'td', function () 
            // {
            // var tr = $(this).closest("tr");
            // var rowindex = tr.index();
            // var data = table.row(rowindex).data();
            // sessionStorage.setItem("sent", data[1]); 
            // var win = window.open('detail-centre.php', '_blank');
            // win.focus();            
            // });

        });

			var members = [];
        	var members_list = [];
            var j;
        	for(j in result.memberships){
                    members = [j+1, result.memberships[j].membership_name,result.memberships[j].membership_category, slot_box, slot_detail, btn_delete];
                members_list.push(members);
            }

                $(document).ready(function(){
                var table = $('.dataTables-example2').DataTable({
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
                ],
                data: members_list

            	});

            // $('.dataTables-example tbody').on( 'click', 'td', function () 
            // {
            // var tr = $(this).closest("tr");
            // var rowindex = tr.index();
            // var data = table.row(rowindex).data();
            // sessionStorage.setItem("sent", data[1]); 
            // var win = window.open('detail-centre.php', '_blank');
            // win.focus();            
            // });

        	});
        
        }            
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

    <!-- Delete a centre -->
    <script>
        $("#delete-centre").on("click",function(){
        	var centre_id = sessionStorage.getItem("sent");
        	var del = confirm("Are you sure you want to delete this centre? \nCentre Id: " + centre_id);
        	if(del == true) {
        		
        		$.ajax({
    			url: "http://128.199.190.92/api/dingyms/" + centre_id,
    			type: 'DELETE',
    			success: function(result) {
        		alert("Successfully Deleted!");
        		close();
    			}
				});
        		
        	}
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