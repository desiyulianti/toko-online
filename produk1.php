<?php 

    include "header.php";

?>

<h2>Daftar Produk</h2>

<div class="row">

    <?php 

    include "toko.php";

    $qry_produk1=mysqli_query($conn,"select * from produk");

    while($dt_produk1=mysqli_fetch_array($qry_produk1)){

        ?>

        <div class="col-md-3">

            <div class="card" >

              <img src="foto/<?=$dt_produk1['foto_produk']?>" class="card-img-top">

              <div class="card-body">

                <h5 class="card-title"><?=$dt_produk1['nama_produk']?></h5>

                <p class="card-text"><?=substr($dt_produk1['deskripsi'], 0,100)?></p>

                <a href="beli.php?id_produk=<?=$dt_produk1['id_produk']?>" class="btn btn-primary">Beli</a>

              </div>

            </div>

        </div>

        <?php

    }

    ?>