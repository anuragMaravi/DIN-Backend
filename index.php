<?php
$page = "index.php";
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="robots" content="noindex, nofollow">

    <title>Dashboard | DIN</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <div id="wrapper">
				
		<?php $act = "index"; $act2="index"; include "php/navbar.php"; ?>
        
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Dashboard</h2>
                    <ol class="breadcrumb">
                        <li><a>DIN</a></li>
                        <li class="active"><strong>Dashboard</strong></li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
			<div class="wrapper wrapper-content">
				<div class="row">
					<div class="col-lg-4">
						<div class="ibox float-e-margins">
							<div class="ibox-title">
								<span class="label label-primary pull-right"><i class="fa fa-bar-chart"></i></span>
								<h5>Gym Centre</h5>
							</div>
							<div class="ibox-content">
								<h1 class="no-margins">10</h1>
								<small>Total gym centre</small>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="ibox float-e-margins">
							<div class="ibox-title">
								<span class="label label-primary pull-right"><i class="fa fa-bar-chart"></i></span>
								<h5>Registrations (Gym)</h5>
							</div>
							<div class="ibox-content">
								<h1 class="no-margins">50</h1>
								<small>Total registrations</small>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="ibox float-e-margins">
							<div class="ibox-title">
								<span class="label label-primary pull-right"><i class="fa fa-bar-chart"></i></span>
								<h5>Booking (Gym)</h5>
							</div>
							<div class="ibox-content">
								<h1 class="no-margins">40</h1>
								<small>Total booking</small>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="ibox float-e-margins">
							<div class="ibox-title">
								<span class="label label-primary pull-right"><i class="fa fa-bar-chart"></i></span>
								<h5>Dance Academy</h5>
							</div>
							<div class="ibox-content">
								<h1 class="no-margins">60</h1>
								<small>Total dance academy</small>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="ibox float-e-margins">
							<div class="ibox-title">
								<span class="label label-primary pull-right"><i class="fa fa-bar-chart"></i></span>
								<h5>Registrations (Dance)</h5>
							</div>
							<div class="ibox-content">
								<h1 class="no-margins">55</h1>
								<small>Total registrations</small>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="ibox float-e-margins">
							<div class="ibox-title">
								<span class="label label-primary pull-right"><i class="fa fa-bar-chart"></i></span>
								<h5>Booking (Dance)</h5>
							</div>
							<div class="ibox-content">
								<h1 class="no-margins">45</h1>
								<small>Total booking</small>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="ibox float-e-margins">
							<div class="ibox-title">
								<span class="label label-primary pull-right"><i class="fa fa-bar-chart"></i></span>
								<h5>Singing Classes</h5>
							</div>
							<div class="ibox-content">
								<h1 class="no-margins">70</h1>
								<small>Total singing classes</small>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="ibox float-e-margins">
							<div class="ibox-title">
								<span class="label label-primary pull-right"><i class="fa fa-bar-chart"></i></span>
								<h5>Registrations (Singing)</h5>
							</div>
							<div class="ibox-content">
								<h1 class="no-margins">65</h1>
								<small>Total registrations</small>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="ibox float-e-margins">
							<div class="ibox-title">
								<span class="label label-primary pull-right"><i class="fa fa-bar-chart"></i></span>
								<h5>Booking (Singing)</h5>
							</div>
							<div class="ibox-content">
								<h1 class="no-margins">50</h1>
								<small>Total booking</small>
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

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="js/plugins/flot/jquery.flot.symbol.js"></script>
    <script src="js/plugins/flot/jquery.flot.time.js"></script>

    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>
    <script src="js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Jvectormap -->
    <script src="js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- EayPIE -->
    <script src="js/plugins/easypiechart/jquery.easypiechart.js"></script>

    <!-- Sparkline -->
    <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="js/demo/sparkline-demo.js"></script>

</body>
</html>
