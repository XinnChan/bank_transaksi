
<?php 
include_once "routes.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Home</title>
    <link rel="stylesheet" href="style/Responsive.css" />
    <link rel="stylesheet" href="style/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body class="bg-dark">

  <!-- mobile web -->
  <div class="container-hp border border-dark shadow-lg text-center">
    <!-- <h1 class="judul">Aplikasi Bank</h1>  -->
    <img src="image/logo.jfif" class="w-50" alt="LogoWeb">
    <div class="content">
      <div>Masa Aktif Akun Habis Dalam Waktu : </div>
      <?php
// Mendapatkan waktu saat ini
$waktu_sekarang = time();

// Mendapatkan tanggal saat ini
$tanggal = date('Y-m-d', $waktu_sekarang);

// Mendapatkan jam saat ini
$jam = date('H', $waktu_sekarang);

// Mendapatkan menit saat ini
$menit = date('i', $waktu_sekarang);

// Mendapatkan detik saat ini
$detik = date('s', $waktu_sekarang);
 echo " <div style='color:yellow; font-family:'Montserrat',sans-serif'>$waktu_sekarang Hari , $jam Jam, $menit Menit, $detik Detik </div>";
?>
    </div>



     <div class="list-button mt-3 flex-column">
      <a href="<?php echo $routes['BankIslam']; ?>"   class="btn btn-primary w-75 p-3 fw-bold m-2  " >Bank Islam</a>
      <a href="<?php echo $routes['CIMB']; ?>" class="btn btn-primary w-75 p-3 fw-bold m-2" >CIMB</a>
      <a href="<?php echo $routes['MayBank']; ?>" class="btn btn-primary w-75 p-3 fw-bold m-2" >MayBank</a>
      <a href="<?php echo $routes['HongLeong']; ?>" class="btn btn-primary w-75 p-3 fw-bold m-2" >Hong Leong Bank</a>
      <a href="<?php echo $routes['bankRakyat']; ?>" class="btn btn-primary w-75 p-3 fw-bold m-2" >Bank RAKYAT</a>
      <a href="<?php echo $routes['AmbangGroup']; ?>" class="btn btn-primary w-75 p-3 fw-bold m-2" >AmBang Group</a>
      <a href="<?php echo $routes['brimo']; ?>" class="btn btn-primary w-75 p-3 fw-bold m-2" >Brimo</a>
    </div>  
    <div class="circle w-100">
      <img src="image/bank.png" alt="Bank"/>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>