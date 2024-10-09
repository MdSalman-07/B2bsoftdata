<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Contact Form </title>
</head>
	<style type="text/css">

.success 
{ 
	margin: 5px auto;
  border-radius: 5px;
  border: 3px solid #fff;
  color: black;
font-size: 20px;
  padding: 10px;
  box-shadow: 10px 5px 5px grey;
}
	</style>
<body> 
	<div class="container">
		<?php 
	if(isset($_POST['submit']))
			{ 
          	$name=$_POST['name']; 
          	$sub=$_POST['subject']; 
       	 	$email=$_POST['email']; 
        	$msg=$_POST['message']; 
				$FromEmail="info@b2bsoftdata.com";
				$toemail="m.salman0796@gmail.com";
				$subject="B2BSoftData contact form data"; 
				$message='Name: '.$name.'<br>Subject : ' .$sub. '<br>Email : ' .$email. '<br> Message: '.$msg;
				$headers  = "MIME-Version: 1.0\n";
				$headers .= "Content-type: text/html; charset=iso-8859-1\n";
		
		
			
	if(mail($toemail, $subject, $message, $headers,'-f'.$FromEmail) ){

        $hide=2;
         echo '<div class="success"><center><span>&#9989;</span></center> <br> <center> Thank you <strong>'.$name.',</strong> Your message has been sent. We will reply soon as possible.</center> </div> '; 
	      
	} else {
		echo "The server failed to send the message. Please try again later or Make sure , you are using live server for email.";
} 
			}
		?>
		<?php if(!isset($hide)) { ?>
		
<?php }?> 
</div>
</body>
</html>