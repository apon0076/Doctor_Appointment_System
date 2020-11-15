<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title></title>
         <!-- Bootstrap CSS CDN -->
		 <link href="css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="css/dataTables.bootstrap.min.css">
        <link rel="css/jquery.dataTables.min.css">
		<link href="css/dataTables.jqueryui.min.css" rel="stylesheet">
			<link href="css/dataTables.semanticui.min.css" rel="stylesheet">
			<link href="css/dataTables.foundation.min.css" rel="stylesheet">
			
			<link href="css/dataTables.material.min.css" rel="stylesheet">
			<link href="css/dataTables.uikit.min.css" rel="stylesheet">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="style.css">
    </head>
    <body>



        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
			<div class="sidebar-header">
				<h3>DAMS</h3>
				<strong>RA</strong>
			</div>

			<ul class="list-unstyled components">
				<li class="">
					<a href="dashboard.php">
						<i class="fa fa-th-large"></i>
						Dashboard
					</a>
				</li>
				<li class="">
					<a href="my-profile-setup.php">
						<i class="fa fa-user-plus" aria-hidden="true"></i>
						My Profile
					</a>
				</li>
				<li>
					<a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
						<i class="fa fa-users"></i>
						My Appointments
					</a>
					<ul class="collapse list-unstyled" id="homeSubmenu">
						<li class="active"><a href="new-appointment.php">New Appointment</a></li>
						<li><a href="appointment_history.php">Appointment History</a></li>
					</ul>
				</li>
				<!-- <li> -->
					<!-- <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false"> -->
						<!-- <i class="fa fa-users"></i> -->
						<!-- Teacher -->
					<!-- </a> -->
					<!-- <ul class="collapse list-unstyled" id="pageSubmenu1"> -->
						<!-- <li><a href="add-teacher.html">Add Teacher</a></li> -->
						<!-- <li><a href="teacher-list.html">Teacher List</a></li> -->
					<!-- </ul> -->
				<!-- </li> -->
				<!-- <li> -->
					<!-- <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false"> -->
						<!-- <i class="fa fa-users"></i> -->
						<!-- Stuff -->
					<!-- </a> -->
					<!-- <ul class="collapse list-unstyled" id="pageSubmenu2"> -->
						<!-- <li><a href="add-employee.html">Add Stuff</a></li> -->
						<!-- <li><a href="employee-list.html">Stuff List</a></li> -->
					<!-- </ul> -->
				<!-- </li> -->
				<!-- <li> -->
					<!-- <a href="departments.html"> -->
						<!-- <i class="fa fa-th"></i> -->
						<!-- Departments -->
					<!-- </a> -->
				<!-- </li> -->
				<!-- <li> -->
					<!-- <a href="classes.html"> -->
						<!-- <i class="fa fa-th-large"></i> -->
						<!-- Classes -->
					<!-- </a> -->
				<!-- </li> -->
				<!-- <li> -->
					<!-- <a href="sections.html"> -->
						<!-- <i class="fa fa-square"></i> -->
						<!-- Sections -->
					<!-- </a> -->
				<!-- </li> -->
				<!-- <li> -->
					<!-- <a href="groups.html"> -->
						<!-- <i class="fa fa-users"></i> -->
						<!-- Groups -->
					<!-- </a> -->
				<!-- </li> -->
				<!-- <li> -->
					<!-- <a href="subjects.html"> -->
						<!-- <i class="fa fa-clipboard"></i> -->
						<!-- Subjects -->
					<!-- </a> -->
				<!-- </li> -->
				<!-- <li> -->
					<!-- <a href="#pageSubmenu10" data-toggle="collapse" aria-expanded="false"> -->
						<!-- <i class="fa fa-clock-o"></i> -->
						<!-- Routine -->
					<!-- </a> -->
					<!-- <ul class="collapse list-unstyled" id="pageSubmenu10"> -->
						<!-- <li><a href="routin2.html">Student Routine</a></li> -->
						<!-- <li><a href="routin2.html">Teacher Routine</a></li> -->
						<!-- <li><a href="routin2.html">Employee Routine</a></li> -->
						<!-- <li><a href="routin2.html">Add Routine</a></li> -->
					<!-- </ul> -->
				<!-- </li> -->
				<!-- <li> -->
					<!-- <a href="#pageSubmenu11" data-toggle="collapse" aria-expanded="false"> -->
						<!-- <i class="fa fa-check-circle"></i> -->
						<!-- Attendance -->
					<!-- </a> -->
					<!-- <ul class="collapse list-unstyled" id="pageSubmenu11"> -->
						<!-- <li><a href="attendence-student.html">Student Attendance</a></li> -->
						<!-- <li><a href="attendence-teacher.html">Teacher Attendance</a></li> -->
						<!-- <li><a href="attendence-employee.html">Employee Attendance</a></li> -->
						<!-- <li><a href="attendence-stuffs"></a>Stuffs Attendance</li> -->
					<!-- </ul> -->
				<!-- </li> -->
				<!-- <li> -->
					<!-- <a href="exam.html"> -->
						<!-- <i class="fa fa-align-justify"></i> -->
						<!-- Exam -->
					<!-- </a> -->
					<!-- <ul class="collapse list-unstyled" id="pageSubmenu3"> -->
						<!-- <li><a href="#">Manage Exam</a></li> -->
					<!-- </ul> -->
				<!-- </li> -->
				<!-- <li> -->
					<!-- <a href="marks.html"> -->
						<!-- <i class="fa fa-calculator"></i> -->
						<!-- Marks -->
					<!-- </a> -->
					<!-- <ul class="collapse list-unstyled" id="pageSubmenu8"> -->
						<!-- <li><a href="#">Set Marks</a></li> -->
						<!-- <li><a href="#">Result List</a></li> -->
					<!-- </ul> -->
				<!-- </li> -->
				<!-- <li> -->
					<!-- <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false"> -->
						<!-- <i class="fa fa-book"></i> -->
						<!-- Library -->
					<!-- </a> -->
					<!-- <ul class="collapse list-unstyled" id="pageSubmenu4"> -->
						<!-- <li><a href="library.html">Manage Books</a></li> -->
					<!-- </ul> -->
				<!-- </li> -->
				<!-- <li> -->
					<!-- <a href="#"> -->
						<!-- <i class="fa fa-money"></i> -->
						<!-- Collect Fees -->
					<!-- </a> -->
				<!-- </li> -->
				<!-- <li> -->
					<!-- <a href="#pageSubmenu5" data-toggle="collapse" aria-expanded="false"> -->
						<!-- <i class="fa fa-bus"></i> -->
						<!-- Transport -->
					<!-- </a> -->
					<!-- <ul class="collapse list-unstyled" id="pageSubmenu5"> -->
						<!-- <li><a href="transport.html">Add Transport</a></li> -->
						<!-- <li><a href="transport-list.html">Transport List</a></li> -->
					<!-- </ul> -->
				<!-- </li> -->
				<!-- <li> -->
					<!-- <a href="notice.html"> -->
						<!-- <i class="fa fa-clipboard"></i> -->
						<!-- Notice -->
					<!-- </a> -->
				<!-- </li> -->
				<!-- <li> -->
					<!-- <a href="events.html"> -->
						<!-- <i class="fa fa-calendar"></i> -->
						<!-- Events -->
					<!-- </a> -->
				<!-- </li> -->
				 <li> 
					<a href="account-setting.php">
						 <i class="fa fa-cogs"></i> 
						 Account Setting 
					 </a> 
				 </li> 
				<!-- <li> -->
					<!-- <a href="#"> -->
						<!-- <i class="fa fa-align-left"></i> -->
						<!-- FAQ -->
					<!-- </a> -->
				<!-- </li> -->
				<li>
					<a href="#">
						<i class="fa fa-phone"></i>
						Contact
					</a>
				</li>
			</ul>
		</nav>

            <!-- Page Content Holder -->
            <div id="content">
				<!-- top menu start-->
                <nav class="navbar navbar-default">
			<div class="container-fluid">

				<div class="navbar-header">
					<button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
						<i class="fa fa-bars"></i>
					</button>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<!-- admin notification bar start-->
					<div class="admin-dropdown-cover pull-right">
						<div class="dropdown-btn-cover">
							<div class="btn-group" role="group">
								<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								  <i class="fa fa-user"></i>
								</a>
								<ul class="dropdown-menu right-aligned">
								  <li><p><i class="fa fa-user"></i>Admin</p></li>
								  <li><a href="#"><i class="fa fa-user"></i>Profile</a></li>
								  <li><a href="#"><i class="fa fa-cog"></i>System Setting</a></li>
								  <li><a href="#"><i class="fa fa-cog"></i>Account Settings</a></li>
								  <li><a href="#"><i class="fa fa-power-off"></i>Logout</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="admin-dropdown-cover pull-right">
						<div class="dropdown-btn-cover">
							<div class="btn-group" role="group">
								<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								  <i class="fa fa-envelope-o"></i>
								</a>
								<ul class="dropdown-menu right-aligned">
								  <li><p><i class="fa fa-envelope-o"></i>Messages</p></li>
								  <li><a href="#"><img src="img/msg1.jpg"/>Hi, I am Shamitra</a></li>
								  <li><a href="#"><img src="img/msg2.jpg"/>Can you read the documents?<span class="badge-green">5</span></a></li>
								  <li><a href="#"><img src="img/msg3.jpg"/>This is fantastic<span class="badge-red">3</span></a></li>
								  <li><a href="#"><img src="img/msg4.jpg"/>May i know the admin name?<span class="badge-red">3</span></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="admin-dropdown-cover pull-right">
						<div class="dropdown-btn-cover">
							<div class="btn-group" role="group">
								<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								  <i class="fa fa-globe"></i>
								</a>
								<ul class="dropdown-menu right-aligned">
								  <li><p><i class="fa fa-globe"></i>Notifications</p></li>
								  <li><a href="#"><i class="fa fa-circle-o"></i>Server Ready To Run</a></li>
								  <li><a href="#"><i class="fa fa-circle-o"></i>1 Admin Has been Approved</a></li>
								  <li><a href="#"><i class="fa fa-circle-o"></i>100 Students Registered</a></li>
								  <li><a href="#"><i class="fa fa-circle-o"></i>Notice Has Been Published</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- admin notification bar close-->
				</div>
			</div>
		</nav>
				<!-- top menu close-->
               <div class="row">
				<div class="col-md-6">
					<div class="breadcrumb-wrapper">
						<ol class="breadcrumb">
						  <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
						  <li class="breadcrumb-item active">New Appointment</li>
						</ol>
					</div>
				</div>
				<div class="col-md-6"></div>
			</div>
                <div class="panel-wrapper">
					<div class="panel-header">
						
							<div class="row">
								<div class="col-md-6">
									<h3>Make a New Appointment</h3>
								</div>
								
							</div>
					</div>
					<div class="panel-body">
						<form action="" method="" id="">
							<div class="row">
								<div class="col-md-6">
								
									<!-- select syndrome -->
									<div class="form-tools-cover">
										<div class="input-group">
											<input type="text" name="first_name" class="" aria-describedby="basic-addon1">
											<label>syndrome</label>
										</div>
									</div>
									
									<!-- select hospital -->
									<div class="form-tools-cover">
										<div class="input-group">
											<div class="select-dropdown">
											  <select name="slct" id="slct">
												<option selected disabled>Choose Hospital</option>
												<option value="1">Square Hospital</option>
												<option value="2">Labaid Hospital</option>
												<option value="3">Apollo Hospital</option>
											  </select>
											</div>
										</div>
									</div>
									
									<!-- select Branch -->
									<div class="form-tools-cover">
										<div class="input-group">
											<div class="select-dropdown">
											  <select name="slct" id="slct">
												<option selected disabled>Choose Branch</option>
												<option value="1">Dhanmondi</option>
												<option value="2">Gulshan</option>
												<option value="3">Banani</option>
											  </select>
											</div>
										</div>
									</div>
									
									<!-- select department -->
									<div class="form-tools-cover">
										<div class="input-group">
											<div class="select-dropdown">
											  <select name="slct" id="slct">
												<option selected disabled>Choose Department</option>
												<option value="1">ENT (Ear, Nose, Throat)</option>
												<option value="2">Neurology</option>
												<option value="3">Cardiology</option>
											  </select>
											</div>
										</div>
									</div>

								</div>
								
								
							
								
								<!-- <div class="col-md-6"> -->
									<!-- <div class="form-tools-cover"> -->
										<!-- <div class="input-group"> -->
											<!-- <input type="text" name="first_name" class="" aria-describedby="basic-addon1" required> -->
											<!-- <label>Contact Number</label> -->
										<!-- </div> -->
									<!-- </div> -->
								<!-- </div> -->
								
								<!-- <div class="col-md-6"> -->
									<!-- <div class="form-tools-cover"> -->
										<!-- <div class="input-group"> -->
											<!-- <input type="text" name="first_name" class="" aria-describedby="basic-addon1" required> -->
											<!-- <label>Email Address</label> -->
										<!-- </div> -->
									<!-- </div> -->
								<!-- </div> -->
								
								<!-- <div class="col-md-6"> -->
									<!-- <div class="form-tools-cover"> -->
										<!-- <div class="input-group"> -->
											<!-- <textarea required></textarea> -->
											<!-- <label>Present Address</label> -->
										<!-- </div> -->
									<!-- </div> -->
								<!-- </div> -->
								
								<!-- <div class="col-md-6"> -->
									<!-- <div class="form-tools-cover"> -->
										<!-- <div class="input-group"> -->
											<!-- <textarea required></textarea> -->
											<!-- <label>Permanent Address</label> -->
										<!-- </div> -->
									<!-- </div> -->
								<!-- </div> -->
								
								<div class="col-md-6"> 
									<div class="search-result-content-wrapper">
										<div class="hospital-images">
											<img src="images/Square-Hospital-Ltd.jpg"/>
											<h3>Square Hospital Ltd.</h3>
											<p>Branch: Dhanmondi, Dhaka</p>
											<h4>Department: <span>Cardiology</span></h4>
										</div>
										
										<div class="doctor_list_selection">
											<form action="">
											  <p>Please select your Doctor:</p>
											  
											  <div class="single_doc">
												  <input type="radio" id="male" name="gender" value="male">
												  <label for="male">Md. Lutfor Rahman</label>
												  <img src="img/msg3.jpg"/>
											  </div>
											  
											  <div class="single_doc">
												  <input type="radio" id="female" name="gender" value="female">
												  <label for="female">Rahima Afroz</label>
												  <img src="img/msg4.jpg"/>
											  </div>
											  
											  <div class="single_doc">
												  <input type="radio" id="other" name="gender" value="other">
												  <label for="other">Md. Sadekur Rahman</label>
												  <img src="img/msg2.jpg"/>
											  </div>
											</form>
										
										<!-- <form action="" method=""> -->
											<!-- <div class="single_doctor"> -->
												
													<!-- <input type="radio" id="male" name="gender" value="male"> -->
													<!-- <label for="male">Md. Lutfor Rahman</label> -->
													<!-- <img src="img/msg3.jpg"/> -->
												
											<!-- </div> -->
											
											<!-- <div class="single_doctor"> -->
												
													<!-- <input type="radio" id="male" name="gender" value="male"> -->
													<!-- <label for="male">Md. Lutfor Rahman</label> -->
													<!-- <img src="img/msg3.jpg"/> -->
												
											<!-- </div> -->
											
											<!-- <div class="single_doctor"> -->
												
													<!-- <input type="radio" id="male" name="gender" value="male"> -->
													<!-- <label for="male">Md. Lutfor Rahman</label> -->
													<!-- <img src="img/msg3.jpg"/> -->
											<!-- </div> -->
											<!-- </form> -->
										</div>
										
									</div>
									
									
								</div> 
								
								
								
								 
								 
								
								 
								 
								 
								
								
								<!-- <div class="col-md-6"> -->
									<!-- <div class="form-tools-cover"> -->
										<!-- <div class="input-group"> -->
											<!-- <select id="basic" class="selectpicker show-tick form-control" data-live-search="true"> -->
											  <!-- <option selected>Select Section</option> -->
											  <!-- <option>Section A</option> -->
											  <!-- <option>Section B</option> -->
											<!-- </select> -->
										<!-- </div> -->
									<!-- </div> -->
								<!-- </div> -->
								
								<!-- <div class="col-md-6"> -->
									<!-- <div class="form-tools-cover"> -->
										<!-- <div class="input-group"> -->
											<!-- <select id="basic" class="selectpicker show-tick form-control" data-live-search="true"> -->
											  <!-- <option selected>Select Group</option> -->
											  <!-- <option>Science</option> -->
											  <!-- <option>Commerce</option> -->
											  <!-- <option>Urce</option> -->
											<!-- </select> -->
										<!-- </div> -->
									<!-- </div> -->
								<!-- </div> -->

								<!-- <div class="col-md-6"> -->
									<!-- <div class="form-tools-cover"> -->
										<!-- <div class="input-group"> -->
											<!-- <select id="basic" class="selectpicker show-tick form-control" data-live-search="true"> -->
											  <!-- <option selected>Select Nationality</option> -->
											  <!-- <option>Bangladeshi</option> -->
											  <!-- <option>Indian</option> -->
											  <!-- <option>Canadian</option> -->
											  <!-- <option>Australian</option> -->
											  <!-- <option>Japanese</option> -->
											  <!-- <option>Chinese</option> -->
											<!-- </select> -->
										<!-- </div> -->
									<!-- </div> -->
								<!-- </div> -->
								
								<!-- <div class="col-md-12"> -->
									<!-- <div class="file-upload-wrapper"> -->
										<!-- <div class="row"> -->
											<!-- <div class="col-md-12"> -->
												<!-- <div class="left-section"> -->
													<!-- <div class="icon-headline-wrapper"> -->
														<!-- <h1><i class="fa fa-cloud-upload"></i></h1> -->
														<!-- <p>Drag & Drop Files Here Or</p> -->
													<!-- </div> -->
													<!-- <div class="image-storage-wrapper"> -->
														<!-- <img src="images/student.jpg"/> -->
													<!-- </div> -->
													<!-- <div class="input-file-cover"> -->
														<!-- <input type="file" class="upload-file"/> -->
														<!-- <input type="button" class="btn btn-info upload-btn" value="Browse Files"/> -->
													<!-- </div> -->
												<!-- </div> -->
											<!-- </div> -->
											<!-- <div class="col-md-6"> -->
												<!-- <div class="right-section"> -->
												
												<!-- </div> -->
											<!-- </div> -->
										<!-- </div> -->
									<!-- </div> -->
								<!-- </div> -->
							</div>
							
							<div class="row">
								<div class="schedule_slot_wrapper">
									<div class="col-md-5">
										<form action="">
										  <label for="birthdaytime">Select Date & Time:</label><br/>
										  <input type="datetime-local" id="birthdaytime" name="birthdaytime">
										  <input type="submit">
										</form>
									</div>
									<div class="col-md-7"></div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-12">
									<div class="available_slot_wrapper">
									<form action="/action_page.php">
									<p>Please select available time below:</p>
									  
									<div class="available_slot_box">
										<input type="radio" id="male" name="gender" value="male">
										<label for="male">05:30 PM</label>
									</div>   
									  
									<div class="available_slot_box">
										<input type="radio" id="male" name="gender" value="male">
										<label for="male">06:30 PM</label>
									</div>  
									  
									<div class="available_slot_box">
										<input type="radio" id="male" name="gender" value="male">
										<label for="male">07:30 PM</label>
									</div>
									  
									<div class="available_slot_box">
									  <input type="radio" id="female" name="gender" value="female">
									  <label for="female">08:00 PM</label>
									</div>
									  
									  
									<div class="available_slot_box">
									  <input type="radio" id="other" name="gender" value="other">
									  <label for="other">10:00 PM</label>	
									</div>

									  
									</form>
								</div>
								</div>
							</div>
							
							<br>
							<a href="view_appointment.php" style="color:#7386D5;">View Appointment Before Submit</a>
							<div class="button-cover">
								<input type="submit" class="btn btn-save" value="submit">
							</div>
						</form>	
					</div>
				</div>

             

               

               

               
               
            </div>
			<!-- content close -->
        </div>





        <!-- jQuery CDN -->
			<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
			<!-- Bootstrap Js CDN -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/locales/bootstrap-datepicker.es.min.js"></script>
			<script src="js/dataTables.bootstrap.min.js"></script>	
			<script src="js/jquery.dataTables.min.js"></script>
			<script src="js/dataTables.foundation.min.js"></script>
			<script src="js/dataTables.uikit.min.js"></script>
			<script src="js/dataTables.semanticui.min.js"></script>
			<script src="js/dataTables.material.min.js"></script>
			<script src="js/dataTables.jqueryui.min.js"></script>	
			<!-- datepicker -->
			<script >
				$(function () {
					$('#datetimepicker1').datepicker({
						format: "dd/mm/yyyy",
						language: "es",
						autoclose: true,
						todayHighlight: true
					});
				});
			</script>
			<script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
			</script>
			<script type="text/javascript">
				$('#mydata').dataTable();
			</script>
			
    </body>
</html>

