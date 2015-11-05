<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>MHASN | Web design, development | Lahore, Pakistan</title>
		<link rel="shortcut icon" href="favicon.png">
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/pushy.css">
		<link rel="stylesheet" href="css/custom.css">
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<?php include('inc-menu.php');?>
		<div id="container">
			<?php include('inc-header.php');?>
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="inner-body">
							<div class="row">
								<div class="col-xs-12 col-md-4">
									<h1>Contact</h1>
									<p class="lead">Get in touch with us today</p>
									<p>A business representative will get back to you swiftly. Please allow 24 hours as maximum time to get back to you.</p>
									<p>&nbsp;</p>
									<p class="lead"><a href="mailto:info@mhasn.com"><span class="fa fa-envelope"></span> info@mhasn.com</a></p>
								</div>
								<div class="col-xs-12 col-md-6 col-md-offset-2">
									
										<form action="" method="post" id="frmContact" onSubmit="return contactNotification()">
											<input type="hidden" name="action" value="submit"> 
											<p>Please use the form below to contact us instantly.</p>
											<p>&nbsp;</p>
											<div class="form-group">
												<div class="input-group">
													<div class="input-group-addon"><span class="fa fa-user"></span></div>
													<input type="text" name="name" placeholder="Full Name" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<div class="input-group">
													<div class="input-group-addon"><span class="fa fa-envelope"></span></div>
													<input type="text" name="email" placeholder="Email Address" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<div class="input-group">
													<div class="input-group-addon"><span class="fa fa-phone"></span></div>
													<input type="text" name="contact" placeholder="Contact Number" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<div class="input-group">
													<div class="input-group-addon"><span class="fa fa-info-circle"></span></div>
													<input type="text" nam="subject" placeholder="Subject" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<div class="input-group">
													<div class="input-group-addon"><span class="fa fa-pencil"></span></div>
													<textarea name="message" placeholder="Your Message" class="form-control" noresize></textarea>
												</div>
											</div>
											<div class="form-group">
		        			    				<div id="txtContact" style="display:none;float:left;"></div>
        				    					<div id="loading_pop_contact" style="display:none;"></div>
												<button type="submit" class="btn btn-lg btn-block"><span class="fa fa-send"></span> Submit</button>
											</div>
											<small>All fields are mendatory.</small>
										</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php include('inc-footer.php');?>
		</div>
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/pushy.min.js"></script>
	</body>
</html>