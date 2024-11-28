<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Output Sign in</title>
    <link rel = "stylesheet" href= "style.css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>Selamat Datang,<?php $nama ?> </h1>
<table border = '1'>
    <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Major</th>
            <th>Email</th>
            <th> 
                Option     
            </th>
     </tr>
    <?= 

    include 'koneksi.php';
    $query = mysqli_query ($connect," SELECT * FROM datamhs ");
    while ($data = mysqli_fetch_array ($query))
    {
    ?>
       
        <tr>
            
            <td></td>
            <td><? $data ["prodi "]?></td>
            <td><?= $data["email"] ?></td>
            <td>
                <a href="hapus.php">Delete</a>
                <a href="ubah.php">Edit</a>
            </td>
        </tr>



    <?php }
    ?>

 </table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>