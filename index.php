<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Tugas Basis Data 5</title>
</head>
<body>
    <div class="container">
        <h1><center>Sistem Klinik</center></h1>
        <?php
        include("koneksi.php");
        // query untuk menampilkan data
        $no = 1;
        $sql = 'SELECT * FROM pasien';
        $result = mysqli_query($conn, $sql);
        ?>
        <h3>Tabel Pasien</h3>
        <table style="width: 400px;" border="1">
         <tr>
            <th>No</td>
            <th>ID Pasien</th>
            <th>Nama Pasien</th>
            <th>Jenis Kelamin</th>
            <th>Umur</th>
         </tr>
        <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row ['id_pasien']; ?></td>
                    <td><?= $row ['nama_pasien']; ?></td>
                    <td><?= $row ['jenis_kelamin']; ?></td>
                    <td><?= $row ['umur']; ?></td>
            </tr>
            <?php endwhile; else: ?>
                <tr>
                    <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
            </table>
        <?php
        include("koneksi.php");
        // query untuk menampilkan data
        $no = 1;
        $sql2 = 'SELECT * FROM obat';
        $result = mysqli_query($conn, $sql2);
        ?>
        <h3>Tabel Obat</h3>
        <table border="1">
         <tr>
            <th>No</th>
            <th>ID Obat</th>
            <th>Nama Obat</th>
         </tr>
        <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row ['id_obat']; ?></td>
                    <td><?= $row ['nama_obat']; ?></td>
            </tr>
            <?php endwhile; else: ?>
                <tr>
                    <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
            </table>
        <?php
        include("koneksi.php");
        // query untuk menampilkan data
        $no = 1;
        $sql3 = 'SELECT * FROM dokter';
        $result = mysqli_query($conn, $sql3);
        ?>
        <h3>Tabel Dokter</h3>
        <table border="1">
         <tr>
            <th>No</th>
            <th>ID Dokter</th>
            <th>Nama Dokter</th>
         </tr>
        <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row ['id_dokter']; ?></td>
                    <td><?= $row ['nama_dokter']; ?></td>
            </tr>
            <?php endwhile; else: ?>
                <tr>
                    <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
            </table>
            <?php
        include("koneksi.php");
        // query untuk menampilkan data
        $no = 1;
        $sql4 = 'SELECT * FROM berobat';
        $result = mysqli_query($conn, $sql4);
        ?>
        <h3>Tabel berobat</h3>
        <table border="1">
         <tr>
            <th>No</th>
            <th>ID Berobat</th>
            <th>ID Pasien</th>
            <th>ID Dokter</th>
            <th>Tanggal Berobat</th>
            <th>Keluhan Pasien</th>
            <th>Hasil Diagnosa</th>
            <th>Penatalaksanaan</th>
         </tr>
        <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row ['id_berobat']; ?></td>
                    <td><?= $row ['id_pasien']; ?></td>
                    <td><?= $row ['id_dokter']; ?></td>
                    <td><?= $row ['tgl_berobat']; ?></td>
                    <td><?= $row ['keluhan_pasien']; ?></td>
                    <td><?= $row ['hasil_diagnosa']; ?></td>
                    <td><?= $row ['penatalaksanaan']; ?></td>
            </tr>
            <?php endwhile; else: ?>
                <tr>
                    <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
            </table>
        </div>        
    </div>            
</body>            
</html>