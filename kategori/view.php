<?php include "../layout/index.php" ?>
	<div id="content" class="container">
		<div class="row">
			<div id="main_content" class="col-sm-8">
				<?php 
				$conn=mysql_connect("localhost","root",""); 
				mysql_select_db("perpustakaan"); 
				$id = $_GET['id'];
				$sql="select * from kategori WHERE id = ".$_GET['id']; 
				$hasil=mysql_query($sql,$conn);
				?>
				<?php while($data = mysql_fetch_array($hasil)) { ?>
				<div id="view-buku">
					<h2>Data Kategori</h2>
				<table class="table">
				<tr>
					<th width="10%">NAMA</th>
					<td width="90%">: <?php print $data['nama']; ?></td>
				</tr>
				</table>
				</div>
				<?php } ?>
				<h2>Daftar Buku</h2>
				<?php $id = $_GET['id']; ?>
				<?php $sql = "SELECT * FROM buku WHERE id_kategori = '$id'"; ?>
				<?php $dataBuku = mysql_query($sql); ?>
				<table class="table">
				<tr>	
					<th width="10%">No</th>
					<th width="90%">Judul</th>
				</tr>
				<?php $no = 1; ?>
				<?php while($data = mysql_fetch_array($dataBuku)) { ?>
				<tr>
					<td><?php print $no; ?></td>
					<td><?php print $data['judul']; ?></td>
				</tr>
				<?php $no++; } ?>
				</table>
			</div>
		</div>
	</div>
