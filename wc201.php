<html>
	<head>
		<title>Chat</title>
		<style type="text/css">
			.chat{
				padding: 10px; 
				margin-bottom: 10px; 
				border: 1px dashed #ff0000;
			}
			.name{
			
			}		
			.log{
				font-size: 200%;
				display:inline;
			}
			.date{
				color: gray;
				font-size: 80%;
				display:inline;
			}
		</style>
	</head>
	<body>
		<form action="write.php">
			<input type="hidden" name="u_id" value="<?php print ($_REQUEST['u_id']); ?>">
			<input type="hidden" name="u_name" value="<?php print ($_REQUEST['u_dispname']); ?>">
			<div Align="right">
				<p>
					<?php print ($_REQUEST['u_dispname']); ?>
					<input type="text" name="l_text">
					<input type="submit" value="Write">
				</p>
			</div>
		</form>
		<hr>
		<p>
		<form action="wc201.php">
			<input type="hidden" name="u_dispname" value="<?php print ($_REQUEST['u_dispname']); ?>">
			<input type="submit" value="Refresh">
		</form>
		</p>
		<div class="chat">

		</div>
		<hr>
		<form action="logout.php">
			<input type="hidden" name="u_dispname" value="<?php print ($_REQUEST['u_dispname']); ?>">
			<a href="wc301.php" target="_blank">History</a>
			<input type="submit" value="Logout">
		</form>
	</body>
</html>
