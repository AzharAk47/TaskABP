<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
        <h1 class="text-center mb-4">Tambah Produk</h1>
        <form action="/store" method="POST">
        @csrf
        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Produk</label>
                            <input type="text" name="nama_produk" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Produk">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Stok</label>
                            <input type="text" name="stok" class="form-control" id="exampleInputPassword1"
                                placeholder="Stok">
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
        </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>