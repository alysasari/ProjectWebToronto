
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body  style="background : url(image/bg.jpg)">
    <br>
    <br>
<br> <h2 style="margin-left:440px;color:white">Data Dosen University of Toronto</h2><br><br>
<table border = 1 class="table table-striped table-bordered border-secondary" style="margin:10px;padding:10px">
    
    <thead>
            <tr>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Prodi</th>
                <th scope="col">Angkatan</th>
                <th scope="col">Opsi</th>
            </tr>
    </thead>
    <tbody>
         <?php
        include 'koneksi.php'; 
       
        $query = mysqli_query($connect, "SELECT * from dosen");
        while ($data = mysqli_fetch_array($query)) 
        {?>
   
            <tr>
                <td scope="row"><?=$data['Id_dosen']; ?></td>
                <td scope="row"><?=$data['nama']; ?></td>
                <td scope="row"><?=$data['jeniskelamin']; ?></td>
                <td scope="row"><?=$data['matkul']; ?></td>
                <td scope="row"><?=$data['fakultas']; ?></td>
                <td scope="row">
                    <a href="Editdosen.php?=nim<?= $data['Id_dosen'] ; ?>" class="btn btn-primary">Edit</a>
                    <a href="Hapusdosen.php?=nim<?=$data['Id_dosen'] ; ?>" class="btn btn-primary">Hapus</a>
                </td>
            </tr>
           
        <?php 
        }
        ?>
    </tbody> 
</table><br>
<a href="inputdosen.php" class="btn btn-primary">Tambah Data</a>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
