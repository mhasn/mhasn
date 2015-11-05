<?php
		extract($_POST);
		$to = "hassan@mhasn.com";
		$from = "info@mhasn.com";
		ini_set("sendmail_from", $from);
		$subject = "Quote inquiry - mhasn.com";
		$message = "A visitor filled Quote inquiry form and here are the details.<br><br><br> Name: $name<br>Email: $email<br>Contact: $contact<br>Budget: $budget<br>Service: $service<br>Heard from: $heard<br>Details: $details"; 
								   //end of message
//		echo $message; die;
include "conn.php";
$sql = "INSERT INTO quote (`name`, `email`, contact, budget, service, heard, `details`, `quote_time`) VALUES ('$name', '$email', '$contact', '$budget', '$service', '$heard', '$details', NOW());";
$link->query($sql);
		$headers = "MIME-Version: 1.0\r\n"; 
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
		$headers  .= "From: mhasn.com <$from>\r\n";  
		@$sent = mail($to, $subject, $message, $headers);
		echo '<span style="color:green;position:absolute;">Thank you for your inquiry at mhasn.com!</span>';
?>