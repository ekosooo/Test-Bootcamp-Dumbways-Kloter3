<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Soal 6</title>
</head>
<body>
<div class="container">
    <div class="container-fluid">
        <div class="row" style="margin-top: 40px;">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h4>Add Product</h4>
                <form>
                    <div class="form-group">
                        <label for="">Product Name</label>
                        <input type="text" name="product_name" class="form-control" placeholder="E.g ASUS Rog X-Series">
                    </div>
                    <div class="form-group">
                        <label for="">Suppliers</label>
                        <select class="form-control" name="supplier_id">
                            <option>PT.DumbWays</option>
                            <option>PT.WaysDumb</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</div>
</body>
</html>