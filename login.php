<!DOCTYPE html>
<html>
<head>
	<title>User</title>
</head>
<body>

<form method="post" action="">
	<TABLE>
		<tr>
			<td>USER NAME </td>
			<td><input type="text" name="username"/></td>
		</tr>
		<tr>
			<td>PASSWORD </td>
			<td><input type="password" name="password"/></td>
		</tr>
		
		<tr>
			<td></td>
				<td><input type="submit" name="login" value="login"></td>
			</tr>
		
	</TABLE>
	
</form>
<?php
	include 'koneksi.php';
	if (isset($_POST['login']))
	{
		$un=$_POST['username'];
		$pass=md5($_POST['password']);
		
		
		$query=mysql_query("select * from user  where username='$un' and password='$pass' ") or die(mysql_error());
		$cek=mysql_num_rows($query);
		$data=mysql_fetch_array($query);


		if($cek == 1){
		
		session_start();
		$_SESSION['user']=$data['username'];
		$_SESSION['level']=$data['level'];
		header('location:index.php');
		}
	}			

			
		

	

?>
</body>
</html>