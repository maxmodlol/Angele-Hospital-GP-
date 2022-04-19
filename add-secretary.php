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
				<a href="admin.php"><img src="images/logo.png" class="logo" width="200px" style="border-radius: 50%" alt="logo"></a>
			</div>
			<ul class="list-unstyled components">

				<li>
					<a href="#nav-patients" data-toggle="collapse" aria-expanded="false">
						<span class="ti-pencil-alt"></span> Lab Employes
					</a>
					<ul class="collapse list-unstyled" id="nav-patients">
						<li>
							<a href="add-lab.php">Add Lab Employes</a>
						</li>
					
					
					</ul>
				</li>
				<li>
					<a href="#nav-doctors" data-toggle="collapse" aria-expanded="false">
						<span class="ti-pencil-alt"></span>Secretary Employes
					</a>
					<ul class="collapse list-unstyled" id="nav-doctors">
						<li>
							<a href="add-secretary.php">Add Secretary</a>
						</li>
					
					</ul>
				</li>
                <li>
					<a href="#nav-delete" data-toggle="collapse" aria-expanded="false">
						<span class="ti-pencil-alt"></span>Delete Employes
					</a>
					<ul class="collapse list-unstyled" id="nav-delete">
						<li>
							<a href="delete_employ.php">Delete Employes</a>
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
   
    <form method="post" id="form" action='add_secertery.php' >
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="patient-id">Username</label>
										<input type="text" class="form-control" placeholder="" id="patient-id" name='username' required>
									</div>
									<div class="form-group col-md-6">
    
    
									<label for="appointment-date">Password</label>
  								  <input type="password" placeholder="" class="form-control" id="appointment-date" name='password' required>	
									</div>
											
									<div class="form-check col-md-12 mb-2">
										<div class="text-left">
											<div class="custom-control custom-checkbox">
												<input class="custom-control-input" type="checkbox" id="ex-check-2">
												<label class="custom-control-label" for="ex-check-2">Please Confirm</label>
											</div>
										</div>
									</div>
									<div class="form-group col-md-6 mb-3">
										<button type="submit" class="btn btn-primary btn-lg">Submit</button>
									</div>
								</div>
							</form>    

       
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
<!-- morris charts -->
<script src="charts/js/raphael-min.js"></script>
<script src="charts/js/morris.min.js"></script>
<script src="js/custom-morris.js"></script>

<!-- Custom Script-->
<script src="js/custom.js"></script>
</body>

</html>