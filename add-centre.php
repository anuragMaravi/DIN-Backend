<?php
$page = "add-centre.php";
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

    	<?php $act = "master"; $act2="add"; include "php/navbar.php"; ?>
       
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Add Centre</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Dashboard</a></li>
                        <li><a>Master</a></li>
                        <li><a>Add</a></li>
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
								<h5>Add Centre</h5>
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
											<input type="text" class="form-control" id="centre-name" name="name" placeholder="Name of Centre" required/>
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
                                                    <input type="file" name="file" id="filex" required >
                                                </span>
                                                <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                     <!-- <div class="form-group"><label class="col-sm-2 control-label">Logo</label>
                                        <div class="col-sm-10" style="margin-bottom:5px;">
                                            <textarea rows="3" class="form-control" id="centre-logo" name="logo" cols="50" placeholder="Logo Url"></textarea>
                                        </div>
                                    </div> -->
									<div class="form-group"><label class="col-sm-2 control-label">Category</label>
										<div class="col-sm-10">
											<select id="centre-category" class="chosen-select form-control" tabindex="2">
												<option value="none">Select Category</option>
												<option value="Gym">Gym</option>
												<option value="Music">Music</option>
												<option value="Dance">Dance</option>
											</select>
										</div>
									</div>
									<div class="form-group"><label class="col-sm-2 control-label">Description</label>
										<div class="col-sm-10" style="margin-bottom:5px;">
											<textarea rows="3" class="form-control" id="centre-description" name="description" cols="50" placeholder="Description of centre"></textarea>
										</div>
									</div>
									<div class="form-group"><label class="col-sm-2 control-label">Phone</label>
										<div class="col-sm-10" style="margin-bottom:5px;">
											<input type="number" class="form-control" id="centre-phone" name="phone" placeholder="Phone Number" required/>
										</div>
									</div>
									<div class="form-group"><label class="col-sm-2 control-label">Address</label>
										<div class="col-sm-10" style="margin-bottom:5px;">
											<textarea rows="3" class="form-control" id="centre-address" name="address" cols="50" placeholder="Address"></textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="text-center">
											<input type="button" name="submit" id="add-centre" class="btn btn-w-m btn-primary" value="Add" />
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

    <!-- Get the list of categories from the database and populate "select-centre" -->
    <script>
        $(document).ready(function(){
            var categories;
            $.ajax({
                    type:"GET",
                    url:"http://128.199.190.92/api/dincategories",
                    success: function(result){
                        $.each(result, function(i,centres) {
                            categories+="<option value='"
                            +centres.CategoryName+
                            "'>"
                            +centres.CategoryId+
                            "</option>";
                        });
                    $('#centre-category').html(categories);
                }
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
                autoclose: true,
				format:'dd-mm-yyyy'
            });
			
			$('#data_5 .input-daterange').datepicker({
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true
            });
			
            $("#add-centre").on("click",function(){
                var centre_name = $("#centre-name").val();
                var centre_category = $("#centre-category").val();
                var centre_description = $("#centre-description").val();
                var centre_phone = $("#centre-phone").val();
                var centre_address = $("#centre-address").val();
                var id = centre_name.replace(/ /g, "_") + "_" + centre_category + "_" + Math.floor((Math.random() * 100000) + 1);
                var imgName = id + "_logo.jpg"
                var centre_logo = "http://128.199.190.92/api/Containers/centreimages/download/" + imgName;

                var json = {
                    "name":centre_name,
                    "address":centre_address,
                    "number":centre_phone,
                    "description":centre_description,
                    "category":centre_category,
                    "id":id,
                    "image":centre_logo
                };

                $.ajax({
                    type:"POST",
                    url:"http://128.199.190.92/api/dingyms",
                    data:json,
                    success: function(data){
                        console.log(data);
                    }
                });

                var file_data = $("#filex").prop("files")[0];
                var formData = new FormData();
                formData.append('file', file_data, imgName);
                $.ajax({
                    type:"POST",
                    url:"http://128.199.190.92/api/Containers/centreimages/upload",
                    datatype:'script',
                    data:formData,
                    contentType:false,
                    success: function(fileData){
                        console.log(fileData);
                        alert("Data added successfully!");
                        location.reload();
                    },
                    cache : false,
                    processData: false
                });
            });
        });
    </script>
	
</body>

</html>