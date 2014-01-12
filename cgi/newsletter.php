<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <httml class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>   <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
	<title>Error in your submitted form</title>	
	<script src="../javascripts/vendor/custom.modernizr.js"></script>
	<link rel="shortcut icon" href="../image/favicon.ico" type="image/x-icon">
	<link rel="icon" href="../images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="../stylesheets/app_style.min.css">
	<link rel="stylesheet" href="../stylesheets/ui_style.css">
	<link rel="stylesheet" href="../stylesheets/social_foundicons.css">
	<script src="../javascripts/quote.js"></script>
	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body onload="window.scrollTo(0,270);">
	<section class="blur" role="banner">
		<div class="row">
			<div class="large-12 columns">
				<header id="header">
					<h1><span>Quote of the Moment</span></h1>
					<p>
					Debugging is twice as hard as writing the program, so if you write the program as cleverly
					as you can, by definition, you won’t be clever enough to debug it.
					<span class="post-author">-- Kernighan's Law</span>
					</p>
				</header>
			</div>
			<div class="large-11 large-offset-2 columns">
				<nav>
					<ul class="inline-list">
						<li><a href="../"><img src="../images/icons/Home.png" height="70" width="70" alt="Home icon"/><p>Home</p></a></li>
						<li><a href="../projects/"><img src="../images/icons/Projects.png" height="70" width="70" alt="Projects icon"/><p>Projects</p></a></li>
						<li><a href="../resources/"><img src="../images/icons/Resources.png" height="70" width="70" alt="Reasource icon"/><p>Resources</p></a></li>
						<li><a href="../events/"><img src="../images/icons/Events.png" height="70" width="70" alt="Event icon"/><p>Events</p></a></li>
						<li><a href="../blog/"><img src="../images/icons/Blog.png" height="70" width="70" alt="Blog icon"/><p>Blog</p></a></li>
					</ul>
				</nav>
			</div>
		</div>
	</section>
	
	
	<section class="row container">
		<section class="large-12 columns">
			<header>
				<h1 class="giant bebas" style="text-align: center;">Join Us and let's make a difference</h1>
			</header>
			<section class="row main-content">
				
				<section class="large-6 large-offset-3 columns">
						<?php
		
					include './freecontactformsettings.php';

					$full_name = $_POST['Full_Name']; // required
					$email_from = $_POST['Email_Address']; // required

					$email_message = "Form details below.\r\n";
					
					function clean_string($string) {
					$bad = array("content-type","bcc:","to:","cc:");
					return str_replace($bad,"",$string);
					}
					
					$email_message .= "Full Name: ".clean_string($full_name)."\r\n";
					$email_message .= "Email: ".clean_string($email_from)."\r\n";
					
					$headers = 'From: '.$email_from."\r\n".
					'Reply-To: '.$email_from."\r\n" .
					'X-Mailer: PHP/' . phpversion();
					mail($email_to, "Newsletter", $email_message, $headers);
					header("Location: $newsletter_thank"); 

					?>
					<script>location.replace('<?php echo $newsletter_thank;?>')</script>
					<?php
					die();
					?>
				</section>
			</section>
		</section>
	</section>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-43651708-2', 'eliteprogrammingclub.tk');
	  ga('send', 'pageview');
	</script>
</body>

	