<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem Informasi Pendaftaran Tugas Akhir</title>
  <link rel="stylesheet" href="http://localhost/projectpplbo/user/css/loginStyle.css">
</head>
<body>
  <div class="container">
    <div class="left">
      <div class="welcome-text">
        <h1>Sistem Informasi Pendaftaran Tugas Akhir</h1>
        <p>Selamat datang di Sistem Informasi Pendaftaran Tugas Akhir Fasilkom! Silahkan melakukan login 
          dengan <br> memasukkan NIM, Jurusan dan Password.</p>
      </div>
      <img src="http://localhost/projectpplbo/user/css/unsri.jpg" alt="Gambar">
      <div class="overlay"></div>
    </div>
    <div class="right">
      <div class="form-container">
      <form action="log/login" method="post">
        <h1>Login</h1>
        <?php if(isset($_SESSION['error'])): ?>
          <p class="error"><?php echo $_SESSION['error']; ?></p>
          <?php unset($_SESSION['error']);?>
        <?php endif; ?>
        <label for="NIM">NIM:</label>
        <input type="text" id="NIM" name="NIM" autocomplete="off" required/>
        <label for="Jurusan">Jurusan:</label>
        <input type="text" id="Jurusan" name="Jurusan" autocomplete="off" required/>
        <label for="Password">Password:</label>
        <input type="password" id="Password" name="Password" autocomplete="off" required/>
        <button type="login" name="login">Login</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
