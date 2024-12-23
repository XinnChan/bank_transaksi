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
    <div class="container-lg w-30 ">
        <div class="block border border-dark mt-4 ">

           <div class=" w-full relative flex-column align-items-center" style="background-color: #D70000;">
            <h6 class="p-2 text-light">Transfer Money</h6>
           </div>

           <div class=" w-full text-start m-2 d-flex justify-content-between align-items-start">
            <div class="content-text ms-3">
            <div class="fw-bold " style="font-family:'Roboto',sans-serif; font-size: 10px;">Thank You,</div>
            <div style="font-size: auto; font-size: 10px;">Here's your transaction details.</div>
            </div>
            <img src="../../image/cimb.png" width="100" alt="LogoCimb">
          </div>

            <div class="w-full text-start d-flex align-items-start " style="background-color: #DADADA;">
            <div class="icon mt-2 m-2">
              <img src="../../image/check.png"  width="20" alt="check">
            </div>
            <div class="text">
            <div class=" me-5 fw-bold"  style="color: green; font-family:'Roboto',sans-serif ; font-size: 12px;">Successful</div>
            <div class=" me-5" style="color: black; position:relative; font-family:'Roboto',sans-serif; font-size: 10px;" >Ref603402623</div>
            <div class=" me-5"style="color: black; position:relative; font-family:'Roboto',sans-serif ;font-size: 10px;"><?php 
              date_default_timezone_set('Asia/Jakarta');
                $waktu_indonesia = date(' H:i:s A');
               echo date('d M Y, H:i') . $waktu_indonesia; ?>
               </div>
            </div>
            </div>

            <div class=" w-full text-start  border-dark border-bottom " style="background-color: #F3F3F3; ">
            <div class="ms-3">
            <h5 style="font-family:'Poppins',sans-serif; font-weight: bold; font-size: 10px; position: relative; top: 5px;">To</h5>
               <div class="row align-items-center">
                <div class="col">
                               
                  <div class="account_number">
                    <div style="color:#696969;font-size: 10px;">Account Number</div>
                      <div class="fw-bold " style="font-size: 10px;"><?php echo"$number_account" ?></div>
                  </div>
                <div class="name">
                  <div style="color:#696969;font-size: 10px;">Recipient Name</div>
                  <div class="fw-bold " style="font-size: 10px;"><?php echo"$nama" ?></div>
                </div>
              </div>

              <div class="col">
                  <div class="account_number">
                    <div style="color:#696969;font-size: 10px;">Account Name</div>
                      <div class="fw-bold " style="font-size: 10px;"><?php echo"ECOSAVE SA-i" ?></div>
                      <br />
                      <div style="color:#696969;font-size: 10px;">Transfer Type</div>
                      <div class="fw-bold " style="font-size: 10px;"><?php echo"$pilih" ?></div>
                  </div>
               </div>
            </div>

            </div>
        </div>




        <div class=" w-full text-start p-1 border-bottom  border-dark " style="background-color: #F3F3F3;">
            <div class="ms-3">
              <h5 style="font-family:'Poppins',sans-serif; font-weight: bold; font-size: 10px;">When</h5>
               <div class="row align-items-center">
                <div class="col">
                  <div class="account_number">
                    <div style="color:#696969;font-size: 10px;"> Date</div>
                      <div class="fw-bold " style="font-size: 10px;"><?php echo"Today" ?></div>
                  </div>
              </div>
              <div class="col">
                  <div class="account_number">
                    <div style="color:#696969;font-size: 10px;">Repeat</div>
                      <div class="fw-bold " style="font-size: 10px;"><?php echo"No" ?></div>
                  </div>

               </div>
            </div>
            </div>
        </div>
    <div class="w-full text-start p-1 border-bottom border-dark" style="background-color: #F3F3F3; ">
      <div class="m-1 ms-3">
        <h5 style="font-family: 'Poppins',sans-serif; font-weight:bold;font-size: 10px;"> Amount</h5>
        <div class="row align-items-center">

          <div class="col">
            <div class="fw-bold" style="font-size: 10px;"><?php echo"<sup>MYR</sup>$jumlah . <sup>00</sup>"; ?></div>
            <div style="color:#696969;font-size: 10px;">Bank charges 0.<sup>00</sup></div>
          </div>

        </div>
      </div>
      </div>
      
      <div class="w-full text-start p-1 border-bottom border-dark" style="background-color: #F3F3F3;">
      <div class="ms-3">
        <h5 style="font-family: 'Poppins',sans-serif; font-weight:bold;font-size: 10px; position:relative; top: 5px;">Transaction Instruction</h5>
        <div class="row align-items-center">
          
          <div class="col">
            <div style="color:#696969;font-size: 10px;">Recipient Reference</div>
            <div class="fw-bold" style="font-size: 10px;">Mohamad Barzah</div>
          </div>

        </div>
      </div>
      </div>

      <div class="w-full text-start p-1 border-bottom border-dark" style="background-color: #F3F3F3;">
      <div class="ms-3">
        <div class="row align-items-center">
          
          <div class="col">
          <h5 style="font-family: 'Roboto',sans-serif; font-weight:bold;font-size: 10px;">Total</h5>
          </div>

          <div class="col">
            <div class="fw-bold" style="font-size: 10px;"><?php echo"<sup>MYR</sup>$jumlah . <sup>00</sup>"; ?></div>
          </div>

        </div>
      </div>
      </div>

      <div class=" w-full  text-start m-2 d-flex ms-4">
            <div class="fw-bold " style="font-family:'Roboto',sans-serif;font-size: 10px;">Note :</div>&nbsp;&nbsp;
            <div style="font-size: 10px;">This is computer generated and no signature is required.</div>
            </div>

           
            
            

    </div></br>

  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>

