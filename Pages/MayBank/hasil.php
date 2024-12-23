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
  <!-- mobile web -->
  <div class="container-hp  border border-dark shadow-lg text-center" style="height: 900px;">
    <div class="container-lg">
        <div class="block border border-dark mt-4  ">
           <div class=" w-full left-0  d-flex  align-items-start" style="background-color: #FFD000;">
           <img src="maybank.png" class="ms-4" style="width: 20%; margin: 10px; " alt="">
           </div>

           <div class="w-full d-flex justify-content-between p-2 align-items-center relative " style="background-color: #EDEDED;">
            <h6 class="fw-bold m-2 ms-4" style="font-family:'Poppins',sans-serif; font-weight:normal; font-size: 10px;">DuitNow Transfer</h6>
            <div class="me-4 m-2 text-center "
            style="
            background-color: #00E100;
            width: 80px;
            height: 20px;
            border-radius: 10px;
            "
            >
              <div class="text-white position-relative" style="top: 3px; font-weight:lighter; font-family: 'Roboto',sans-serif;font-size: 10px;">Successful</div>
            </div>
            </div>

            <div class=" w-full text-start  p-1 border-dark border-bottom " style="background-color: #FFFFFF; ">
            <div class="m-2 ms-4">
              <div class="row align-items-center">
                <div class="col">
                  <div class="">Reference ID</div>
                  <div class="fw-bold" style="font-family: 'Poppins',sans-serif; font-size: 10px;"><?php echo"$reference" ?></div>
                  <br />
                  <div>Beneficiary name</div>
                  <div class="fw-bold"  style="font-family: 'Poppins',sans-serif; font-size: 10px; "><?php echo"$nama" ?></div>
                </div>
              

              <div class="col">
              <div class="m-2 mm-2 ms-4 me-5"style="color: #939393; position:relative;;font-family:'Poppins',sans-serif; top: -25px  ;font-size: 10px;"><?php 
              date_default_timezone_set('Asia/Jakarta');
                $waktu_indonesia = date(' H:i:s A');
               echo date('d M Y, H:i') . $waktu_indonesia; ?>
               </div>
              </div>
</div>
              
            </div>

            </div>
        

        <div class=" w-full text-start p-1 border-dark border-bottom " style="background-color: #FFFFFF; ">
            <div class="m-2 mm-2 ms-4">
               <div class="row align-items-center">
                <div class="col">
                  <div style="font-size: 10px;">Beneficiary account Number</div>
                  <div class="fw-bold"  style="font-family: 'Poppins',sans-serif ;font-size: 10px;"><?php echo"$jumlah" ?></div>

                  <br />

                  <div style="font-size: 10px;">Receiving Bank</div>
                  <div class="fw-bold" style="font-family: 'Poppins',sans-serif;font-size: 10px;"><?php echo"$pilih" ?></div>
                </div>
               
            
            </div>
            </div>
        </div>

        <div class=" w-full text-start p-1 border-dark border-bottom " style="background-color: #FFFFFF; font-size: 10px;">
            <div class="m-2 ms-4">
               <div class="row align-items-center">
                <div class="col">
                  <div>Receiving reference</div>
                  <div class="fw-bold"  style="font-family: 'Poppins',sans-serif"><?php echo"Suhaida" ?></div>
            </div>
            </div>
        </div>
        </div>  

        <div class=" w-full text-start p-1 border-dark border-bottom " style="background-color: #FFFFFF; font-size: 10px;">
            <div class="m-2 ms-4">
               <div class="row align-items-center">
                <div class="col">
                  <div>Amount</div>
                  <div class="fw-bold"  style="font-family: 'Poppins',sans-serif"><?php echo"RM &nbsp;" . number_format($jumlah,2) ?></div>
            </div>
            </div>
        </div>
        </div>  

        <div class=" w-full text-start p-1 border-dark border-bottom " style="background-color: #FFFFFF; font-size: 10px;">
            <div class="m-2 ms-4">
               <div class="row align-items-center">
                <div class="col " style="color:#737373">
                  <div>Malayan Banking Berhad (Co. Reg. : 196001000142)</div>
                  <div>Malayan Banking Berhad (Co. Reg. : 200701029411)</div>
            </div>
            </div>
        </div>
        </div>  

       


    </div></br>

  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>

