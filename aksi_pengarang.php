<?php
include('koneksi.php');
	if($_GET['aksi']=='hapus')
	{
		$hapus=mysql_query("DELETE FROM pengarang WHERE idpengarang='$_GET[id_hapus]'");
		if($hapus) header('location:index.php?p=pengarang');
	}
	if($_GET['aksi']=='entri')
	{
			if(isset($_POST['kirim']))
					{
						
						$nm = $_POST['nama'];
						$em = $_POST['email'];
						$nom = $_POST['no'];
						$al = $_POST['alamat'];
						$sql=mysql_query("INSERT INTO pengarang (nama,email,no_telp,alamat) VALUES ('$nm','$em','$nom','$al')");
						
						if($sql)
						{
							header('location:index.php?p=pengarang');
							echo "<script> alert('Komentar berhasil dikirim') </script>";
						}
					}
	}
	if($_GET['aksi']=='edit')
	{
			if(isset($_POST['Update']))
				{
						$nm = $_POST['nama'];
						$em = $_POST['email'];
						$nom = $_POST['no'];
						$al = $_POST['alamat'];
					
					$sql=mysql_query("UPDATE pengarang SET
					nama='$nm',
					email='$em',
					no_telp='$nom', 
					alamat='$al'  where idpengarang='$_POST[id_edit]'");
					 
					if($sql)
					{
						header('location:index.php?p=pengarang');
						echo "<script> alert('Komentar berhasil dikirim') </script>";
					}
					
					
				}
	}
?>