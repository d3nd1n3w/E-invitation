<?php
require('connection.php');
// require('connection_qcc2.php');

connectdatabase();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $nama     = $_POST['nama'];
   $pesan     = $_POST['pesan'];
   $hubungan     = $_POST['hubungan'];
    $timestamp = date("Y-m-d H:i:s");

   mysql_query("INSERT INTO comment_wish (`nama`,`pesan`,`hubungan`,`created_at`) 
  VALUES ('$nama','$pesan','$hubungan','$timestamp')");
        
echo "<script>alert('Pesan Sudah Disampaikan'); window.location.href='index.php';</script>";

  
    }

  ?>