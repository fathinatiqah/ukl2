<?php

    include "../koneksi.php";
    $id_transaksi = $_GET['id_transaksi'];
    $update=mysqli_query($conn,"update transaksi set status='Proses',dibayar='Belum Dibayar' where id_transaksi='".$id_transaksi."'") or die (mysqli_error($koneksi));
    header('location:data_transaksi.php');

?>