<?php
		extract($_POST);
		$to = "hassan@mhasn.com";
		$from = "info@mhasn.com";
		ini_set("sendmail_from", $from);
		$subject = "Contact Us inquiry - mhasn.com";
		$message = "A visitor filled Contact form and here are the details.<br><br><br> Name: $name<br>Email: $email<br>Contact: $contact<br>Subject: $subject<br>Message: $message"; 
								   //end of message
//		echo $message; die;
include "conn.php";
$sql = "INSERT INTO contact (`name`, `email`, `message`, contact, subject, `contact_time`) VALUES ('$name', '$email', '$message', '$contact', '$subject', NOW());";
$link->query($sql);
		$headers = "MIME-Version: 1.0\r\n"; 
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
		$headers  .= "From: mhasn.com <$from>\r\n";  
		@$sent = mail($to, $subject, $message, $headers);
		echo '<span style="color:green;position:absolute;">Thank you for contacting mhasn.com!</span>';
?>