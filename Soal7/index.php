<?php
include('koneksi.php');
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
        <div class="col-md-12">
            <div class="row" style="margin-top: 20px;">
                <div class="col-md-8">
                    <h1>INVENTORY</h1>
                </div>
                <div class="col-md-4">
                    <div class="float-right" style="margin-top:10px";>
                        <a href="add_product.php" class="btn btn-primary btn-sm">Add Product</a>
                        <a href="add_suppliers.php" class="btn btn-primary btn-sm">Add Suppliers</a>
                    </div>
                </div>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Company Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                include 'koneksi.php';
                $no = 1;
                $sql = "SELECT product_tb.*, suppliers_tb.* FROM product_tb INNER JOIN suppliers_tb ON suppliers_tb.supplier_id = product_tb.supplier_id";
                $query = mysqli_query($koneksi, $sql);
                while($data = mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data['product_name']; ?></td>
                        <td><?php echo $data['company_name']; ?></td>
                        <td><?php echo $data['address']; ?></td>
                        <td><?php echo $data['phone']; ?></td>
                        <td>
                            <a href="form_update.php?id=<?php echo $data['id']?>" class="bt btn-sm btn-warning">Update</a>
                            <a href="action_hapus.php?id=<?php echo $data['id']?>" class="bt btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
        </div>
    </div>
</div>
</body>
</html>