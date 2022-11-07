<?php

if($_POST){
    $id_member=$_POST['id_member'];

    $nama=$_POST['nama'];

    $alamat=$_POST['alamat'];

    $jenis_kelamin= $_POST['jenis_kelamin'];

    $tlp=$_POST['tlp'];

    if(empty($nama)){

        echo "<script>alert('nama member tidak boleh kosong');location.href='tambah_member.php';</script>";


    } elseif(empty($alamat)){

        echo "<script>alert('alamat tidak boleh kosong');location.href='tambah_member.php';</script>";

    } elseif(empty($tlp)){

        echo "<script>alert('tlp tidak boleh kosong');location.href='tambah_member.php';</script>";

    } else {

        include "../koneksi.php";

        $insert=mysqli_query($conn,"insert into member (nama, alamat, jenis_kelamin, tlp) value ('".$nama."','".$alamat."','".$jenis_kelamin."','".$tlp."')") or die(mysqli_error($conn));

        if($insert){

            echo "<script>alert('Sukses menambahkan member');location.href='data_member.php';</script>";

        } else {

            echo "<script>alert('Gagal menambahkan member');location.href='tambah_member.php';</script>";

        }

    }

}

?>