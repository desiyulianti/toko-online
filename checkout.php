<?php 

    session_start();

    include "toko.php";

    $cart=@$_SESSION['cart'];

    if(count($cart)>0){

        $tgl=date('Y-m-d',mktime(0,0,0,date('m'),(date('d')+$tgl_transaksi),date('Y')));

        mysqli_query($conn,"insert into transaksi (id_pelanggan,id_petugas,tgl_transaksi) value('".$_SESSION['id_pelanggan']."', '1','".$tgl."')");

         $id=mysqli_insert_id($conn);

        foreach ($cart as $key_produk1 => $val_produk1) {

            mysqli_query($conn,"insert into detail_transaksi (id_transaksi,id_produk,qty,subtotal) value('".$id."','".$val_produk1['id_produk']."','".$val_produk1['qty']."','".$val_produk1['subtotal']."')");

        }

        unset($_SESSION['cart']);

        echo '<script>alert("Anda berhasil membeli produk");location.href="histori_pembelian.php"</script>';

    }

?>