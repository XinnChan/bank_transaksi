<!-- get data dari form utama -->

<?php 
$nama = $_POST['nama'];
$number_account = $_POST['number_account'];
$pilih = $_POST['pilih'];
$reference = $_POST['reference'];
$description = $_POST['description'];
$jumlah = $_POST['jumlah'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hasil</title>
    <link rel="stylesheet" href="../../style/Responsive.css" />
    <link rel="stylesheet" href="../../style/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body class="bg-dark">  
  <div class="container-hp  border border-dark shadow-lg text-center" style="height: 900px;">

  <div class="container-lg d-flex justify-content-center align-items-center ">
<img src="../../image/bg.jpg" class="position-absolute " width="283" style="z-index: -1x; top: 10px"  alt="BrimoBank" />
<div class="isi" style="z-index: 1; margin-top: 130px; font-size: 9px;">
            <table class="row align-items-start">
               <tbody>
                <tr>
                  <td><div class="text-start position-relative" style="top: -9px">Tanggal</div></td>
                  <td><div class="text-end ms-5 fw-bold" ><?php 
              date_default_timezone_set('Asia/Jakarta');
                $waktu_indonesia = date(' H:i:s A');
               echo date('d M Y, H:i') . $waktu_indonesia; ?></div></td>
                </tr>
                <tr>
                  <td><div class="text-start position-relative" >Nomor Referensi</div></td>
                  <td><div class="text-end ms-5 fw-bold"><?php 
              echo "$reference"; ?></div></td>
                </tr>
               </tbody>
            </table>

            <hr style="border: 1px dashed;"/>
            <table class="row align-items-start">
               <tbody>
                <tr>
                  <td><div class="text-start position-relative" style="top: -9px">Sumber Dana</div></td>
                  <td><div class="text-end  fw-bold" style="margin-left: 70px;" ><?php
                   echo "ELA MARISA <br /> 0065 **** **** 531"  
                  ?></div></td>
                </tr>
                <tr>
                  <td><div class="text-start position-relative" >Jenis Transaksi</div></td>
                  <td><div class="text-end  fw-bold"><?php 
              echo "Transfer Bank BRI"; ?></div></td>
                </tr>

                <tr>
                  <td><div class="text-start position-relative" >Bank Tujuan</div></td>
                  <td><div class="text-end  fw-bold"><?php 
              echo "$pilih"; ?></div></td>
                </tr>
                <tr>
                  <td><div class="text-start position-relative" >Nomor Tujuan</div></td>
                  <td><div class="text-end  fw-bold"><?php 
              echo "$number_account"; ?></div></td>
                </tr>
                <tr>
                  <td><div class="text-start position-relative" >Nama Tujuan</div></td>
                  <td><div class="text-end  fw-bold"><?php 
              echo "$nama"; ?></div></td>
                </tr>
                <tr>
                  <td><div class="text-start position-relative" >Keterangan</div></td>
                </tr>
               </tbody>
            </table>
<hr style="border: 1px dashed;" />

            <table class="row align-items-start">
               <tbody>
                <tr>
                  <td><div class="text-start position-relative  " style="margin-right: 70px;">Nominal</div></td>
                  <td><div class="text-end  fw-bold" style="margin-left: 40px;"><?php
                  echo "Rp". number_format($jumlah,2) ;
                  ?></div></td>
                </tr>
                <tr>
                  <td><div class="text-start position-relative " > Biaya Admin</div></td>
                  <td><div class="text-end fw-bold"><?php 
                  $nilai = 0;
              echo "Rp".$nilai; ?></div></td>
                </tr>
               </tbody>
            </table>

            <hr style="border: 1px dashed;" />

            <table class="row align-items-start">
               <tbody>
                <tr>
                  <td><div class="text-start position-relative  fw-bold" style="margin-right: 130px;" >Total</div></td>
                  <td><div class="text-end  fw-bold" style="color: blue;" ><?php
                  echo "Rp". number_format($jumlah,2) ;
                  ?></div></td>
                </tr>
               </tbody>
            </table>
    </div>
    <!-- <div class="container-lg">
        <div class="block border border-dark mt-5 bg-light " style="z-index: 10; position: relative;">
          <div class="logo position-relative " style="top: 10px;">
            <img src="../../image/brimo.png" width="100" alt="logoBrimo" />
            <div class="fw-bold  " style="font-size: 25px;">Transaksi Berhasil</div>
          </div>
          <div class="list m-5">
            <div class="row align-items-start">
              <div class="col text-start" style="font-size: 10px;">Tanggal</div>
              <div class="col text-end" ><div class=" me-5"style="color: black; font-weight: bold; font-size: 10px;" style="font-family:'Roboto',sans-serif">
               </div></div><?php 
              date_default_timezone_set('Asia/Jakarta');
                $waktu_indonesia = date(' H:i:s A');
               echo strftime('%d %b %Y, %H:%M'). "<br/>". $waktu_indonesia; ?>
            </div>

            <div class="row align-items-start">
              <div class="col text-start" style="font-size: 10px;">Nomor Referensi</div>
              <div class="col text-end" ><div class=" me-5"style="color: black; font-weight: bold; font-size: 10px;" style="font-family:'Roboto',sans-serif"><?php 
               echo "$reference" ?>
               </div></div>
            </div>

            <hr/>
            <div class="row align-items-start">
              <div class="col text-start" style="font-size: 10px;">Sumber Dana</div>
              <div class="col text-end" ><div class=" me-5"style="color: black; font-weight: bold; font-size: 10px;" style="font-family:'Roboto',sans-serif"><?php 
              echo "ELA MARISA <br /> 0065 **** **** 531"
              ?>
               </div></div>
            </div>

            <div class="row align-items-start">
              <div class="col text-start" style="font-size: 10px;">  Jenis Transaksi</div>
              <div class="col text-end" ><div class=" me-5"style="color: black; font-weight: bold; font-size: 10px;" style="font-family:'Roboto',sans-serif"><?php 
              echo "Transfer Bank BRI"
              ?>
               </div></div>
            </div>

            <div class="row align-items-start">
              <div class="col text-start" style="font-size: 10px;"> Nomor Tujuan</div>
              <div class="col text-end" ><div class=" me-5"style="color: black; font-weight: bold; font-size: 10px;" style="font-family:'Roboto',sans-serif"><?php 
              echo "$number_account"
              ?>
               </div></div> 
            </div>

            <div class="row align-items-start">
              <div class="col text-start" style="font-size: 10px;"> Nama Tujuan</div>
              <div class="col text-end" ><div class=" me-5"style="color: black; font-weight: bold; font-size: 10px;" style="font-family:'Roboto',sans-serif"><?php 
              echo "$nama"
              ?>
               </div></div>
            </div>

            <hr />

            <div class="row align-items-start">
              <div class="col text-start" style="font-size: 10px;"> Keterangan</div>
            </div>

            <hr />

            <div class="row align-items-start">
              <div class="col text-start" style="font-size: 10px;"> Nominal</div>
              <div class="col text-end" ><div class=" me-5"style="color: black; font-weight: bold; font-size: 10px;" style="font-family:'Roboto',sans-serif"><?php 
              echo "Rp" . number_format($jumlah,2);
              ?>
               </div></div>
            </div>

            <div class="row align-items-start">
              <div class="col text-start"  style="font-size: 10px;"> Biaya Admin</div>
              <div class="col text-end" ><div class=" me-5"style="color: black; font-weight: bold; font-size: 10px;" style="font-family:'Roboto',sans-serif"><?php 
              echo "Rp0";
              ?>
               </div></div>
            </div>

            <hr />

            <div class="row align-items-start">
              <div class="col text-start" style="font-size: 15px;"> Total</div>
              <div class="col text-end" ><div class=" me-5"style="color: blue; font-weight: bold; font-size: 20px;" style="font-family:'Roboto',sans-serif"><?php 
              echo "Rp" . number_format($jumlah,2);
              ?>
               </div></div>
            </div>



          </div>


        </div>
    </div> -->
  
  </div>
  </br>

  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>

