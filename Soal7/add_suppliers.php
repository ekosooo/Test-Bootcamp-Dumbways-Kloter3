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
                <h4>Add Suppliers</h4>
                <form action="add_suppliers.php" method="post">
                    <div class="form-group">
                        <label for="">Company Name</label>
                        <input type="text" name="company_name" class="form-control" placeholder="E.g PT.DumbWays">
                    </div>
                    <div class="form-group">
                        <label for="">Phone</label>
                        <input type="text" name="phone" class="form-control" placeholder="E.g 08921312123">
                    </div>
                    <div class="form-group">
                        <label for="">Address</label>
                        <textarea name="address" class="form-control" cols="30" rows="5"></textarea>
                    </div>
                    <button type="submit"  name="submit" class="btn btn-primary">Submit</button>
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
    $name       = $_POST['company_name'];
    $phone      = $_POST['phone'];
    $address    = $_POST['address'];

    $sql = "INSERT INTO suppliers_tb (company_name, address, phone) VALUE ('$name', '$address', '$phone')";
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