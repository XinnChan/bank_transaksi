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
  <div class="container-hp h-100 border border-dark shadow-lg text-center">
      
<!-- list bank -->


<div class="container-lg"><h6>DuitNow Receipt</h6>
<div class="block border border-dark mt-4 "><div class="d-flex align-items-center justify-content-between m-5">
            <img src="../../image/ambangGroup.png" width="100" alt="LogoBankHongLeong" />
      </div>
<table class="m-5">
  <tbody  >

    <tr class="text-start ">
    <td><div  style="font-family:'Poppins',sans-serif ; font-weight:600 ; font-size: 10px ;">Reference Number : </div></td>
      <td style="position:relative; left: 10%; font-family:'Poppins',sans-serif ; font-weight:600 ; font-size: 10px ;"><div style="font-size: 10px ;"><?php echo"$reference"; ?></div></td>
    </tr>

    <tr class="text-start">
      <td><div  style="font-family:'Poppins',sans-serif ; font-weight:600 ; font-size: 10px ;" >Transaction Status :</div></td>
      <td style="position:relative; left: 10%; font-family:'Poppins',sans-serif ; font-weight:600 ; font-size: 10px ;"><div  style="color: green; font-weight: 500 ;font-size: 10px ; " >Succesful</div></td>
    </tr>

    <tr class="text-start ">
    <td><div  style="font-family:'Poppins',sans-serif ; font-weight:600 ; font-size: 10px ;">Recifent's Reference</div></td>
      <td style="position:relative; left: 10%; font-size: 10px ;">
      <div style="font-size: 10px ; font-family:'Poppins',sans-serif ; font-weight:600 ; font-size: 10px ;"> Sent from AmOnline</div>
</td>

    </tr>
    <tr class="text-start">
      <td><div  style="font-family:'Poppins',sans-serif ; font-weight:600 ; font-size: 10px ;" >Other Payment Details :</div></td>
      <td style="position:relative; left: 10%; font-family:'Poppins',sans-serif ; font-weight:600 ; font-size: 10px ;"><div style="font-size: 10px ;"><?php echo"sinegy investment"; ?></div></td>
    </tr>

    <tr class="text-start ">
      <td><div  style="font-family:'Poppins',sans-serif ; font-weight:600 ; font-size: 10px ;" >Account Type :</div></td>
      <td style="position:relative; left: 10%; font-family:'Poppins',sans-serif ; font-weight:600 ; font-size: 10px ;"><div style="font-size: 10px ;"><?php echo"Current/Savings"; ?></div></td>
    </tr>
    <tr class="text-start" style=" margin-top: 10px;">
      <td><div  style="font-family:'Poppins',sans-serif ; font-weight:600 ; font-size: 10px ;" >Transfer Date & Time :</div></td>
      <td style="position:relative; left: 10%; font-family:'Poppins',sans-serif ; font-weight:600 ; font-size: 10px ;">  <div style="color: #000000;font-size: 10px ;"><?php 
              date_default_timezone_set('Asia/Jakarta');
                $waktu_indonesia = date(' H:i:s A');
               echo strftime('%d %b %Y, %H:%M') . $waktu_indonesia; ?>
               </div></div> </td>
    </tr>

  
</tbody>

</table> 
<table class="m-5">
<hr  />
<tr class="text-start ">
      <td><div  style="font-family:'Poppins',sans-serif ; font-weight:600 ; font-size: 10px ;" >From :</div></td>
      <td style="position:relative; left: 10%; font-family:'Poppins',sans-serif ; font-weight:600 ; font-size: 10px ;"><div style="font-size: 10px ;"><?php echo"*********9649"; ?></div></td>
    </tr>
    <tr class="text-start ">
      <td><div  style="font-family:'Poppins',sans-serif ; font-weight:600 ; font-size: 10px ;" >To :</div></td>
      <td style="position:relative; left: 10%;"><div style="font-size: 10px font-family:'Poppins',sans-serif ; font-weight:600 ; font-size: 10px ;"><?php echo"$nama"; ?></div></td>
    </tr>
    <tr class="text-start ">
      <td><div  style="font-family:'Poppins',sans-serif ; font-weight:600 ; font-size: 10px ;" >Account Number :</div></td>
      <td style="position:relative; left: 10%;"><div style="font-size: 10px font-family:'Poppins',sans-serif ; font-weight:600 ; font-size: 10px ;"><?php echo"$number_account"; ?></div></td>
    </tr>
    <tr class="text-start ">
      <td><div  style="font-family:'Poppins',sans-serif ; font-weight:600 ; font-size: 10px ;" > DuitNow ID Type :</div></td>
      <td style="position:relative; left: 10%;"><div style="font-size: 10px font-family:'Poppins',sans-serif ; font-weight:600 ; font-size: 10px ;"><?php echo""; ?></div></td>
    </tr>
    <tr class="text-start ">
      <td><div  style="font-family:'Poppins',sans-serif ; font-weight:600 ; font-size: 10px ;" > DuitNow ID :</div></td>
      <td style="position:relative; left: 10%;"><div style="font-size: 10px font-family:'Poppins',sans-serif ; font-weight:600 ; font-size: 10px ;"><?php echo""; ?></div></td>
    </tr>
    <tr class="text-start ">
      <td><div  style="font-family:'Poppins',sans-serif ; font-weight:600 ; font-size: 10px ;" > Amount :</div></td>
      <td style="position:relative; left: 10%;"><div style="font-size: 10px font-family:'Poppins',sans-serif ; font-weight:600 ; font-size: 10px ;"><?php echo"RM" . number_format($jumlah,2); ?></div></td>
    </tr>
    <tr class="text-start ">
      <td><div  style="font-family:'Poppins',sans-serif ; font-weight:600 ; font-size: 10px ; " > Service Charge :</div></td>
      <td style="position:relative; left: 10%;"><div style="font-size: 10px ; font-family:'Poppins',sans-serif ; font-weight:600 ; font-size: 10px ;"><?php 
      $nilai = 0;
      echo"RM" . number_format($nilai,2); ?></div></td>
    </tr>
</table>
<table class="m-5">
      <tr class="text-start ">
            <td  style="font-family:'Poppins',sans-serif ; font-weight:600 ; font-size: 10px ;">
                 <div> Customer Service Contacts :</div>
            </td>
      </tr>
      <tr>
            <td>
                 <div  style="font-family:'Poppins',sans-serif ; font-weight:600 ; font-size: 10px ;"> Email :</div>
            </td>
            <td>
                 <div  style="font-family:'Poppins',sans-serif ; font-weight:600 ; font-size: 10px ;"> customercare@ambangroup.com </div>
            </td>
      </tr>
      <tr class="text-start ">
            <td><div  style="font-family:'Poppins',sans-serif ; font-weight:600 ; font-size: 10px ;">
                  Call :</div>
            </td>
            <td>
                  <div  style="font-family:'Poppins',sans-serif ; font-weight:600 ; font-size: 10px ;">+603 2178 8888</div>
            </td>
      </tr>
</table>
  </div>
  <footer>
      <div class="text-center"style=" font-size:10px;">Copyright&copy; AmBank (M) Berhad (Company No. 8515-D).All Rights Reserved.</div>
  </footer>
<br />



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>

