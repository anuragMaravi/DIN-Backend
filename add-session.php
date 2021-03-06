<?php
$page = "add-session.php";
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">

    <title>Session | DIN</title>

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
                    <h2>Add Session</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Dashboard</a></li>
                        <li><a>Master</a></li>
                        <li><a>Add</a></li>
                        <li class="active"><strong>Session</strong></li>
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
                                <h5>Add Session</h5>
                                <div class="ibox-tools">
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <form method="post" class="form-horizontal" action="" enctype="multipart/form-data">
                                    <div class="form-group"><label class="col-sm-2 control-label">Session Name</label>
                                        <div class="col-sm-10" style="margin-bottom:5px;">
                                            <input type="text" class="form-control" id="session-name" name="name" placeholder="Name of Session" required/>
                                        </div>
                                    </div>
                                    <div class="form-group" id="file_upload"><label class="col-sm-2 control-label">Upload Image</label>
                                        <div class="col-sm-10">
                                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                <div class="form-control" data-trigger="fileinput">
                                                    <i class="glyphicon glyphicon-file fileinput-exists"></i> 
                                                    <span class="fileinput-filename"></span>
                                                </div>
                                                <span class="input-group-addon btn btn-default btn-file">
                                                    <span class="fileinput-new">Browse Image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="file" id="filex" required >
                                                </span>
                                                <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Centre</label>
                                        <div class="col-sm-10">
                                            <select id="session-centre" class="chosen-select form-control" tabindex="2"></select>
                                        </div>
                                    </div>

                                    <div class="form-group"><label class="col-sm-2 control-label">Category</label>
                                        <div class="col-sm-10">
                                            <select id="session-category" class="chosen-select form-control" tabindex="2">
                                                <option value="Gym">Gym</option>
                                                <option value="Music">Music</option>
                                                <option value="Dance">Dance</option>
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
                                            <input type="text" class="form-control" id="duration" name="duration" placeholder="3 Hours" required/>
                                        </div>
                                    </div>
                                
                                    <div class="form-group"><label class="col-sm-2 control-label">Min. no. of Person</label>
                                        <div class="col-sm-10" style="margin-bottom:5px;">
                                            <input type="number" class="form-control" id="mnp" name="mnp" placeholder="Min. no. of Person" required/>
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Description</label>
                                        <div class="col-sm-10" style="margin-bottom:5px;">
                                            <textarea rows="3" class="form-control" id="session-description" name="description" cols="50" placeholder="Description of session"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="text-center">
                                            <input type="button" name="submit" id="add-session" class="btn btn-w-m btn-primary" value="Add" />
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

    <!-- Get the list of centres from the database and populate "select-centre" -->
    <script>
        $(document).ready(function(){
            var centreOptions;
            $.ajax({
                    type:"GET",
                    url:"http://128.199.190.92/api/dingyms/",
                    success: function(result){
                        $.each(result, function(i,centres) {
                            centreOptions+="<option value='"
                            +centres.id+
                            "'>"
                            +centres.name+
                            "</option>";
                        });
                    $('#session-centre').html(centreOptions);
                }
            });
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
                    $('#session-category').html(categories);
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

            $("#add-session").on("click",function(){
                var session_name = $("#session-name").val();
                var session_centre = $("#session-centre").val();
                var session_category = $("#session-category").val();
                var base_rate = $("#base-rate").val();
                var current_rate = $("#current-rate").val();
                var session_duration = $("#duration").val();
                var mnp = $("#mnp").val();
                var session_description = $("#session-description").val();
                var centre_id = $("#session-centre").val();
                var id = centre_id + "_" +session_name.replace(/ /g, "_") + "_" +Math.floor((Math.random() * 100000) + 1);
                var imgName = id + "_img.jpg"
                var session_logo = "http://128.199.190.92/api/Containers/sessionimages/download/" + imgName;

                var session = {
                    "session_id": id,
                    "session_name": session_name,
                    "session_centre": session_centre,
                    "session_category":session_category,
                    "session_base_rate":base_rate,
                    "session_current_rate":current_rate,
                    "session_duration": session_duration,
                    "session_minperson":mnp,
                    "session_description":session_description,
                    "session_centre_id":centre_id,
                    "session_image":session_logo
                };

                $.ajax({
                    type:"GET",
                    url:"http://128.199.190.92/api/dingyms/"+centre_id,
                    success: function(data){
                        current_data = data;
                        if(!current_data.daily_sessions){
                            current_data.daily_sessions = [];
                            current_data.daily_sessions.push(session);
                        }
                        else {
                            current_data.daily_sessions.push(session);  
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

                var file_data = $("#filex").prop("files")[0];
                var formData = new FormData();
                formData.append('file', file_data, imgName);
                $.ajax({
                    type:"POST",
                    url:"http://128.199.190.92/api/Containers/sessionimages/upload",
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