<?php

include("koneksi.php");

if( !isset($_GET['id']) ){
    header('Location: index.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM product_tb WHERE id=$id";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>

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
                <form action="action_update.php" method="post">
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
                        <label for="">Product Name</label>
                        <input type="text" name="product_name" class="form-control" placeholder="E.g ASUS Rog X-Series" value="<?php echo $data['product_name']?>">
                    </div>
                    <div class="form-group">
                        <label for="">Suppliers</label>
                        <select class="form-control" name="supplier_id">
                            <?php
                            include 'koneksi.php';
                            $sql    = "SELECT * FROM suppliers_tb";
                            $query  = mysqli_query($koneksi, $sql);
                            while($data2 = mysqli_fetch_array($query)){
                                ?>
                                <option value="<?=$data2['id']?>"><?=$data2['company_name']?></option>
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