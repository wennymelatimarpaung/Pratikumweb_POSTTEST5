<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="stylecrud.css">
</head>
<body>
    <h1 class="judul">PIZZA_WENNY</h1>
    <div class="form-class">
        <h3>Add Menu</h3><br><br>
        <form action="tambah.php" method="post">
            <label for="">Nama Menu</label><br>
            <input type="text" name="nama" class="form-text"><br>
            <label for="">Harga</label><br>
            <input type="text" name="harga" class="form-text"><br>
            <input type="submit" name="submit" value="Kirim" class="btn-submit">
        </form>
    </div>
</body>
</html>