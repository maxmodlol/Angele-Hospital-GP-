<?php session_start(); ?>
<!DOCTYPE html>
<html>

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
					<h3 class="block-title">Add Appointment</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">						
						<li class="breadcrumb-item">
							<a href="index.php">
								<span class="ti-home"></span>
							</a>
                        </li>
                        <li class="breadcrumb-item">Appointments</li>
						<li class="breadcrumb-item active">Add Appointment</li>
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
							<h3 class="widget-title">Add Appointment</h3>
<form method="post" id="form" action="add_appotiment1.php">
                           
    <?php 
       	$servername = "localhost";
           $username = "root";
           $password = "";

   $dbname = "proclinc";

   // Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);
   // Check connection   
    $date=$_GET['date'];
   $name=$_GET['name'];
   $id=$_GET['id'];
   $_SESSION['date']=$date;
   $_SESSION['name']=$name;
   $_SESSION['id']=$id;
   $_SESSION['department']=$_GET['department'];
      $sql = "SELECT * FROM doctors WHERE Full_Name = '$name'";
   $result = mysqli_query($conn, $sql);
   if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
   }
   if (mysqli_num_rows($result) > 0) {
    while($row =mysqli_fetch_assoc($result)) {
      $dutytime=$row['Duty_Time'];
        
    }
       }
   else {
       }
        $time= explode('-',$dutytime);
        $time_split=str_split($dutytime);
        $timestart= $time_split[0];
        $timeend= $time_split[4];
        $time_conflict=array();
        $time_availabe=array();
        $length=abs((int)$time_split[0]-(int)$time_split[4]);
        for ($x = 0; $x < 6; $x++) {
            $timenext=(int)$timestart+1;

            if((int)$timenext<12){
            array_push($time_availabe,"$timestart:00AM-$timestart:20AM ");
			array_push($time_availabe,"$timestart:20AM-$timestart:40AM ");
            array_push($time_availabe,"$timestart:40AM-$timenext:00AM ");

            }
            if((int)$timestart>11){
				array_push($time_availabe,"$timestart:00PM-$timestart:20PM ");
				array_push($time_availabe,"$timestart:20PM-$timestart:40PM ");
				array_push($time_availabe,"$timestart:40PM-$timenext:00PM ");            }
            else{
                if((int)$timenext>11 && (int)$timestart<12){
					array_push($time_availabe,"$timestart:00AM-$timestart:20AM ");
					array_push($time_availabe,"$timestart:20AM-$timestart:40AM ");
					array_push($time_availabe,"$timestart:40AM-$timenext:00AM ");            }

            }
            $timestart=(int)$timestart+1;

        }
        $sql = "SELECT * FROM appointments WHERE Doctor_Name = '$name'";
        $result = mysqli_query($conn, $sql);
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        if (mysqli_num_rows($result) > 0) {
         while($row =mysqli_fetch_assoc($result)) {
            $app_date=$row['Appotiment_Date'];
             if($date==$app_date){
                $app_time=$row['Appotiment_Time'];
                array_push($time_conflict,$app_time);
             }
         
             
         }
            }
        else {
            }

       $conn->close();
	   $new = array();

       for ($x = 0; $x <count($time_availabe); $x++) {
         for ($y = 0; $y <count($time_conflict); $y++) { 
            if(strcmp($time_availabe[$x],$time_conflict[$y])==1){
				$x++;
            }
            else{


				
             
            }
         }
		 array_push($new,$time_availabe[$x]);

      }
	 
	 
  
    


    

     
  echo"  <div class='form-group col-md-6'>
    <label for='time-slot'>Avaialbe Time Slot</label>
    <select class='form-control' id='time-slot' name='appointment-time'>";
    for ($Z = 0; $Z < count($new); $Z++) { 
        echo "<option>";
      echo   $new[$Z];
         echo "</option>";
        }

   echo "</select>
    </div>";

    ?>
    
    <div class="form-group col-md-12">
    <label for="problem">Problem</label>
    <textarea placeholder="Problem" class="form-control" id="problem" rows="3" name="problem"></textarea>
    </div>
    <div class="form-group col-md-6">
    <label for="patient-name">Patient Name</label>
    <input type="text" class="form-control" id="patient-name" placeholder="Patient Name" name="patient_name" rows="3">
    </div>
							
							<!-- Alerts-->
							<div class="alert alert-success alert-dismissible fade show" role="alert">
								<strong>Successfully Done!</strong> Appointment token Generated
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
                            <div class="form-group col-md-6 mb-3">
										<button type="submit" class="btn btn-primary btn-lg">Submit</button>
									</div>

</form>
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