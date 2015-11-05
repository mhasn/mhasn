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
			<div class="banner">
				<ul class="list-unstyled floating-bar hidden-xs">
					<li>
						<div><span class="fa fa-phone"></span> +92.300.443.1543</div>
					</li>
					<li>
						<div><span class="fa fa-envelope"></span> info@mhasn.com</div>
					</li>
					<li>
						<div><span class="fa fa-facebook"></span> MHASNCOM</div>
					</li>
					<li>
						<div><span class="fa fa-twitter"></span> MHASNCOM</div>
					</li>
				</ul>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-12 col-md-offset-0 text-center">
							<h1>You need <span>web?</span> We <span>build it!</span></h1>
							<p>We are web designer &amp; developer based in Lahore - Pakistan. Having experience in web design &amp; web development we have focused not only to design pretty looking web sites, but our focus is to deliver, present and organize information (bits &amp; bytes) in a visually pleasing manner following standards and making them accessible across different medium.</p>
							<button type="button" class="btn" data-toggle="modal" data-target="#quote">Request a quote</button>
							<ul class="list-unstyled hidden-xs hidden-sm segments">
								<li><span class="fa fa-paint-brush"></span> Web design</li>
								<li><span class="fa fa-flask"></span> Web development</li>
								<li><span class="fa fa-globe"></span> SEO services</li>
								<li><span class="fa fa-archive"></span> Web hosting</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<?php include('inc-footer.php');?>
		</div>
		<div class="modal fade" id="quote" tabindex="-1" role="dialog" aria-labelledby="Quotation" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
				<form action="" method="post" id="frmQuote" onSubmit="return quoteNotification()">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<h4 class="modal-title">Request a Quote</h4>
					</div>
					<div class="modal-body">
						<div class="form">
							<div class="row">
								<div class="col-xs-12 col-sm-6">
									<div class="form-group">
										<div class="input-group">
											<div class="input-group-addon"><span class="fa fa-user"></span></div>
											<input type="text" placeholder="Full Name" name="name" class="form-control">
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6">
									<div class="form-group">
										<div class="input-group">
											<div class="input-group-addon"><span class="fa fa-envelope"></span></div>
											<input type="email" placeholder="Email Address" name="email" class="form-control">
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6">
									<div class="form-group">
										<div class="input-group">
											<div class="input-group-addon"><span class="fa fa-filter"></span></div>
											<input type="text" placeholder="Are you Human? If so, leave this field empty" name="" class="form-control">
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6">
									<div class="form-group">
										<div class="input-group">
											<div class="input-group-addon"><span class="fa fa-phone"></span></div>
											<input type="tel" placeholder="Contact Number" name="contact" class="form-control">
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6">
									<div class="form-group">
										<div class="input-group">
											<div class="input-group-addon"><span class="fa fa-money"></span></div>
											<select class="form-control" name="budget">
												<option value="" selected disabled>Choose your budget</option>
												<option value="< $500">&lt; $500</option>
												<option value="< $1000">&lt; $1000</option>
												<option value="< $2000">&lt; $2000</option>
												<option value="< $3000">&lt; $3000</option>
												<option value="> $5000">&gt; $5000</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6">
									<div class="form-group">
										<div class="input-group">
											<div class="input-group-addon"><span class="fa fa-tasks"></span></div>
											<select class="form-control" name="service">
												<option value="" selected disabled>Select Service</option>
												<option value="Web Design">Web Design</option>
												<option value="Development">Development</option>
												<option value="Web Applications">Web Applications</option>
												<option value="Newsletter Design">Newsletter Design</option>
												<option value="Website Maintenance Retainer">Website Maintenance Retainer</option>
												<option value="Content Management System">Content Management System</option>
												<option value="Database Management">Database Management</option>
												<option value="Analytics Reporting">Analytics Reporting</option>
												<option value="Cloud Hosting">Cloud Hosting</option>
												<option value="SEO">SEO</option>
												<option value="Copy Writing">Copy Writing</option>
												<option value="Social Media">Social Media</option>
												<option value="Marketing Consulting">Marketing Consulting</option>
												<option value="Photography">Photography</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6">
									<div class="form-group">
										<div class="input-group">
											<div class="input-group-addon"><span class="fa fa-bullhorn"></span></div>
											<select class="form-control" name="heard">
												<option value="" selected disabled>Where did you hear about us?</option>
												<option value="Search Engine">Search Engine</option>
												<option value="Google Ad">Google Ad</option>
												<option value="Email Newsletter">Email Newsletter</option>
												<option value="Friend">Friend</option>
												<option value="SMS">SMS</option>
												<option value="Other">Other</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-xs-12">
									<div class="form-group">
										<div class="input-group">
											<div class="input-group-addon"><span class="fa fa-pencil"></span></div>
											<textarea class="form-control" name="details">In brief, tell us your requirements</textarea>
										</div>
									</div>
								</div>
							</div>
							<small>All fields are Mendatory</small>
						</div>
					</div>
					<div class="modal-footer">
						<div id="txtQuote" style="display:none;float:left;"></div>
            			<div id="loading_pop_quote" style="display:none;"></div>
						<button type="submit" class="btn btn-primary"><span class="fa fa-send"></span> Arrange Callback</button>
					</div>
				</div>
			</form>
			</div>
		</div>
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/pushy.min.js"></script>
	</body>
</html>