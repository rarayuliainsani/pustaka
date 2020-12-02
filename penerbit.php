
<?php
	$proses=isset($_GET['proses']) ? $_GET['proses'] : 'list';
	switch($proses){
	case 'list':
?>
				<h1>Buku Pustaka</h1>
			<a href="login.php"> LogOut</a> <br>
			<a href="?p=penerbit&proses=entri" class="btn btn-primary"> + Tambah Daftar Penerbit </a>
			<table class="table table-hover">
			<tr>
				<th>IdPenerbit</th>
				<th>Nama Penerbit</th>
				<th>Email</th>
				<th>No_Telp</th>
				<th>Alamat</th>
				<th>Aksi</th>
			</tr>

			<?php 
			
			$sql=mysql_query("select * from penerbit");
			while ($data=mysql_fetch_array($sql)) {
			?>
			<tr>
				<td><?php echo $data['idpenerbit'];?></td>
				
				<td><?php echo $data['nama'];?></td>
				<td><?php echo $data['email'];?></td>
				<td><?php echo $data['no_telp'];?></td>
				<td><?php echo $data['alamat'];?></td>
				
				
				<td> <a href="aksi_penerbit.php?aksi=hapus&id_hapus=<?php echo $data['idpenerbit'];?>" onclick="return confirm('yakin akan menghapus data?')" class="btn btn-success"> <span class="glyphicon glyphicon-trash" ></span>Hapus</a> 
				| <a href="?p=penerbit&proses=edit&id_edit=<?php echo $data['idpenerbit'];?>" class="btn btn-danger"><span class="glyphicon glyphicon-pencil"> </span> Edit</a></td>
			</tr>	
			<?php
			}
			?>
		    </table>
<?php	
	break;
	case 'entri':
?>
			<p>DAFTAR NAMA PENGARANG </p>
			<form method="POST" action="aksi_penerbit.php?aksi=entri">
				<table>
					
					<tr>
						<td>Nama</td>
						<td>:</td>
						<td><input type="text" name="nama"></td>
					</tr>
					<tr>
						<td>Email</td>
						<td>:</td>
						<td><input type="text" name="email"></td>
					</tr>
					<tr>
						<td>Nomor Telepon</td>
						<td>:</td>
						<td><input type="text" name="no"></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td>:</td>
						<td><textarea name="alamat"></textarea>
						</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td><input type="submit" name="kirim" value="kirim"></td>
					</tr>
				</table>
			</form>
<?php
	break;
	case 'edit';
		
		$edit = mysql_query("SELECT * FROM penerbit WHERE idpenerbit = '$_GET[id_edit]'");
		$data = mysql_fetch_array($edit);

?>
	<form method="POST" action="aksi_penerbit.php?aksi=edit">
		<table class="table table-hover">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>
				<input type="hidden" value="<?php echo $data['idpenerbit'];?>" name="id_edit">
				<input type="text" value="<?php echo $data['nama'];?>" name="nama"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $data['email'];?>" name="email"></td>
			</tr>
			<tr>
				<td>Nomor Telepon</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $data['no_telp'];?>" name="no"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $data ['alamat'];?>" name="alamat"></td>
			</tr>
			
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="Update" value="Update"></td>
			</tr>
		</table>
	</form>
		<?php
	break;
	}

?>

