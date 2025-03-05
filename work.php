<html>
<head>
</head>
<body>
<?php
	for($i=1;$i<=6;$i++){
		printf("\t<H%d>標題%d</H%d>\n",$i,$i,$i);
	}		
?>
<form method="post" action="result.php">
	account:<input type="text" name="myid" placeholder="enter account"><br>
	password:<input type="password" name="mypassword" placeholder="enter password">
	<input type="submit" value="enter">
	<input type="reset" value="reset/clear">
</form>
</body>
</html>
