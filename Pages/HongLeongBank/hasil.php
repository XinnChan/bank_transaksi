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
    <div class="d-flex align-items-center justify-content-between m-5">
            <img src="../../image/HLB.webp" class="w-50 " alt="LogoBankHongLeong" />
            <img src="../../image/HLIB.png" class="w-50 position-relative"  alt="LogoBankHongLeongIslam" />
</div>
<!-- list bank -->
<div class="container-lg">
<table class="m-5">
  <tbody>

    <tr class="text-start " style="font-size: 10px;">
    <td><div  style="font-family:'Poppins',sans-serif ; font-weight:600 ;">Reference Number</div></td>
      <td style="position:relative; left: 10%;"><div style=""><?php echo"$reference"; ?></div></td>
    </tr>

    <tr class="text-start " style="font-size: 10px;">
      <td><div  style="font-family:'Poppins',sans-serif ; font-weight:600 ;" >Transaction Status</div></td>
      <td style="position:relative; left: 10%;"><div  style="color: green; font-weight: 500 ; " >Succesful</div></td>
    </tr>

    <tr class="text-start " style="font-size: 10px;">
    <td><div  style="font-family:'Poppins',sans-serif ; font-weight:600 ;">Transaction Date,Time</div></td>
      <td style="position:relative; left: 10%;"><div style=""> <?php 
              date_default_timezone_set('Asia/Jakarta');
                $waktu_indonesia = date(' H:i:s A');
               echo strftime('%d %b %Y, %H:%M') . $waktu_indonesia; ?></div></td>
    </tr>

    <tr class="text-start " style="font-size: 10px;">
      <td><div  style="font-family:'Poppins',sans-serif ; font-weight:600 ;" >From</div></td>
      <td style="position:relative; left: 10%;"><div style="">331-01-00665 HL Pay & Save-i Account</div></td>
    </tr>

    <tr class="text-start" style="font-size: 10px;">
      <td><div  style="font-family:'Poppins',sans-serif ; font-weight:600 ;" >Recipient Bank / Wallet Name</div></td>
      <td style="position:relative; left: 10%;"><div style=""><?php echo"$pilih"; ?></div></td>
    </tr>

    <tr class="text-start" style="font-size: 10px;">
      <td><div  style="font-family:'Poppins',sans-serif ; font-weight:600 ;" >Account Type</div></td>
      <td style="position:relative; left: 10%;"><div style=""><?php echo"Current/Savings"; ?></div></td>
    </tr>

    <tr class="text-start" style="font-size: 10px;">
      <td><div  style="font-family:'Poppins',sans-serif ; font-weight:600 ;" >Account Number</div></td>
      <td style="position:relative; left: 10%;"><div style=""><?php echo"$number_account"; ?></div></td>
    </tr>

    <tr class="text-start" style="font-size: 10px;">
      <td><div  style="font-family:'Poppins',sans-serif ; font-weight:600 ;" >Recipient Name</div></td>
      <td style="position:relative; left: 10%;"><div style=""><?php echo"$nama"; ?></div></td>
    </tr>

    <tr class="text-start" style="font-size: 10px;">
      <td><div  style="font-family:'Poppins',sans-serif ; font-weight:600 ;" >Transfer Type</div></td>
      <td style="position:relative; left: 10%;"><div style=""><?php echo"DuitNow to Account (previsouly Instant Transfer)"; ?></div></td>
    </tr>

    <div style="background-color:#AEAEAE ;">
    <tr class="text-start" style="font-size: 10px;">
      <td><div  style="font-family:'Poppins',sans-serif ; font-weight:600 ;" >Amount (MYR)</div></td>
      <td style="position:relative; left: 10%;"><div style=""><?php echo number_format($jumlah,2); ?></div></td>
    </tr>
</div>
    <tr class="text-start " style="font-size: 10px;">
      <td><div  style="font-family:'Poppins',sans-serif ; font-weight:600 ;" >Total Amount (MYR)</div></td>
      <td style="position:relative; left: 10%;"><div style=""><?php echo number_format($jumlah,2); ?></div></td>
    </tr>

    <tr class="text-start" style="font-size: 10px;">
      <td><div  style="font-family:'Poppins',sans-serif ; font-weight:600 ;" >When to Transfer</div></td>
      <td style="position:relative; left: 10%;"><div style=""><?php echo "Now"; ?></div></td>
    </tr>

    <tr class="text-start" style="font-size: 10px;">
      <td><div  style="font-family:'Poppins',sans-serif ; font-weight:600 ;" >Recipient Reference</div></td>
      <td style="position:relative; left: 10%;"><?php echo "Fund Transfer"; ?></div></td>
    </tr>

    <tr class="text-start" style="font-size: 10px;">
      <td><div  style="font-family:'Poppins',sans-serif ; font-weight:600 ;" >Order Payment Detail</div></td>
      <td style="position:relative; left: 10%;"><?php echo "Invest"; ?></div></td>
    </tr>

    <tr class="text-start" style="font-size: 10px;">
      <td><div  style="font-family:'Poppins',sans-serif ; font-weight:600 ;" >Notify Recipient</div></td>
      <td style="position:relative; left: 10%;"><?php echo "SMS : <BR /> Email :"; ?></div></td>
    </tr>

  


  </tbody>
</table>
<div class="m-2" style="color: #5F5F5F; font-size: 10px;">This is a system generated notice. No signature is required</div>
<img src="../../image/hlbConnect.png" class="w-25" alt="logoConnect">
</div>

<br />



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>

