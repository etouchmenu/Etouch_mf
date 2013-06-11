<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
<meta name="description" content="Disengo Contact" />
<meta name="keywords" content="Web Design, Websites, Logos, Graphics, Hosting, HTML5, CSS3, JQuery" />
<link rel="stylesheet" href="disengo.css" />
<link href='http://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<title>Disengo - Website Hosting Plans</title>
<!--[if lt IE 9]>
     <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script type="text/javascript">

$(document).ready(function() {
$("img.rollover").hover(
function() { this.src = this.src.replace("_off", "_on");
},
function() { this.src = this.src.replace("_on", "_off");
});
});

</script>
</head>
<body>
<div id="wrapper">

<header id="top_header">
	<div id="links">
			<a href="index.html"><img src="images/main_off.png" width="100" height="60" alt="Home" class="rollover"/></a>
			<a href="design.html"><img src="images/design_off.png" width="100" height="60" alt="Website Design" class="rollover"/></a>
			<a href="hosting.html"><img src="images/hosting_off.png" width="100" height="60" alt="Hosting" class="rollover"/></a>
			<a href="gallery.html"><img src="images/gallery_off.png" width="100" height="60" alt="Web Design Gallery" class="rollover"/></a>
			<a href="contact.php"><img src="images/contact_blue.png" width="100" height="60" alt="Contact Disengo" /></a>
	</div>
	<img src="images/rule.png" width="900" height="18" alt="rule" />
</header>
<section id="main_section">
	<h1>Contact</h1>
        <p class="center">Please leave a detailed message and I will get back to you promptly!</p>
	<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
	$phone = $_POST['phone'];
    $message = $_POST['message'];
    $from = 'From: Disengo Contact Form'; 
    $to = 'info@disengo.com'; 
    $subject = 'Web Design & Hosting';
    $human = $_POST['human'];
			
    $body = "From: $name\n E-Mail: $email\n Phone: $phone\n Message: $message";
				
    if ($_POST['submit']) {
    if ($name != '' && $email != '') {
        if ($human == '14') {				 
            if (mail ($to, $subject, $body, $from)) { 
	        echo '<p class="center">Your message has been sent!</p>';
	    } else { 
	        echo '<p class="center">Something went wrong, please resubmit.</p>'; 
	    } 
	} else if ($_POST['submit'] && $human != '14') {
	    echo '<p class="center">You answered the anti-spam question incorrectly!</p>';
	}
    } else {
        echo '<p class="center">Please fill in all required fields.</p>';
    }
}
?>
		<div class="top_padding">
			<form method="post" action="contact.php">
        
			<label class="formtext">Name</label>
			<input name="name" placeholder="Required" autocomplete="off" class="shadow">
            
			<label class="formtext">Email</label>
			<input name="email" type="email" placeholder="Required" autocomplete="off" class="shadow">
			
			<label class="formtext">Phone</label>
			<input name="phone" type="phone" placeholder="Optional" autocomplete="off" class="shadow">
            
			<label class="formtext">Message</label>
			<textarea name="message" placeholder="Required" class="shadow"></textarea>
			
			<label class="formtext">What is 12+2? (Anti-spam)</label>
			<input name="human" placeholder="Required" autocomplete="off" class="shadow">
            
			<input id="submit" type="submit" value="Submit" name="submit" class="submit" />
        
			</form>
		</div>
</section>
<img src="images/rule.png" width="900" height="18" alt="rule" />
<footer id="lower_footer">
	<div id="copyright">
		<span class="footertext">Copyright &copy; 2012 Disengo</span>
	</div>
	<div id="social">
		<span class="footertext valign">Show your love: </span><a href="index.html"><img src="images/facebook_off.png" width="75" height="50" alt="facebook link" class="rollover" /></a><a href="index.html"><img src="images/google_off.png" width="75" height="50" alt="google plus link" class="rollover" /></a>
	</div>
</footer>

</div>
</body>
<html>