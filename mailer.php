<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	require 'PHPMailer-master/src/Exception.php';
	require 'PHPMailer-master/src/PHPMailer.php';
	require 'PHPMailer-master/src/SMTP.php';
	session_start();
	$base="http://development1.odishainfotek.com/sangram/";
	$mail = new PHPMailer(true);

				try {
					
				    //Server settings
				    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
				    $mail->isSMTP();                                            // Set mailer to use SMTP
				    $mail->Host       = '';  									// Specify main and backup SMTP servers
				    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
				    $mail->Username   = '';                     				// SMTP username
				    $mail->Password   = '';                               		// SMTP password
				    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
				    $mail->Port       = 587;                                    // TCP port to connect to
				    
				    //Recipients
				    $mail->setFrom('yogi@digitalellipsis.com', 'Yogi');
				    $mail->addAddress('sangram@digitalellipsis.com', '');     	// Add a recipient
				    //$mail->addAddress('ellen@example.com');               // Name is optional
				    //$mail->addReplyTo('info@example.com', 'Information');
				    //$mail->addCC('cc@example.com');
				    //$mail->addBCC('bcc@example.com');

				    // Attachments
				    /*$mail->addAttachment('');*/         // Add attachments
				    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

				    // Content
				    $mail->isHTML(true);                                  // Set email format to HTML
				   //$Message;
				    if($_POST['request_type'] == 'contact')
				    {
				    	$response = [];
				    	$mail->Subject = 'Contact Form';
				    	$fname = $_POST['fullname'];
				    	$email = $_POST['email'];
				    	$phno = $_POST['phone'];
				    	$message = $_POST['messsage'];
				    	$mail->Body    = 'Name:-'.$fname.'<br>Email:-'.$email.'<br>Phone:-'.$phno.'<br>Message:-'.$message;
					    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
					    $mail->send();
					    $response['status'] = 1;
					    echo json_encode($response);
					    exit;
				    }
				    else if($_POST['request_type'] == 'Carrer'){
				    	$response = [];
				    	if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['qualification']) && !empty($_POST['location']) && !empty($_POST['carrer']) && !empty($_POST['message'])){
					    	$mail->Subject = 'Carrer Enquiry';
					    	$mail->Body    = 'Name:-'.$_POST['name'].'<br>Email:-'.$_POST['email'].'<br>Phone:-'.$_POST['phone'].'<br>Qualification:-'.$_POST['qualification'].'<br>Location:-'.$_POST['location'].'<br>Carrer:-'.$_POST['carrer'].'<br>Message:-'.$_POST['message'];
					    	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
					   		$mail->send();
					   		$response['status'] = 1;
					   		$response['message'] = 'Message send Successfully';
					   		echo json_encode($response);
					   	}else{
					   		$response['status'] = 0;
					   		$response['message'] = 'Message not send';
					   		$response['error'] = $_POST;
					   		echo json_encode($response);
					   	}	
				    }
				    else if($_POST['request_type'] == 'homepage'){
				    	$mail->Subject = 'home message';
				    	$mail->Body    = 'Name:-'.$_POST['contactName'].'<br>Phone:-'.$_POST['phpneNumber'];
				    	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

				   		//$mail->send();
				    	//$data = 303;
				    	$response['status'] = 1;
				    	echo json_encode($response);
				    }else if($_POST['request_type'] == 'Enquiry_Product'){
				    	$response = [];
				    	if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['message'])){
					    	$mail->Subject = 'Product Enquiry';
					    	$mail->Body    = 'Name:-'.$_POST['name'].'<br>Email:-'.$_POST['email'].'<br>Phone:-'.$_POST['phone'].'<br>Message:-'.$_POST['message'];
					    	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
					   		$mail->send();
					   		$response['status'] = 1;
					   		$response['message'] = 'Message send Successfully';
					   		echo json_encode($response);
					   	}else{
					   		$response['status'] = 0;
					   		$response['message'] = 'Message not send';
					   		$response['error'] = $_POST;
					   		echo json_encode($response);
					   	}	
				    }
				    
				} catch (Exception $e) {
					$data = 304;
				    // echo "Message could not be sent. Mailer Error:".$e;
				    $_SESSION["message"] = "Message could not be sent.";
				    echo $e;
				    //header('Location: product.php');
				}
?>