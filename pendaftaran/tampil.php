<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>tampil</title>
</head>
<body>
    <h3>Tampil</h3>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NIK</th>
                <th>Email</th>
                <th>Password</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "pengaturan.php";
        $qry_user=mysqli_query($conn,"select * from user");
            $no=0;
            while($data_user=mysqli_fetch_array($qry_user)){
            $no++;?>
<tr>              <td><?=$no?></td>
                  <td><?=$data_user['Nama']?></td>
                  <td><?=$data_user['NIK']?></td>
                  <td><?=$data_user['Email']?></td>
                  <td><?=$data_user['Password']?></td> 
                  <td><a href="ubah_daftar.php?id_daftar=<?=$data_user['id_daftar']?>" 
                  class="btn btn-success">Ubah</a> | <a 
                  href="hapus_daftar.php?id_daftar=<?=$data_user['id_daftar']?>" 
                  onclick="return confirm('Apakah anda yakin menghapus data ini?')" 
                  class="btn btn-danger">Hapus</a></td>


            </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>