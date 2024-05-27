<?php
    include_once("./connect.php");

    $id = $_GET["id"];

    $query_get_data = mysqli_query($db, "SELECT * FROM staff WHERE id=$id");
    $staff = mysqli_fetch_assoc($query_get_data);

    if(isset($_POST["submit"])){
        $nama = $_POST["nama"];
        $telp = $_POST["telp"];
        $email = $_POST["email"];
        
        $query = mysqli_query($db, "UPDATE staff SET nama='$nama', telp='$telp', email='$email' WHERE id=$id");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Form Edit Staff</title>
</head>
<body>
    <div class="container w-75">
        <h1 class="my-4">Form Edit Staff</h1>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="exampleInputNama1" class="form-label">Nama</label>
                <input value="<?php echo $staff['nama'] ?>" name="nama" type="text" class="form-control" id="exampleInputNama1">
            </div>
            <div class="mb-3">
                <label for="exampleInputTelepon1" class="form-label">Telepon</label>
                <input value="<?php echo $staff['telp'] ?>" name="telp" type="text" class="form-control" id="exampleInputTelepon1">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input value="<?php echo $staff['email'] ?>"name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </form>

        <br>
        <a class="btn btn-primary" href="./staff.php">Kembali ke halaman Buku</a>
    </div>
</body>
</html>