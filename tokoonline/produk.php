<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h3>Produk</h3>
    <form action="produkduk.php" method="post">
        Nama Produk :
        <input type="text" name="nama_produk" value="" class="form-control">
        Id Produk :
        <input type="text" name="id_produk" value="" class="form-control">
        </select>
        Deskripsi :
        <textarea name="deskripsi" class="form-control" rows="4"></textarea>
        Harga :
        <input type="int" name="harga" value="" class="form-control">
        Foto Produk :
        <input type="text" name="foto_produk" value="" class="form-control">
        <input type="submit" name="simpan" value="Kirim" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>