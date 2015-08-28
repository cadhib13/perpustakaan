 <?php session_start();
    
    if($_SESSION['login']==0)
    {
    
    }

include "../koneksi/csi.php";
//$conn = mysql_connect("localhost","root","");
//		mysql_select_db("perpustakaan",$conn);
	$id = $_GET['id'];
	$sql1= mysql_query("select * from buku WHERE id ='$id'", $koneksi);
?>
<H4>Selamat Datang, <b><?php print $_SESSION['username']; ?></b></H4>
<?php include "../layout/index.php"; ?>
	<div id="content" class="container">
		<div class="row">
			<div id="main_content" class="col-sm-8">
				<?php while($data = mysql_fetch_array($sql1)) { ?>
				<h1>Anda Ingin Meminjam Buku <b><?php print $data['judul']; ?></b></h1>
				<?php } ?>
				<form action="" method="post" name="form_pinjam" target="_self" id="form_pinjam">
  				<div class="form-group">
    				<label>Nama Peminjam</label>
    				<input type="text" class="form-control" id="user" name="user" value="<?php print $_SESSION['username']; ?>">
    				<input type="hidden" id="judul" name="judul" value="<?php print $id;?>">
  				</div>
  				<div class="form-group">
    				<label>Lama Pinjam</label>
    				<input type="text" class="form-control" id="lama" name="lama">
    				<input type="hidden" id="status" name="status" value="1">
  				</div>
  				<div class="form-actions well">
  					<button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Pinjam</button>
  				</div>
  				</form>
			</div>
		</div>
	</div>

<?php
if(isset($_POST['status'])){
$judul = $_POST ['judul'];
$peminjam = $_POST ['user'];
$lama = $_POST ['lama'];
$status = $_POST ['status'];
$sql = "INSERT INTO peminjaman SET
			id_buku = '$judul',
			id_user = '$peminjam',
			tanggal_pinjam = NOW(),
			lama = '$lama',
			tanggal_kembali = NOW() +'$lama',
			status_peminjaman = '$status'
			";
mysql_query($sql, $koneksi) or die ("SQL Error : ".mysql_error());
	header("location:index.php");
}

?>