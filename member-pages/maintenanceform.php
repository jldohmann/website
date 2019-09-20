
<?php
    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $house = $_POST['house'];
		$email = $_POST['email'];
        $message = $_POST['message'];
        $human = intval($_POST['human']);
		$docs = $_POST['docs'];
		
		$from = 'Maintenance Request Form'; 
        $to = 'rvlgonzalez@gmail.com'; 
        $subject = 'New Maintenance Request';
        
        $body = "From: $name\n House: $house\n Request Description:\n $message\n Which budget: $budget\n Request type: $request";
 
        // Check if name has been entered
        
		if (!$_POST['house']) {
            $errName = 'Please enter your house name';
        }
		
        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }
        
        //Check if message has been entered
        if (!$_POST['message']) {
            $errMessage = 'Please enter your message';
        }
        //Check if simple anti-bot test is correct
        if ($human !== 5) {
            $errHuman = 'Your anti-spam is incorrect';
        }
 
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
    } else {
        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
    }
}
    }
?>