<?php
if (isset($_POST['id'])) {
include "../koneksi/csi.php";

$Nama = $_POST ['nama'];
$Alamat = $_POST ['alamat'];
$Telepon = $_POST ['telepon'];

header("location: index.php");
 
$error = 0;

if (trim($Nama)=="") {
	echo "Masih Kosong,ulangi kembali";
	$error = 1;
}
elseif (trim($Alamat)=="") {
	echo "Masih Kosong,Ulangi Kembali";
	$error = 1;

}
elseif (trim($Telepon)=="") {
	echo "Masih Kosong,Ulangi Kembali";
	$error = 1;
}
if($error==0)
{

	$sql = "INSERT INTO penulis SET
			nama = '$Nama',
			alamat = '$Alamat',
			telepon = '$Telepon'
			";
	
	mysql_query($sql, $koneksi) or die ("SQL Error : ".mysql_error());
	echo "Berhasil Menyimpan Data dari : <b>$Nama</b>";
	
}
}

?>
<?php include "../layout/index.php" ?>
	<div id="content" class="container">
		<div class="row">
			<div id="main_content" class="col-sm-5">
				<div id="input-penerbit">
					<form action="" method="post" name="form1" target="_self" id="form1">
					<table border="0" width="200px">
						<tr>
							<td colspan="2"><h2>Input Data Buku Perpustakaan<br></h2></td><br>
						</tr>
						<tr>
							<td>NAMA</td>
							<td>
								<label><div class="form-group">
									<input name="nama" type="text" id="nama" size="50" class="form-control" maxlength="50" />
								</label>
							</td>
						</tr>
						<tr>
							<td>ALAMAT</td>
							<td>
								<label><div class="form-group">
									<input name="alamat" type="text" id="alamat" size="50" maxlength="20" />
								</label>
							</td>
						</tr>
						<tr>
							<td>TELEPON</td>
							<td>
								<label>
									<input name="telepon" type="text" id="telepon" size="50" maxlength="50" />
								</label>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<label>
									<input type="hidden" name="id" id="id" value="1">
									<input type="submit" name="submit" id="submit" value="SAVE DATA" />
								</label>
							</td>
						</tr>
					</table>
				</form>
				</div>
			</div>
			
		</div>
	</div>


