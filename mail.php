<?php if(isset($_POST["name"]))  
{
	// Read the form values
	$success = false;
	$name = isset( $_POST['name'] ) ? preg_replace( "/[^\s\S\.\-\_\@a-zA-Z0-9]/", "", $_POST['name'] ) : "";
	// $lName = isset( $_POST['lname'] ) ? preg_replace( "/[^\s\S\.\-\_\@a-zA-Z0-9]/", "", $_POST['lname'] ) : "";
	// $phone = isset( $_POST['phone'] ) ? preg_replace( "/[^\s\S\.\-\_\@a-zA-Z0-9]/", "", $_POST['phone'] ) : "";
	$email = isset( $_POST['email'] ) ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['email'] ) : "";
	$message = isset( $_POST['message'] ) ? preg_replace( "/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST['contact_message'] ) : "";
	
	//Headers
	$to = "its.me.ugesh@gmail.com";
    $subject = 'Contact Us';
    $headers = "From: noreply@yoursite.com" . "\r\n" .
               "CC: somebodyelse@example.com";
	
	//body message
	$mes = "First Name: ". $name . "<br> Email: ". $email . "<br> Message: " . $message . "";
	
	//Email Send Function
    $send_email = mail($to, $subject, $mes, $headers);
      
    echo ($send_email) ? '<div class="success">Email has been sent successfully.</div>' : 'Error: Email did not send.';
}
else
{
	echo '<div class="failed">Failed: Email not Sent.</div>';
}
?>