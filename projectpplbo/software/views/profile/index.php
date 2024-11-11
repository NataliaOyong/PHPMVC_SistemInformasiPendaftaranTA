<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem Informasi Pendaftaran Tugas Akhir</title>
  <link rel="stylesheet" href="http://localhost/projectpplbo/user/css/profileStyle.css">
  <style>
    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content {
      background-color: #fefefe;
      margin: 2% auto; 
      padding: 30px;
      border: 5px solid #070147; 
      width: 70%; 
      height: 15%;
    }

    .close {
      color: #070147; 
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      text-decoration: none;
      cursor: pointer;
    }

    button[name="kembali1"] {
      background-color: #070147; 
      color: #fefefe; 
      border: none; 
      width: 100px; 
      height: 40px; 
    }
  </style>
</head>
<body>
  <div class="forms">
    <h2>Profil Mahasiswa</h2>
    <?php foreach($data['profile'] as $profiles) : ?>
    <form id="editForm" action="edit" method="post">
      <p>NIM: <?=$profiles['nim']?></p>
      <p>Nama Mahasiswa: <?=$profiles['nama']?></p>
      <label for="alamat">Alamat:</label>
      <input type="text" id="alamat" name="alamat" autocomplete="off" required value="<?=$profiles['alamat']?>"><br><br>
      
      <label for="tgl_kelahiran">Tanggal Lahir:</label>
      <input type="date" id="tgl_kelahiran" name="tgl_kelahiran" autocomplete="off" required value="<?=$profiles['tgl_kelahiran']?>"><br><br>
      
      <label for="tmpt_kelahiran">Tempat Lahir:</label>
      <input type="text" id="tmpt_kelahiran" name="tmpt_kelahiran" autocomplete="off" required value="<?=$profiles['tmpt_kelahiran']?>"><br><br>
      
      <label for="telp">Nomor Telepon:</label>
      <input type="telp" id="telp" name="telp" autocomplete="off" required value="<?=$profiles['telp']?>"><br><br>
      
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" autocomplete="off" required value="<?=$profiles['email']?>"><br><br>
      
      <label for="kewarganegaraan">Kewarganegaraan:</label>
      <input type="text" id="kewarganegaraan" name="kewarganegaraan" autocomplete="off" required value="<?=$profiles['kewarganegaraan']?>"><br><br>
      
      <label for="agama">Agama:</label>
      <input type="text" id="agama" name="agama" autocomplete="off" required value="<?=$profiles['agama']?>"><br><br>
      
      <label for="status_perkawinan">Status Perkawinan:</label>
      <input type="text" id="status_perkawinan" name="status_perkawinan" autocomplete="off" required value="<?=$profiles['status_perkawinan']?>"><br><br>
      
      <br>
      <button type="button" onclick="editProfile()">Edit</button>   
    </form>
    <form action="kembali" method="post">
        <button type="submit" name="kembali">Kembali</button>
    </form>
    <?php endforeach; ?>
  </div>

  <!-- Modal -->
  <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <p>Selamat, data profile berhasil diedit!</p>
      <form action="kembali" method="post">
          <button type="submit" name="kembali1">Kembali</button>
      </form>
    </div>
  </div>

  <script>
  var modal = document.getElementById("myModal");
  var span = document.getElementsByClassName("close")[0];

  function showModal() {
    modal.style.display = "block";
  }

  function editProfile() {
    var form = document.getElementById("editForm");
    var formData = new FormData(form);


    var xhr = new XMLHttpRequest();
    xhr.open("POST", "edit", true);
    xhr.onload = function() {
      if (xhr.status === 200) {
        showModal();
      } else {
        console.error("Error:", xhr.statusText);
      }
    };
    xhr.send(formData);
  }

  span.onclick = function() {
    modal.style.display = "none";
  }

  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
  </script>
</body>
</html>
