<table border = 1>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Prodi</th>
                <th>Angkatan</th>
                <th>Opsi</th>
            </tr>
         <?php
        include 'koneksi.php'; 
       
        $query = mysqli_query($connect, "SELECT * from mahasiswa");
        while ($data = mysqli_fetch_array($query)) {?>
        
            <tr>
                <td><?= $data['nim']; ?></td>
                <td><?=$data['nama']; ?></td>
                <td><?=$data['jenis_kelamin']; ?></td>
                <td><?=$data['prodi']; ?></td>
                <td><?=$data['angkatan']; ?></td>
                <td>
                    <a href="Edit.php?=nim<?= $data['nim']; ?>">Edit</a>
                    <a href="Hapus.php?=nim<?=$data['nim']; ?>">Hapus</a>
                </td>
            </tr>
    
    
        <?php 
        }
        ?>
</table>