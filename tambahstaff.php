<?php
    include_once("./connect.php");

    if(isset($_POST["submit"])){
        $nama = $_POST["nama"];
        $telp = $_POST["telp"];
        $email = $_POST["email"];
        
        $query = mysqli_query($db, "INSERT INTO staff VALUES(
            NULL, '$nama', '$telp', '$email'
        )");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Form Tambah Staff</title>
</head>
<body>
    <div class="container w-75">
        <h1 class="my-4">Form Tambah Staff</h1>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="exampleInputNama1" class="form-label">Nama</label>
                <input name="nama" type="text" class="form-control" id="exampleInputNama1">
            </div>
            <div class="mb-3">
                <label for="exampleInputTelepon1" class="form-label">Telepon</label>
                <input name="telp" type="text" class="form-control" id="exampleInputTelepon1">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>