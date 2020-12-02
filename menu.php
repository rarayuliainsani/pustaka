<a href="index.php">Home</a> <br/>
<?php
session_start();
	if(isset($_SESSION['user']))
	{
?>
<a href="index.php?p=buku">Buku</a> <br/>
<a href="index.php?p=kategori">Kategori</a> <br/>
<a href="index.php?p=pengarang">Pengarang</a> <br/>
<a href="index.php?p=penerbit">Penerbit</a> <br/>
<a href="index.php?p=user">User</a> <br/>
<a href="index.php?p=logout">LogOut</a> <br/>

<?php
	}
	else
	{
		echo"<a href='index.php?p=login'>Login</a> <br/>";
	}
?>

