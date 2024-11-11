<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Pendaftaran Tugas Akhir</title>
    <link rel="stylesheet" href="http://localhost/projectpplbo/user/css/dasboardStyle.css">
</head>
<body>
    <div class="overlay-container">
        <div class="navbar">
            <img src="http://localhost/projectpplbo/user/css/logo.png" alt="Logo"  class="logo">
            <span class="university-name">Universitas Sriwijaya</span>
            <form action="dasb/logout" method="post">
                <button type="logout" name="logout" class="logout">Logout</button>
            </form>
        </div>
        <h1>Sistem Informasi Pendaftaran Tugas Akhir</h1>
    </div>
    <div class="overlay-box"></div>
    <img src="http://localhost/projectpplbo/user/css/belajar.jpg" alt="gambarDasb" class="overlay">
    <div class="centered">
        <div class="menu">
            <div class="menu-item">
                <img src="http://localhost/projectpplbo/user/css/mahasiswa.png" alt="Logo">
                <form action="profl/index" method="post">
                    <button type="profile" name="profile">Profil Mahasiswa</button>
                </form>
            </div>
            <div class="menu-item">
                <img src="http://localhost/projectpplbo/user/css/dosen.png" alt="Logo">
                <form action="dosp/index" method="post">
                    <button type="dospem" name="dospem">Dosen Pembimbing TA</button>
                </form>
            </div>
            <div class="menu-item">
                <img src="http://localhost/projectpplbo/user/css/formulir.png" alt="Logo">
                <form action="daft/index" method="post">
                    <button type="daftar" name="daftar">Pendaftaran TA</button>
                </form>
            </div>
        </div>
    </div>
    <div class="footbar">
        <p>@projectpplbo - Kelompok 4a</p>
    </div>
</body>
</html>
