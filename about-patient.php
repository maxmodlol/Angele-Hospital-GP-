
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
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

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
							<a href="about-patient.html">Patient Details</a>
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
					<h3 class="block-title">Patient Details</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">						
						<li class="breadcrumb-item">
							<a href="index.html">
								<span class="ti-home"></span>
							</a>
                        </li>
                        <li class="breadcrumb-item">Patients</li>
						<li class="breadcrumb-item active">Patient Details</li>
					</ol>
				</div>
			</div>
			<!-- /Page Title -->

			<!-- /Breadcrumb -->
			<!-- Main Content -->
			<div class="container-fluid">

				<div class="row">
					<!-- Widget Item -->
					<div class="col-md-6">
						<div class="widget-area-2 proclinic-box-shadow">
							<h3 class="widget-title">Patient Details</h3>
							<div class="table-responsive">
								<table class="table table-bordered">
									<tbody>
										<tr>

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

										echo"<td ><strong>Name</strong></td>";
										echo"<td id='name'>".$row['Full_Name']."</td>";



									echo"	</tr>";
										echo"<tr>";
										echo"	<td><strong>Date Of Birth</strong> </td>";
										echo"	<td>".$row['Date_Of_Birth']."</td>";
										echo"</tr>
										<tr>
											<td><strong>Gender</strong></td>";
											echo"<td>".$row['Gender']."</td>";
										echo"</tr>";
									echo"<tr>";
										echo"<td><strong>Address</strong></td>";
										echo"<td>".$row['Address']."</td>";
									echo"</tr>";
										echo"<tr>";
											echo"<td><strong>Phone </strong></td>";
									       echo"<td>".$row['Phone_Number']."</td>";
										echo"</tr>";
										echo"<tr><td><strong>Email</strong></td>";
											echo"<td>".$row['Email']."</td>";
                                        echo"</tr>";
									echo"</tbody>";
					        	    echo"</table>";
							echo"</div>";
							     }
							     }


                            	    $conn->close();

							    ?>
								<!--Export links-->
								<nav aria-label="Page navigation example">
									<ul class="pagination justify-content-center export-pagination">
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-download"></span> csv</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-printer"></span>  print</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-file"></span> PDF</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-align-justify"></span> Excel</a>
										</li>
									</ul>
								</nav>
								<script>
								function edit(){

								    }

								</script>
								<!-- /Export links-->
								<?php
								$namee=$_GET['name'];
                         	echo"<a href='edit-patient.php?name={$namee}' class='btn btn-success mb-3' onclick='edit()'><span class='ti-pencil-alt'></span> Edit Patient</a>
                            <button type='button' class='btn btn-danger mb-3'><span class='ti-trash'></span> Delete Patient</button>
                            <button type='button' class='btn btn-info mb-3'><span class='ti-arrow-down'></span> Download File</button>";
                            ?>
						</div>
					</div>
                    <!-- /Widget Item -->
                    <!-- Widget Item -->
					<div class="col-md-6">
						<div class="widget-area-2 proclinic-box-shadow">
							<h3 class="widget-title">Patient Visits</h3>
							<div class="table-responsive">
								<table class="table table-bordered table-striped">
									<thead>
										<tr>										
											<th>Doctor Name</th>
											<th>Cost</th>
											<th>Visit Date</th>
											<th>Status</th>
										</tr>
									</thead>
									<tbody>
										<tr>											
											<td>Manoj Kumar</td>
											<td>$30</td>
											<td>12-03-2018</td>
											<td>Resheduled</td>
										</tr>
										<tr>
											<td>Riya </td>
											<td>$26</td>
											<td>12-10-2018</td>
											<td>Operation</td>
										</tr>
										<tr>
											<td>Paul</td>
											<td>$46</td>
											<td>45-10-2018</td>
											<td>Fever</td>
										</tr>
										<tr>
											<td>Manoj Kumar</td>
											<td>$30</td>
											<td>12-03-2018</td>
											<td>Ortho</td>
										</tr>
										<tr>
											<td>Riya </td>
											<td>26</td>
											<td>12-10-2018</td>
											<td>General Check-up</td>
										</tr>
										<tr>
											<td>Paul</td>
											<td>46</td>
											<td>45-10-2018</td>
											<td>Injury</td>
										</tr>										
									</tbody>
								</table>
								
								<!--Export links-->
								<nav aria-label="Page navigation example">
									<ul class="pagination justify-content-center export-pagination">
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-download"></span> csv</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-printer"></span>  print</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-file"></span> PDF</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-align-justify"></span> Excel</a>
										</li>
									</ul>
								</nav>
								<!-- /Export links-->
							</div>
						</div>
					</div>
                    <!-- /Widget Item -->
                     <!-- Widget Item -->
					<div class="col-md-12">
						<div class="widget-area-2 proclinic-box-shadow">
							<h3 class="widget-title">Patient Payment Transactions</h3>
							<div class="table-responsive">
								<table class="table table-bordered table-striped">
									<thead>
										<tr>										
											<th>Date</th>
											<th>Cost</th>
											<th>Discount</th>
											<th>Payment Type</th>
											<th>Invoive</th>
											<th>Status</th>
										</tr>
									</thead>
									<tbody>
										<tr>											
											<td>12-03-2018</td>
											<td>$300</td>
											<td>15%</td>
											<td>Check</td>
											<td><button type="button" class="btn btn-outline-info mb-0"><span class="ti-arrow-down"></span> Invoice</button></td>
											<td><span class="badge badge-warning">Pending</span></td>
                                        </tr>
                                        <tr>											
											<td>12-03-2018</td>
											<td>$130</td>
											<td>5%</td>
											<td>Credit Card</td>
											<td><button type="button" class="btn btn-outline-info mb-0"><span class="ti-arrow-down"></span> Invoice</button></td>
											<td><span class="badge badge-success">Completed</span></td>
                                        </tr>
                                        <tr>											
											<td>12-03-2018</td>
											<td>$30</td>
											<td>5%</td>
											<td>Credit Card</td>
											<td><button type="button" class="btn btn-outline-info mb-0"><span class="ti-arrow-down"></span> Invoice</button></td>
											<td><span class="badge badge-danger">Cancelled</span></td>
                                        </tr>
                                        <tr>											
											<td>12-03-2018</td>
											<td>$30</td>
											<td>5%</td>
											<td>Cash</td>
											<td><button type="button" class="btn btn-outline-info mb-0"><span class="ti-arrow-down"></span> Invoice</button></td>
											<td><span class="badge badge-success">Completed</span></td>
                                        </tr>
                                        <tr>											
											<td>12-03-2018</td>
											<td>$30</td>
											<td>5%</td>
											<td>Credit Card</td>
											<td><button type="button" class="btn btn-outline-info mb-0"><span class="ti-arrow-down"></span> Invoice</button></td>
											<td><span class="badge badge-success">Completed</span></td>
                                        </tr>
                                        <tr>											
											<td>12-03-2018</td>
											<td>$30</td>
											<td>5%</td>
											<td>Insurance</td>
											<td><button type="button" class="btn btn-outline-info mb-0"><span class="ti-arrow-down"></span> Invoice</button></td>
											<td><span class="badge badge-success">Completed</span></td>
                                        </tr>
                                        <tr>											
											<td>12-03-2018</td>
											<td>$30</td>
											<td>5%</td>
											<td>Credit Card</td>
											<td><button type="button" class="btn btn-outline-info mb-0"><span class="ti-arrow-down"></span> Invoice</button></td>
											<td><span class="badge badge-success">Completed</span></td>
										</tr>									
									</tbody>
								</table>
								
								<!--Export links-->
								<nav aria-label="Page navigation example">
									<ul class="pagination justify-content-center export-pagination">
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-download"></span> csv</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-printer"></span>  print</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-file"></span> PDF</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-align-justify"></span> Excel</a>
										</li>
									</ul>
								</nav>
								<!-- /Export links-->
							</div>
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