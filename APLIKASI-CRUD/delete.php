<?php
// Memangggil koneksi database
require 'connection.php';

// Logika penghapusan data
if ( isset($_GET['delete']) ){

	// Mengambil id data barang
	$del = $_GET['delete'];

	// Query mysql untuk menghapus data sesuai id
	$sql = "DELETE FROM barang WHERE id = " . $del;


	if ( $conn->query($sql) === true ){

		header('location: http://localhost/Aplikasi-crud/');

	}else{

		echo '<script>
			alert("Gagal menghapus data barang!");
		  </script>';

	}
	
}else{
	echo '<script>
			alert("ID data barang tidak sitemukan!");
		  </script>';
}






?>