<!DOCTYPE html>
<html>
<?php session_start();
?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Arab Evangelist Hospital</title>
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
				<a href="index.php"><img src="images/logo.png" class="logo" width="200px" style="border-radius: 50%" alt="logo"></a>
			</div>
			<ul class="list-unstyled components">

				<li>
					<a href="#nav-patients" data-toggle="collapse" aria-expanded="false">
						<span class="ti-wheelchair"></span> Patients
					</a>
					<ul class="collapse list-unstyled" id="nav-patients">
						<li>
							<a href="add-patient.php">Add Patient</a>
						</li>
						<li>
							<a href="patients.php">All Patients</a>
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
							<a href="doctors.php">All Doctors</a>
						</li>
						
					</ul>
				</li>
				<li>
					<a href="#nav-appointment" data-toggle="collapse" aria-expanded="false">
						<span class="ti-pencil-alt"></span> Appointments
					</a>
					<ul class="collapse list-unstyled" id="nav-appointment">
						<li>
							<a href="add-appointment.php">Add Appointment</a>
						</li>
						<li>
							<a href="appointments.php">All Appointments</a>
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
							<a href="payments.php">All Payments</a>
						</li>
					
					</ul>
				</li>

			</ul>
			<div class="nav-help animated fadeIn">
				<h5><span class="ti-comments"></span> Need Help</h5>
				<h6>
					<span class="ti-mobile"></span> +972 000000</h6>
				<h6>
					<span class="ti-email"></span> email@site.com</h6>
				<p class="copyright-text">Copy rights &copy; 2018</p>
			</div>
		</nav>
		<!-- /Sidebar -->
		<!-- Page Content -->
		<div id="content">
			<!-- Top Navigation -->
			<!-- Top Navigation -->
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="responsive-logo">
						<a href="index.php"><img src="images/logo-dark.png" class="logo" alt="logo"></a>
					</div>
					<ul class="nav">
		
						<li class="nav-item">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
								<span class="ti-user"></span>
							</a>
							<div class="dropdown-menu proclinic-box-shadow2 profile animated flipInY">
								<h5><?php echo $_SESSION['username'] ;?>
                                </h5>
							
								<a class="dropdown-item" href="login.php">
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
					<h3 class="block-title">Appointment Details</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">						
						<li class="breadcrumb-item">
							<a href="index.php">
								<span class="ti-home"></span>
							</a>
                        </li>
                        <li class="breadcrumb-item">Appointments</li>
						<li class="breadcrumb-item active">Appointment Details</li>
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
                            <h3 class="widget-title">Appointment Details</h3>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <tbody>
									<?php
											$servername = "localhost";
                                              $username = "root";
                                              $password = "";
                                              $dbname = "proclinc";
                                               $id=$_GET['id'];
											   $_SESSION['id']=$id;
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                         $sql = "SELECT * FROM appointments WHERE Patient_ID='$id'";
                                          $result = mysqli_query($conn, $sql);
                                           if ($conn->connect_error) {
                                             die("Connection failed: " . $conn->connect_error);
                                                }
                                                 if (mysqli_num_rows($result) > 0) {
                                                 if($row =mysqli_fetch_assoc($result)) {
													echo" 
                                        <tr>
                                            <td><strong>Patient ID</strong></td>
                                            <td id ='id'>".$row['Patient_ID']."</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Department</strong></td>
                                            <td>".$row['Department']."</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Doctor Name</strong></td>
                                            <td>".$row['Doctor_Name']."</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Appointment Date</strong></td>
                                            <td>".$row['Appotiment_Date']."</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Time Slot </strong></td>
                                            <td>".$row['Appotiment_Time']."</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Token Number </strong></td>
                                            <td>".$row['Token_Num']."</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Problem</strong></td>
                                            <td>".$row['Problem_Desreption']."</td>
                                        </tr>";
								}
							}
										?>
										<script>
								function delete_p(){
								const name =document.getElementById('id').value;
								alert(name);
								        if(confirm("Are You Sure You want to delete this appotmient?")){
								            location.href='delete_appotiment.php';

								        }


								}

								</script>
                                    </tbody>
                                </table>
                                <!--Export links-->
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination export-pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#"><span class="ti-download"></span> csv</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"><span class="ti-printer"></span> print</a>
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
                            
                                <button type="button" class="btn btn-danger mb-3" onclick="delete_p()"><span class="ti-trash"></span> Delete
                                    Appointment</button>
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