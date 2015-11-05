<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="feedback">
					<div class="row">
						<div class="col-xs-12 col-sm-10">Have you worked with us? Tell us about your positive experience.</div>
						<div class="col-xs-12 col-sm-2"><button type="button" class="btn pull-right" data-toggle="modal" data-target="#feedback">Get in touch</button></div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">
				<h2>Signup for Newsletter</h2>
				<p>Subscribe to our newsletter for portfolio updates, news, online business advice and more.</p>
				<div class="form">
                	<div id="txtNewsletter" style="display:none; margin-bottom:10px;"></div>
					<div class="form-group">
                    <form action="" method="post" id="frmNewsletter" onSubmit="return emailNotification();">
						<input type="text" class="form-control" placeholder="Please enter your email address here" name="emailSub" id="emailSub"> <button type="submit" class="btn"><span class="fa fa-send"></span></button>
                    <div id="loading_pop" style="display:none;"></div>
                    </form>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-md-offset-1 twitter">
				<h2><span class="fa fa-twitter"></span> Recent Tweets</h2>
				<a class="twitter-timeline" data-dnt="true" href="https://twitter.com/mhasncom" data-widget-id="447641210618798082" data-chrome="noheader nofooter noborders transparent noscrollbar">Tweets by @mhasncom</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div class="copy">
					&copy; 2007-<?php echo date('Y')?> MHASN.com. All Rights Reserved.
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3 col-md-offset-3 col-lg-2 col-lg-offset-4">
				<div class="love">
					Made with <span></span> in Pakistan.
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="feedback" tabindex="-1" role="dialog" aria-labelledby="Feedback" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
        	<form action="" method="post" id="frmTouch" onSubmit="return touchNotification()">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title">Get in Touch</h4>
			</div>
			<div class="modal-body">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-addon"><span class="fa fa-user"></span></div>
							<input type="text" placeholder="Full Name" name="name" id="name" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-addon"><span class="fa fa-envelope"></span></div>
							<input type="email" placeholder="Email Address" name="email" id="email" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-addon"><span class="fa fa-pencil"></span></div>
							<textarea class="form-control" name="experience" id="experience">Please tell us about your experience</textarea>
						</div>
					</div>
					<small>All fields are Mendatory</small>
			</div>
			<div class="modal-footer">
            <div id="txtTouch" style="display:none;float:left;"></div>
            <div id="loading_pop_touch" style="display:none;"></div>
				<button type="submit" class="btn btn-primary"><span class="fa fa-send"></span> Send</button>
			</div>
            </form>
		</div>
	</div>
</div>
<script>
function isValidate(valType)
{
	if(valType=='' || valType=='newsletter')
	{
		var str = document.getElementById("emailSub").value;	
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if (!filter.test(str)) {
			return false;
		}
		else
		{
			return true;
		}
	}
	return true;
}

function emailNotification()
{
	jQuery('#loading_pop').show();
	jQuery("#txtNewsletter").html("").hide();
	if (!isValidate('newsletter'))
	{
		jQuery('#loading_pop').hide();
		jQuery("#txtNewsletter").html('<span style="color:red;">Please enter a valid email address.</span>').show();
		return false;
	}
	
	var datastring = $("#frmNewsletter").serialize();
	$.ajax({
		type: "POST",
		url: "newsletter.php",
		data: datastring,
		success: function(data) {
			//var obj = jQuery.parseJSON(data); if the dataType is not specified as json uncomment this
			jQuery('#loading_pop').hide();
			jQuery("#txtNewsletter").html('<span style="color:green;">Thank you for subscribing with mhasn.com!</span>').show();
			jQuery('#emailSub').val('');
		},
		error: function(){
			jQuery('#loading_pop').hide();
			jQuery("#txtNewsletter").html('<span style="color:red;">Some error occured while processing. Please try again.</span>').show();
		}
	});
	return false;
}


function touchNotification()
{
	jQuery('#loading_pop_touch').show();
	jQuery("#txtTouch").html("").hide();
	if (!isValidate('touch'))
	{
		jQuery('#loading_pop_touch').hide();
		jQuery("#txtTouch").html('<span style="color:red;">Please enter valid details.</span>').show();
		return false;
	}
	
	var datastring = $("#frmTouch").serialize();
	$.ajax({
		type: "POST",
		url: "touch.php",
		data: datastring,
		success: function(data) {
			//var obj = jQuery.parseJSON(data); if the dataType is not specified as json uncomment this
			jQuery('#loading_pop_touch').hide();
			jQuery("#txtTouch").html('<span style="color:green;">Thank you for contacting us.</span>').show();
			jQuery("#frmTouch")[0].reset();
		},
		error: function(){
			jQuery('#loading_pop_touch').hide();
			jQuery("#txtTouch").html('<span style="color:red;">Some error occured while processing. Please try again.</span>').show();
		}
	});
	return false;
}

function contactNotification()
{
	jQuery('#loading_pop_contact').show();
	jQuery("#txtContact").html("").hide();
	if (!isValidate('contact'))
	{
		jQuery('#loading_pop_contact').hide();
		jQuery("#txtContact").html('<span style="color:orrange;">Please enter valid details.</span>').show();
		return false;
	}
	
	var datastring = $("#frmContact").serialize();
	$.ajax({
		type: "POST",
		url: "contact_post.php",
		data: datastring,
		success: function(data) {
			//var obj = jQuery.parseJSON(data); if the dataType is not specified as json uncomment this
			jQuery('#loading_pop_contact').hide();
			jQuery("#txtContact").html('<span style="color:white;">Thank you for contacting us.</span>').show();
			jQuery("#frmContact")[0].reset();
		},
		error: function(){
			jQuery('#loading_pop_contact').hide();
			jQuery("#txtContact").html('<span style="color:orrange;">Some error occured while processing. Please try again.</span>').show();
		}
	});
	return false;
}

function quoteNotification()
{
	jQuery('#loading_pop_quote').show();
	jQuery("#txtQuote").html("").hide();
	if (!isValidate('quote'))
	{
		jQuery('#loading_pop_quote').hide();
		jQuery("#txtQuote").html('<span style="color:red;">Please enter valid details.</span>').show();
		return false;
	}
	
	var datastring = $("#frmQuote").serialize();
	$.ajax({
		type: "POST",
		url: "quote.php",
		data: datastring,
		success: function(data) {
			//var obj = jQuery.parseJSON(data); if the dataType is not specified as json uncomment this
			jQuery('#loading_pop_quote').hide();
			jQuery("#txtQuote").html('<span style="color:green;">Thank you for your inquiry.</span>').show();
			jQuery("#frmQuote")[0].reset();
		},
		error: function(){
			jQuery('#loading_pop_quote').hide();
			jQuery("#txtQuote").html('<span style="color:red;">Some error occured while processing. Please try again.</span>').show();
		}
	});
	return false;
}
</script>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-5967985-1', 'auto');
  ga('send', 'pageview');

</script>