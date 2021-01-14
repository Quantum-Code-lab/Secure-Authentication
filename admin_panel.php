<?php  

	require_once("action/connect_db.php");
	 session_start();
//at the end of 2(2-2)
	 if (isset($_SESSION['userID'])) 
	 {
	 	header('location:http://localhost/inventory_system/dashbord.php');
	 }

//till 2(2-2)
	 $error = array();

	 if ($_POST) 
	 {
	 	$email = $_POST["email"];
	 	$password = $_POST["password"];

	 	if (empty($email) || empty($password)) 
	 	{
	 		if ($email=="") 
	 		{
	 			$error[]="Email is required";
	 		}

	 		if ($password=="") 
	 		{
	 			$error[]="password is required";
	 		}
	 	}
	 	else
	 	{
	 		$sql= "SELECT * FROM `users` WHERE email ='$email'";
	 		$result= $connect->query($sql);

	 		if ($result-> num_rows==1) 
	 		{
	 			$password = md5($password);
	 			$m_sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	 			$m_result =$connect->query($m_sql); 
	 			if ($m_result->num_rows==1)
	 			{
	 				$value = $m_result->fetch_assoc();
	 				$user_id = $value['user_id'];

	 				//set session
	 				$_SESSION['userID'] = $user_id;

	 				header('location:dashbord.php');
	 			}
	 			else
	 			{
	 				$error[]= "wrong email/password combinaion ";
	 			}
	 		}
	 		else
	 		{
	 			$error[]="email doesnot exists";
	 		}
	 	}

	 }


?>


<!DOCTYPE html>
<html>
<head>
	<title>Inventory Management System</title>

	<!-- 1)	bootstrups css-->
	<link rel="stylesheet" type="text/css" href="assets/Bootstrap/css/bootstrap.min.css">

	<!-- 2)	bootstrups theme-->
	<link rel="stylesheet" type="text/css" href="assets/Bootstrap/css/bootstrap-theme.min.css">

	<!-- 3)	font-awasome-->
	<link rel="stylesheet" type="text/css" href="assets/font-awasome/css/all.css">

	<!-- 4)	custom css-->
	<link rel="stylesheet" type="text/css" href="custom/css/custom.css">

	<!-- 5)	jquery-->
	<script type="text/javascript" src="assets/jquery/jquery.min.js"></script>

	<!-- 6)	jquery-ui css + js -->

	<link rel="stylesheet" type="text/css" href="assets/jquery_ui/jquery-ui.css">

	<script type="text/javascript" src="assets/jquery_ui/jquery-ui.js"></script>

	<!-- 7)	bootstrups js -->
	<script type="text/javascript" src="assets/Bootstrap/js/bootstrap.min.js"></script>

	
	<!-- to check all above link are working or not paste the following link >>>
		view-source:localhost/ file name -->
</head>

<body>
<div class="container">
	<div class="row vartical">
		<div class="col-md-5 col-md-offset-4">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">Complete Your registration</h3>
				</div>
				<div class="panel-body" id="rony">

					<!-- for error massege display here -->
					<div class="massage">
						<?php
						 	if ($error) 
						 	{
						 		foreach ($error as $key => $value) 
						 		{
					 			echo '<div class="alert alert-warning alert-dismissible" role="alert">
									<i class="glyphicon glyphicon-exclamation-sign"></i>
									'.$value.'</div>';
						 		}
						 	}
						?>
					</div>
					<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" id="loginform">
					  <div class="form-group row">
					    <label for="useremail" class="col-sm-2 col-form-label">Email</label>
					    <div class="col-sm-10">
					      <input type="email" class="form-control" id="email" name="email" placeholder="abc@example.com">
					    </div>
					  </div>
					  <div class="form-group row">
					    <label for="password" class="col-sm-2 col-form-label">Password</label>
					    <div class="col-sm-10">
					      <input type="password" class="form-control" name="password" id="password" placeholder="Password">
					    </div>
					  </div>
					  
					  <div class="form-group row">
					    <div class="col-sm-2">Checkbox</div>
					    <div class="col-sm-10">
					      <div class="form-check">
					        <input class="form-check-input" type="checkbox" id="gridCheck1">
					        <label class="form-check-label" for="gridCheck1">
					          <p class="rember">Remember me</p>
					        </label>
					      </div>
					    </div>
					  </div>
					  <div class="form-group row">
					    <div class="col-sm-10">
					      <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-log-in"></i>Sign in</button>
					    </div>
					  </div>
					</form>

				</div>
			</div>
		</div>
	</div>
</div>


</body>
</html>