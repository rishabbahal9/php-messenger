<!--19 November 2017 15:43-->
<?php
	SESSION_START();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Coconut Chat</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<link rel="stylesheet" href="Design/style1.css">
		<meta name="theme-color" content="#7c000c">
		<style>
			@font-face
		{
			font-family: heading;
			src:url(superfruit.ttf)
		}
		</style>
	</head>
	<body>
			<div class="header">
				
				Coconut Chat
			</div>
			<div id="display">
				<iframe src="msg.php" style="width: 100%;margin: 0px 0px 10px 0px;height: 80vh;">
				</iframe>
				
				
			</div>
	
		<form action="helper.php" method="post">
			<div id="container1">
				<input id="msg" type="text" name="mssg" />
				<input id="sub" type="submit" value="send"/>
			</div>
		</form>
	</body>
</html>