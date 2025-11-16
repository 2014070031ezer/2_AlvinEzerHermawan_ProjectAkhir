<?php 
//koneksi database
include 'koneksi.php';

//menangkap data id yang dikirim dari url 
$user_id = $_GET['id']; 

//menghapus data dari database 
mysqli_query($koneksi, "DELETE FROM style_reference WHERE user_id='$user_id'"); 

//mengalihkan halaman kembali ke index.php 
header("location:showdata.php"); 

?> 