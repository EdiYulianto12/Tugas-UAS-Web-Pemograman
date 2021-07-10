<!DOCTYPE html>
<html lang="en">
<head>
  <title>Silver Fang</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style type="text/css">
    footer{
      background-color: rgb(107, 229, 210);
      margin-top: -285px;
      height: 300px;
    }
    .bot{
  width: 381px;
  height: 200px;
  position: relative;

  
  margin-left: 71.5%;
  background-color: lightgreen;
  top: -50px;
  text-align: center;
}
.bot2{
  text-align: center;
  width: 575px;
  height: 200px;
  position: relative;
  top: 166px;
  margin-left: 29%;

  background-color: lightblue;
}
.bot3{
  text-align: center;
  width: 389px;
  height: 200px;
  position: relative;
  top: -266px;

  background-color: lightgreen;
}
.heder{
  width: cover;
  height: 80px;
  text-align: center;
  background-color: rgb(107, 229, 210);

}
.text{
  font-family: sans-serif;
  font-size: 50px;
  font-color:  lightred;
  text-shadow: 50px;
}
.samping{
  width: 700px;
  height: 100%;
  font-color: lightgreen;

}
.kotak{
  border-top: 100px;
  border-bottom: 100px;
  border-left: 100px;
  border-right: 100px;
  background-color: lightblue;
  border-color: yellow;
}
.gas{
  text-indent: 10px;
}
.tran{

  text-indent: 20px;
}
.catatan{
  font-family: sans-serif;
 text-align: justify;
}

  </style>

</head>
<body>
 <div class="heder">
    <p class="text" >APLIKASI PERPUSTAKAAN</p></div>

<nav class="navbar navbar-expand-sm bg-dark">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="anggota.php">Anggota</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pustakawan.php">Putakawan</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pustaka.php">Pustaka</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="transaksi.php">Transaksi</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="about.php">About</a>
    </li>
    <li class="nav-item">
        <div class="samping">
        <a class="nav-link"><marquee behavior="scroll" direction="left" onmouseover="stop()" onmouseout="start()"> Go Up And Never Stop</a></div></marquee>
      </li>   
  </ul>
</nav>

<table align="center" border="0" cellpadding="2" cellspacing="0" width="">
  <tr>
    <td  width="650" class=" catatan" ><font color="black"><br><h4><b><center>Catatan</h4></b></center><br>
      <p class=" tran">Dalam peminjaman/pengembalian buku, perpustakaan menerapkan sistem pelayanan tertutup, dimana apabila pengunjung ingin membaca/meminjam suatu buku, yang bersangkutan harus memintanya terlebih dahulu kepada petugas, bukan mengambil langsung dari rak buku. </p>
      <p><b>1. Peminjaman Buku</p></b>
      <li> Cari nomor panggil (call number) buku yang ingin dibaca melalui katalog buku atau komputer pencarian (searching). Untuk pencarian dengan menggunakan komputer, pencarian dapat dilakukan berdasarkan judul, pengarang dan subjek.</li>
 <li>Lihat detail dari katalog-katalog hasil pencarian di komputer, apabila sesuai dengan buku yang ingin dibaca catat nomor panggilnya.</li>
<li>Serahkan catatan nomor panggil tersebut kepada petugas bersamaan dengan Kartu Tanda Mahasiswa (KTM), jumlah maksimal buku yang dibaca adalah 2 (dua) buah. Petugas akan mengambilkannya untuk anda.</li>
<li>Setelah buku diterima, anda belum dapat membawanya pulang. Anda harus menyerahkan buku tersebut untuk dicatat sebagai transaksi peminjaman anda. Jika selesai, anda dapat membawa pulang buku tersebut.</li>
<li>Lama peminjaman untuk mahasiswa adalah 2 (dua) minggu dan dapat diperpanjang sebanyak 1 (satu) kali sehingga total peminjaman plus perpanjangan peminjaman adalah 4 (empat) minggu.</li></p>
<p><b>2. Pengembalian Buku</p></b>

<li>Serahkan buku yang ingin dikembalikan bersama dengan KTM anda, sampaikan kalau anda ingin mengembalikan buku.</li>
<li>Petugas akan melihat data transaksi peminjaman buku tersebut dan menghitung denda keterlambatannya.</li>
<li>Apabila masa peminjaman telah melewati batas lama peminjaman, maka anda akan dikenakan denda peminjaman. Serahkan uang denda sebesar yang disebutkan petugas.</li>
<li>Petugas akan mengembalikan KTM anda.</li></p>

</b></h4></font>
</td>
    <td width="350"></td>
    <td width="340" align="center" class="kotak">

      <a href="transaksi/input.php"><img src="transaksi/pust.jpg" width="100" height="100">
      <a href="transaksi/input.php">Tambah Transaksi</a><br><br>

       <a href="transaksi/daftar.php"><img src="transaksi/daftar.png" width="100" height="100">
      <a href="transaksi/daftar.php">Daftar Transaksi</a><br><br>


      <a href="transaksi/koreksi.php"><img src="transaksi/cari.png" width="100" height="100">
        <a href="transaksi/koreksi.php">Cari Transaksi</a></a><br><br>

        <a href="transaksi/hapus.php"><img src="transaksi/hapus.png" width="100" height="100">
        <a href="transaksi/hapus.php">Hapus Transaksi</a></a><br><br>

    </td>
  </tr>
</table>
 <div >
    <p class="bot2"><br><u>Kontak</u><br><br>
     Email : ediyulianto166@gmail.com<br>
    No WA : 082282526021</p>
  <p class="bot"><u><br>Support</u><br>
    <br>
    W3school.com<br>
   Bootstrap.com<br>
  PHP.net</p>
  <p class="bot3"><u><br>Alamat</u><br><br>
    Kosan : Gerbang Belakang SMK N 4 Kota Bengkulu,<br> Jl. Enggano 6, Pasar Bengkulu, Kota Bengkulu<br><br>
  Rumah : Jl.RD II , Desa Suka Makmur, Kec. Marga Sakti Seblat, Kab. Bengkulu Utara, Bengkulu</p>
</div> 
<br>
<footer >
   <h2><center><font color="white">@2021 | Edi Yulianto</h2></center></font></center></h2>

   <table border="0" cellpadding="10" cellspacing="10" align="center">
     <tr>
       <th colspan="4"><center><h5>About</h5></center></th colspan="2">
     </tr>
     <tr>
       <td width=""><center><img src="foto.png" width="100" height="100" border="1"></center></td>
       <td width="520" ><p><font>Nama  : Edi Yulianto</p>
              <p>NPM   : 1955201090</p>
            <p class="gas"><font size="2">Misi hidup saya untuk mencapai visi-visi saya adalah pertama dengan belajar sebaik<br>
             mungkin dalam perkuliahan sehingga ilmu yang saya miliki
              dapat digunakan di masa depan dan dapat membantu orang lain. </p></font>
            </td>
            <td width="100"></td>
            <td>
              <img src="tl.png" width="40" height="40">082282526021<br><br>
               <img src="em.png" width="40" height="40">ediyulianto166@gmail.com<br><br>
                <img src="yt.png" width="40" height="40">GakPunyaChanel<br>


            </td>
     </tr>
   </table>
</footer>