<?php
    include_once("./connect.php");

    $id = $_GET["id"];

    $query_get_data = mysqli_query($db, "SELECT * FROM buku WHERE id=$id");
    $buku = mysqli_fetch_assoc($query_get_data);

    if(isset($_POST["submit"])){
        $nama = $_POST["nama"];
        $isbn = $_POST["isbn"];
        $unit = $_POST["unit"];
        
        $query = mysqli_query($db, "UPDATE buku SET nama='$nama', isbn='$isbn', unit=$unit WHERE id=$id");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Form Edit Buku</title>
</head>
<body>
    <div class="container w-75">
        <h1 class="my-4">Form Edit Buku</h1>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="exampleInputNama1" class="form-label">Nama</label>
                <input value="<?php echo $buku['nama'] ?>" name="nama" type="text" class="form-control" id="exampleInputNama1">
            </div>
            <div class="mb-3">
                <label for="exampleInputISBN1" class="form-label">ISBN</label>
                <input value="<?php echo $buku['isbn'] ?>" name="isbn" type="text" class="form-control" id="exampleInputISBN1">
            </div>
            <div class="mb-3">
                <label for="exampleInputUnit1" class="form-label">Unit</label>
                <input value="<?php echo $buku['unit'] ?>" name="unit" type="number" class="form-control" id="exampleInputUnit1">
            </div>
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </form>
        
        <br>
        <a class="btn btn-primary" href="./buku.php">Kembali ke halaman Buku</a>
    </div>
</body>
</html>