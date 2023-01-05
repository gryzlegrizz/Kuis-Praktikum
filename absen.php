<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="absen.css">
    <title>Absensi Mahasiswa</title>
</head>
<body>
    
<div class="area" >
            <header>
                <h3>Formulir Kehadiran</h3>
            </header>
            
            <form action="proses-absen.php" method="POST">
        <fieldset>
            <p>
                <label for="nama">Nama</label>
                <input type="text" name="nama" placeholder="Nama Lengkap" />
            </p>
            <p>
                <label for="npm">NPM</label>
                <input type="number" name="npm" placeholder="NPM" />
            </p>
            <p>
                <label for="jurusan">Jurusan</label>
                <select name="jurusan">
                    <option>D4 Teknik Informatika</option>
                    <option>D3 Teknik Informatika</option>
                    <option>D4 Manajemen Bisnis</option>
                    <option>D3 Manajemen Bisnis</option>
                    <option>D4 Logistik Bisnis</option>
                    <option>D3 Logistik Bisnis</option>
                </select>
            </p>
            <p>
                <label for="tanggal">Tanggal</label>
                <input type="date" name="date">
            </p>
            <p>
                <label for="keterangan">Keterangan</label>
                <select name="keterangan" id="">
                    <option>Hadir</option>
                    <option>Sakit</option>
                    <option>Izin</option>
                </select>
            </p>
            <p class="btn">
                <input type="submit" value="Absen" name="absen" class="btnabsen">
            </p>
        </fieldset>
    </form>
</div >
</body>
</html>