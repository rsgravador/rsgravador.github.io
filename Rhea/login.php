<!DOCTYPE html>
<html>
<head>
	<title>Login - my website</title>
</head>
<body>
	
	<?php require "header.php";?>

		<div style="margin: auto;max-width: 600px">

			<h2 style="text-align: center;">Login</h2>
			
			<form method="post" style="margin: auto;padding:10px;">
				
				<input type="text" name="email" placeholder="Email"><br>
				<input type="text" name="password" placeholder="Password"><br>

				<button>Login</button>
			</form>
	<?php require "footer.php";?>



</body>
</html>