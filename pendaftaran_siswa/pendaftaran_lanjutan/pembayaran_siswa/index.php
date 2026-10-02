<?php
include 'koneksi.php';

$query = mysqli_query($conn,"
SELECT 
siswa.nama_siswa,
siswa.kelas,
pembayaran.no_trans,
pembayaran.tanggal,
detail_pembayaran.keterangan,
detail_pembayaran.jumlah
FROM siswa
INNER JOIN pembayaran
ON siswa.nis = pembayaran.nis
INNER JOIN detail_pembayaran
ON pembayaran.no_trans = detail_pembayaran.no_trans
");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pembayaran Siswa</title>
</head>
<body>

<h2>Data Pembayaran Siswa</h2>

<table border="1" cellpadding="10">

<tr>
    <th>Nama Siswa</th>
    <th>Kelas</th>
    <th>No Transaksi</th>
    <th>Tanggal</th>
    <th>Keterangan</th>
    <th>Jumlah</th>
</tr>

<?php while($data = mysqli_fetch_array($query)) { ?>

<tr>
    <td><?= $data['nama_siswa']; ?></td>
    <td><?= $data['kelas']; ?></td>
    <td><?= $data['no_trans']; ?></td>
    <td><?= $data['tanggal']; ?></td>
    <td><?= $data['keterangan']; ?></td>
    <td><?= $data['jumlah']; ?></td>
</tr>

<?php } ?>

</table>

</body>
</html>