<?php 

    include "header.php";

    include "toko.php";

    $qry_detail_produk1=mysqli_query($conn,"select * from produk where id_produk = '".$_GET['id_produk']."'");

    $dt_produk1=mysqli_fetch_array($qry_detail_produk1);

    $harga=$dt_produk1['harga'];
    $harga2 =number_format($harga, 2);

?>

<h2>Pembelian Produk</h2>

<div class="row">

    <div class="col-md-4">

    <img src="foto/<?=$dt_produk1['foto_produk']?>" class="card-img-top">

    </div>

    <div class="col-md-8">

        <form action="masukkan_keranjang.php?id_produk=<?=$dt_produk1['id_produk']?>" method="post">

            <table class="table table-hover table-striped">

                <thead>

                    <tr>

                        <td>Nama produk</td><td><?=$dt_produk1['nama_produk']?></td>

                    </tr>

                    <tr>

                        <td>Deskripsi</td><td><?=$dt_produk1['deskripsi']?></td>

                    </tr>

                    <tr>

                        <td>Harga</td><td><?php echo ("RP. ".$harga2);?></td>

                    </tr>

                    <tr>

                        <td>Jumlah beli</td><td><input type="number" name="jumlah_beli" value="1"></td>

                    </tr>

                    <tr>

                        <td colspan="2"><input class="btn btn-success" type="submit" value="BELI"></td>

                    </tr>

                </thead>

            </table>

        </form>

    </div>

</div>

<?php 

    include "footer.php";

?>