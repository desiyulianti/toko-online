<!DOCTYPE html>

<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Tambah Produk</title>

</head>

<body>
    <div class="container">
        <h3>Tambah Produk</h3>

        <form action="produk.php" method="post">

            Nama produk :

            <input type="text" name="nama_produk" value="" class="form-control">

            Deskripsi :

            <input type="text" name="deskripsi" value="" class="form-control">

            Harga :

            <input type="number" name="harga" value="" class="form-control">

            Foto produk :

            <input type="file" name="foto_produk" value="" class="form-control">

            <input type="submit" name="simpan" value="tambah produk" class="btn btn-primary">

        </form>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </div>
</body>

</html>