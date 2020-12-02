<?php
include('koneksi.php');
	if($_GET['aksi']=='hapus')
	{
		$hapus=mysql_query("DELETE FROM penerbit WHERE idpenerbit='$_GET[id_hapus]'");
		if($hapus) header('location:index.php?p=penerbit');
	}
	if($_GET['aksi']=='entri')
	{
			if(isset($_POST['kirim']))
					{
						
						$nm = $_POST['nama'];
						$em = $_POST['email'];
						$nom = $_POST['no'];
						$al = $_POST['alamat'];
						$sql=mysql_query("INSERT INTO penerbit (nama,email,no_telp,alamat) VALUES ('$nm','$em','$nom','$al')");
						
						if($sql)
						{
							header('location:index.php?p=penerbit');
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
					
					$sql=mysql_query("UPDATE penerbit SET
					nama='$nm',
					email='$em',
					no_telp='$nom', 
					alamat='$al'  where idpenerbit='$_POST[id_edit]'");
					 
					if($sql)
					{
						header('location:index.php?p=penerbit');
						
					}
					
					
				}
	}
?>