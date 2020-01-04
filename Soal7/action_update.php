<?php

include("koneksi.php");

if(isset($_POST['submit'])){

    $id             = $_POST['id'];
    $product_name   = $_POST['product_name'];
    $supplier       = $_POST['supplier_id'];

    $sql   = "UPDATE product_tb SET product_name='$product_name', supplier_id='$supplier' WHERE id=$id";
    $query = mysqli_query($koneksi, $sql);

    if( $query ) {
        header('Location: index.php');
    } else if (!$query){
        echo("Error description: " . mysqli_error($koneksi));
    }
    else {
        die("Gagal menyimpan perubahan...");
    }

} else {
    die("Akses dilarang...");
}

?>