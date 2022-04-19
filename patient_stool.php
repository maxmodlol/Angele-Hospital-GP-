<?php
	    session_start();
	?>
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
		<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

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
    <nav id="sidebar" class="proclinic-bg">
			<div class="sidebar-header">
				<a href="patient-home.php"><img src="images/logo.png" class="logo" width="200px" style="border-radius: 50%" alt="logo"></a>
			</div>
			<ul class="list-unstyled components">
              
				<li>
					<a href="#nav-patients" data-toggle="collapse" aria-expanded="false">
						<span class="ti-pencil-alt"></span> Uraine Analysis
					</a>
					<ul class="collapse list-unstyled" id="nav-patients">
					
						<li>
							<a href="patient_uraine.php">All Uraine Reports</a>
						</li>
					
					</ul>
				</li>
				<li>
					<a href="#nav-doctors" data-toggle="collapse" aria-expanded="false">
						<span class="ti-pencil-alt"></span> Stool Anaylsis
					</a>
					<ul class="collapse list-unstyled" id="nav-doctors">
						
						<li>
							<a href="patient_stool.php">All Stool Reports</a>
						</li>
						
					</ul>
				</li>
				<li>
					<a href="#nav-appointment" data-toggle="collapse" aria-expanded="false">
						<span class="ti-pencil-alt"></span> Hermons Analysis
					</a>
					<ul class="collapse list-unstyled" id="nav-appointment">
					
						<li>
							<a href="patient_hermons.php">All Hermons Reports</a>
						</li>
						
					</ul>
				</li>
                <li>
					<a href="#nav-patientss" data-toggle="collapse" aria-expanded="false">
						<span class="ti-pencil-alt"></span> Appotiment
					</a>
					<ul class="collapse list-unstyled" id="nav-patientss">
					
						<li>
							<a href="patient_add_appotiment.php">Add Appotiment</a>
						</li>
                        <li>
							<a href="patient_appotiment.php">My Appotiment</a>
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
					<h3 class="block-title">Patients</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">						
						<li class="breadcrumb-item">
							<a href="index.php">
								<span class="ti-home"></span>
							</a>
                        </li>
                        <li class="breadcrumb-item">Patients</li>
						<li class="breadcrumb-item active">All Patients</li>
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
							<h3 class="widget-title">Patients List</h3>							
							<div class="table-responsive mb-3">
								<table id="tableId" class="table table-bordered table-striped">
									<thead>
										<tr>
											
											<th>Patient ID</th>
											<th>Color</th>
											<th>Constancy</th>
											<th>Groos_blood</th>
											<th>Mucus</th>
                                            <th>Occult_blood</th>
                                            <th>Pus</th>
										</tr>
									</thead>
									<tbody>
										<tr>

											<?php
													$servername = "localhost";
                                            		$username = "root";
                                            		$password = "";

                                            $dbname = "proclinc";
                                            $id= $_SESSION['username'];
                                            // Create connection
                                            $conn = new mysqli($servername, $username, $password, $dbname);
                                            // Check connection
                                            $sql = "SELECT * FROM stool_analysis WHERE Patient_ID='$id'";
                                            $result = mysqli_query($conn, $sql);
                                            if ($conn->connect_error) {
                                              die("Connection failed: " . $conn->connect_error);
                                            }
                                             if (mysqli_num_rows($result) > 0) {
                                               while($row =mysqli_fetch_assoc($result)) {
												   $id=$row['Patient_ID'];
                                              
                                                   echo"<td><a  id='name' href='#' >".$row['Patient_ID']."</a></td>";
                                                    echo"<td > ".$row['color']."</td>";
                                                  echo"<td id='dob'>".$row['Constancy']."</td>";
                                                    echo"<td id='p_n'>".$row["Groos_blood"]."</td>";
                                                    echo"<td id='p_n'>".$row["mucus"]."</td>";
                                                                                                        
                                                    echo"<td id='p_n'>".$row["occult_blood"]."</td>";
                                                    echo"<td id='p_n'>".$row["pus"]."</td>";
                                                    echo"	</tr>";
                                                 }
                                               }



                                             else {
                                               
                                             }


										    $conn->close();


									        ?>



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
	<script src="js/custom-datatables.js"></script>
</body>

</html>