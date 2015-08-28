<?php
include "csi.php";		

$judul = $_POST ['judul'];
$isbn = $_POST ['isbn'];
$sinopsis = $_POST ['sinopsis'];
$sampul = $_POST ['sampul'];
$id_kategori = $_POST ['id_kategori'];
$id_penulis = $_POST ['id_penulis'];
$id_penerbit = $_POST ['id_penerbit'];
 
$error = 0;

if (trim($judul)=="") {
	echo "nama Masih Kosong,ulangi kembali";
	$error = 1;
}
elseif (trim($isbn)=="") {
	echo "alamat Masih Kosong,Ulangi Kembali";
	$error = 1;

}
elseif (trim($sinopsis)=="") {
	echo "alamat Masih Kosong,Ulangi Kembali";
	$error = 1;

}
elseif (trim($sampul)=="") {
	echo "alamat Masih Kosong,Ulangi Kembali";
	$error = 1;

}
elseif (trim($id_kategori)=="") {
	echo "alamat Masih Kosong,Ulangi Kembali";
	$error = 1;

}
elseif (trim($id_penulis)=="") {
	echo "alamat Masih Kosong,Ulangi Kembali";
	$error = 1;

}
elseif (trim($id_penerbit)=="") {
	echo "alamat Masih Kosong,Ulangi Kembali";
	$error = 1;

}

if($error==0)
{

	$sql = "INSERT INTO buku SET
			judul = '$judul',
			isbn = '$isbn',
			sinopsis = '$sinopsis',
			sampul = '$sampul',
			id_kategori = '$id_kategori',
			id_penulis = '$id_penulis',
			id_penerbit = '$id_penerbit'
			";
	
	mysql_query($sql, $koneksi);
	echo "Berhasil Menyimpan Data dari : <b>".$judul."</b>";
	include "../buku/input.php";
}

?>