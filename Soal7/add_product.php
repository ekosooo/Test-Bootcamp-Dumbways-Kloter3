<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Soal 7</title>
</head>
<body>
<div class="container">
    <div class="container-fluid">
        <div class="row" style="margin-top: 40px;">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h4>Add Product</h4>
                <form method="post" action="add_product.php">
                    <div class="form-group">
                        <label for="">Product Name</label>
                        <input type="text" name="product_name" class="form-control" placeholder="E.g ASUS Rog X-Series">
                    </div>
                    <div class="form-group">
                        <label for="">Suppliers</label>
                        <select class="form-control" name="supplier_id">
                            <?php
                            include 'koneksi.php';
                            $sql    = "SELECT * FROM suppliers_tb";
                            $query  = mysqli_query($koneksi, $sql);
                            while($data = mysqli_fetch_array($query)){
                                ?>
                                    <option value="<?=$data['id']?>"><?=$data['company_name']?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</div>
</body>
</html>

<?php

if (isset($_POST['submit'])) {
    include 'koneksi.php';
    $product       = $_POST['product_name'];
    $supplier_id   = $_POST['supplier_id'];

    $sql = "INSERT INTO product_tb (product_name, supplier_id) VALUE ('$product', '$supplier_id')";
    $query = mysqli_query($koneksi, $sql);

    if ($query) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }
}
?>