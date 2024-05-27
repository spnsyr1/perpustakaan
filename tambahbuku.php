<?php
    include_once("./connect.php");

    if(isset($_POST["submit"])){
        $nama = $_POST["nama"];
        $isbn = $_POST["isbn"];
        $unit = $_POST["unit"];
        
        $query = mysqli_query($db, "INSERT INTO buku VALUES(
            NULL, '$nama', '$isbn', $unit
        )");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Form Tambah Buku</title>
</head>
<body>
    <div class="container w-75">
        <h1 class="my-4">Form Tambah Buku</h1>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="exampleInputNama1" class="form-label">Nama</label>
                <input name="nama" type="text" class="form-control" id="exampleInputNama1">
            </div>
            <div class="mb-3">
                <label for="exampleInputISBN1" class="form-label">ISBN</label>
                <input name="isbn" type="text" class="form-control" id="exampleInputISBN1">
            </div>
            <div class="mb-3">
                <label for="exampleInputUnit1" class="form-label">Unit</label>
                <input name="unit" type="number" class="form-control" id="exampleInputUnit1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>