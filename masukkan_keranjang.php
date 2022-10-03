<?php 

session_start();

    if($_POST){

        include "toko.php";

       

        $qry_get_produk1=mysqli_query($conn,"select * from produk where id_produk = '".$_GET['id_produk']."'");

        $dt_produk1=mysqli_fetch_array($qry_get_produk1);

        $_SESSION['cart'][]=array(

            'id_produk'=>$dt_produk1['id_produk'],

            'nama_produk'=>$dt_produk1['nama_produk'],

            'qty'=>$_POST['jumlah_beli'],

            'subtotal'=>$dt_produk1['harga']*$_POST['jumlah_beli'],

        );

    }

    header('location: keranjang.php');

?>