<?php

//error_reporting(E_ALL);
if(isset($_POST['id'])){
include "../koneksi/csi.php";
	$id = $_POST ['id'];
	$judul = $_POST ['judul'];
	$isbn = $_POST ['isbn'];
	$sinopsis = $_POST ['sinopsis'];
	$sampul = $_POST ['sampul'];
	$kategori = $_POST ['kategori'];
	$penulis = $_POST ['penulis'];
	$penerbit = $_POST ['penerbit'];
	$sql = mysql_query("UPDATE buku SET
				judul = '".$judul."',
				isbn = '".$isbn."',
				sinopsis = '".$sinopsis."',
				sampul = '".$sampul."',
				id_kategori = '$kategori',
				id_penulis = '$penulis',
				id_penerbit = '$penerbit'
				WHERE id ='".$id."';") or die(mysql_error());
	print $id;
	print $judul;
	print $isbn;
	print $sinopsis;
	print $sampul;
	print $kategori;
	print $penulis;
	print $penerbit;

	header("location: index.php?id=".$id);
}
	
?>
<?php
		$conn = mysql_connect("localhost","root","");
		mysql_select_db("perpustakaan",$conn);
		$sql_1 = mysql_query("SELECT `id`,`nama` FROM `penulis`");
		$sql_2 = mysql_query("SELECT `id`,`nama` FROM `penerbit`");
		$sql_3 = mysql_query("SELECT `id`,`nama` FROM `kategori`");
	?>
<?php include "../layout/index.php" ?>
	<div id="content" class="container">
		<div class="row">
			<div id="main_content" class="col-sm-8">
				<h2>UPDATE BUKU</h2>
				<div id="update-buku">
					<form action="" method="post">
					<?php
						$conn=mysql_connect("localhost","root",""); 
						mysql_select_db("perpustakaan"); 
						$id = $_GET['id'];
						$sql="select * from buku WHERE id = ".$_GET['id']; 
						$hasil=mysql_query($sql,$conn); 

					?>

					<?php 
						$judul = "";
						while($data = mysql_fetch_array($hasil)) {
							$judul = $data['judul'];
							$isbn = $data['isbn'];
							$sinopsis = $data['sinopsis']; 
							$sampul = $data['sampul'];
							$id_kategori = $data['id_kategori'];
							$id_penulis = $data['id_penulis'];
							$id_penerbit = $data['id_penerbit'];
						}
					?>

					<div class="form-group">
    					<label>Judul Buku</label>
    					<input type="text" class="form-control" id="judul" name="judul" value="<?php print $judul; ?>">
					</div>
					<div class="form-group">
    					<label>ISBN</label>
    					<input type="text" class="form-control" id="isbn" name="isbn" value="<?php print $isbn; ?>">
					</div>
					<div class="form-group">
    					<label>Sinopsis</label>
    					<input type="text" class="form-control" id="sinopsis" name="sinopsis" value="<?php print $sinopsis; ?>">
					</div>
					<div class="form-group">
    					<label>Sampul</label>
    					<input type="text" class="form-control" id="isbn" name="sampul" value="<?php print $sampul; ?>">
					</div>
					<div class="form-group">
    					<label>Kategori</label>
    					<select name="kategori" id="kategori" class="form-control">
									<option>--Silahkan pilih--</option>
									<?php
									while($view_1 = mysql_fetch_array($sql_3)) {
										if ($view_1['id']!="") {
											
											if($view_1['id']==$id_kategori)
											{
												echo "<option selected value='". $view_1['id']."'>". $view_1['nama']."
												</option>";
											} else {
												echo "<option value='". $view_1['id']."'>". $view_1['nama']."
												</option>";
											}
										} 
										else{
											echo "<option value='<?php print $kategori; ?>'>tidak ada data</option>";
										}
									}
									?>
								</select>
					</div>
					<div class="form-group">
    					<label>Penulis</label>
    					<select name="penulis" id="penulis" empty="ok" class="form-control">
									<option>--Silahkan pilih--</option>
									<?php
									while($view_1 = mysql_fetch_array($sql_1)) {
										if ($view_1['id']!="") {
											
											if($view_1['id']==$id_penulis)
											{
												echo "<option selected value='". $view_1['id']."'>". $view_1['nama']."
												</option>";
											} else {
												echo "<option value='". $view_1['id']."'>". $view_1['nama']."
												</option>";
											}
										} 
										else{
											echo "<option value='<?php print $penulis; ?>'>tidak ada data</option>";
										}
									}
									?>
								</select>
					</div>
					<div class="form-group">
    					<label>Penerbit</label>
    					<select name="penerbit" id="penerbit" class="form-control">
									<option>--Silahkan pilih--</option>
									<?php
									while($view_1 = mysql_fetch_array($sql_2)) {
										if ($view_1['id']!="") {
											
											if($view_1['id']==$id_penerbit)
											{
												echo "<option selected value='". $view_1['id']."'>". $view_1['nama']."
												</option>";
											} else {
												echo "<option value='". $view_1['id']."'>". $view_1['nama']."
												</option>";
											}
										} 
										else{
											echo "<option value='<?php print $penerbit; ?>'>tidak ada data</option>";
										}
									}
									?>
								</select>
					</div>
					<input type="hidden" name="id" id="id" value="<?php print $_GET['id']; ?>">
					<button type="submit" class="btn btn-primary">Simpan</button>
				</form>
				</div>
				<div></div>
			</div>
		</div>
	</div>

