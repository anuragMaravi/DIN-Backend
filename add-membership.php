<?php
$page = "add-membership.php";
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">

    <title>Membership | DIN</title>

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
                    <h2>Add Membership</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Dashboard</a></li>
                        <li><a>Master</a></li>
                        <li><a>Add</a></li>
                        <li class="active"><strong>Membership</strong></li>
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
                                <h5>Add Membership</h5>
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
                                            <input type="text" class="form-control" id="membership-name" name="name" placeholder="Name of Membership" required/>
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
                                            <select id="membership-centre" class="chosen-select form-control" tabindex="2">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Category</label>
                                        <div class="col-sm-10">
                                            <select id="membership-category" class="chosen-select form-control" tabindex="2">
                                                <option value="none">Select Category</option>
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
                                            <input type="text" class="form-control" id="membership-duration" name="duration" placeholder="60 Days" required/>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group"><label class="col-sm-2 control-label">Min. no. of Person</label>
                                        <div class="col-sm-10" style="margin-bottom:5px;">
                                            <input type="number" class="form-control" id="membership-mnp" name="mnp" placeholder="Min. no. of Person" required/>
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Description</label>
                                        <div class="col-sm-10" style="margin-bottom:5px;">
                                            <textarea rows="3" class="form-control" id="membership-description" name="description" cols="50" placeholder="Description of session"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="text-center">
                                            <input type="button" name="submit" id="add-membership" class="btn btn-w-m btn-primary" value="Add" />
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
    <script >
        $(function(){   
            var centreOptions;
            $.getJSON('http://128.199.190.92/api/dingyms',function(result){
                $.each(result, function(i,centres) {
                    centreOptions+="<option value='"
                    +centres.id+
                    "'>"
                    +centres.name+
                    "</option>";
                });
                $('#membership-centre').html(centreOptions);
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
                    $('#membership-category').html(categories);
                }
            });
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
            
            $("#add-membership").on("click",function(){
                var membership_name = $("#membership-name").val();
                var membership_logo = $("#membership-logo").val();
                var membership_centre = $("#membership-centre").val();
                var membership_category = $("#membership-category").val();
                var base_rate = $("#base-rate").val();
                var current_rate = $("#current-rate").val();
                var membership_duration = $("#membership-duration").val();
                var membership_mnp = $("#membership-mnp").val();
                var membership_description = $("#membership-description").val();
                var centre_id = $("#membership-centre").val();
                var id = centre_id + "_" +membership_name.replace(/ /g, "_") + "_" + Math.floor((Math.random() * 100000) + 1);
                var imgName = id + "_img.jpg"
                var membership_logo = "http://128.199.190.92/api/Containers/membershipimages/download/" + imgName;

                var membership = {
                    "membership_id": id,
                    "membership_name": membership_name,
                    "membership_centre": membership_centre,
                    "membership_category":membership_category,
                    "membership_base_rate":base_rate,
                    "membership_current_rate":current_rate,
                    "membership_duration": membership_duration,
                    "membership_minperson":membership_mnp,
                    "membership_description":membership_description,
                    "membership_centre_id":centre_id,
                    "membership_image":membership_logo
                };

                $.ajax({
                    type:"GET",
                    url:"http://128.199.190.92/api/dingyms/"+centre_id,
                    success: function(data){
                        current_data = data;
                        if(!current_data.memberships){
                            current_data.memberships = [];
                            current_data.memberships.push(membership);
                        }
                        else {
                            current_data.memberships.push(membership);  
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
                    url:"http://128.199.190.92/api/Containers/membershipimages/upload",
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