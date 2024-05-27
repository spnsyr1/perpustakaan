<?php
    session_start();
    if(!isset($_SESSION['email'])){
        header("Location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Aplikasi Perpustakaan</title>
</head>
<body>
    <div class="container w-75">
        <h1 class="my-4">Aplikasi Perpustakaan</h1>
        <a class="btn btn-secondary" href="./buku.php">Lihat daftar buku</a>
        <a class="btn btn-success" href="./staff.php">Lihat daftar staff</a>
        <br><br>
        <form method="POST" action="./logout_process.php">
            <button class="btn btn-primary">Logout</button>
        </form>
    </div>
</body>
</html>