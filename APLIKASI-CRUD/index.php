<?php 
// Memangggil koneksi database
require 'connection.php';

// Menggunakan structur HTML
Layouts::head('Selamat Datang di aplikasi Crud Sederhana!');
?>



<!-- Tombol create data-->
<a class="btn btn-primary mb-3 mt-5" href="create.php" role="button">Tambah Data Barang</a>

<h3 class="text-center mb-3">Daftar Data Barang</h3>

<!-- Kode HTML membuat tabel views data dari database -->
<table class="table table-sm">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Kategori</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  	<tbody>



<?php
// query mysql untuk melihat data di dalam tabel
$sql = 'SELECT * FROM barang';

$query = $conn->query($sql);

if ( $query->num_rows ){

	$i = 1;

	while ( $row = $query->fetch_assoc() ){

?>



<!-- INTEGRASI kode HTML dan PHP Menampillkan isi dari database -->
    <tr>
      <th scope="row"> <?= $i  ?> </th>
      <td><?= $row['nama']     ?></td>
      <td><?= $row['kategori'] ?></td>
      <td> 
      	<a class="btn btn-info btn-sm button" href="update.php?update=<?=$row['id']?>" role="button">Edit</a>
      	<a class="btn btn-danger btn-sm button" href="delete.php?delete=<?=$row['id']?>" role="button">Hapus</a>
      </td>
    </tr>



<?php
// Kode PHP penutup if dan while
	$i++;
	}
}else{

    echo '<div class="alert alert-danger text-center" role="alert">
              Tidak ada data untuk di tampilkan!
          </div>';

}
?>



<!-- Kode HTML penutup tag body, dan tabel -->
	</tbody>
</table>



<?php
// Menggunakan structur HTML
Layouts::foot();
?>