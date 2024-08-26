<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$ProdukID     = $_POST['ProdukID'];
$NamaProduk   = $_POST['NamaProduk'];
$Harga        = $_POST['Harga'];
$Stok         = $_POST['Stok'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE produk SET NamaProduk = '$NamaProduk', Harga = '$Harga', Stok = '$Stok' WHERE ProdukID = '$ProdukID'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>