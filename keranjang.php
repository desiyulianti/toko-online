<?php 

    include "header.php";

?>

<h2>Daftar Produk di Keranjang</h2>

<table class="table table-hover striped">

    <thead>

        <tr>

            <th>NO</th>
            <th>Nama Produk</th>
            <th>Jumlah</th>
            <th>Subtotal</th>
            <th>Aksi</th>

        </tr>

    </thead>

    <tbody>

        <?php

        foreach (@$_SESSION['cart'] as $key_produk1 => $val_produk1) : 
        $subtotal=$val_produk1['subtotal'];
        $subtotal2=number_format($subtotal, 2);

        ?>

            <tr>

                <td><?=($key_produk1+1)?></td>
                <td><?=$val_produk1['nama_produk']?></td>
                <td><?=$val_produk1['qty']?></td>
                <td><?=$val_produk1['subtotal']?></td>
                <td><a href="hapus_cart.php?id=<?=$key_produk1?>" class="btn btn-danger"><strong>X</strong></a></td>

            </tr>


        <?php endforeach ?>

    </tbody>

</table>

<a href="checkout.php" class="btn btn-primary">Check Out</a>

<?php 

    include "footer.php";

?>