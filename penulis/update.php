<?php

//error_reporting(E_ALL);
if(isset($_POST['id'])){
include "../koneksi/csi.php";
	$id = $_POST ['id'];
	$nama = $_POST ['nama'];
	$alamat = $_POST ['alamat'];
	$telepon = $_POST ['telepon'];
	$sql = mysql_query("UPDATE penulis SET
				nama = '".$nama."',
				alamat = '".$alamat."',
				telepon = '".$telepon."'
				WHERE id ='".$id."';") or die(mysql_error());
	header("location: index.php");
}

?>
<?php include "../layout/index.php" ?>
	<div id="content" class="container">
		<div class="row">
			<div id="main_content" class="col-sm-8">
				<h2>UPDATE PENERBIT</h2>
				<div id="update-buku">
					<form action="" method="post">
					<?php
						$conn=mysql_connect("localhost","root",""); 
						mysql_select_db("perpustakaan"); 
						$id = $_GET['id'];
						$sql="select * from penulis WHERE id = ".$_GET['id']; 
						$hasil=mysql_query($sql,$conn); 

					?>

					<?php 
						$judul = "";
						while($data = mysql_fetch_array($hasil)) {
							$nama = $data['nama'];
							$alamat = $data['alamat'];
							$telepon = $data['telepon'];
						}
					?>

					<div class="form-group">
    					<label>NAMA PENERBIT</label>
    					<input type="text" class="form-control" id="nama" name="nama" value="<?php print $nama; ?>">
					</div>
					<div class="form-group">
    					<label>ALAMAT</label>
    					<input type="text" class="form-control" id="alamat" name="alamat" value="<?php print $alamat; ?>">
					</div>
					<div class="form-group">
    					<label>TELEPON</label>
    					<input type="text" class="form-control" id="telepon" name="telepon" value="<?php print $telepon; ?>">
					</div>
					<input type="hidden" name="id" id="id" value="<?php print $_GET['id']; ?>">
					<button type="submit" class="btn btn-primary">Simpan</button>
				</form>
				</div>
				<div></div>
			</div>
		</div>
	</div>


