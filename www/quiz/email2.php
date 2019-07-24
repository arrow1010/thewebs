<?php


if($_REQUEST['action']){
	require("PHPMailerAutoload.php"); // path to the PHPMailerAutoload.php file.
	$m=$_REQUEST['ml'];
	$s=$_REQUEST['msg'];
	
	
//$msg="60% and above in 10th, 12th (Math) and Graduation, and Personal Interview";	   
		$mail = new PHPMailer();
		$mail->SMPTDebug = 1;
		$mail->IsSMTP();
		$mail->Mailer = "smtp";
		$mail->Host = "mail.smtp2go.com";
		$mail->Port = " 465"; // 8025, 587 and 25 can also be used. Use Port 465 for SSL.
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = 'ssl';
		$mail->Username = "avisingh4532@gmail.com";
		$mail->Password = "uFBeYkUuNvF9";

		$mail->From = $m;
		$mail->FromName = "USer to PSIT";
		$mail->AddAddress("avisingh4532@gmail.com", "Rachel Recipient");


		$mail->Subject = "Feedback/query";
		$mail->Body = $s;
          
	  
        $mail->WordWrap = 50; 

				if(!$mail->Send()) {
				echo 'Message was not sent.';
				echo 'Mailer error: ' . $mail->ErrorInfo;
				exit;
				}
			   else{
			   echo"sent";}
				
}

?>