<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Pendaftaran Tugas Akhir</title>
    <link rel="stylesheet" href="http://localhost/projectpplbo/user/css/daftarStyle.css">
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
    <h2>Pendaftaran Tugas Akhir</h2>
    <form action="submit" method="post" enctype="multipart/form-data">
    <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" autocomplete="off" required/><br><br>

        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" autocomplete="off" required/><br><br>

        <label for="jurusan">Jurusan:</label>
        <input type="text" id="jurusan" name="jurusan" autocomplete="off" required/><br><br>
        
        <label for="judul_ta">Judul Tugas Akhir:</label>
        <input type="text" id="judul_ta" name="judul_ta" autocomplete="off" required/><br><br>
        
        <label for="proposal">Proposal yang Telah Disetujui Dosen Pembimbing:</label>
        <input type="file" id="proposal" name="proposal" required/><br><br>
        
        <label for="khs_per_semester">KHS per Semester:</label>
        <input type="file" id="khs_per_semester" name="khs_per_semester" required/><br><br>
        
        <label for="bukti_ukt">Bukti UKT:</label>
        <input type="file" id="bukti_ukt" name="bukti_ukt" required/><br><br>

        <br>
        <button type="submit" name="submit">Submit</button>   
    </form>
    <form action="kembali" method="post">
        <button type="submit" name="kembali">Kembali</button>
    </form>
    </div>

    <!-- Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Selamat, data telah berhasil disubmit!</p>
            <form action="kembali1" method="post">
                <button type="submit" name="kembali">Kembali</button>
            </form>
        </div>
    </div>

    <script>
    var modal = document.getElementById("myModal");
    var span = document.getElementsByClassName("close")[0];

    function showModal() {
        modal.style.display = "block";
    }

    span.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    document.addEventListener("DOMContentLoaded", function() {
        var form = document.querySelector("form");
        form.addEventListener("submit", function(event) {
            event.preventDefault(); 
            var formData = new FormData(form);
            var xhr = new XMLHttpRequest(); 
            xhr.open("POST", form.action, true); 
            xhr.onload = function() {
                if (xhr.status === 200) {
                    showModal();
                } else {
                    console.error("Error:", xhr.statusText);
                }
            };
            xhr.send(formData); 
        });
    });
</script>

</body>
</html>
