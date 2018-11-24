-- IMPORT CREATE DATABASE AND TABLE
CREATE DATABASE mydata;

USE mydata;

CREATE TABLE barang (
id INT PRIMARY KEY AUTO_INCREMENT,
nama VARCHAR (50),
kategori VARCHAR (50) );

INSERT INTO barang ( nama, kategori )
VALUES ( 'Sepatu' , 'Alat Sekolah' ),
       ( 'Tas' , 'Alat sekolah' ),
       ( 'Buku' , 'Alat sekolah' );