<?php
$page = "add-slot.php";
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="robots" content="noindex, nofollow">

    <title>Slot | DIN</title>

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

    	<?php $act = "master"; $act2="add"; include "php/navbar.php"; ?>
       
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Add Slot</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Dashboard</a></li>
                        <li><a>Master</a></li>
                        <li><a>Add</a></li>
                        <li class="active"><strong>Slot</strong></li>
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
								<h5>Add Slot</h5>
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
											<input type="text" class="form-control" id="slot-name" name="name" placeholder="Name of Slot" required/>
										</div>
									</div>
									<div class="form-group"><label class="col-sm-2 control-label">Type</label>
										<div class="col-sm-10">
											<select id="slot-category" class="chosen-select form-control" tabindex="2">
												<option value="session">Session</option>
												<option value="membership">Membership</option>
											</select>
										</div>
									</div>
									<div class="form-group"><label class="col-sm-2 control-label">Centre</label>
										<div class="col-sm-10">
											<select id="slot-centre" class="chosen-select form-control" tabindex="2">
											
											</select>
										</div>
									</div>
									<div class="form-group"><label id="session-label" class="col-sm-2 control-label">Session</label>
										<div class="col-sm-10">
											<select id="slot-session" class="chosen-select form-control" tabindex="2">
												
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Start time</label>
										<div class="col-sm-10">
											<div class="input-group clockpicker" data-autoclose="true">
												<input id="slot-start-time" type="text" class="form-control" value="09:30" >
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
												<input id="slot-end-time" type="text" class="form-control" value="09:30" >
												<span class="input-group-addon">
													<span class="fa fa-clock-o"></span>
												</span>
											</div>
										</div>
									</div>
									<div class="form-group"><label class="col-sm-2 control-label">Fee</label>
										<div class="col-sm-10" style="margin-bottom:5px;">
											<input type="number" class="form-control" id="slot-fee" name="fee" placeholder="Fee of slot" required/>
										</div>
									</div>
									<div class="form-group">
										<div class="text-center">
											<input type="button" name="submit" id="add-slot" class="btn btn-w-m btn-primary" value="Add" />
										</div>
									</div>
								</form>
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

    <!-- Get the list of centres from the database and populate "select-centre" -->
    <!-- <script >
        // First get the session data by default
        $(function(){   
            var centreOptions, sessionOptions;
            $.getJSON('http://128.199.190.92/api/dingyms',function(result){
                $.each(result, function(i,centres) {
                    centreOptions+="<option value='"
                    +centres.id+
                    "'>"
                    +centres.name+
                    "</option>";
                    for(j in centres.daily_sessions) {
                        sessionOptions+="<option value='"
                        +centres.daily_sessions[j].session_id+
                        "'>"
                        +centres.daily_sessions[j].session_name+
                        "</option>";
                    }
                });
                $('#slot-centre').html(centreOptions);
                $('#slot-session').html(sessionOptions);
            });
        });

        // Now if the option changes change the data accordingly
        $("#slot-category").change(function(){
            if($(this).val()=="session"){
                var centreOptions, sessionOptions;
                $.getJSON('http://128.199.190.92/api/dingyms',function(result){
                    $.each(result, function(i,centres) {
                        centreOptions+="<option value='"
                        +centres.id+
                        "'>"
                        +centres.name+
                        "</option>";
                        for(j in centres.daily_sessions) {
                            sessionOptions+="<option value='"
                            +centres.daily_sessions[j].session_id+
                            "'>"
                            +centres.daily_sessions[j].session_name+
                            "</option>";
                        }
                    });
                    $('#session-label').html("Sessions");
                    $('#slot-centre').html(centreOptions);
                    $('#slot-session').html(sessionOptions);
                });
            }

            if($(this).val()=="membership"){
                var centreOptions, membershipOptions;
                $.getJSON('http://128.199.190.92/api/dingyms',function(result){
                    $.each(result, function(i,centres) {
                        centreOptions+="<option value='"
                        +centres.id+
                        "'>"
                        +centres.name+
                        "</option>";
                        for(j in centres.memberships) {
                            membershipOptions+="<option value='"
                            +centres.memberships[j].membership_id+
                            "'>"
                            +centres.memberships[j].membership_name+
                            "</option>";
                        }
                    });
                    
                    $('#session-label').html("Memberships");
                    $('#slot-centre').html(centreOptions);
                    $('#slot-session').html(membershipOptions);
                });
            }
        });
    </script> -->

    <script>
        $(document).ready(function(){
            var centreOptions, sessionOptions;
            var data;
            $.ajax({
                    type:"GET",
                    url:"http://128.199.190.92/api/dingyms/",
                    success: function(result){
                        data = result;
                        $.each(result, function(i,centres) {
                    centreOptions+="<option value='"
                    +centres.id+
                    "'>"
                    +centres.name+
                    "</option>";
                });        
                $('#slot-centre').html(centreOptions);
                sessionOptions = null;
                    $.each(data, function(i,centres) {

                    for(j in centres.daily_sessions) {
                        if($("#slot-centre").val() == centres.id) {
                            sessionOptions+="<option value='"
                            +centres.daily_sessions[j].session_id+
                            "'>"
                            +centres.daily_sessions[j].session_name+
                            "</option>";
                        } else {
                            continue;
                        }
                    }
                });
                $('#slot-session').html(sessionOptions);


                $("#slot-centre").change(function(){
                    sessionOptions = null;
                    $.each(data, function(i,centres) {

                    for(j in centres.daily_sessions) {
                        if($("#slot-centre").val() == centres.id) {
                            sessionOptions+="<option value='"
                            +centres.daily_sessions[j].session_id+
                            "'>"
                            +centres.daily_sessions[j].session_name+
                            "</option>";
                        } else {
                            continue;
                        }
                    }
                });
                    $('#slot-session').html(sessionOptions);
                });
                
                }
            });
            
        });

        // Now if the option changes change the data accordingly
        $("#slot-category").change(function(){
            if($(this).val()=="session"){
                var centreOptions, sessionOptions;
            var data;
            $.ajax({
                    type:"GET",
                    url:"http://128.199.190.92/api/dingyms/",
                    success: function(result){
                        data = result;
                        $.each(result, function(i,centres) {
                    centreOptions+="<option value='"
                    +centres.id+
                    "'>"
                    +centres.name+
                    "</option>";
                });        
                $('#slot-centre').html(centreOptions);
                sessionOptions = null;
                    $.each(data, function(i,centres) {

                    for(j in centres.daily_sessions) {
                        if($("#slot-centre").val() == centres.id) {
                            sessionOptions+="<option value='"
                            +centres.daily_sessions[j].session_id+
                            "'>"
                            +centres.daily_sessions[j].session_name+
                            "</option>";
                        } else {
                            continue;
                        }
                    }
                });
                $('#slot-session').html(sessionOptions);


                $("#slot-centre").change(function(){
                    sessionOptions = null;
                    $.each(data, function(i,centres) {

                    for(j in centres.daily_sessions) {
                        if($("#slot-centre").val() == centres.id) {
                            sessionOptions+="<option value='"
                            +centres.daily_sessions[j].session_id+
                            "'>"
                            +centres.daily_sessions[j].session_name+
                            "</option>";
                        } else {
                            continue;
                        }
                    }
                });
                    $('#slot-session').html(sessionOptions);
                });
                
                }
            });
            
            }

            if($(this).val()=="membership"){
                var centreOptions, sessionOptions;
            var data;
            $.ajax({
                    type:"GET",
                    url:"http://128.199.190.92/api/dingyms/",
                    success: function(result){
                        data = result;
                        $.each(result, function(i,centres) {
                    centreOptions+="<option value='"
                    +centres.id+
                    "'>"
                    +centres.name+
                    "</option>";
                });        
                $('#slot-centre').html(centreOptions);
                sessionOptions = null;
                    $.each(data, function(i,centres) {

                    for(j in centres.memberships) {
                        if($("#slot-centre").val() == centres.id) {
                            sessionOptions+="<option value='"
                            +centres.memberships[j].membership_id+
                            "'>"
                            +centres.memberships[j].membership_name+
                            "</option>";
                        } else {
                            continue;
                        }
                    }
                });
                $('#slot-session').html(sessionOptions);


                $("#slot-centre").change(function(){
                    sessionOptions = null;
                    $.each(data, function(i,centres) {

                    for(j in centres.memberships) {
                        if($("#slot-centre").val() == centres.id) {
                            sessionOptions+="<option value='"
                            +centres.memberships[j].membership_id+
                            "'>"
                            +centres.memberships[j].membership_name+
                            "</option>";
                        } else {
                            continue;
                        }
                    }
                });
                    $('#slot-session').html(sessionOptions);
                });
                
                }
            });
            
            }
        });
    </script>
	
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
			
            $("#add-slot").on("click",function(){
                var slot_name = $("#slot-name").val();
                var slot_centre = $("#slot-centre").val();
                var slot_category = $("#slot-category").val();
                var slot_session = $("#slot-session").val();
                var slot_start_time = $("#slot-start-time").val();
                var slot_end_time = $("#slot-end-time").val();
                var slot_fee = $("#slot-fee").val();
                var slot_session_id = $("#slot-session").val();
                var id = "slot_" + $("#slot-session").val() + "_" + Math.floor((Math.random() * 100000) + 1);
                var centre_id = $("#slot-centre").val();

                var slot = {
                    "slot_id": id,
                    "slot_session_id": slot_session_id,
                    "slot_centre_id":centre_id,
                    "slot_name": slot_name,
                    "slot_centre": slot_centre,
                    "slot_category":slot_category,
                    "slot_session":slot_session,
                    "slot_start_time":slot_start_time,
                    "slot_end_time":slot_end_time,
                    "slot_fee":slot_fee
                };

                $.ajax({
                    type:"GET",
                    url:"http://128.199.190.92/api/dingyms/"+centre_id,
                    success: function(data){
                        current_data = data;
                        
                        if($("#slot-category").val() == "session")
                        for(var i=0; i<current_data.daily_sessions.length; i++) {
                            if(current_data.daily_sessions[i].session_id == slot_session_id) {
                                if(!current_data.daily_sessions[i].session_slots) {
                                    current_data.daily_sessions[i].session_slots = [];
                                    current_data.daily_sessions[i].session_slots.push(slot);
                                }
                                else{
                                    current_data.daily_sessions[i].session_slots.push(slot);
                                }
                            }
                        }
                        if($("#slot-category").val() == "membership")
                        for(var i=0; i<current_data.memberships.length; i++) {
                            if(current_data.memberships[i].membership_id == slot_session_id) {
                                if(!current_data.memberships[i].membership_slots) {
                                    current_data.memberships[i].membership_slots = [];
                                    current_data.memberships[i].membership_slots.push(slot);
                                }
                                else{
                                    current_data.memberships[i].membership_slots.push(slot);
                                }
                            }
                        }

                        $.ajax({
                            type:"PUT",
                            url:"http://128.199.190.92/api/dingyms/"+centre_id,
                            data:current_data,
                            success: function(data){
                                console.log(data);
                            }
                        });
                    }
                });
            });

        });
    </script>
	
</body>

</html>