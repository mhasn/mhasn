<?php
		extract($_POST);
		$to = $emailSub;
		$from = "hassan@mhasn.com";
		ini_set("sendmail_from", $from);
		$subject = "Subscribe on mhasn.com";
		$message = '<style>td {
		line-height: 1;
		font-family: "Arial, Helvetica, sans-serif";
		font-size: 14px;
		color: #505050;
		font-weight: normal;
		}
		</style>
				<table width="100%" border="0" cellspacing="5" cellpadding="5">									  
							  <tr>
								<td valign="top"><img src="http://mhasn.com/images/logo.jpg"></td>
								<td valign="top"><h1 style="color:#FE4F8A;">Thank you for subscribing with mhasn.com!</h1><p>You have successfully subscribed for notifications. Thanks again.<br /><br />Best Regards,<br />Mhasn</p></td>
							  </tr>
							</table>'; 
								   //end of message
//		echo $message; die;
include "conn.php";
$sql = "INSERT INTO newsletter (`email`, subscribed, `sub_time`) VALUES ('$to', 'Yes', NOW());";
$link->query($sql);
		$headers = "MIME-Version: 1.0\r\n"; 
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
		$headers  .= "From: mhasn.com <$from>\r\n";  
		@$sent = mail($to, $subject, $message, $headers);
		@$sent = mail($from, "New subscription on mhasn.com", "$to subscribed for newsletter on mhasn.com", $headers);
		echo '<span style="color:green;position:absolute;">Thank you for subscribing with mhasn.com!</span>';
?>