<?php
include("config.php");

if(isset($_POST['absen'])){

    $nama = $_POST['nama'];
    $npm = $_POST['npm'];
    $jurusan = $_POST['jurusan'];
    $tanggal = $_POST['tanggal'];
    $keterangan = $_POST['keterangan'];

    $sql = "INSERT INTO mahasiswa (nama, npm, jurusan, tanggal, keterangan) VALUE ('$nama', '$npm', '$jurusan', '$tanggal', '$keterangan')";
    $query = mysqli_query($db, $sql);

    if( $query ){
        header('Location: index.php?status=sukses');
    } else{
        header('location: index.php?status=gagal');
    }
}else{
    die("Akses dilarang...");
}
?>