<?php 
	$proses=isset($_GET['proses']) ?$_GET['proses'] : 'list' ;
	switch($proses)
	{
		case 'list' :
		?>
			<h2 align="center" > List Kategori Pustaka </h2>
		<a href="logout.php" > Logout </a><br/>
		<a href="?p=kategori&proses=entri" class="btn btn-primary"> + Tambah Data Kategori</a>
		<table class="table table-hover" >
		<tr>
			
			<th> Nama </th>
			<th> Keterangan</th>
			<th> Aksi </th>
			
		</tr>
		<?php
		$sql=mysql_query("SELECT * FROM kategori");
		
			while($data=mysql_fetch_array($sql))
			{
		?>
				<tr>
				
					<td> <?php echo $data['nama'];?> </td>
					<td> <?php echo $data['keterangan'];?></td>
						<td> <a href="aksi_kategori.php?aksi=hapus&id_hapus=<?php echo $data['idkategori'];?>" onclick="return confirm('yakin akan menghapus data?')" class="btn btn-success"> <span class="glyphicon glyphicon-trash" ></span>Hapus</a> 
				| <a href="?p=kategori&proses=edit&id_edit=<?php echo $data['idkategori'];?>" class="btn btn-danger"><span class="glyphicon glyphicon-pencil"> </span> Edit</a></td>
				</tr>
				<?php
			
			}
			?>
		</table>
<?php 
		break;
		case 'entri' :
?>
			<form method="post" action="aksi_kategori.php?aksi=entri">
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Keterangan</td>
			<td>:</td>
			<td><input type="text" name="keterangan"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="submit" value="submit"></td>
		</tr>
	</table>
</form>
<?php
		break;
		case 'edit' :
	
			$edit = mysql_query("SELECT * FROM kategori WHERE id='$_GET[id_edit]'");
			$data = mysql_fetch_array($edit);
?>
				<form method="post" action="aksi_kategori.php?aksi=edit">
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="hidden" value="<?php echo $data['id'];?>" name="id_edit">
			<input type="text" value="<?php echo $data['nama'];?>" name="nama"></td>
		</tr>
		<tr>
			<td>Keterangan</td>
			<td>:</td>
			<td><input type="text" value="<?php echo $data['keterangan'];?>" name="keterangan"></td>
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
}
?>
