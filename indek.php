<html>
	<head>
	<title>Pustaka</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<style type="text/css">
			#menu
			{
				background : #eee;
				float: left;
				padding: 20px;
				margin-right: 5px;
			}
			#content
			{
				width: 80%;
				float: left;
				background: #eee;
				padding: 20px;
			}
		</style>
	</head>
		<body>
			<div id="menu">
			<h2>Menu</h2>
			<?php
			include('menu.php');
			?>
			</div>
			<div id="content">
			<?php
			if(isset($_SESSION['user']))
			{
			include('main.php');
			}
			else
			{
			include('login.php');
			}
			?>
			</div>
		</body>
	
</html>
