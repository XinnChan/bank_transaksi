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
  <div class="container-hp  border border-dark shadow-lg text-center" style="height: 900px">
    <div class="container-lg">
        <div class="block border border-dark rounded mt-4 ">

            <div class="banner w-full border border-dark rounded  flex-column  p-2 justify-content-center items-center m-auto" style="background-color: #0066b2;">
                <img src="../../image/bankRakyat.png" alt="logo" width="100"  />
            </div>

            <div class=" w-full text-start p-1 border-danger border-bottom " style="background-color: #FFFFFF; ">
              <h5 class="m-3" style="font-family:'Tulisan3'; font-weight: bold; color: green;">Succesfull</h5>
        </div>

        <div class=" w-full text-start p-1  " style="background-color: #C9C9C9; font-size: 10px; ">
              <h5 class="m-3" style="font-family:'Tulisan3'; font-weight: bold;font-size: 10px; ">DuitNow Transfer</h5>
        </div>

        <div class=" w-full text-start p-1 border-bottom border-dark " style="background-color: #FFFFFF; ">
              <h5 class="ms-3" style="font-family:'Tulisan3'; font-weight: bold ; font-size: 10px; ">Reference Number</h5>
              <div class="ms-3" style="position:relative;  font-family:'Tulisan3'; font-size: 10px; "><?php echo"$reference" ?></div>
              <div class="ms-3"style="color: #000000; position:relative;font-family:'Tulisan3';  font-size: 10px; " style=""><?php 
              date_default_timezone_set('Asia/Jakarta');
                $waktu_indonesia = date(' H:i:s A');
               echo date('d M Y, H:i') . $waktu_indonesia; ?>
               </div>
        </div>


        <div class=" w-full text-start p-1 border-bottom border-dark " style="background-color: #C9C9C9; ">
              <h5 class="m-3" style="font-family:'Tulisan3'; font-weight: bold;font-size: 10px; ">Transfer To</h5>
              <div class="ms-3 fw-bold" style="position:relative; top: -15px; font-family:'Tulisan3'; font-size: 10px; ">DuitNow ID <font style="font-weight: normal">( Account Number )</font></div>
              <div class="ms-3 " style="position:relative; top: -15px; font-family:'Tulisan3'; font-size: 10px; "><?php echo "$pilih"; ?> &nbsp; <font style="font-weight: normal"><?php echo "$number_account"; ?></font></div>
              <div class="ms-3 fw-bold" style="position:relative; top: -15px; font-family:'Tulisan3'; font-size: 10px; ">Beneficiary Name <font style="font-weight: normal"><?php echo "$nama" ?></font></div>
              <div class="ms-3 fw-bold" style="position:relative; top: -15px; font-family:'Tulisan3'; font-size: 10px; ">Recipient Reference <font style="font-weight: normal"><?php echo "Transfer" ?></font></div>
              <div class="ms-3 fw-bold" style="position:relative; top: -15px; font-family:'Tulisan3'; font-size: 10px; ">DuitNow Tranfer Ref</div>
              <div class="ms-3" style="position:relative; top: -15px; font-family:'Tulisan3'; font-size: 10px; "><?php echo "$reference" ?></div>
        </div>

        <div class=" w-full text-start p-1 border-bottom border-dark " style="background-color: #FFFFFF; font-size: 10px; ">
              <h5 class="ms-3" style="font-family:'Tulisan3'; font-weight: bold;font-size: 10px; ">Effective Date</h5>
              <div class="ms-3"style="color: #000000; position:relative;font-family:'Tulisan3'; font-size: 10px; " style=""><?php 
              date_default_timezone_set('Asia/Jakarta');
               echo strftime('%d/%m/%Y')  ?>
               </div>
        </div>

        <div class=" w-full text-start p-1  " style="background-color: #C9C9C9;  ">
              <h5 class="ms-3" style="font-family:'Tulisan3'; font-weight: bold;font-size: 10px; ">Amount</h5>
              <h5 class="ms-3" style="font-family:'Tulisan3'; position:relative; font-weight: bold; font-size: 10px; ">RM &nbsp;<?php echo number_format($jumlah,2) ?></h5>
        </div>

        <div class=" w-full text-start p-1 border-bottom border-dark " style="background-color: #FFFFFF;  ">
              <h5 class="ms-3" style="font-family:'Tulisan3'; font-weight: bold;font-size: 10px; ">Service Charge</h5>
              <div class="ms-3 fw-bold"style="color: #000000; position:relative;font-family:'Tulisan3'; font-size: 10px; " style=""><?php 
              $nilai = 0;
              echo "RM &nbsp;".number_format($nilai,2) ;
              ?>
               </div>
        </div>

        
        <div class=" w-full text-start p-1  " style="background-color: #C9C9C9; font-size: 10px; ">
              <h5 class="ms-3" style="font-family:'Tulisan3'; font-weight: bold;font-size: 10px; ">Total Amount</h5>
              <h5 class="ms-3" style="font-family:'Tulisan3'; position:relative;  font-weight: bold; font-size: 10px; ">RM &nbsp;<?php echo number_format($jumlah,2) ?></h5>
        </div>

    </div></br>

  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>

