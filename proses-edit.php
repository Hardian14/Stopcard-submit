<?php

include("koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){
	
	// nama, tgl, minggu , kondisi , kategori, loc, des 


	// ambil data dari formulir
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$tgl = $_POST['tgl'];
	$minggu = $_POST['minggu'];
	$kondisi = $_POST['kondisi'];
	$kategori = $_POST['kategori'];
	$loc = $_POST['loc'];
	$des = $_POST['des'];
	
	// buat query update
	$sql = "UPDATE sc SET nama='$nama', tgl='$tgl', minggu='$minggu', kondisi='$kondisi', kategori='$kategori' , loc='$loc', des='$des' WHERE id=$id";
	$query = mysqli_query($koneksi, $sql);
	
	// apakah query update berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman list-siswa.php
		header('Location: rekap.php');
	} else {
		// kalau gagal tampilkan pesan
		die("Gagal menyimpan perubahan...");
	}
	
	
} else {
	die("Akses dilarang...");
}

?>
