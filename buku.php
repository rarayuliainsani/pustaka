
<?php
	$proses=isset($_GET['proses']) ? $_GET['proses'] : 'list';
	switch($proses){
	case 'list':
?>
				<h1>Buku Pustaka</h1>
			<a href="login.php"> LogOut</a> <br>
			<a href="?p=buku&proses=entri" class="btn btn-primary"> + Tambah Buku </a>
			<table class="table table-hover">
			<tr>
				<th>Idbuku</th>
				<th>Judul</th>
				<th>Pengarang</th>
				<th>Penerbit</th>
				<th>Kategori_Buku</th>
				<th>ISBN</th>
				<th>Keterangan</th>
				<th>Aksi</th>
			</tr>

			<?php 
			
			$sql=mysql_query("select * from buku");
			while ($data=mysql_fetch_array($sql)) {
			?>
			<tr>
				<td><?php echo $data['idbuku'];?></td>
				
				<td><?php echo $data['judul'];?></td>
				<td><?php echo $data['pengarang'];?></td>
				<td><?php echo $data['penerbit'];?></td>
				<td><?php echo $data['kategori_buku'];?></td>
				<td><?php echo $data['isbn'];?></td>
				<td><?php echo $data['keterangan'];?></td>
				
				<td> <a href="aksi_buku.php?aksi=hapus&id_hapus=<?php echo $data['idbuku'];?>" onclick="return confirm('yakin akan menghapus data?')" class="btn btn-success"> <span class="glyphicon glyphicon-trash" ></span>Hapus</a> 
				| <a href="?p=buku&proses=edit&id_edit=<?php echo $data['idbuku'];?>" class="btn btn-danger"><span class="glyphicon glyphicon-pencil"> </span> Edit</a></td>
			</tr>	
			<?php
			}
			?>
		    </table>
<?php	
	break;
	case 'entri':
?>
			<h1>DAFTAR BUKU PUSTAKA </h1>
			<form method="POST" action="aksi_buku.php?aksi=entri" role="form">
  <div class="form-group">
    <label for="exampleInputEmail1">Judul</label>
    <input type="text" class="form-control" name="judul" placeholder="Enter judul">
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Pengarang</label>
    <input type="text" class="form-control" name="pengarang" placeholder="Enter pengarang">
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Penerbit</label>
    <input type="text" class="form-control" name="judul" placeholder="Enter penerbit">
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Kategori Buku</label>
    <select name="kategori">
						<option>-Pilih-</option>
						<?php $ambil_kategori=mysql_query("SELECT * from kategori");
							while ($data= mysql_fetch_array($ambil_kategori))
							{echo "<option value=$data[keterangan]>$data[keterangan]</option>";
							}
						?> 
	</select>
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">ISBN</label>
    <input type="text" class="form-control" name="isbn" placeholder="Enter isbn">
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Keterangan</label>
    <input type="text" class="form-control" name="keterangan" placeholder="Enter Keterangan">
  </div>
  <button type="submit" name="submit" value="submit"class="btn btn-success">Submit</button>
</form>
			
<?php
	break;
	case 'edit';
		
		$edit = mysql_query("SELECT * FROM buku WHERE idbuku = '$_GET[id_edit]'");
		$data = mysql_fetch_array($edit);

?>
	<form method="POST" action="aksi_buku.php?aksi=edit">
		<table class="table table-hover">
			<tr>
				<td>Judul</td>
				<td>:</td>
				<td>
				<input type="hidden" value="<?php echo $data['idbuku'];?>" name="id_edit">
				<input type="text" value="<?php echo $data['judul'];?>" name="judul"></td>
			</tr>
			<tr>
				<td>Pengarang</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $data['pengarang'];?>" name="pengarang"></td>
			</tr>
			<tr>
				<td>Penerbit</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $data['penerbit'];?>" name="penerbit"></td>
			</tr>
			<tr>
				<td>Kategori Buku</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $data ['kategori_buku'];?>" name="kategori"></td>
			</tr>
			<tr>
				<td>ISBN</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $data['isbn'];?>" name="isbn"></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $data['keterangan'];?>" name="keterangan"></td>
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

