<?php
require 'Layouts.php';

$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'Mydata';

$conn = new mysqli($server,$user,$pass,$db);

if ( $conn->connect_error ){
	echo '<script>
			alert("Koneksi ke Database Gagal : ' . $conn->connect_error . '");
		</script>';
}else{
// 	echo '<script>
// 			alert("Koneksi ke Database Berhasil");
// 		</script>';
 }
