<?php include "../layout/index.php" ?>
	<div id="content" class="container">
		<div class="row">
			<div id="main_content" class="col-sm-8">
				
				<div id="output-penerbit">
					<h2>Data Penulis</h2>
					<a href="in.php" class="btn btn-success">
							<i class="glyphicon glyphicon-plus"></i>
							Tambah Penulis
					</a>

					<div>&nbsp;</div>

					<table class="table table-hover table-bordered"> 
					<tr>
						<th>No</th>
						<th>NAMA</th>
						<th>ALAMAT</th>
						<th>TELEPON</th>
						<th>&nbsp;</th>
					</tr>

					<?php 
						$conn=mysql_connect("localhost","root",""); 
						mysql_select_db("perpustakaan"); 
						$sql="select * from penulis"; 
						$hasil=mysql_query($sql,$conn); 
					?>
					<?php $no = 1; ?>
					<?php while($data = mysql_fetch_array($hasil)) { ?>
					<tr>
						<td><?php print $no; ?></td>
						<td><?php print $data['nama']; ?></td>
						<td><?php print $data['alamat']; ?></td>
						<td><?php print $data['telepon']; ?></td>
						<td>
							<a href="update.php?id=<?php print $data['id']; ?>" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-pencil"></i></a>
							<a href="delete.php?id=<?php print $data['id']; ?>" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
							<a href="view.php?id=<?php print $data['id']; ?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-eye-open"></i></a>
						</td>
					</tr>	
					<?php $no++; } ?>
				</table>
