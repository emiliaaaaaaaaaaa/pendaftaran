<?php
require 'pengaturan.php';
if(isset($_POST["submit"])){
    $nama = $_POST["nama"];
    $nik = $_POST["nik"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $duplicate = mysqli_query($conn, "SELECT * FROM pendaftaran WHERE nama = '$nama' OR email = '$email'");
    if(mysqli_num_rows($duplicate) > 0){
        echo
        "<script> alert('Nama dan Email sudah dipakai'); </script>";
    }
    else{
        if($password){
            $query = "INSERT INTO pendaftaran VALUES('','$nama', '$nik', '$email', '$password')";
            mysqli_query($conn,$query);
            echo
            "<script> alert('Login Berhasil'); </script>";
        }
        else{
            echo
            "<script> alert('Password sudah terpakai'); </script>";
        }
        
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<body>
    <h2>Formulir Pendaftran</h2>
    <form class="" action="" method="post" autocomplete="off">
        <label for="nama">Nama : </label>
        <input type="text" name="nama" id = "nama" required value=""> <br>
        <label for="nik">NIK : </label>
        <input type="text" name="nik" id = "nik" required value=""> <br>
        <label for="email">Email : </label>
        <input type="text" name="email" id = "email" required value=""> <br>
        <label for="password">Password : </label>
        <input type="text" name="password" id = "password" required value=""> <br>
        <button type ="submit" name="submit">Login</button>
</form>
</body>
</html>