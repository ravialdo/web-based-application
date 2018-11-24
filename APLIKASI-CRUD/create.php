<?php
// Memangggil koneksi database
require 'connection.php';

// Menggunakan structur HTML
Layouts::head('Tambah Data Barang!');
?>



 <!-- From pengisian data -->
<div class="row justify-content-center mt-5">
	<div class="col-md-4">
		<div class="card border-primary">
			  <div class="card-body">
			  	  <h5 class="card-title text-center">Tambah Data Barang</h5>

			   		 <form method="POST">
				    	<div class="form-group">
						    <label>Nama Barang</label>
						    <input type="text" name="barang" class="form-control" pattern="[a-z A-Z]+" maxlength="15">
						  </div>

						  <div class="form-group">
						    <label>Kategori Barang</label>
						    <input type="text" name="kategori" class="form-control" pattern="[a-z A-Z]+" maxlength="20">
						  </div>

						 <button type="submit" name="tambah" class="btn btn-primary float-right">Tambahkan Data</button>
					</form>

			  	</div>
			 <a href="index.php" class="card-link text-right mr-4 mb-3">Kembali</a>
		 </div>
	</div>	
</div>	

  

<?php
// Kode PHP
// Logika dalam penerimaan data sebelum dikirim ke database
if ( isset($_POST['tambah']) ){
	
	$nama     = $_POST['barang'];
	$kategori = $_POST['kategori'];
	
	if( !empty($nama) && !empty($kategori) ){
		
		$sql = "INSERT INTO barang (nama, kategori)
				VALUES ('" . $nama . "','" . $kategori . "')";

		$query = $conn->query($sql);

		if ( $query === true ){

			header('location: http://localhost/Aplikasi-Crud/');

		}

	}else{

			echo '<script>
					alert("ISILAH DATA DENGAN BENAR!");
			   	  </script>';
	}
}


// Menggunakan structur HTML
Layouts::foot();
?>