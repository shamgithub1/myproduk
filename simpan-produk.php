<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$NamaProduk           = $_POST['NamaProduk'];
$Harga                = $_POST['Harga'];
$Stok                 = $_POST['Stok'];

//query insert data ke dalam database
$query = "INSERT INTO produk (NamaProduk, Harga, Stok) VALUES ('$NamaProduk', '$Harga', '$Stok')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>