<?php include 'Koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/table.css">
    <title>Daftar Warga</title>
</head>
<body>
    <h2>Daftar Warga</h2>
    <a href="Tambah.php">Tambah Warga</a>
    <table border="1" cellpadding="10">
        <tr>
            <th>No</th><th>Nama_Lengkap</th><th>Nomor_kk</th><th>NIK</th><th>Alamat</th><th>Status</th><th>Iuran</th>
        </tr>
        <?php
        $no = 1;
        $warga = mysqli_query($conn, "SELECT * FROM warga");
        while ($row = mysqli_fetch_array($warga)) {
            echo "<tr>
                    <td>$row[id]</td>
                    <td>$row[nama_lengkap]</td>
                    <td>$row[nomor_kk]</td>
                    <td>$row[nik]</td>
                    <td>$row[alamat]</td>
                    <td>$row[status]</td>
                    <td>$row[iuran]</td>
                    <td>
                        <a href='edit.php?id=$row[id]'>Edit</a> |
                        <a href='hapus.php?id=$row[id]' onclick='return confirm(\"Hapus?\")'>Hapus</a>
                    </td>
                  </tr>";
            $no++;
        }
        ?>
    </table>
</body>
</html>
