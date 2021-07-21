<?php
//if(isset($_request['submit'])){
if (isset($_FILES['file'])) {
    $roll_no=$_POST['roll_no'];
    $errors = array();
    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];
    // $file_ext = strtolower(end(explode('.', $_FILES['file']['name'])));

    
    // //only allow jpeg, jpg and png file type
    // $extensions = array("jpeg", "jpg", "png","pdf");

    // if (in_array($file_ext, $extensions) === false) {
    //     $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
    // }

    
    //File size must be excately 2 MB
    if ($file_size > 2097152) {
        $errors[] = 'File size must be excately 2 MB';
    }
    //echo "$roll_no";
    //images are the destination library -> create in your project
    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, "consent/" .$roll_no."_". $file_name);
        //echo "Success";
    } else {
        print_r($errors);
    }
}
//}
?>




<?php

$roll_no=$_POST['roll_no'];
//Include required PHPMailer files
	require 'includes/PHPMailer.php';
	require 'includes/SMTP.php';
	require 'includes/Exception.php';
//Define name spaces
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
//Create instance of PHPMailer
	$mail = new PHPMailer();
//Set mailer to use smtp
	$mail->isSMTP();
//Define smtp host
	$mail->Host = "smtp.gmail.com";
//Enable smtp authentication
	$mail->SMTPAuth = true;
//Set smtp encryption type (ssl/tls)
	$mail->SMTPSecure = "tls";
//Port to connect smtp
	$mail->Port = "587";
//Set gmail username
	$mail->Username = "vkpatel93@gmail.com";
//Set gmail password
	$mail->Password = "Krp_25895191";
//Email subject
	$mail->Subject = "Test email using PHPMailer";
//Set sender email
	$mail->setFrom('vkpatel93@gmail.com');
//Enable HTML
	$mail->isHTML(true);
//Attachment
	$path='img/'.$roll_no.'.png';
	$mail->addAttachment($path);
//Email body
	$mail->Body = "<h3>Email with Attachment of QRcode</h3> 
    <p>This email is sent from the PHP script with attachment.</p> ";
//Add recipient
	$mail->addAddress('vkpatel93@gmail.com');
//Finally send email
	if ( $mail->send() ) {
		echo "Email Sent..!";
	}else{
		echo "Message could not be sent. Mailer Error: "{$mail->ErrorInfo};
	}
//Closing smtp connection
	$mail->smtpClose();
	?>



