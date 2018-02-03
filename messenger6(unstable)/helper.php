<?php
	SESSION_START();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
			<meta http-equiv="refresh" content="0.01;url=index.php">
			
	</head>
	<body>
	
<?php
	
	date_default_timezone_set("Asia/Kolkata");
						
						if($_SERVER['REMOTE_ADDR']==$_SESSION['blue_element'])
						{
							$initial1='<div class="msg_box">'.PHP_EOL;
						}
						else
						{
							$initial1='<div class="msg_box2">'.PHP_EOL;
						}
						
						$end=PHP_EOL.'</div>';
						$_SESSION['message']=$_POST['mssg'];
						$time='<div class="time">'.date("h:i:sa").'</div>';
						$msg_file=fopen("index.php","a");
						
						fwrite($msg_file,$initial1.$_SESSION['message'].'<br>'.$time.$end.PHP_EOL);
						fclose($msg_file);
						
?>