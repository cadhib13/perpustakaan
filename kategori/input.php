<?php
include "../koneksi/csi.php";
if(isset($_POST['proses']))
{
  $Nama = $_POST['nama'];

  header("location: index.php");

  $sql = "INSERT INTO kategori SET
			nama = '$Nama'
			";
	
	mysql_query($sql, $koneksi) or die ("SQL Error : ".mysql_error());
	echo "Berhasil Menyimpan Data dari : <b>$Nama</b>";
}

?>
<?php include "../layout/index.php" ?>
	<div id="content" class="container">
		<div class="row">
			<div id="main_content" class="col-sm-8">
			<form action="" method="post">
  				<div class="form-group">
    				<label>Nama Ketegori</label>
    				<input type="text" class="form-control" id="nama" name="nama">
  				</div>
  				<div class="form-actions well">
            		<input type="hidden" name="proses" value="1">
  					<button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> Save</button>
  				</div>
  				</form>
			</div>
		</div>
	</div>
