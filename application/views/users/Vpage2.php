<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
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
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow p-3  bg-white rounded fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">GO VACCINE</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <button type="button" class="btn btn-primary"> <?php echo anchor(base_url().'Vcontroller/index','Home'); ?></button>
            </div>
            </div>
        </div>
        </nav>
        <br><br><br><br><br><br>
        <?php $kodefaskes1=$datafaskes->kodefaskes;?>
        <!-- kontainer tabel -->
        <div class="container-fluid">
            <!-- JUDUL -->
            <div class="container text-center">
                <h3>Jadwal Vaksinasi </h3>
                <h1 class="text-secondary"><?php echo strtoupper($datafaskes->namafaskes);?></h1>
            </div>
            <br>
            <!-- TABLE -->
            <div class="container">
                <table class="table ">
                    <thead >
                    <tr>
                        <th scope="col" class="table-danger ">Nama PIC</th>
                        <th scope="col" class="table-danger ">Faskes</th>
                        <th scope="col" class="table-danger ">Tanggal & Jam</th>
                        
                        <th scope="col" class="table-danger ">Jenis Vaksin</th>
                        <th scope="col" class="table-danger ">Sisa Kuota</th>
                        <th scope="col" class="table-danger ">Keterangan</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">  <?php echo $datafaskes->namapic;?> </th>
                        <td><?php echo $datafaskes->namafaskes;?></td>
                        <td ><span class="bg-info text-white rounded"><?php echo $datafaskes->date;?>,08:30</span><br>sampai<br> <span class="bg-info text-white rounded"><?php echo $datafaskes->date;?>,10:30</span></td>
                        <td><?php echo $datafaskes->jenisvaksin;?></td>
                        <td><?php echo $datafaskes->sisakuota;?></td>
                        <td>
                            <!-- takut kepake buat validasi sisakuota vaksin db -->
                            <button type="button" class="btn btn-primary"> <?php echo anchor(base_url()."Vcontroller/page_daftar/$kodefaskes1",'Daftar'); ?></button>
                        </td>
                       </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- footer -->
        <div class="container-fluid border-top shadow  fixed-bottom" id="kontak">
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

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>