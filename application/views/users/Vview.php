<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <!-- animate css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- my css -->
    <link rel="stylesheet" href="http://localhost/vaccinego/assets/css/index.css">
    <title>Go Vaccine</title>
  </head>
  <body>
      <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow p-3 mb-5 bg-white rounded fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">GO VACCINE</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-link page-scrollx "href="#beranda">Beranda</a>
                <a class="nav-link page-scrollx" href="#tentang">Tentang</a>
                <a class="nav-link page-scrollx" href="#jadwal">Daftar Vaksinasi</a>
                <a class="nav-link page-scrollx" href="#cara">Cara Pendaftaran</a>
                <a class="nav-link page-scrollx" href="#kontak">Kontak</a>
            </div>
            </div>
        </div>
        </nav>
        <br id="beranda">
        <!-- jumbotron -->
        <div class="jumbotron jumbotron-fluid ">
            <div class="container d-flex justify-content-around flexi ">
            <div class="container">
              <img src="http://localhost/vaccinego/assets/img/Medicine.gif" class="ukg" alt="" width="450px">
            </div>
            <div class="container">
              <h1 class="text-primary">Sistem Vaksinasi</h1>   
              <h1 class="text-secondary"><u>Solutions Information</u></h1>   
              <h1 class="text-primary">Vaksinasi COVID-19</h1>
              <br><br><br>
                <p>Tetap menjaga kesehatan dan tetap menjalankan protokol <br> kesehatan. Segera!! Daftarkan Diri dan Keluarga Anda Untuk <span class="text-secondary"> Vaksinasi Covid-19 </span></p>
              </div>
            </div>
            </div>
        </div>
        <br id="tentang"><br><br>
        <!-- gambar -->
        <div class="container" >
            <img src="http://localhost/vaccinego/assets/img/infobuatansendiri2.png" class="img-fluid" alt="...">
        </div>
        <br id="jadwal">
        <!-- flexbox jadwal -->
        <div class="container-fluid pinky-box shadow p-3 mb-5 rounded">
            <br><br>
            <div class="container text-center" >
                <h2 class="text-primary" >Daftar Vaksinasi</h2>
                <span class="text-secondary pink" >Info Beberapa Jadwal Vaksinasi Di Fasilitas Kesehatan yang ada di sekitar Kota</span>  
            </div>
            <br><br>
            <!-- kelas kontainer semua kotak -->
          <div class="container flexible" >
            <!-- container flex 123 -->
            <div class="flexi justify-content-around ">             
              <!-- card 1 -->
              <div class="kotak mtop d-flex p-2 m-2 bd-highlight efek border border-white rounded ">
                <center class="mx-auto"><img src="http://localhost/vaccinego/assets/img/hospital.png" alt="" width="50px"></center>
              <div class="container ">
                <h5 class="title"> <?php echo anchor(base_url().'Vcontroller/page_kedua/1','Puskesmas Marga Jaya'); ?></h5>
                <!-- <a href="page2/page2mjaya.html" target="self"> Puskesmas Marga Jaya </a>   -->
                <p class="paragraf">Kelurahan Marga Jaya,Kecamatan Bekasi Selatan</p>
              </div>
              </div>
              <!-- card 2 -->
              <div class="kotak mtop d-flex p-2 m-2 bd-highlight efek border border-white rounded">
                <center class="mx-auto"><img src="http://localhost/vaccinego/assets/img/hospital.png" alt="" width="50px"></center>
              <div class="container ">
                <h5 class="title"> <?php echo anchor(base_url().'Vcontroller/page_kedua/2','Puskesmas Kaliabang'); ?></h5>  
                <p class="paragraf">Kelurahan Kaliabang,Kecamatan Bekasi Selatan</p>
              </div>
              </div>
              <!-- card 3 -->
              <div class="kotak d-flex p-2 m-2 bd-highlight efek border border-white rounded">
                <center class="mx-auto"><img src="http://localhost/vaccinego/assets/img/hospital.png" alt="" width="50px"></center>
              <div class="container ">
                <h5 class="title"> <?php echo anchor(base_url().'Vcontroller/page_kedua/3','Puskesmas Jati Warna'); ?></h5 >  
                <p class="paragraf">Kelurahan Jati Warna,Kecamatan Pondok Melati</p>
              </div>
              </div>
            </div>
              <br><br>
            <!-- container flex 456 -->
            <div class="flexi justify-content-around  "> 
              <!-- card 4 -->
              <div class="kotak d-flex p-2 m-2 bd-highlight efek border border-white rounded">
                <center class="mx-auto"><img src="http://localhost/vaccinego/assets/img/hospital.png" alt="" width="50px"></center>
              <div class="container ">
                <h5 class="title"> <?php echo anchor(base_url().'Vcontroller/page_kedua/4','Puskesmas Depok Jaya'); ?></h5>  
                <p class="paragraf">Kelurahan Depok Jaya,Kecamatan Pancoran Mas</p>
              </div>
              </div>
              <!-- card 5 -->
              <div class="kotak d-flex p-2 m-2 bd-highlight efek border border-white rounded">
                <center class="mx-auto"><img src="http://localhost/vaccinego/assets/img/hospital.png" alt="" width="50px"></center>
              <div class="container ">
                <h5 class="title"> <?php echo anchor(base_url().'Vcontroller/page_kedua/5','Puskesmas Ratu Jaya'); ?></h5>  
                <p class="paragraf">Kelurahan RatuJaya,Kecamatan Cipayung</p>
              </div>
              </div>
              <!-- card 6 -->
              <div class="kotak d-flex p-2 m-2 bd-highlight efek border border-white rounded">
                <center class="mx-auto"><img src="http://localhost/vaccinego/assets/img/hospital.png" alt="" width="50px"></center>
              <div class="container ">
                <h5 class="title"> <?php echo anchor(base_url().'Vcontroller/page_kedua/6','Puskesmas Villa Pertiwi'); ?></h5>  
                <p class="paragraf">Kelurahan SukaMaju,Kecamatan Cilodong</p>
              </div>
              </div>
            </div>
            <br><br>
            <!-- container flex 789 -->
            <div class="flexi justify-content-around   ">             
              <!-- card 7 -->
              <div class="kotak d-flex p-2 m-2 bd-highlight efek border border-white rounded">
                <center class="mx-auto"><img src="http://localhost/vaccinego/assets/img/hospital.png" alt="" width="50px"></center>
                <div class="container ">
                  <h5 class="title"> <?php echo anchor(base_url().'Vcontroller/page_kedua/7','Puskesmas Cempaka Baru'); ?></h5 >  
                  <p class="paragraf">Kelurahan Cempaka Baru,Kecamatan Kemayoran</p>
                </div>
              </div>
              <!-- card 8 -->
              <div class="kotak d-flex p-2 m-2 bd-highlight efek border border-white rounded">
                <center class="mx-auto"><img src="http://localhost/vaccinego/assets/img/hospital.png" alt="" width="50px"></center>
              <div class="container ">
                <h5 class="title"> <?php echo anchor(base_url().'Vcontroller/page_kedua/8','Puskesmas Menteng'); ?></h5>  
                <p class="paragraf">Kelurahan Menteng,Kecamatan Menteng</p>
              </div>
              </div>
              <!-- card 9 -->
              <div class="kotak d-flex p-2 m-2 bd-highlight efek border border-white rounded">
                <center class="mx-auto"><img src="http://localhost/vaccinego/assets/img/hospital.png" alt="" width="50px"></center>
              <div class="container ">
                <h5 class="title"><?php echo anchor(base_url().'Vcontroller/page_kedua/9','Puskesmas Gelora'); ?></h5>  
                <p class="paragraf">Kelurahan Gelora,Kecamatan Tanah Abang</p>
              </div>
              </div>
            </div>
          </div> 
          <br><br>
        </div>
        <br id="cara">
        <!-- Cara pendaftaran -->
        <div class="container-fluid">
          <br><br><br>
          <center>
          <h1 class="mx-auto" >CARA PENDAFTARAN VAKSINASI</h1>
          <p><i>Cara Pendaftaran Vaksinasi di <b>Go Vaccine</b> dengan mudah</i></p>
          </center>
          <br>
          <!-- container -->
          <div class="container mx-auto">
          <!-- 1 -->
            <div class="container d-flex justify-content-center">
              <img src="http://localhost/vaccinego/assets/img/www.png" alt="" width="50px" height="50px">
              <div class="container mx-5">
              <h5>Kunjungi Website <span class="text-secondary">Go Vaccine</span> dan Pilih Menu Pendaftaran Vaksin</h5>
              <p>Sumber Informasi Mengenai Vaksinasi di Sekitar Kota</p>
              </div>
            </div>
          <br>
          <!-- 2 -->
            <div class="container d-flex justify-content-center">
              <img src="http://localhost/vaccinego/assets/img/calendar.png" alt="" width="50px" height="50px">
              <div class="container mx-5">
              <h5>Tentukan Tanggal dan Tempat Vaksinasi</h5>
              <p>Tentukan lokasi Vaksinasi sesuai dengan Domisii tempat tinggal agar lebih mudah dijangkau</p>
              </div>
            </div>
          <br>
          <!-- 3 -->
            <div class="container d-flex justify-content-center">
              <img src="http://localhost/vaccinego/assets/img/online-registration.png" alt="" width="50px" height="50px">
              <div class="container mx-5">
              <h5>Mengisi Data Diri dengan Lengkap</h5>
              <p>Mengisi data diri berupa Nama Lengkap, NIK, Tempat dan Tanggal Lahir, Jenis Kelamin, No Telepon, Alamat sesuai KTP</p>
              </div>
            </div>
          <br>
          <!-- 4 -->
            <div class="container d-flex justify-content-center">
              <img src="http://localhost/vaccinego/assets/img/printing-test.png" alt="" width="50px" height="50px">
              <div class="container mx-5">
              <h5>Cetak Bukti Pendaftaran</h5>
              <p>Setelah mengisi data diri, Download dan cetak bukti pendaftaran anda. Link bukti pendaftaran juga dikirim melalui Email</p>
              </div>
            </div>
          <!-- 5 -->
            <div class="container d-flex justify-content-center">
              <img src="http://localhost/vaccinego/assets/img/check.png" alt="" width="50px" height="50px">
              <div class="container mx-5">
              <h5>Anda Sudah menjadi Calon Peserta Vaksin</h5>
              <p>Bawa bukti pendaftaran yang sudah dicetak dan Datang 15 Menit Sebelum dimulai ke Tempat Vaksinasi yang sudah anda tentukan</p>
              </div>
            </div>
          </div>
          <br><br>
        </div>
        <!-- berita -->
        <div class="container-fluid">
          <center>
          <h3>Berita Vaksinasi</h3>
          <p>Berita terbaru mengenai Vaksinasi di Sekitar Kota</p>
          </center>
        <br>
        <div class="container">
          <div class="card-deck">
            <div class="card efek cards">
              <img src="https://daftarvaksin.depok.go.id/assets/images/vaksinasi1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <a href="" class="berita"><h5 class="card-title">Vaksinasi Covid-19 Di Cinere Berjalan dengan Baik</h5></a>
                <p class="card-text ukuran">Kegiatan Vaksinasi Covid-19 di lakukan dengan protokol kesehatan. Siapapun yang ingin vaksin tidak mematuhi protokol kesehatan tidak diperbolehkan masuk...</p>
              </div>
            </div>
            <div class="card efek cards">
              <img src="https://daftarvaksin.depok.go.id/assets/images/vaksinasi2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
               <a href="" class="berita"><h5 class="card-title">Kegiatan Vaksinasi Di RSUI</h5> </a>
                <p class="card-text ukuran">Depok - Universitas Indonesia (UI) resmi membuka Vaksinasi Covid-19 secara gratis untuk masyarakat Kota Depok dengan mendaftar melalui website....</p>
              </div>
            </div>
            <div class="card efek cards">
              <img src="https://daftarvaksin.depok.go.id/assets/images/vaksinasi3.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
               <a href="" class="berita"> <h5 class="card-title">-+ 2.000 Orang Sudah Mendapatkan Vaksinasi Covid-19 Dosis ke 2</h5> </a>
                <p class="card-text ukuran">Menurut Tenaga kesehatan yang memberikan vaksin dosis ke 2 ini sudah lebih dari 2.000 orang yang mendapatkannya...</p>
              </div>
            </div>
          </div>
        </div>
        <br><br>
        <div class="container">
          <div class="d-flex flex-row-reverse bd-highlight">
            <div class="p-2 bd-highlight">
              <button type="button" class="btn btn-primary rounded-pill">Berita Lainnya</button>
            </div>
        </div>
        </div>
        <br><br><br>
        <!-- footer -->
        <div class="container-fluid border-top shadow smoke" id="kontak">
        <div class="card text-center border-0 ">
          <div class="card-body ">
            <p class="card-text">© Copyright <b class="text-secondary">Go Vaccine</b>. All Rights Reserved</p>
          </div>
        </div>
        </div>
        
          
    
    
    
    
    
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <!-- extra js -->
    <script src="js/index.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>


<!-- https://www.youtube.com/watch?v=eU9rZpbfWwk link referensi -->




