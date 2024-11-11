<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Pendaftaran Tugas Akhir</title>
    <link rel="stylesheet" href="http://localhost/projectpplbo/user/css/dosenStyle.css">
</head>
<body>
    <div class="container">
        <h2>Dosen Pembimbing</h2>
        <table>
            <?php foreach($data['dosen'] as $cekDosen) : ?>
                <tr>
                    <td>NIP:</td>
                    <td><?=$cekDosen['NIP']?></td>
                </tr>
                <tr>
                    <td>Nama Dosen:</td>
                    <td><?=$cekDosen['nama_dosen']?></td>
                </tr>
                <tr>
                    <td>Nomor Telepon:</td>
                    <td><?=$cekDosen['telp']?></td>
                </tr>
                <tr>
                    <td>Email Dosen:</td>
                    <td><?=$cekDosen['email']?></td>
                </tr>
            <?php endforeach; ?> 
        </table>
        <form action="kembali" method="post">
            <button type="submit" name="kembali">Kembali</button>
        </form>
    </div>
</body>
</html>
