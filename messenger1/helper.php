<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
			<meta http-equiv="refresh" content="0.7;url=index.php">
	</head>
	<body>
	
<?php
	SESSION_START();
						
						if($_SERVER['REMOTE_ADDR']=="120.89.76.169")
						{
							$initial1='<div class="msg_box">'.PHP_EOL;
						}
						else
						{
							$initial1='<div class="msg_box2">'.PHP_EOL;
						}
						
						$end=PHP_EOL.'</div>';
						$_SESSION['message']=$_POST['mssg'];
						$msg_file=fopen("msg.php","a");
						
						fwrite($msg_file,$initial1.$_SESSION['message'].'<br>'.$end.PHP_EOL);
						fclose($msg_file);
						
?>