<?php
include('koneksi.php');
	if($_GET['aksi']=='hapus')
	{
		$hapus=mysql_query("DELETE FROM kategori WHERE id=$_GET[id_hapus]");
		if($hapus) header('location:index.php?p=kategori');
	}
	if($_GET['aksi']=='entri')
	{
			if(isset($_POST['submit']))
					{
						$nm = $_POST['nama'];
						$ket = $_POST['keterangan'];
						$sql=mysql_query("INSERT INTO kategori (nama,keterangan) VALUES ('$nm','$ket')");
						
						if($sql)
						{
							header('location:index.php?p=kategori');
							echo "<script> alert('Komentar berhasil dikirim') </script>";
						}
					}
	}
	if($_GET['aksi']=='edit')
	{
			if(isset($_POST['kirim']))
				{
					
					$nm = $_POST['nama'];
					$ket = $_POST['keterangan'];
					
					$sql=mysql_query("UPDATE kategori SET
					nama='$nm', 
					keterangan='$ket' where id='$_POST[id_edit]'");
					 
					if($sql)
					{
						header('location:index.php?p=kategori');
					}
					
					
					
				}
	}
?>