<!DOCTYPE html>
<html lang="en">
<head>
	<title>Student LOGIN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="login-ui/image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="login-ui/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="login-ui/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="login-ui/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="login-ui/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="login-ui/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="login-ui/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="login-ui/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="login-ui/css/util.css">
	<link rel="stylesheet" type="text/css" href="login-ui/css/main.css">
	<link href="adminpanel/admin/main.css" rel="stylesheet">

</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(login-ui/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Examinee Sign In
					</span>
					<span style="color:green; padding:2px 8px 2px 8px; text-align: center; background-color: #C0C0C0; border-radius: 20px;">Using two factor authentication</span>					
				</div>
				<?Php if(isset($_SESSION['error'])) { ?>
					<div style="display: flex; justify-content:center; width:100%">
						<span style="color:white; width: 100%; font-size: 15px; padding:2px 8px 2px 8px; text-align: center; background-color: red;">
							<?php 
								echo $_SESSION['error'];  
								session_unset($_SESSION['error']);
							?>
						</span>
					</div>
				<?php } ?>
				


				<form method="post" id="examineeLoginFrm" class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" name="username" placeholder="Enter email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn" style="position: flex; justify-content: space-evenly;">
						<button type="submit" class="login100-form-btn" style=" margin-bottom: 10px;">
							Login
						</button>
						
						<button type="reset" class="login100-form-btn" style="  background: red; ">
							Clear
						</button>

						
					</div>

					<div style="font-style: italic; font-family: monospace;">
						Dont have an account ?
						<a 	href="" data-toggle="modal" data-target="#modalForAddExaminee" style="color: blue;">Register.</a> 
					</div>

					<div style="font-style: italic; font-size:12px;">
						Admin only, plese click <a 	href="adminpanel/admin" style="text-decoration: underline;"> Here</a>
					</div>
				</form>
			</div>
		</div>
	</div>
   <!-- Modal For Add Examinee -->
	<div class="modal fade" id="modalForAddExaminee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog  modal-lg" role="document">
	   <form class="refreshFrm" id="registrationForm" method="post">
	     <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Registration Form</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <div class="col-md-12">
	          <div class="form-group">
	            <label>Fullname</label>
	            <input type="" name="fullname" id="fullname" class="form-control" placeholder="Surname Firstname Othername" autocomplete="off" required="">
	          </div>
	          <div class="row">
	          	<div class="col-md-6">
	          		 <div class="form-group">
			            <label>Date of Birth</label>
			            <input type="date" name="bdate" id="bdate" class="form-control" placeholder="Enter date of birth" autocomplete="off" >
			          </div>
	          	</div>
	          	<div class="col-md-6">
	          		<div class="form-group">
			            <label>Gender</label>
			            <select class="form-control" name="gender" id="gender">
			              <option value="0">Select gender</option>
			              <option value="male">Male</option>
			              <option value="female">Female</option>
			            </select>
			          </div>
	          	</div>
	          </div>
	          <div class="row">
	          	<div class="col-md-6">
	          		<div class="form-group">
			            <label>Course</label>
			            <select class="form-control" name="course" id="course">
			              <option value="0">Select course</option>

			              <?php 

			                $selCourse = $conn->query("SELECT * FROM course_tbl ORDER BY cou_id asc");
			                while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) { ?>
			                  <option value="<?php echo $selCourseRow['cou_id']; ?>"><?php echo $selCourseRow['cou_name']; ?></option>
			                <?php }
			               ?>

			            </select>
			        </div>
	          	</div>
	          	<div class="col-md-6">
	          		<div class="form-group">
			            <label>Year Level</label>
			            <select class="form-control" name="year_level" id="year_level">
			              <option value="0">Select year level</option>
			              <option value="first year">First Year</option>
			              <option value="second year">Second Year</option>
			              <option value="third year">Third Year</option>
			              <option value="fourth year">Fourth Year</option>
			            </select>
			          </div>
	          	</div>
	          </div>
	          <div class="row">
	          	<div class="col-md-6">
	          		 <div class="form-group">
			            <label>Email</label>
			            <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email" autocomplete="off" required="">
			          </div>
	          	</div>
	          	<div class="col-md-6">
	          		 <div class="form-group">
			            <label>Phone Number 
			            	<span style="font-size:10px; font-style: italic;">+234XXXXXXXXXX</span>
			            </label>
			            <input type="text" name="phone_number" id="phone_number" class="form-control" placeholder="" value="+234" autocomplete="off" pattern="^(\+234)[0-9]{10}$" required="">
			          </div>
	          	</div>
	          </div>
	          <div class="form-group">
	            <label>Password</label>
	            <input type="password" name="password" id="password" class="form-control" placeholder="Password" autocomplete="off" required="">
	          </div>
	        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" id="closeModal" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
	        <button type="submit" class="btn btn-primary">Register</button>
	      </div>
	    </div>
	   </form>
	  </div>
	</div>


	
	<script src="login-ui/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="login-ui/vendor/animsition/js/animsition.min.js"></script>
	<script src="login-ui/vendor/bootstrap/js/popper.js"></script>
	<script src="login-ui/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="login-ui/vendor/select2/select2.min.js"></script>
	<script src="login-ui/vendor/daterangepicker/moment.min.js"></script>
	<script src="login-ui/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="login-ui/vendor/countdowntime/countdowntime.js"></script>
	<script src="login-ui/js/main.js"></script>

	<script type="text/javascript" src="./js/jquery.js"></script>
	<script type="text/javascript" src="./js/ajax.js"></script>
	<script type="text/javascript" src="./js/sweetalert.js"></script>

</body>
</html>