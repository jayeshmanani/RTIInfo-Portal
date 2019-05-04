<!DOCTYPE html>
<html>
<head>
	<title>Contact form</title>
	<link rel="stylesheet" type="text/css" href="contact.css">
</head>
<body>
	<div class="contact-title">
		<h2>Contact Us</h2>
	</div>
	<div class="contact-form">
			<form id="contact-form" method="post" action="contact_handler.php">
				<input type="text" name="name" class="form-control" placeholder="Enter Your full Name" required=""><br>
				<input type="email" name="email" class="form-control" placeholder="Enter Your email" required=""><br>

				<textarea name="message" class="form-control" placeholder="Message" rows="4" required=""></textarea><br>
				
				<input type="submit" class="form-control submit" value="SEND MESSAGE">
			</form>
		</div>
</body>
</html>