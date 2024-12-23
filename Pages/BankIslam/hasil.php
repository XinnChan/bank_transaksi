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
  <div class="container-hp  border border-dark shadow-lg text-center"  style="height: 900px;">
    <div class="container-lg">
        <div class="block border border-dark mt-4 ">

            <div class="banner w-full border border-dark  flex-column  p-2 justify-content-center items-center m-auto" style="background-color: #9F0000;">
                <img src="Bank_Islam.png" alt="logo" width="100"  />
                <h6 class="text-light  fw-bold" style="font-size: 14px;">Transaction Receipt</h6>
            </div>

            <div class="w-full d-flex justify-content-between align-items-center relative " style="background-color: #929292;">
            <h6 class="fw-bold m-2 ms-4" style="font-family:'Roboto',sans-serif; font-size: 10px;">DuitNow</h6>
            <h6 class="m-2 me-5"  style="font-family:'Roboto',sans-serif; color: green; font-size: 10px;">Successful</h6>
            </div>

            <div class=" w-full text-start m-4">
              <div style="  font-size: 10px;">Reference No.</div>
               <h6 class="fw-bold " style=" font-size: 10px;"><?php echo "$reference"; ?></h6>
               <h6 class="fw-bold" style="font-size: 10px;"><?php 
              date_default_timezone_set('Asia/Jakarta');
                $waktu_indonesia = date(' H:i:s A');
               echo date('d M Y, H:i') . $waktu_indonesia; ?></h6>
            </div>


            <div class="w-full text-start flex-column align-items-center p-1 " style="background-color: #929292;">
              <h6 class=" ms-4" style="font-family:'Roboto',sans-serif; font-size: 10px;">Recipient Name</h6>
              <h4 class="fw-bold text-2xl ms-4 " style="font-size: 10px;">
                <?php echo "$nama"  ?>
              </h4>
            </div>


            <div class=" w-full text-start p-1 ms-4">
              <div style="font-family:'Roboto',sans-serif; font-size: 10px;">Repient Account Number</div>
               <h6 class="fw-bold " style="font-size: 10px;" ><?php echo "$number_account"; ?></h6>
            </div>


            <div class="w-full text-start flex-column align-items-center p-1 " style="background-color: #929292;">
              <h6 class="  ms-4" style="font-family:'Roboto',sans-serif; font-size: 10px;">Recipient Bank Name</h6>
              <h4 class="fw-bold  ms-4 m-2" style="font-size: 10px;">
                <?php echo "$pilih"  ?>
              </h4>
            </div>

            
            <div class=" w-full text-start p-1 ms-4">
              <div style="font-family:'Roboto',sans-serif; font-size: 10px;">Transfer Type</div>
               <h6 class="fw-bold " style="font-size: 10px;" >Fund Transfer To Savings/Current</h6>
            </div>


            <div class="w-full text-start flex-column align-items-center p-1 " style="background-color: #929292;">
              <h6 class="  ms-4" style="font-family:'Roboto',sans-serif; font-size: 10px;">Recipient Reference</h6>
              <h4 class="fw-bold  ms-4 m-2" style="font-size: 10px;">
                Other
              </h4>
            </div>


            <div class=" w-full text-start p-1 ms-4">
              <div style="font-family:'Roboto',sans-serif; font-size: 10px;">Other Payment Details</div>
               <h6 class="fw-bold " style="font-size: 10px;">Puan Norashikin</h6>
            </div>


            <div class="w-full text-start flex-column align-items-center p-1 " style="background-color: #929292;">
              <h6 class="  ms-4" style="font-family:'Roboto',sans-serif; font-size: 10px;">Recipient Reference</h6>
              <h4 class="fw-bold  ms-4 m-2" style="font-size: 10px;">
                <?php echo "$jumlah" ?>
              </h4>
            </div>


            <div class=" w-full text-start ms-4 p-1 d-flex">
            <h6 class="fw-bold " style="font-size: 10px;">Note:</h6>&nbsp;<div  style="font-family:'Roboto',sans-serif; font-size: 10px;">
            
            This receipt is computer generated and no signature is required
          
          </div>
         

            </div> <footer class="ms-4 p-1">
            <div style="font-size: 10px;">&copy; Bank Islam Malaysia Brhad[(198301002944(98127X))]. All right reserver</div>
          </footer>

               

        </div>
    </div></br>

  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>

