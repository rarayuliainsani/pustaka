<?php
include('koneksi.php');
	if($_GET['aksi']=='hapus')
	{
		$hapus=mysql_query("DELETE FROM buku WHERE idbuku='$_GET[id_hapus]'");
		if($hapus) header('location:index.php?p=buku');
	}
	if($_GET['aksi']=='entri')
	{
			if(isset($_POST['submit']))
					{
						
						$jd = $_POST['judul'];
						$pg = $_POST['pengarang'];
						$pn = $_POST['penerbit'];
						$ka = $_POST['kategori'];
						$is = $_POST['isbn'];
						$ket = $_POST['keterangan'];
						$sql=mysql_query("INSERT INTO buku (judul,pengarang,penerbit,kategori_buku,isbn,keterangan) VALUES ('$jd','$pg','$pn','$ka','$is','$ket')");
						
						if($sql)
						{
							header('location:index.php?p=buku');
							echo "<script> alert('Komentar berhasil dikirim') </script>";
						}
					}
	}
	if($_GET['aksi']=='edit')
	{
			if(isset($_POST['Update']))
				{
					$jd = $_POST['judul'];
					$pg = $_POST['pengarang'];
					$pn = $_POST['penerbit'];
					$ka = $_POST['kategori'];
					$is = $_POST['isbn'];
					$ket = $_POST['keterangan'];
					
					$sql=mysql_query("UPDATE buku SET
					judul='$jd',
					pengarang='$pg',
					penerbit='$pn', 
					kategori_buku='$ka', 
					isbn='$is', 
					keterangan='$ket' where idbuku='$_POST[id_edit]'");
					 
					if($sql)
					{
						header('location:index.php?p=buku');
						
					}
					
					
				}
	}
?>