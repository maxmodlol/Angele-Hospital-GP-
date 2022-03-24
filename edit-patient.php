<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ProClinic-Bootstrap4 Hospital Admin</title>
	<!-- Fav  Icon Link -->
	<link rel="shortcut icon" type="image/png" href="images/fav.png">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- themify icons CSS -->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Animations CSS -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Main CSS -->
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/red.css" id="style_theme">
	<link rel="stylesheet" href="css/responsive.css">
	<!-- morris charts -->
	<link rel="stylesheet" href="charts/css/morris.css">
	<!-- jvectormap -->
	<link rel="stylesheet" href="css/jquery-jvectormap.css">
	<link rel="stylesheet" href="datatable/dataTables.bootstrap4.min.css">

	<script src="js/modernizr.min.js"></script>
</head>

<body>
	<!-- Pre Loader -->
	<div class="loading">
		<div class="spinner">
			<div class="double-bounce1"></div>
			<div class="double-bounce2"></div>
		</div>
	</div>
	<!--/Pre Loader -->
	<div class="wrapper">
		<!-- Sidebar -->
		<nav id="sidebar" class="proclinic-bg">
			<div class="sidebar-header">
				<a href="index.html"><img src="images/logo.png" class="logo" alt="logo"></a></div>
			<ul class="list-unstyled components">
				<li>
					<a href="#nav-dashboard" data-toggle="collapse" aria-expanded="false">
						<span class="ti-home"></span> Dashboard
					</a>
					<ul class="collapse list-unstyled" id="nav-dashboard">
						<li>
							<a href="index.html">Vertical</a>
						</li>
						<li>
							<a href="../Vertical-RTL/index.html">Vertical RTL</a>
						</li>
						<li>
							<a href="../Horizontal/index.html">Horizantal</a>
						</li>
					</ul>
				</li>
				<li class="active">
					<a href="#nav-patients" data-toggle="collapse" aria-expanded="true">
						<span class="ti-wheelchair"></span> Patients
					</a>
					<ul class="collapse list-unstyled show" id="nav-patients">
						<li>
							<a href="add-patient.php">Add Patient</a>
						</li>
						<li>
							<a href="patients.php">All Patients</a>
						</li>
						<li>
							<a href="about-patient.php">Patient Details</a>
						</li>
						<li>
							<a href="edit-patient.html">Edit Patient</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#nav-doctors" data-toggle="collapse" aria-expanded="false">
						<span class="ti-user"></span> Doctors
					</a>
					<ul class="collapse list-unstyled" id="nav-doctors">
						<li>
							<a href="add-doctor.html">Add Doctor</a>
						</li>
						<li>
							<a href="doctors.html">All Doctors</a>
						</li>
						<li>
							<a href="about-doctor.html">Doctor Details</a>
						</li>
						<li>
							<a href="edit-doctor.html">Edit Doctor</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#nav-appointment" data-toggle="collapse" aria-expanded="false">
						<span class="ti-pencil-alt"></span> Appointments
					</a>
					<ul class="collapse list-unstyled" id="nav-appointment">
						<li>
							<a href="add-appointment.html">Add Appointment</a>
						</li>
						<li>
							<a href="appointments.html">All Appointments</a>
						</li>
						<li>
							<a href="about-appointment.html">Appointment Details</a>
						</li>
						<li>
							<a href="edit-appointment.html">Edit Appointment</a>
						</li>
					</ul>
				</li>
				<li>
						<a href="#nav-payment" data-toggle="collapse" aria-expanded="false">
							<span class="ti-money"></span> Payments
						</a>
						<ul class="collapse list-unstyled" id="nav-payment">
							<li>
								<a href="add-payment.html">Add Payment</a>
							</li>
							<li>
								<a href="payments.html">All Payments</a>
							</li>
							<li>
								<a href="about-payment.html">Payment Invoice</a>
							</li>
						</ul>
					</li>
					<li>
							<a href="#nav-rooms" data-toggle="collapse" aria-expanded="false">
								<span class="ti-key"></span> Room Allotments
							</a>
							<ul class="collapse list-unstyled" id="nav-rooms">
								<li>
									<a href="add-room.html">Add Room Allotment</a>
								</li>
								<li>
									<a href="rooms.html">All Rooms</a>
								</li>
								<li>
									<a href="edit-room.html">Edit Room Allotment</a>
								</li>
							</ul>
						</li>
				<li class="nav-level-one">
					<a href="#nav-uiKit" data-toggle="collapse" aria-expanded="false">
						<span class="ti-layout-tab"></span> UI Kit
					</a>
					<ul class="list-unstyled collapse" aria-expanded="true" id="nav-uiKit">
						<li>
							<a href="typography.html">Typography</a>
						</li>
						<li>
							<a href="buttons.html">Buttons</a>
						</li>
						<li>
							<a href="cards.html">Cards</a>
						</li>
						<li>
							<a href="tabs.html">Tabs</a>
						</li>
						<li>
							<a href="accordions.html">Accordions</a>
						</li>
						<li>
							<a href="modals.html">Modals</a>
						</li>
						<li>
							<a href="lists.html">Lists &amp; Media Object</a>
						</li>
						<li>
							<a href="grid.html">Grid</a>
						</li>
						<li>
							<a href="progress-bars.html">Progress Bars</a>
						</li>
						<li>
							<a href="notifications-alerts.html">Notifications &amp; Alerts</a>
						</li>
						<li>
							<a href="pagination.html">Pagination</a>
						</li>
						<li>
							<a href="carousel.html">Carousel</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="tables.html">
						<span class="ti-layout-menu-v"></span> Tables
					</a>
				</li>
				<li>
					<a href="#nav-charts" data-toggle="collapse" aria-expanded="false">
						<span class="ti-pie-chart"></span> Charts
					</a>
					<ul class="collapse list-unstyled" id="nav-charts">
						<li>
							<a href="charts-1.html">Morris</a>
						</li>
						<li>
							<a href="charts-2.html">Flot</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#nav-maps" data-toggle="collapse" aria-expanded="false">
						<span class="ti-location-pin"></span> Maps
					</a>
					<ul class="collapse list-unstyled" id="nav-maps">
						<li>
							<a href="map-1.html">Google Maps</a>
						</li>
						<li>
							<a href="map-2.html">Vector Maps</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="forms.html">
						<span class="ti-layout-media-overlay-alt-2"></span> Forms
					</a>
				</li>
				<li>
					<a href="#nav-icons" data-toggle="collapse" aria-expanded="false">
						<span class="ti-themify-favicon"></span> icons
					</a>
					<ul class="collapse list-unstyled" id="nav-icons">
						<li>
							<a href="font-awesome.html">Font Awesome </a>
						</li>
						<li>
							<a href="themify.html">Themify</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#nav-pages" data-toggle="collapse" aria-expanded="false">
						<span class="ti-file"></span> Other Pages
					</a>
					<ul class="collapse list-unstyled" id="nav-pages">
						<li>
							<a href="login.php">Login </a>
						</li>
						<li>
							<a href="sign-up.html">Sign Up</a>
						</li>
						<li>
							<a href="404.html">404</a>
						</li>
						<li>
							<a href="blank-page.html">Blank Page</a>
						</li>
						<li>
							<a href="pricing.html">Pricing</a>
						</li>
						<li>
							<a href="faq.html">FAQ</a>
						</li>
						<li>
							<a href="invoice.html">Invoice</a>
						</li>
						<li>
							<a href="blank-page.html">Coming Soon</a>
						</li>
					</ul>
				</li>
			</ul>
			<div class="nav-help animated fadeIn">
				<h5><span class="ti-comments"></span> Need Help</h5>
				<h6>
					<span class="ti-mobile"></span> +1 1234 567 890</h6>
				<h6>
					<span class="ti-email"></span> email@site.com</h6>
				<p class="copyright-text">Copy rights &copy; 2018</p>
			</div>
		</nav>
		<!-- /Sidebar -->
		<!-- Page Content -->
		<div id="content">
			<!-- Top Navigation -->
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="responsive-logo">
						<a href="index.html"><img src="images/logo-dark.png" class="logo" alt="logo"></a>
					</div>
					<ul class="nav">
						<li class="nav-item">
							<span class="ti-menu" id="sidebarCollapse"></span>
						</li>
						<li class="nav-item">
							<span title="Fullscreen" class="ti-fullscreen fullscreen"></span>
						</li>
						<li class="nav-item">
							<a  data-toggle="modal" data-target=".proclinic-modal-lg">
								<span class="ti-search"></span>
							</a>
							<div class="modal fade proclinic-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog modal-lorvens">
									<div class="modal-content proclinic-box-shadow2">
										<div class="modal-header">
											<h5 class="modal-title">Search Patient/Doctor:</h5>
											<span class="ti-close" data-dismiss="modal" aria-label="Close">
											</span>
										</div>
										<div class="modal-body">
											<form>
												<div class="form-group">
													<input type="text" class="form-control" id="search-term" placeholder="Type text here">
													<button type="button" class="btn btn-lorvens proclinic-bg">
														<span class="ti-location-arrow"></span> Search</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
								<span class="ti-announcement"></span>
							</a>
							<div class="dropdown-menu proclinic-box-shadow2 notifications animated flipInY">
								<h5>Notifications</h5>
								<a class="dropdown-item" href="#">
									<span class="ti-wheelchair"></span> New Patient Added</a>
								<a class="dropdown-item" href="#">
									<span class="ti-money"></span> Patient payment done</a>
								<a class="dropdown-item" href="#">
									<span class="ti-time"></span>Patient Appointment booked</a>
								<a class="dropdown-item" href="#">
									<span class="ti-wheelchair"></span> New Patient Added</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
								<span class="ti-user"></span>
							</a>
							<div class="dropdown-menu proclinic-box-shadow2 profile animated flipInY">
								<h5>John Willing</h5>
								<a class="dropdown-item" href="#">
									<span class="ti-settings"></span> Settings</a>
								<a class="dropdown-item" href="#">
									<span class="ti-help-alt"></span> Help</a>
								<a class="dropdown-item" href="#">
									<span class="ti-power-off"></span> Logout</a>
							</div>
						</li>
					</ul>
				
				</div>
			</nav>
			<!-- /Top Navigation -->
			<!-- Breadcrumb -->
			<!-- Page Title -->
			<div class="row no-margin-padding">
				<div class="col-md-6">
					<h3 class="block-title">Edit Patient</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">						
						<li class="breadcrumb-item">
							<a href="index.html">
								<span class="ti-home"></span>
							</a>
                        </li>
                        <li class="breadcrumb-item">Patients</li>
						<li class="breadcrumb-item active">Edit Patient</li>
					</ol>
				</div>
			</div>
			<!-- /Page Title -->

			<!-- /Breadcrumb -->
			<!-- Main Content -->
			<div class="container-fluid">

				<div class="row">
					<!-- Widget Item -->
					<div class="col-md-12">
						<div class="widget-area-2 proclinic-box-shadow">
							<h3 class="widget-title">Edit Patient</h3>
							<?php
							$servername = "localhost";
                                                                          $username = "root";
                                                                          $password = "";
                                                                          $dbname = "proclinc";
                                                                           $namee=$_GET['name'];
                                                                    $conn = new mysqli($servername, $username, $password, $dbname);
                                                                     $sql = "SELECT * FROM patients WHERE Full_Name='$namee'";
                                                                      $result = mysqli_query($conn, $sql);
                                                                       if ($conn->connect_error) {
                                                                         die("Connection failed: " . $conn->connect_error);
                                                                            }
                                                                             if (mysqli_num_rows($result) > 0) {
                                                                               if($row =mysqli_fetch_assoc($result)) {
                                                                               $namee= $row['Full_Name'];
                                                                                $gender=$row['Gender'];
                                                                                $address=$row['Address'];
                                                                               $email=$row['Email'];
                                                                               $phone=$row['Phone_Number'];
                                                                               $dob=$row['Date_Of_Birth'];
                                                                               $phpdate = strtotime( $dob );

							echo"<form>
								<div class='form-row'>
									<div class='form-group col-md-6'>
										<label for='patient-name'>Patient Name</label>
										<input type='text' value='{$namee}' class='form-control' placeholder='Patient name' id='patient-name'>
									</div>
									<div class='form-group col-md-6'>
										<label for='dob'>Date Of Birth</label>
										<input type='date' value='{$dob}' placeholder='Date of Birth' class='form-control' id='dob'>
									</div>

									<div class='form-group col-md-6'>
										<label for='phone'>Phone</label>
										<input type='text' value='{$phone}' placeholder='Phone' class='form-control' id='phone'>
									</div>
									<div class='form-group col-md-6'>
										<label for='email'>Email</label>
										<input type='email' value='{$email}' placeholder='email' class='form-control' id='Email'>
									</div>
									<div class='form-group col-md-6'>
										<label for='gender'>$gender</label>
										<select class='form-control' id='gender'>
											<option selected>Male</option>
											<option>Female</option>
											<option>Other</option>
										</select>
									</div>
									<div class='form-group col-md-12'>
										<label for='exampleFormControlTextarea'>Address</label>
										<textarea placeholder='Address' class='form-control' id='exampleFormControlTextarea1' rows='3'>$address</textarea>
									</div>


									<div class='form-check col-md-12 mb-2'>
										<div class='text-left'>
											<div class='custom-control custom-checkbox'>
												<input class='custom-control-input' type='checkbox' id='ex-check-2'>
												<label class='custom-control-label' for='ex-check-2'>Please Confirm</label>
											</div>
										</div>
									</div>
									<div class='form-group col-md-6 mb-3'>
										<button type='submit' class='btn btn-primary btn-lg'>Update</button>
									</div>
								</div>
							</form>";
							}
							}
							                            	    $conn->close();

							?>
							<!-- Alerts-->
							<div class="alert alert-success alert-dismissible fade show" role="alert">
								<strong>Successfully Updated!</strong> Please add payment now
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="alert alert-warning alert-dismissible fade show" role="alert">
								<strong>Holy guacamole!</strong> You should check in on some of those fields below.
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<!-- /Alerts-->
						</div>
					</div>
					<!-- /Widget Item -->
				</div>
			</div>
			<!-- /Main Content -->
		</div>
		<!-- /Page Content -->
	</div>
	<!-- Back to Top -->
	<a id="back-to-top" href="#" class="back-to-top">
		<span class="ti-angle-up"></span>
	</a>
	<!-- /Back to Top -->
	<!-- Jquery Library-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<!-- Popper Library-->
	<script src="js/popper.min.js"></script>
	<!-- Bootstrap Library-->
    <script src="js/bootstrap.min.js"></script>
    
    <!-- Datatable  -->
	<script src="datatable/jquery.dataTables.min.js"></script>
	<script src="datatable/dataTables.bootstrap4.min.js"></script>
    
	<!-- Custom Script-->
	<script src="js/custom.js"></script>

</body>

</html>