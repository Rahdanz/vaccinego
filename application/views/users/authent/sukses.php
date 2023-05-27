<!DOCTYPE html>
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

<div class="containerx jc  shadow p-3 mb-5 bg-white rounded">
<!-- alert -->
<div class="alert alert-success alert-success fade show" role="alert">
  <strong>Pendaftaran berhasil</strong> Harap Screenshot Halaman Ini sebagai bukti
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<!-- bukti -->
<div class="container-md p-3">
<center>
<a class="navbar-brand mt-2 " href="#">GO VACCINE</a>
<h3 class="text-center fotn">Bukti Pendaftaran Penerima Vaksin Covid-19</h3>
</center>
<div class="form-group px-5 pt-5"> 
<table class="table table-bordered mx-auto">
 <tr>
    <td class="font-weight-bold">NIK:</td>
    <td><span><?php echo $datauser->nik ; ?></span></td>
 </tr>
 <tr>
    <td class="font-weight-bold">Nama:</td>
    <td><span><?php echo $datauser->nama ; ?></span></td>
 </tr>
 <tr>
    <td class="font-weight-bold">Tempat Lahir:</td>
    <td><span><?php echo $datauser->tempatlahir ; ?></span></td>
 </tr>
 <tr>
    <td class="font-weight-bold">Jenis Kelamin:</td>
    <td><span><?php echo $datauser->jeniskelamin ; ?></span></td>
 </tr>
 <tr>
    <td class="font-weight-bold">Tanggal Lahir:</td>
    <td><span><?php echo $datauser->tanggallahir ; ?></span></td>
 </tr>
 <tr>
    <td class="font-weight-bold">No Telepon:</td>
    <td><span><?php echo $datauser->notelp ; ?></span></td>
 </tr>
 <tr>
    <td class="font-weight-bold">No Whatsapp:</td>
    <td><span><?php echo $datauser->nowa ; ?></span></td>
 </tr>
 <tr>
    <td class="font-weight-bold">Email:</td>
    <td><span><?php echo $datauser->email ; ?></span></td>
 </tr>
 <tr>
    <td class="font-weight-bold">Pekerjaan:</td>
    <td><span><?php echo $datauser->pekerjaan ; ?></span></td>
 </tr>
 <tr>
    <td class="font-weight-bold">Daftar Vaksin Ke:</td>
    <td><span><?php echo $datauser->vaksinke ; ?></span></td>
 </tr>
 <tr>
    <td class="font-weight-bold">Lokasi Vaksinasi:</td>
    <td><span><?php echo $datauser->namafaskes ; ?></span></td>
 </tr>
</table>
<br><br>          
<center>
<button type="button" class="btn  btn-primary "> <?php echo anchor(base_url().'Vcontroller/index','Selesai'); ?></button>            
</center>
</div>
</div>
      
     






     <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <!-- extra js -->
    <script src="js/index.js"></script>
</body>
</html>