<?php
	$res = 0;
    $name = $_POST['firstname'].' '.$_POST['lastname'];
    $email = $_POST['email'];
    $company = $_POST['company'];
    $from = 'From: eTouchMenu Contact Form'; 
    $to = 'testing@etouchmenu.com'; 
    $subject = 'eTouchMenu';
    $human = $_POST['human'];
    $body = "From: $name\n E-Mail: $email\n Company: $company";
                  
if(!empty($_POST)) {
    if ($name != '' && $email != '' && $human=='7') {
        if (mail ($to, $subject, $body, $from)) { 
            // echo 'Your message has been sent!';
            mail ('miezan@etouchmenu.com', $subject, $body, $from);
        } else { 
            // echo 'Something went wrong, please resubmit.'; 
        	$res=1;
        } 
    } 
}else{
    // echo 'Please fill in all required fields.';
    $res=1;
}
echo $res;
?>