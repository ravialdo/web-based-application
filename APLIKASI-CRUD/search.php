<?php 
// Memangggil koneksi database
require 'connection.php';

if ( isset($_POST['cari'])) {
	header('location: http://localhost/Aplikasi-Crud/create.php');
}
