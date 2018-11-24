<?php
// Memangggil koneksi database
require 'connection.php';

// Menggunakan structur HTML
Layouts::head('Edit data barang!');

// Logika lihat data sesuai id
if ( isset($_GET['update']) ){

	$upd = $_GET['update'];

	// Query melihat data sesuai id
	$sql = "SELECT * FROM barang WHERE id = " . $upd;

	$query = $conn->query($sql);

	if ( $query->num_rows ){

		$row = $query->fetch_assoc();
	?>



<!-- From pengeditan data -->
<div class="row justify-content-center mt-5">
	<div class="col-md-4">
		<div class="card border-primary">
			  <div class="card-body">
			  	  <h5 class="card-title text-center">Edit Data Barang</h5>

			   		 <form method="POST">
				    	<div class="form-group">
						    <label>Nama Barang</label>
						    <input type="text" name="barang" class="form-control" value="<?= $row['nama'] ?>" pattern="[a-z A-Z]+" maxlength="15">
						  </div>

						  <div class="form-group">
						    <label>Kategori Barang</label>
						    <input type="text" name="kategori" class="form-control" value="<?= $row['kategori'] ?>" pattern="[a-z A-Z]+" maxlength="20">
						  </div>

						 <button type="submit" name="edit" class="btn btn-primary float-right">Edit Data</button>
					</form>

			  	</div>
			 <a href="index.php" class="card-link text-right mr-4 mb-3">Kembali</a>
		 </div>
	</div>	
</div>	



<?php
	}

}

// Logika pengeditan data
if ( isset($_POST['edit']) ){

	
	$barang = $_POST['barang']; 
	$kategori = $_POST['kategori'];

	if ( !empty($barang) && !empty($kategori) ){

		$sql = "UPDATE barang 
			    SET nama = '" . $barang . "',
				kategori = '" . $kategori . "'
		  		WHERE id = ".$upd;

		$query = $conn->query($sql);

		if( $query === true ){

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