<?php

if($_POST){

    $id_produk=$_POST['id_produk'];

    $nama_produk=$_POST['nama_produk'];

    $deskripsi=$_POST['deskripsi'];

    $harga=$_POST['harga'];

    $foto_produk=$_POST['foto_produk'];


    if(empty($nama_produk)){

        echo "<script>alert('nama produk tidak boleh kosong');location.href='tambah_produk.php';</script>";


    } elseif(empty($deskripsi)){

        echo "<script>alert('deskripsi tidak boleh kosong');location.href='tambah_produk.php';</script>";


    } elseif(empty($harga)){

        echo "<script>alert('harga tidak boleh kosong');location.href='tambah_produk.php';</script>";

    } else {

        include "toko.php";

               // upload image
               $target_dir = "images/";
               $target_file = $target_dir . basename($_FILES["foto_produk"]["name"]);
               $uploadOk = 1;
               $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
       
               // Check if file already exists
               if (file_exists($target_file)) {
               echo "Sorry, file already exists.";
               $uploadOk = 0;
               }
       
               // Check file size
               if ($_FILES["foto_produk"]["size"] > 5000000) {
               echo "Sorry, your file is too large.";
               $uploadOk = 0;
               }
       
               // Allow certain file formats
               if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
               echo "Sorry, only JPG, JPEG, & PNG files are allowed.";
               $uploadOk = 0;
               }
       
               // Check if $uploadOk is set to 0 by an error
               if ($uploadOk == 0) {
               echo "Sorry, your file was not uploaded.";
               // if everything is ok, try to upload file
               } else {
               if (move_uploaded_file($_FILES["foto_produk"]["tmp_name"], $target_file)) {
                   echo "The file " .htmlspecialchars( basename( $_FILES["foto_produk"]["name"])). " has been uploaded.";
                   
                   $insert=mysqli_query($conn,"insert into produk (nama_produk, deskripsi, harga, foto_produk) value ('".$_POST['nama_produk']."','".$_POST['deskripsi']."','".$_POST['harga']."','".basename($_FILES["foto_produk"]["name"])."')") or die(mysqli_error($conn));
                   if($insert == !false){
                   echo "<script>alert('Sukses menambahkan produk');location.href='ubah.produk.php';</script>";
                   } else {
                   echo "<script>alert('Gagal menambahkan produk);location.href='ubah.produk.php';</script>";
                   }
               } else {
                   echo "Sorry, there was an error uploading your file.";
               }
            }
        }
         
        if(empty($foto_produk)){

            $update=mysqli_query($conn,"update produk set nama_produk='".$nama_produk."', deskripsi='".$deskripsi."',harga='".$harga."' where id_produk = '".$id_produk."' ") or die(mysqli_error($conn));

            if($update){

                echo "<script>alert('Sukses update produk');location.href='tampil_produk.php';</script>";

            } else {

                echo "<script>alert('Gagal update produk');location.href='ubah_produk.php?id_produk=".$id_produk."';</script>";

            }

        } else {

            $update=mysqli_query($conn,"update produk set nama_produk='".$nama_produk."', deskripsi='".$deskripsi."',harga='".$harga."',foto_produk='".$foto_produk."' where id_produk = '".$id_produk."'") or die(mysqli_error($conn));

            if($update){

                echo "<script>alert('Sukses update produk');location.href='tampil_produk.php';</script>";

            } else {

                echo "<script>alert('Gagal update produk');location.href='ubah_produk.php?id_produk=".$id_produk."';</script>";

            }

        }

       

    }


?>