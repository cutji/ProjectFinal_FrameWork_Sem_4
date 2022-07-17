<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;

}

* {
  box-sizing: border-box;
}

/* Style untuk inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 20px;
  border: 1px solid #ccc;
  margin-top: 9px;
  margin-bottom: 17px;
  resize: vertical;
  
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
  position: absolute;
 left: 50%;
 transform: translate(-50%, -0%);
 bottom: 0;
}

input[type=submit]:hover {
  background-color: #45a049;
  
}

/* Style untuk bagian container/contact  */
.container {
  border-radius: 5px;
  background-color: #fab536;
  padding: 10px;
}

.column {
  width: 50%;
  margin-top: 45px;
  padding: 20px;
  position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
}


.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout -ketika layar kurang dari 600px lebarnya, buat dua kolom bertumpuk satu sama lain, bukan di samping satu sama lain */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<div class="container">
  <div style="text-align:center">
    <h2>PENGADUAN PNL</h2>
    <p>Silahkan Masukkan Data Diri dan Keluhan Anda</p>
  </div>
  <div class="row">
    <div class="column">
    </div>
    <div class="column">
    <div style="align-content:center">
      <form action="mailto:pengaduantes000@gmail.com"method="post" enctype="text/plain">
        <label for="fname">Nama</label>
        <input type="text" id="fnama" name="Nama" placeholder="Nama anda..">
        
        <label for="Jurusan">Jurusan</label>
        <select id="Jurusan" name="Jurusan">
          <option value="Teknik Sipil">Teknik Sipil</option>
          <option value="Teknik Kimia">Teknik Kimia</option>
          <option value="Teknik Mesin">Teknik Mesin</option>
          <option value="Teknik Elektro">Teknik Elektro</option>
          <option value="Tata Niaga">Tata Niaga</option>
          <option value="Teknologi Informasi Komputer">Teknologi Informasi Komputer</option>
        </select>

        <label for="Prodi">Prodi</label>
        <select id="Prodi" name="Prodi">
          <option value="Sarjana Terapan Teknologi Rekayasa Konstruksi Jalan dan Jembatan">Sarjana Terapan Teknologi Rekayasa Konstruksi Jalan dan Jembatan</option>
          <option value="Sarjana Terapan Teknologi Konstruksi Bangunan Gedung">Sarjana Terapan Teknologi Konstruksi Bangunan Gedung</option>
          <option value="Diploma Tiga Teknologi Konstruksi Bangunan Air">Diploma Tiga Teknologi Konstruksi Bangunan Air</option>
          <option value="Diploma Tiga Teknologi Konstruksi Jalan dan Jembatan">Diploma Tiga Teknologi Konstruksi Jalan dan Jembatan</option>
          <option value="Diploma Dua Jalur Cepat Pengukuran dan Penggambaran Tapak Bangunan Gedung">Diploma Dua Jalur Cepat Pengukuran dan Penggambaran Tapak Bangunan Gedung</option>
          <option value="Sarjana Terapan Teknologi Rekayasa Kimia Industri">Sarjana Terapan Teknologi Rekayasa Kimia Industri</option>
          <option value="Diploma Tiga Teknologi Kimia">Diploma Tiga Teknologi Kimia</option>
          <option value="Diploma Tiga Teknologi Pengolahan Minyak dan Gas">Diploma Tiga Teknologi Pengolahan Minyak dan Gas</option>
          <option value="Sarjana Terapan Teknologi Rekayasa Manufaktur">Sarjana Terapan Teknologi Rekayasa Manufaktur</option>
          <option value="Sarjana Terapan Teknologi Rekayasa Pengelasan dan Fabrikasi">Sarjana Terapan Teknologi Rekayasa Pengelasan dan Fabrikasi</option>
          <option value="Diploma Tiga Teknologi Mesin">Diploma Tiga Teknologi Mesin</option>
          <option value="Diploma Tiga Teknologi Industri">Diploma Tiga Teknologi Industri</option>
          <option value="Sarjana Terapan Teknologi Rekayasa Instrumentasi dan Kontrol">Sarjana Terapan Teknologi Rekayasa Instrumentasi dan Kontrol</option>
          <option value="Sarjana Terapan Teknologi Rekayasa Jaringan Telekomunikasi">Sarjana Terapan Teknologi Rekayasa Jaringan Telekomunikasi</option>
          <option value="Sarjana Terapan Teknologi Rekayasa Pembangkit Energi">Sarjana Terapan Teknologi Rekayasa Pembangkit Energi</option>
          <option value="Diploma Tiga Teknologi Listrik">Diploma Tiga Teknologi Listrik</option>
          <option value="Diploma Tiga Teknologi Telekomunikasi">Diploma Tiga Teknologi Telekomunikasi</option>
          <option value="Diploma Tiga Teknologi Elektronika">Diploma Tiga Teknologi Elektronika</option>
          <option value="Magister Terapan Keuangan Islam">Magister Terapan Keuangan Islam</option>
          <option value="Sarjana Terapan Akuntansi Lembaga Keuangan Syariah">Sarjana Terapan Akuntansi Lembaga Keuangan Syariah</option>
          <option value="Sarjana Terapan Manajemen Keuangan Sektor Publik">Sarjana Terapan Manajemen Keuangan Sektor Publik</option>
          <option value="Diploma Tiga Akuntansi">Diploma Tiga Akuntansi</option>
          <option value="Diploma Tiga Administrasi Bisnis">Diploma Tiga Administrasi Bisnis</option>
          <option value="Sarjana Terapan Teknologi Rekayasa Komputer Jaringan">Sarjana Terapan Teknologi Rekayasa Komputer Jaringan</option>
          <option value="Sarjana Terapan Teknik Informatika">Sarjana Terapan Teknik Informatika</option>
          <option value="Sarjana Terapan Teknologi Rekayasa Multimedia">Sarjana Terapan Teknologi Rekayasa Multimedia</option>
        </select>

        <label for="Keluhan">Keluhan Anda</label>
        <textarea id="Keluhan" name="Keluhan" placeholder="Write something.." style="height:170px"></textarea>
        <input  type="submit" value="Submit">
        

      </form>
    </div>
  </div>
</div>

</body>
</html>
