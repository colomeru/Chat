<html>
	<head>
		<title>Chat - Error 001</title>
		<style type="text/css">
		.error{
			font-size: 200%;
			color: red;
		}		
		</style>
	</head>
	<body>
		<form action="wc101.php">
			<h1>Chat</h1>
			<p><h2>
				<div class="error" style="color:#FF0000">Error</div>
				<?php print ($_REQUEST["e_txt"]); ?>
			</h2></p>
			<input type="submit" value="back">
		</form>		
	</body>
</html>
