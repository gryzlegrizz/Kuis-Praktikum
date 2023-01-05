<?php include ("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="list.css">
    <title>List Presensi</title>
</head>
<body>
    <header>
        <h3>List Absensi</h3>
    </header>
    <nav>
        <a href="absen.php">[+] Tambah Data</a>
    </nav><br>
<div class="wrapper">
    <table class="tabellist" border="1">
        <thead>
            <tr>
                <th>No</th>
                <th class="nm">Nama</th>
                <th class="npm">NPM</th>
                <th class="j">Jurusan</th>
                <th class="dt">Tanggal</th>
                <th class="ketr">Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $sql = "SELECT * FROM mahasiswa";
            $query = mysqli_query($db, $sql);

            while($mhsw = mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td>".$mhsw['id']."</td>";
                echo "<td>".$mhsw['nama']."</td>";
                echo "<td>".$mhsw['npm']."</td>";
                echo "<td>".$mhsw['jurusan']."</td>";
                echo "<td>".$mhsw['tanggal']."</td>";
                echo "<td>".$mhsw['keterangan']."</td>";

                echo "<td>";
                echo "<a href='form-edit.php?id=".$mhsw['id']."'>Edit</a> | ";
                echo "<a href='hapus.php?id=".$mhsw['id']."'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>